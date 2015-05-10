<?php
/**
 * Auth: TheAnother
 * Date: 2015/3/19
 * Time: 11:59
 */

function buildMVC()
{
    $config = [
        "Window" => [
            "Controller" => ["Index", "Test", "UserBankCard", "UserEvaluation", "UserObject", "User", "UserInfo", "UserLeaseLogs", "UserOwnCoupon", "UserKey", "UserRequirement", "UserFree"],
        ],
        "Manager" => [
            "Controller" => ["Index", "Test", "Coupon", "Manager", "ManagerAccess", "ObjectCategory", "User", "UserLeaseLogs", "UserObject", "UserRequirement", "UserInfo","Banner"],
        ]
    ];

    foreach ($config as $moduleName => $module) {
        $controllers = $module["Controller"];

        foreach ($controllers as $controller) {
            \Think\Build::buildController($moduleName, $controller);
        }
    }
}

