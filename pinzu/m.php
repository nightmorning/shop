<?php

// 检测PHP环境
if (version_compare(PHP_VERSION, '5.3.0', '<')) die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', True);

// 定义应用目录
define('APP_PATH', './Application/');

// 定义运行时目录
define('RUNTIME_PATH', './Application/RunTime/');

// 定义公共目录
define('COMMON_PATH', './Common/');

define('BUILD_DIR_SECURE', false);

define('BIND_MODULE', 'Manager');

header('Content-Type:text/html; charset=utf-8');

// 引入Common
require './Common/Common.php';

require './Common/AutoBuilder.php';

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

session_start();



