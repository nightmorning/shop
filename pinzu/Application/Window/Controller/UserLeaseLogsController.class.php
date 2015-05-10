<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;

class UserLeaseLogsController extends AutoModelController
{
    public function lessee()
    {
        $this->otherModel = D(V_USER_LESSEE);

        $where = \Conditions::$UNREMOVE;

        $this->loadPage();
    }

    public function lessor()
    {
        $this->otherModel = D(V_USER_LESSOR);

        $this->loadPage(\Conditions::$UNREMOVE);
    }
}