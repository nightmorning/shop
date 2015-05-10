<?php
namespace Common\Model;

use Think\Model;

class UserEvaluationModel extends Model
{
    protected $_validate = array(
        array(C_OBSERVER_ID, '/\d/', '', self::MUST_VALIDATE, 'regex'),
        array(C_LEVEL, '/\d/', '', self::MUST_VALIDATE, 'regex'),
        array(C_DESCRIPTION, '/^[a-zA-Z0-9_\x7f-\xff]{10,400}+$/', '', self::MUST_VALIDATE, 'regex'),
    );

    protected $_auto = array(
        array(C_USER_ID, F_GETUSERID, self::MODEL_INSERT, "function")
    );


    /**评论
     * @return int|mixed
     */
    function comment()
    {
        if ($data = $this->create()) {
            return $this->add();
        }
        return S_FORM_INVALID;
    }

}