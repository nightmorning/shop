<?php
namespace Manager\Controller;

use Common\Controller\CRUDController;
use Common\ViewModel\UserObjectViewModel;

class UserObjectController extends CRUDController
{
    public function index()
    {
        $this->display();
    }

    function read()
    {
        $view = new UserObjectViewModel();

        $data = $view->select();

        kendo_callback($data);
    }

}