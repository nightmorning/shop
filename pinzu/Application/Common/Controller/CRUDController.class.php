<?php
/**
 * Auth: TheAnother
 * Date: 2015/3/30
 * Time: 14:03
 */
namespace Common\Controller;

class CRUDController extends AutoModelController
{
    protected $msg_create_succeed = "创建成功。";

    protected $msg_create_failed = "创建失败。";

    protected $msg_destroy_succeed = "删除成功";

    protected $msg_destroy_failed = "删除失败";

    protected $msg_update_succeed = "更新成功";

    protected $msg_update_failed = "更新失败";

    protected $softDeleteMode = false;

    function __construct()
    {
        parent::__construct();

        C("DEFAULT_THEME", "");

//        if (strtolower(ACTION_NAME) != "login" && session(C_MANAGER_ID) == NULL) {
//            redirect("/m.php/Manager/login");
//            return;
//        }

    }

    public function update()
    {
        $data = getDataFromKendoRequest();

        $ret = $this->model->save($data) > 0;

        kendo_callback($data, $ret ? $this->msg_update_succeed : $this->msg_update_failed);
    }

    public function update2()
    {
        $data = getDataFromKendoRequest();

        $this->status = $this->model->save($data) > 0;

        $this->write();
    }

    public function create()
    {
        $data = getDataFromKendoRequest();

        $ret = $this->model->add($data) != NULL;

        $data->Id = $ret;

        kendo_callback($data, $ret ? $this->msg_create_succeed : $this->msg_create_failed);
    }

    public function destroy()
    {
        $id = I(C_ID);

        if ($this->softDeleteMode) {
            $this->model->setRemoved($id);
            $ret = true;
        } else
            $ret = $this->model->delete($id) > 0;

        kendo_callback($id, $ret ? $this->msg_destroy_succeed : $this->msg_destroy_failed);
    }

    public function read()
    {
        $data = $this->model->select();

        kendo_callback($data);
    }

    public function  getCondition()
    {

    }
}