<?php

/**
 * Auth: TheAnother
 * Date: 2015/3/21
 * Time: 9:29
 */
class EmailSender
{
    private static $config;

    static public function Send($title, $content, $address)
    {
        if (self::$config == NULL)
            self::$config = C('EMAIL_SENDER');

        $config = self::$config;

        vendor('PHPMailer.class#phpmailer'); // 从PHPMailer目录导class.phpmailer.php类文件

        $mail = new \PHPMailer(); // PHPMailer对象

        $mail->IsSMTP(); // 设置使用SMTP服务器发送
        $mail->SMTPAuth = true; // 开启SMTP认证
        $mail->Host = $config['HOST']; // 设置 SMTP 服务器,自己注册邮箱服务器地址
        $mail->Username = $config['USERNAME']; // 发信人的邮箱名称
        $mail->Password = $config['PASSWORD']; // 发信人的邮箱密码
        /* 内容信息 */
        $mail->IsHTML(true); // 指定邮件格式为：html
        $mail->CharSet = $config['CHARSET']; // 编码
        $mail->From = $config['USERNAME']; // 发件人完整的邮箱名称
        $mail->FromName = '品租网官方'; // 发信人署名
        $mail->Subject = $title; // 信的标题
        $mail->MsgHTML($content); // 发信内容
        /* 发送邮件 */
        $mail->AddAddress($address); // 收件人地址

        return $mail->Send();
    }
}