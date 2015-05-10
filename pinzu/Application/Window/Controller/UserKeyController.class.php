<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;

class UserKeyController extends AutoModelController
{
    /**
     * @var \Common\Model\UserKeyModel
     */
    public $model;

    public function  validate()
    {
        if ($this->_validate())
            redirect("/User");
        else
            echo "您所提供的验证码无效或已过期，请重新发送。";
    }

    public function  validate2()
    {
        $this->status = $this->_validate();
        $this->write();
    }

    public function sendKey($uid, $type = 1)
    {
        $uid_type = getUidType($uid);

        if ($uid_type)
            $this->status = $this->model->sendKey($uid, $uid_type, $type);

        $this->write();
    }

    private function _validate()
    {
        $status = S_ERROR;

        $data = $this->model->create();

        if ($data)
            $status = $this->model->where($data)->delete();
        return $status;
    }
}