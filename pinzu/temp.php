<?php
namespace Home\Model;
use Think\Model\ViewModel;

class ObjectViewModel extends ViewModel
{

}
/**注册处理
 * @param $uid 用户帐号
 * @param $pwd 用户密码
 * @return int 状态码
 */
function register($uid, $pwd)
{
    return 1;
}


/** 登录处理
 * @param $uid 用户帐号
 * @param $pwd 用户密码
 * @return int 状态码
 */
function login($uid, $pwd)
{
    return 1;
}


/**信息录入处理
 * @param $userName 用户名
 * @param $realName 真实姓名
 * @param $birthDate 出生日期
 * @return int 状态码
 */
function informationUp($userName, $realName, $birthDate)
{
    return 1;
}

/**申请租赁
 * @param $goodsId 商品ID
 * @param $hireStartDate 租赁物品起始时间
 * @param $hireEndDate 租赁物品结束时间
 * @return int 状态码
 */
function applyHire($goodsId, $hireStartDate, $hireEndDate)
{
    return 1;
}

/**查询物品（被）租赁记录
 * @param $runNumber 交易流水号
 * @return int 状态码
 */
function checkHireNote($runNumber)
{
    return 1;
}

/**发布物品租赁信息
 * @param $goodsName 商品名称
 * @param $goodsPrice 商品价格
 * @param $goodsDesc 商品描述
 * @return int 状态码
 */
function publishHire($goodsName, $goodsPrice, $goodsDesc)
{
    return 1;
}

/**发布需求
 * @param $requireDesc 需求描述
 * @return int 状态码
 */
function publishRequire($requireDesc)
{
    return 1;
}

/**展示所有的商品
 * @return int 状态码
 */
function displayAllGoods()
{
    return 1;
}

/**展示免费的商品
 * @param int $hirePrice 租赁价格
 * @return int 状态码
 */
function dispalyFreeGoods($hirePrice = 0)
{
    return 1;
}


/**租赁总金额
 * @param $goodsPrice 商品价格
 * @param $hireDate 租赁的时间
 * @param $hireNumber
 * @return int
 */
function hireMoney($goodsPrice, $hireDate, $hireNumber)
{
    return 1;
}

function hireTotal()
{
    return 1;
    preg_match('#[a-z0-9&\-_.]+@[\w\-_]+([\w\-.]+)?\.[\w\-]+#is', $str) ? true : false;
    return preg_match('#^13[\d]{9}$|14^[0-9]\d{8}|^15[0-9]\d{8}$|^18[0-9]\d{8}$#', $num) ? true : false;
}


/**手机邮箱的正则验证
 * @param $uid 帐号
 * @return int 状态码
 */
function preg($uid)
{
    $uid_type = 0;
    if (preg_match('#[a-z0-9&\-_.]+@[\w\-_]+([\w\-.]+)?\.[\w\-]+#is', $uid)) {
        $uid_type = UT_EMAIL_ADDRESS;
    } else if (preg_match('#^1[\d]{9}$#', $uid)) {
        $uid_type = UT_PHONE_NUMBER;
    }
    return $uid_type;
}
//ALTER TABLE table_name ADD INDEX