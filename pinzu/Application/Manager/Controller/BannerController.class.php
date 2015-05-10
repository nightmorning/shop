<?php
namespace Manager\Controller;

use Common\Controller\CRUDController;

class BannerController extends CRUDController
{
    public function index()
    {
        $this->display();
    }

    function updateIndex($ids)
    {
        $idArr = explode(',', $ids);

        $index = 0;

        foreach ($idArr as $id) {

            $this->status = S_SUCCEED;

            $index++;

            $data = array(
                C_ID => $id,
                C_INDEX => $index
            );

            $this->model->save($data) == 0;
        }

        $this->write();
    }
}