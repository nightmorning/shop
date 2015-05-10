<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;
use Common\Model\UserRequirementViewModel;

class UserRequirementController extends AutoModelController
{

    /**
     * @var \Common\Model\UserRequirementModel
     */
    public $model;

    protected $useSafeDel = true;

    public function  index()
    {
        $this->loadPage(\Conditions::$UNREMOVE);
    }

    public function  page()
    {
        $this->status = S_SUCCEED;

        $this->model->fields(C_TITLE, C_DESCRIPTION, C_ID);

        $this->outputData = $this->loadPage2(array(
            C_REMOVED => 0,
            C_STATUS => 1
        ));

        $this->write();
    }

    public function  pub()
    {
        if ($this->isUnlogin())
            return;
        else {
            $this->status = $this->model->publishRequire();
        }

        $this->write();
    }

    public function requirePage()
    {
        $this->status = S_SUCCEED;

        $this->model->fields(C_ID,C_TITLE, C_SATISFY, C_PUBLISHED_ON);

        $where = array(
            C_REMOVED => 1,
            C_STATUS => 0
        );

        $this->outputData = $this->loadPage4($where);

        $this->write();
    }

    public function satisfy()
    {

        if ($this->isUnlogin())
            return;
        else {

            $id = intval(I("id"));

            $userId = getUserId();
            $this->write();
            echo 1;
            if($id)
                $this->status = $this->model->where(array(C_USER_ID => $userId))->setSatisfy($id);

        }



    }


}