<?php

/**
 * Auth: TheAnother
 * Date: 2015/3/19
 * Time: 16:47
 */
class  Globals
{
    static $folderKeys = array(
        FK_USER_GOODS => "goods",
        FK_USER_HOUSE => "house",
        FK_TEMP => "temp",
        FK_USER_CARD => "user_card"
    );

    public
    static $Lease_Status = array(
        0 => "待确认",
        1 => "租约期间",
        2 => "完成租赁",
        3 => "纠纷"
    );

    public
    static $Status = array(
        0 => "待审核",
        1 => "正常",
    );

    public
    static $Evaluation_Level = array(
        0 => "好评",
        1 => "中评",
        2 => "差评"
    );

    static function getFolderName($folderKey)
    {

        return self::$folderKeys[$folderKey];
    }

}

class Conditions
{
    public static $UNREMOVE = array(C_REMOVED => 0);

    public static $UNREMOVE_ALLOWED = array(
        C_REMOVED => 0,
        C_STATUS => 1
    );

    public static function  fromRequest($name = "conditions")
    {
        $where = $_REQUEST["conditions"];

        $where = json_decode($where, true);

        if ($where[C_UID]) {
            $where[C_EMAIL_ADDRESS . "|" . C_PHONE_NUMBER] = array("like", "%" . $where[C_UID] . "%");
            unset($where[C_UID]);
        }

        return $where;
    }

}

