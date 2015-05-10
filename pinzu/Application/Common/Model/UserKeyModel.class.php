<?php
namespace Common\Model;

use Think\Model;

class UserKeyModel extends Model
{
    const title = "来自品租网的验证通知";

    function  sendKey($uid, $uid_type, $type = 1)
    {
        $status = S_ERROR;

        $key = getRandomKey();

        if ($uid_type == UT_EMAIL_ADDRESS) {

            require './Common/EmailSender.php';

            $url = '/Validation/' . getUserId() . '/' . $key;

            $emailContent = sprintf(file_get_contents(TPL_USER_VALIDATION), $url, $url);

            $status = \EmailSender::Send(self::title, $emailContent, $uid);

        } else if ($uid_type == UT_PHONE_NUMBER) {

            global $_SMSClient;

            $sent_ret = $_SMSClient->sendSMS($uid, sprintf("来自品租网，您的验证码是：%s，请勿随意透露他人。", $key));

            if ($sent_ret)
                $status = $sent_ret["errorno"] == 0;
        }

        if ($status) {
            if ($type == 1) {

                $user_id = getUserId();

                $data = array(
                    C_USER_ID => $user_id,
                    C_KEY => $key
                );

                $this->where(array(C_USER_ID => $user_id))->delete();

                $status = $this->add($data) > 0;
            } else if ($type == 2) {

                $m_user = new UserModel();

                if ($m_user->checkExist($uid))
                    return S_CUSERROR;

                $m_key_temp = D(T_USER_KEY_TEMP);

                $data = array(
                    C_UID => $uid,
                    C_KEY => $key
                );

                $m_key_temp->where(array(C_UID => $uid))->delete();

                $status = $m_key_temp->add($data) > 0;
            }
        }

        return $status;
    }
}