<?php
namespace Common\Model;

use Think\Model;

class UserBankCardModel extends Model
{
    protected $_validate = array(
        array(C_CARD_NO, '/\d{10,19}/', C_CARD_NO, self::MUST_VALIDATE, 'regex'),
        array(C_CARD_FROM, '/^[a-zA-Z0-9_\x7f-\xff]{1,20}+$/', C_CARD_FROM, self::MUST_VALIDATE, 'regex'),
    );
    protected $_auto = array(
        array(C_USER_ID, F_GETUSERID, self::MODEL_INSERT, "function")
    );

    /**添加银行卡
     * @return int|mixed
     */
    function addCardInfo()
    {
        if ($data = $this->create()) {
            $this->add();
            return S_SUCCEED;
        }
        return S_FORM_INVALID;
    }

    function queryInfo()
    {
        $data[C_USER_ID] = getUserId();
        if (!empty($data)) {
            $this->where($data)->select()->count();
            return S_SUCCEED;
        }
        return S_CUSERROR;

    }
}