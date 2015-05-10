<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;
use Common\Model\UserInfoModel;

class UserFreeController extends AutoModelController
{
    public $useModel = false;

    public function index()
    {
        $this->display();

    }


}