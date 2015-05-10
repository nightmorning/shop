<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;

class UserInfoController extends AutoModelController
{
    /**
     * @var \Common\Model\UserInfoModel
     */
    public $model;

    public  function  editor(){

        if($this->isUnlogin())
            return;

        $userId = getUserId();

        $userInfo = $this->model->getByUserId($userId);

        $this->assign("info",$userInfo);

        $this->display();
    }

    public function modify()
    {
        $cardImgArr = I("cardImg");

        if (count($cardImgArr) > 0) {

            foreach ($cardImgArr as $cardImg) {
                $source = "Uploads/Temp/".$cardImg;
                $target = "Uploads/user_card/".getUserId() . "/";

                mkdir($target,0777,true);

                rename($source,$target. $cardImg);
            }

            $this->status = $this->model->saveInfo();
        }
        $this->write();
    }

    public function isLogin(){
        $userId = getUserId();
        $this->status = S_SUCCEED;
        $this->model->fields(C_NICK_NAME);
        $where['user_id']=array('eq',$userId);
        $this->outputData = $this->loadPage3($where);

        $this->write();
    }
}