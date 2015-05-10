<?php
namespace Common\Model;

use Think\Model;

class UserRequirementModel extends Model
{
    protected $_auto = array(
        array(C_USER_ID, F_GETUSERID, self::MODEL_INSERT, "function")
    );

    protected $_validate = array(
        array(C_TITLE, '4,20', C_TITLE, self::MUST_VALIDATE, 'length'),
        array(C_DESCRIPTION, '10,400', C_DESCRIPTION, self::MUST_VALIDATE, 'length'),
    );

    /**发布需求
     * @return int|mixed
     */
    function publishRequire()
    {
        if ($data = $this->create()) {
            $this->add() > 0;
            return S_SUCCEED;
        }
        return S_FORM_INVALID;
    }

    function queryPub()
    {
        $user = D(T_USER_INFO);
        return $user->field('ui.nick_name')->table(array('user_info'=>'ui','user_requirement'=>'ur'))->where('ui.user_id=ur.user_id')->select();
    }

    function  query()
    {
        $count = $this->field('uo.title,uo.description,u.phone_number,u.email_address')->table(array('user_object' => 'uo', 'user' => 'u'))->where('uo.user_id=u.id')->count();
        $page = new \Think\Page($count, 5);
        $show = $page->show();
        $list = $this->field('uo.title,uo.description,u.phone_number,u.email_address')->table(array('user_object' => 'uo', 'user' => 'u'))->where('uo.user_id=u.id')->limit(5)->select();
        $data = array($show, $list);
        return $data;
    }

}