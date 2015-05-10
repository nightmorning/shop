<?php
namespace Manager\Controller;

use Common\Controller\CRUDController;

class CouponKeyController extends CRUDController
{
    public function  getByCouponId($id)
    {

        $where = array(C_COUPON_ID => $id);

        $keys = $this->model->where($where)->limit(0,999)->getField(C_KEY, 0);

        $this->outputData = array("keys" => implode("\n", $keys));

        $this->status = S_SUCCEED;

        $this->write();
    }

    public function  build($id, $count)
    {
        header('Content-Type:application/txt; charset=utf-8');

        header('Content-Disposition: attachment; filename="keys.txt"');

        $dataList = array();

        $keys = array();

        for ($i = 0; $i < $count; $i++) {

            $key = ceil(microtime() * 10000) . getRandomKey();

            $keys[] = $key;

            $dataList[] = array(
                C_COUPON_ID => $id,
                C_KEY => $key
            );
        }

        $this->model->addAll($dataList);

        echo implode("\n", $keys);
    }

    public function destroyAll($id)
    {
        $this->outputData = array("count" => $this->model->where(array(C_COUPON_ID => $id))->delete());
        $this->status = $this->outputData["count"] > 0;
        $this->write();
    }
}