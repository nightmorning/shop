<?php
namespace Common\Model;

use Think\Model;

/**
 * Class UserInfoModel
 * @package Common\Model
 */
class UserInfoModel extends Model
{
    protected $_validate = array(
        array(C_NICK_NAME, '/^[a-zA-Z0-9_\x7f-\xff]{1,10}+$/', '请使用正确的字符', self::EXISTS_VALIDATE, 'regex'),
        array(C_REAL_NAME, '/^[\x7f-\xff]{6,15}+$/', '请填写正确的中文名字 ', self::EXISTS_VALIDATE, 'regex'),
        array(C_CARD_NO, '/^[\d]{14}(\d|x)$|^[\d]{17}(\d|x)$/', '请输入正确的身份证号码', self::EXISTS_VALIDATE, 'regex'),
        array(C_QQ_NUMBER, '#^[1-9][0-9]{4,12}$#', '请输入正确的QQ号码', self::EXISTS_VALIDATE, 'regex')
    );

    protected $_auto = array(
        array(C_USER_ID, F_GETUSERID, self::MODEL_INSERT, "function")
    );

    /** 保存信息
     * @return int 状态码
     */
    function saveInfo()
    {
        if ($data = $this->create()) {
            $userId = getUserId();

            $userInfo = $this->getByUserId($userId);

            //如用户的身份已验证，则保存用户信息时，将真实姓名与身份证号码排除
            if ($userInfo) {

                if ($userInfo[C_IDENTITY_VALID] == 1) {
                    unset($data[C_REAL_NAME]);
                    unset($data[C_CARD_NO]);
                }

                unset($data[C_USER_ID]);

                return $this->where(array(C_USER_ID => $userId))->save($data) > 0;
            }
        } else
            return $this->add() > 0;

        return S_FORM_INVALID;
    }


    function queryInfo()
    {
        $data[C_USER_ID] = getUserId();
        if (!empty($data)) {
            $this->where($data)->select();
            return S_SUCCEED;
        }
        return S_CUSERROR;
    }
}