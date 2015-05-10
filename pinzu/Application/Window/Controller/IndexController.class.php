<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;


class IndexController extends AutoModelController
{
    public $useModel = false;

    public function index()
    {
        $this->display();
    }

    public function builder()
    {
        buildMVC();
    }
}