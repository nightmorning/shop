<?php
namespace Common\Model;

use Think\Model\RelationModel;

class UserModel extends RelationModel
{
    protected $_link = array(
        T_USER_INFO => array(
            'mapping_type' => self::HAS_ONE,
            'class_name' => T_USER_INFO,
            'mapping_name' => 'info',
            'foreign_key' => C_USER_ID,
        )
    );

    //自动验证
    protected $_validate = array(
        array(C_PWD, '#[a-zA-Z0-9_]{6,20}#', '密码格式不正确，由大小写字母、数字、下划线组成，6到20位', self::MUST_VALIDATE),
        array(C_PHONE_NUMBER, 'checkUid', '帐号格式不正确，应为手机号码或者邮箱地址', self::MUST_VALIDATE, "callback"),
        array(C_EMAIL_ADDRESS, 'checkUid', '帐号格式不正确，应为手机号码或者邮箱地址', self::MUST_VALIDATE, "callback"),
    );

    protected $uid_type;

    //重写create函数处理uid
    public function  create($data = '', $type = '')
    {
        if (empty($data)) {
            $data = I('param.');
        } elseif (is_object($data)) {
            $data = get_object_vars($data);
        }
        // 验证数据
        if (empty($data) || !is_array($data)) {
            $this->error = L('_DATA_TYPE_INVALID_');
            return false;
        }

        if ($data) {
            $uid = $data[C_UID];

            if ($uid) {
                $uid_type = getUidType($uid);
                if ($uid_type == UT_EMAIL_ADDRESS)
                    $data[C_EMAIL_ADDRESS] = $uid;
                else if ($uid_type == UT_PHONE_NUMBER)
                    $data[C_PHONE_NUMBER] = $uid;
            }
        }

        $this->uid_type = $uid_type;

        return parent::create($data, $type);
    }

    protected function  checkUid()
    {
        return $this->uid_type == UT_PHONE_NUMBER || $this->uid_type == UT_EMAIL_ADDRESS;
    }

    //自动完成
    protected $_auto = array(
        array(C_PWD, 'py_md5', self::MODEL_BOTH, "function"),
    );

    /**注册处理
     * @return int 状态码
     */
    function register()
    {
        if ($data = $this->create()) {
            unset($data[C_PWD]);
            $user = $this->where($data)->first();
            if ($user) {
                return S_CUSERROR;
            }
            $this->add();
            return S_SUCCEED;
        }
        return S_FORM_INVALID;
    }

    /** 登录处理
     * @return int 状态码
     */
    function login()
    {
        if ($data = $this->create()) {

            $pwd = $data[C_PWD];

            unset($data[C_PWD]);

            $user = $this->where($data)->first();

            if ($user)
                return $user[C_PWD] == $pwd ? S_SUCCEED : S_CUSERROR;
            else
                return S_CUSERROR + 1;
        } else
            return S_FORM_INVALID;
    }

    private function buildUidWhere($uid, $uid_type = null)
    {
        $where = array();

        if ($uid_type == null)
            $uid_type = getUidType($uid);

        if ($uid_type == UT_PHONE_NUMBER)
            $where[C_PHONE_NUMBER] = $uid;
        else if ($uid_type == UT_EMAIL_ADDRESS)
            $where[C_EMAIL_ADDRESS] = $uid;
        else
            $where = null;

        return $where;
    }

    function  checkExist($uid)
    {
        $where = $this->buildUidWhere($uid);

        if ($where)
            return $this->where($where)->getField(C_ID) > 0;
        else
            return false;
    }


    /**密码修改
     * @return int
     */
    function modifyPwd()
    {
        $old_pwd = I(C_OLD_PWD);
        $pwd = I(C_PWD);

        $userId = getUserId();

        $where[C_USER_ID] = $userId;

        $user = $this->where($where)->first();

        if ($user && py_md5($old_pwd) == $user[C_PWD]) {

            $data = array(
                C_PWD => py_md5($pwd),
                C_ID => $userId);

            return $this->save($data) > 0;
        } else
            return S_CUSERROR;
    }


    /**找回密码
     * @return int
     */
    function foundPwd()
    {

    }


    /**
     *
     */
    function queryInfo()
    {
        $data[C_ID] = getUserId();
        if (!empty($data)) {
            $this->where($data)->select();
            return S_SUCCEED;
        }
        return S_CUSERROR;
    }
}