<?php
namespace Common\ViewModel;

use Think\Model\ViewModel;

class UserViewModel extends ViewModel
{
    public $viewFields = array(
        T_USER => array('*'),
        T_USER_INFO => array('*', '_on' => 'user_info.user_id=user.id'),
    );
}