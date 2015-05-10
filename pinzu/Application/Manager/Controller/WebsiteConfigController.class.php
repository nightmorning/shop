<?php
namespace Manager\Controller;

use Common\Controller\CRUDController;

class WebsiteConfigController extends CRUDController
{
    public function index()
    {
        $data = $this->model->find();
        $this->assign("config", $data);
        $this->display();
    }
}