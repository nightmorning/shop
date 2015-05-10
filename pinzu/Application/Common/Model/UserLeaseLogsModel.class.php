<?php
namespace Common\Model;

use Think\Model;

class UserLeaseLogsModel extends Model
{
    protected $_validate = array(
        array(C_OBJECT_ID, '/\d/', '', self::MUST_VALIDATE, 'regex'),
        array(C_LEASSOR_ID, '/\d/', '', self::MUST_VALIDATE, 'regex'),
        array(C_LESSEE_ID, '/\d/', '', self::MUST_VALIDATE, 'regex'),
    );

    /**租赁记录
     * @return int|mixed
     */
    function hireRecord()
    {
        if ($data = $this->create) {
            return $this->add();
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

}