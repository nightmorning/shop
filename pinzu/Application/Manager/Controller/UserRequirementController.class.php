<?php
namespace Manager\Controller;

use Common\Controller\CRUDController;
use Common\ViewModel\UserRequirementViewModel;

class UserRequirementController extends CRUDController
{
    public function index()
    {
        $this->display();
    }

    protected $softDeleteMode = true;

    public function read()
    {
        $view = new UserRequirementViewModel();

        $where = \Conditions::fromRequest();

        $where[C_REMOVED] = 0;

        $data = $view->where($where)->select();

        kendo_callback($data);
    }
}