<?php
namespace Common\Model;

use Think\Model;

class UserObjectModel extends Model
{
    protected $_validate = array(
        array(C_TITLE, '4,20', '', self::MUST_VALIDATE, 'length'),
        array(C_PRICE_DAY, '/\d/', '', self::MUST_VALIDATE, 'regex'),
        array(C_PRICE_MONTH, '/\d/', '', self::MUST_VALIDATE, 'regex'),
        array(C_PRICE_PLEDGE, '/\d/', '', self::MUST_VALIDATE, 'regex'),
        array(C_QUANTITY, '/\d/', '', self::MUST_VALIDATE, 'regex'),
        array(C_PRICE_EXPRESS, '/\d/', '', self::MUST_VALIDATE, 'regex'),
        array(C_DESCRIPTION, '10,400', '', self::MUST_VALIDATE, 'length'),
        array(C_CONTACT_NAME, '/^[a-zA-Z0-9_\x7f-\xff]{2,6}+$/', '', self::MUST_VALIDATE, 'regex'),
        array(C_CONTACT_NUMBER, '/^[\d-]{8,20}$/', '', self::MUST_VALIDATE, 'regex'),
        array(C_ADDRESS, '5,40', '', self::MUST_VALIDATE, 'length')
    );

    protected $_auto = array(
        array(C_USER_ID, F_GETUSERID, self::MODEL_INSERT, "function")
    );


    /**发布物品租赁信息
     * @return int 状态码
     */
    function publishHire()
    {
        // $data['user_id'] = $_SESSION['user_id'];
        if ($data = $this->create()) {
            return $this->add() > 0;
        }
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

    function goodsInfo($id)
    {
        $data[C_ID] = $id;
        if(!empty($data))
            return $this->where($data)->select();
        return S_CUSERROR;
    }

    function dateTime($startDate,$endDate)
    {
        $data['days']=floor((strtotime($endDate)-strtotime($startDate))/86400);
        if($this->create())
        {
            return $this->where($data)->add()>0;
        }
        return S_CUSERROR;
    }

}