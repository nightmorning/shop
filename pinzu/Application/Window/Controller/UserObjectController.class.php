<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;

class UserObjectController extends AutoModelController
{
    /**
     * @var \Common\Model\UserObjectModel
     */
    public $model;

    protected $useSafeDel = true;

    public function index()
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
        $this->status = $this->model->publishHire();
        echo $this->model->getError();

        $this->write();
    }

    public function details($id=2)
    {
        $userId = $id;

        $details = $this->model->getById($userId);

        $this->assign(
            array(
                "details" => $details
            )
        );

        $this->display();
    }
}