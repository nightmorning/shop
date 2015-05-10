<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;

class UserOwnCouponController extends AutoModelController
{
    public function index()
    {
        $this->otherModel = D(V_USER_OWN_COUPON);
        $this->loadPage(\Conditions::$UNREMOVE);
    }
}