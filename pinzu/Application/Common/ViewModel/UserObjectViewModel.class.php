<?php
namespace Common\ViewModel;

use Think\Model\ViewModel;

class UserObjectViewModel extends ViewModel
{

    public $viewFields = array(
        T_USER_OBJECT => array('*'),
        T_OBJECT_CATEGORY => array('name' => 'cat_name', '_on' => 'object_category.id=user_object.cat_id'),
        T_USER => array('(case when user.phone_number is not null then user.phone_number else user.email_address end)' => 'user_name', '_on' => 'user.id = user_object.user_id')
    );
}