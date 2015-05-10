<?php
namespace Manager\Controller;

use Common\Controller\CRUDController;
use Common\ViewModel\UserViewModel;

class UserController extends CRUDController
{
    public function index()
    {
        $this->display();
    }

    public function read()
    {
        $view = new UserViewModel();

        $where = \Conditions::fromRequest();

        $data = $view->where($where)->select();

        kendo_callback($data);
    }
}