<?php
namespace Manager\Controller;

use Common\Controller\AutoModelController;

class HandlerController extends AutoModelController
{
    public $useModel = false;

    public function index()
    {

    }

    public function  getFiles()
    {
        $this->status = S_SUCCEED;
        $this->outputData = array("paths" => json_encode(getFilePath(I("fk"), I("sf"), I("fn"))));
        $this->write();
    }
}