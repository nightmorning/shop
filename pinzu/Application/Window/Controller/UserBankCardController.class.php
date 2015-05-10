<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;

class UserBankCardController extends AutoModelController
{
    protected $useSafeDel = true;

    public function index()
    {
        $this->loadPage(\Conditions::$UNREMOVE);
    }

    public function add()
    {
        $this->status = $this->model->addCardInfo();
        $this->write();
    }
}