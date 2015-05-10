<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;

class UserEvaluationController extends AutoModelController
{
    public function lessee()
    {
        $this->loadPage(array(C_TYPE_ID => 1));
    }

    public function lessor()
    {
        $this->loadPage(array(C_TYPE_ID => 2));
    }

    protected function  _before_assign(&$list)
    {
        setDictValue($list, \Globals::$Evaluation_Level, C_LEVEL, C_LEVEL_NAME);
    }
}