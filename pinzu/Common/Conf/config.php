<?php
$_ROOT = "";
return array(
    'TMPL_PARSE_STRING' => array(
        '__ROOT__' => $_ROOT,
        '__M_ROOT__' => $_ROOT . "/m.php",
        '__SOURCE__' => $_ROOT . '/Source',
        '__SOURCE2__' => $_ROOT . '/Source2',
        '__UPLOAD__' => $_ROOT . '/Uploads',
        '__USER__' => $_ROOT . '/User',
        '__USER_COUPON__' => $_ROOT . '/Coupon',
        '__USER_OBJECT__' => $_ROOT . '/Object'
    ),
    'EMAIL_SENDER' => array(
        'PORT' => 22,
        'SMTPAUTH' => TRUE,
        'HOST' => 'smtp.163.com',
        'USERNAME' => 'sd792526287@163.com',
        'PASSWORD' => 'luhengyu528',
        'CHARSET' => 'utf-8',
        'FROM' => 'pyplatform@163.com'
    ),
    'URL_CASE_INSENSITIVE' => true,
    'DB_TYPE' => 'mysql',     // 数据库类型
    'DB_HOST' => '127.0.0.1', // 服务器地址
    'DB_NAME' => 'py',          // 数据库名
    'DB_USER' => 'root',      // 用户名
    'DB_PWD' => '',          // 密码
    'DB_PORT' => '3306',        // 端口
);