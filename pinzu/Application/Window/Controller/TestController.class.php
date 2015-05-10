<?php
namespace Window\Controller;

use Common\Controller\AutoModelController;

class TestController extends AutoModelController
{
    public $useModel = false;

    public function index()
    {
        $model = D(T_USER);

        $data = $model->relation("info")->find();

        var_dump($data);
    }

    public function  upload()
    {
        $fileName = null;

        saveUploadedFile($_FILES["cardImg"], FK_TEMP, null, $fileName);

        echo "<script>window.parent.uploadFileSucceed('" . $fileName . "');</script>";

    }
    public function test()
    {
        $startdate = "2015-03-31";
        $enddate = "2015-04-01";
        $date=floor((strtotime($enddate)-strtotime($startdate))/86400);
        echo $date;
    }

}