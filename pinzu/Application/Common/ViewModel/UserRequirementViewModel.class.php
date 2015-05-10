<?php
namespace Common\ViewModel;

use Think\Model\ViewModel;

class UserRequirementViewModel extends ViewModel
{

    public $viewFields = array(
        T_USER_REQUIREMENT => array('*'),
        T_USER => array('(case when user.phone_number is not null then user.phone_number else user.email_address end)' => 'user_name', '_on' => 'user.id = user_requirement.user_id')
    );
}