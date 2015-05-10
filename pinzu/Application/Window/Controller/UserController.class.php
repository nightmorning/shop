<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;
use Common\ViewModel\UserViewModel;

class UserController extends AutoModelController
{
    /**
     * @var \Common\Model\UserModel
     */
    public $model;

    public function index()
    {
        if ($this->isUnlogin())
            return;

        $userId = getUserId();

        $view = new UserViewModel();

        $details = $view->getById($userId);

        $extra = array(
            "object" => D(T_USER_OBJECT)->getCountByUserId($userId),
            "bankCard" => D(T_USER_BANK_CARD)->getCountByUserId($userId),
            "requirement" => D(T_USER_REQUIREMENT)->getCountByUserId($userId),
            "lessor_time" => D(T_USER_LEASE_LOGS)->getCountByLessorId($userId),
            "lessee_time" => D(T_USER_LEASE_LOGS)->getCountByLesseeId($userId),
        );

        $this->assign(
            array(
                "details" => $details,
                "extra" => $extra
            )
        );


        $this->display();
    }

    public function log_user()
    {
        $this->status = $this->model->login();
        $this->write();
    }

    public function  reg_user()
    {
        $this->status = $this->model->register();
        $this->write();
    }

    public function  logout()
    {
        session("user_id", null);
        redirect("Login");
    }

    public function  checkExist($uid)
    {
        $this->status = $this->model->checkExist($uid);

        $this->write();
    }

    public function  save_pwd()
    {
        $this->status = $this->model->modifyPwd();
        $this->write();
    }

    public function  safe()
    {
        if ($this->isUnlogin())
            return;

        $userId = getUserId();

        $user = $this->model->getById($userId);

        $this->assign(array(
            "user" => $user
        ));

        $this->display();
    }

    public function number()
    {
        if ($this->isUnlogin())
            return;

        $userId = getUserId();

        $userCardCount = D(T_USER_BANKCARD)->getcountby($userId);
        $this->assign(
            array(
                "userCardCount" => $userCardCount
            )
        );
        $this->display();
        //$list = $userBankCard->where()->select();
    }
}