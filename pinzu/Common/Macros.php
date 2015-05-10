<?php
/**
 * Auth: TheAnother
 * Date: 2015/3/17
 * Time: 9:49
 */

define('__UPLOADS__', "/Uploads");

//账号类型 Start
define('UT_EMAIL_ADDRESS', 1);
define('UT_PHONE_NUMBER', 2);
//账号类型 End

//页面模版 Start
$tpl_root = "./Template/";
define("TPL_USER_VALIDATION", $tpl_root . "user_validation.html");
//页面模版 End

//文件夹键 Start
define("FK_TEMP", 1);
define("FK_USER_CARD", 2);
define("FK_USER_HOUSE", 3);
define("FK_USER_GOODS", 4);
//文件夹键 End

//AJAX反馈状态码 Start
//用户未登录
define('S_UNLOGIN', -99);
//表单验证不通过
define('S_FORM_INVALID', -98);
//发生异常
define('S_ERROR', 0);
//成功
define('S_SUCCEED', 1);
//自定义异常
define('S_CUSERROR', 10);
//AJAX反馈状态码 End

// 数据表名称及列名称宏 Start
define('T_BANNER', 'Banner');
define('T_COUPON', 'Coupon');
define('T_MANAGER', 'Manager');
define('T_MANAGER_ACCESS', 'Manager_access');
define('T_OBJECT_CATEGORY', 'Object_category');
define('T_USER', 'User');
define('T_USER_BANK_CARD', 'User_bank_card');
define('T_USER_EVALUATION', 'User_evaluation');
define('T_USER_INFO', 'User_info');
define('T_USER_LEASE_LOGS', 'User_lease_logs');
define('T_USER_OBJECT', 'User_object');
define('T_USER_OWN_COUPON', 'User_own_coupon');
define('T_USER_KEY', 'User_key');
define('T_USER_KEY_TEMP', 'User_key_temp');
define('T_USER_REQUIREMENT','User_requirement');
define('T_WEBSITE_CONFIG','Website_config');
define('T_COUPON_KEY','Coupon_key');

define('V_USER_LESSOR', 'V_user_lessor');
define('V_USER_LESSEE', 'V_user_lessee');
define('V_USER_DETAILS', 'V_user_details');
define('V_USER_OWN_COUPON', 'V_user_own_coupon');
define('V_USER_OBJECT', 'V_user_object');

define('C_ID', 'id');
define('C_URL', 'url');
define('C_DESCRIPTION', 'description');
define('C_INDEX', 'index');
define('C_TYPE_ID', 'type_id');
define('C_PARAM_1', 'param_1');
define('C_PARAM_2', 'param_2');
define('C_REMOVED', 'removed');
define('C_UID', 'uid');
define('C_PWD', 'pwd');
define('C_OLD_PWD', 'old_pwd');
define('C_ROLE_ID', 'role_id');
define('C_MANAGER_ID', 'manager_id');
define('C_USER_OBJECT', 'user_object');
define('C_USER_LEASE_LOGS', 'user_lease_logs');
define('C_PARENT_ID', 'parent_id');
define('C_NAME', 'name');
define('C_PHONE_NUMBER', 'phone_number');
define('C_EMAIL_ADDRESS', 'email_address');
define('C_CREATED_ON', 'created_on');
define('C_USER_ID', 'user_id');
define('C_CARD_NO', 'card_no');
define('C_CARD_FROM', 'card_from');
define('C_OBSERVER_ID', 'observer_id');
define('C_LEVEL', 'level');
define('C_LEVEL_NAME', 'level_name');
define('C_NICK_NAME', 'nick_name');
define('C_REAL_NAME', 'real_name');
define('C_QQ_NUMBER', 'qq_number');
define('C_IDENTITY_VALID', 'identity_valid');
define('C_OBJECT_ID', 'object_id');
define('C_LEASSOR_ID', 'leassor_id');
define('C_LESSEE_ID', 'lessee_id');
define('C_REMARK', 'remark');
define('C_AMOUNT', 'amount');
define('C_DEAL_NO', 'deal_no');
define('C_STATUS', 'status');
define('C_STATUS_NAME', 'status_name');
define('C_CAT_ID', 'cat_id');
define('C_TITLE', 'title');
define('C_PARAMS', 'params');
define('C_PRICE_DAY', 'price_day');
define('C_PRICE_PLEDGE', 'price_pledge');
define('C_QUANTITY', 'quantity');
define('C_RETURN_WAY', 'return_way');
define('C_SEND_WAY', 'send_way');
define('C_PUBLISHED_ON', 'published_on');
define('C_SATISFY', 'satisfy');
define('C_MODIFIED_ON', 'modified_on');
define('C_COUPON_ID', 'coupon_id');
define('C_EXPIRY_DATE_START', 'expiry_date_start');
define('C_DURATION_DAYS', 'duration_days');
define('C_KEY', 'key');
define('C_PRICE_MONTH', 'price_month');
define('C_PRICE_EXPRESS', 'price_express');
define('C_CONTACT_NAME', 'contact_name');
define('C_CONTACT_NUMBER', 'contact_number');
define('C_ADDRESS', 'address');


//数据表名称 End