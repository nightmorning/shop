<?php
/**
 * Auth: TheAnother
 * Date: 2015/3/17
 * Time: 10:13
 */

$base = array(
    'URL_ROUTER_ON' => true,   // 是否开启URL路由
    'URL_ROUTE_RULES' => array(
        "Validation/:user_id\d/:key\d" => "UserKey/validate",
        ":c/:a/:pageIndex\d" => ":1/:2"
    ),
);

return $base;
