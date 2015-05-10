<?php
namespace Manager\Controller;

use Common\Controller\CRUDController;

class ManagerController extends CRUDController
{
    public function index()
    {
        $this->display();
    }
}