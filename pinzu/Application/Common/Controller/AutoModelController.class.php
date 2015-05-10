<?php
namespace Common\Controller;

use Think\Controller;
use Common\Model\UserRequirementViewModel;


class AutoModelController extends Controller
{
    /** 基于约定大约配置的模型
     * @var \Model|\Think\Model
     */
    public $model;

    /** 自动实例化Model
     * @var bool
     */
    public $useModel = true;

    public $status = S_ERROR;

    public $outputData = array();

    public function __construct()
    {
        parent::__construct();

        if ($this->useModel) {
            $matches = array();

            preg_match("#\\\\(\w+?)Controller$#", get_class($this), $matches);

            $this->model = D($matches[1]);
        }

    }

    public function write($status = null, $returnData = null, $statusName = "status")
    {

        header('Content-Type:text; charset=utf-8');

        $json = "";

        if ($status == null)
            $status = $this->status;

        if ($returnData == null)
            $returnData = $this->outputData;

        if (is_bool($status))
            $returnData[$statusName] = $status == TRUE ? 1 : 0;
        else
            $returnData[$statusName] = $status;

        $json = json_encode($returnData);

        echo $json;
    }

    public function isUnlogin($autoRedirect = true)
    {
        $userId = getUserId();

        $isUnlogin = $userId == null;

        if ($isUnlogin) {
            $this->status = S_UNLOGIN;

            if ($autoRedirect)
                redirect("/User/Login");
            else
                $this->write();
        }

        return $isUnlogin;
    }

    public function  _empty()
    {
        $this->display();
    }

    public function  assignPage($count, $list)
    {
        $this->assign(array(
            "page_count" => $count,
            "list" => $list
        ));
    }

    protected $otherModel = null;

    protected function loadPage($where = null)
    {
        if ($this->isUnlogin())
            return;

        if ($where == null)
            $where = array();

        $pageIndex = I("pageIndex");

        if (!$pageIndex)
            $pageIndex = 1;

        $pageSize = 12;

        $userId = getUserId();

        $source = $this->model;

        if ($this->otherModel)
            $source = $this->otherModel;

        $list = $source->getPageByUserId($userId, $pageIndex, $pageSize, $where);

        $count = $source->getCountByUserId($userId, $pageSize) / 12;

        $count = ceil($count);

        $this->_before_assign($list);

        $this->assignPage($count, $list);

        $this->display();
    }

    protected $useSafeDel = false;

    public function safeDel()
    {
        if ($this->useSafeDel && $this->model) {
            $id = intval(I("id"));

            $userId = getUserId();

            if ($id && $userId)
                $this->status = $this->model->where(array(C_USER_ID => $userId))->setRemoved($id);

        } else
            $this->status = S_ERROR;

        $this->write();
    }


    protected function  _before_assign(&$list)
    {
        setDictValue($list, \Globals::$Status, C_STATUS, C_STATUS_NAME);
    }

    protected $otherViewModel = null;

    public function loadPage2($where = null)
    {
        if ($where == null)
            $where = array();

        $pageIndex = I("pageIndex");

        if (!$pageIndex)
            $pageIndex = 1;

        $pageSize = 5;

        $source = $this->model;

        if ($this->otherModel)
            $source = $this->otherModel;

        $list = $source->page($pageIndex, $pageSize)->where($where)->select();

        $count = $source->where($where)->count() / 5;

        $count = ceil($count);

        $this->_before_assign($list);

        return array(
            "page_count" => $count,
            "list" => $list
        );
    }

    public function loadPage3($where)
    {
        if ($this->isUnlogin())
            return;

        $source = $this->model;

        if ($this->otherModel)
            $source = $this->otherModel;

        $list = $source->where($where)->select();

        $this->_before_assign($list);
        return array("list"=>$list);

    }

    public function loadPage4($where)
    {
        $pageIndex = I("pageIndex");

        if (!$pageIndex)
            $pageIndex = 1;

        $pageSize = 5;
        $source = $this->model;

        if($this->otherModel)
            $source = $this->otherModel;

        $list = $source->page($pageIndex, $pageSize)->where($where)->select();
        $count = $source->where($where)->count() / $pageSize;

        $count = ceil($count);
        $user = D(T_USER_INFO);
        $publisher = $user->field('ui.nick_name')->table(array('user_info'=>'ui','user_requirement'=>'ur'))->page($pageIndex, $pageSize)->where('ui.user_id=ur.user_id')->select();
        for($i=0;$i<count($list);$i++)
        {
            $list[$i]['nick_name'] = $publisher[$i]['nick_name'];

        }
        $this->_before_assign($list);

        return array(
            'list'=>$list,
            'page_count'=>$count
            );
    }
}