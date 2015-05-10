<?php
namespace Manager\Controller;

use Common\Controller\CRUDController;

class CouponController extends CRUDController
{
    protected $softDeleteMode = true;

    public function index()
    {
        $this->display();
    }

    public function  getCouponKeys($coupon_id)
    {
        $model = D(T_COUPON_KEY);

        $where = array(C_COUPON_ID => $coupon_id);

        $keys = $model->where($where)->getField(C_KEY, 0);

        $this->outputData = array("keys" => implode("\n", $keys));

        $this->status = S_SUCCEED;

        $this->write();
    }

    public function  buildKeys($count = 500)
    {
        $keys = array();

        for ($i = 0; $i < $count; $i++) {

            $key = getRandomKey() . ceil(microtime() * 10000);;
        }

        $model = D(T_COUPON_KEY);


    }
}