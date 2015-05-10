<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <title>
        品租网
    </title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="/Source/css/style.css">

    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

    <script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="/Source/js/common.js"></script>


    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            font-family: "Microsoft Yahei";
        }

        .form_user tbody tr td:first-child {
            line-height: 56px;
            font-size: 16px;
            text-align: right;
            padding-right: 8px;
        }

        .form_user input {
            font-size: 13px;
            min-height: 40px;
            width: 200px;
            padding-left: 12px;
            outline-color: deepskyblue;
        }

        form label {
            cursor: pointer;
            font-weight: normal;
        }

        .form_user .btn {
            padding: 4px;
            outline: none
        }

        span.message {
            padding-left: 6px;
            font-size: 12px;
            color: deeppink;
            position: absolute;
            line-height: 20px;
        }

        .img {
            width: 80px;
            height: 80px;
            padding: 4px;
            float: left;
            margin: 2px 2px 0 0;
        }

        .nav > li > a {
            padding: 6px 15px;
        }

        .nav-header {
            font-size: 16px;
        }

        .nav > li.active > a {
            background-color: deepskyblue;
            color: white;
        }

        body > table {
            font-size: 12px
        }

        .top_nav > a {
            margin-left: 12px;
        }

        .top_nav_one span a {
            margin-right: 12px
        }

        .center {
            display: table;
            margin: 0 auto;
        }
    </style>

    
    <script src="/Source/js/sco/sco.valid.js"></script>


</head>
<body>
<div style="height:34px;background-color:#EFEFEF">
    <div class="row" style="width:1170px; margin:0 auto; background-color:#EFEFEF; line-height: 30px">
        <div class="col-md-3 top_nav_one">
            <span> 欢迎光临品租网！  请&nbsp;<a href="/User/Login">登陆</a></span>
            <span><a href="/User/Register">注册</a></span>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-5 top_nav">
            <a href="/UserInfo/">我的订单</a>
            <a href="/UserObject/publish">我的发布</a>
            <a href="/UserInfo/index">会员中心</a>
            <select name="select" id="select">
                <option><a href="#"> 客户服务</a></option>
                <option><a href="#">帮助中心</a></option>
                <option><a href="#">在线客服</a></option>
                <option><a href="#">投诉中心</a></option>
            </select>
            <a href="#">收藏品租网</a>
        </div>
    </div>
</div>

<div class="row" style="width: 1170px; margin:0 auto; margin-top:10px; margin-bottom:10px; overflow:hidden;">
    <div class="col-md-3"><img src="/Source/images/logo.png" width="200" height="60"/></div>
    <div class="col-md-6" style="margin-top: 20px"><input type="text" style="width:450px; height:30px; float: left;" placeholder="免费租用">
        <input type="submit" class="btn btn-warning" style="width:60px; margin-left: 2px;" value="搜索">
    </div>
    <div class="col-md-3" style="line-height: 80px">
        <div class="qrcode" style="float: right"><img src="/Source/images/ewm.png" style="width: 80px;height: 80px;"/></div>
        <img src="/Source/images/tel.png"/>&nbsp;0755-82882078&nbsp;
    </div>
</div>

<div id="synavone" class="synavone">
    <div id="menu" class="menu">
        <div id="new_nav" class="new_nav">
            <ul style="padding:0">
                <li><a href="/index">首页</a></li>
                <li><a href="/zone">需求专区</a></li>
                <li><a href="/Index/index">宜物宜租</a></li>
                <li><a href="/UserRequirement/index">需求专区</a></li>
                <li><a href="/">首页</a></li>
                <li><a href="/Requiremnt">需求专区</a></li>
                <li><a href="/Deposit">代租专区</a></li>
                <li><a href="/Free">免费专区</a></li>
                <li><a href="/User/index">会员中心</a></li>
                <li><a href="/UserObject/index">发布中心</a></li>
            </ul>
        </div>
    </div>
</div>

    <form data-ajax-submit action="reg_user" id="formMain" class="form_user center" method="post">

        <h4>新用户注册</h4>
        <table >
            <tr>
                <td>
                    <label for="txtUid"> 邮箱/手机号</label>
                </td>
                <td>
                    <input type="text" class="form-control" id="txtUid" name="uid"/>
                </td>
                <td id="mUid" style="color:deeppink;display: none;  position: absolute;line-height: 60px;">
                    用户名已被注册
                </td>
            </tr>
            <tr>
                <td><label for="txtPwd">密码</label></td>
                <td>
                    <input type="password" class="form-control" id="txtPwd" name="pwd"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txtRe_pwd">确认密码</label>
                </td>
                <td>
                    <input type="password" class="form-control" id="txtRe_pwd" name="re_pwd"/>
                </td>
            </tr>
            <tr id="cKey" style="display: none;">
                <td>
                    <label for="txtKey">验证码</label>
                </td>
                <td style="position: relative;">
                    <input type="password" class="form-control" id="txtKey" name="key"/>
                    <div style="position: absolute;left: 206px;top: 15px;">
                        <button type="button" class="btn btn-warning" id="btnSendKey" onclick="sendKey(2);" style="">
                            发送验证码
                        </button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input id="cbAgree" type="checkbox"
                           style="width:20px; height:20px; margin:0 auto;min-height: 20px;"/></td>
                <td>
                    <label for="cbAgree" style="cursor: pointer;">我已阅读并同意<a href="#">&lt;&lt;居租网协议&gt;&gt;</a></label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td >
                    <button type="submit" class="btn btn-warning" style="font-size:18px;width:200px;">
                        提交注册
                    </button>
                </td>
            </tr>
        </table>

    </form>

    <script>

        var exp_uid = /^1[\d]{10}$|^[a-zA-Z0-9&\-_.]+@[\w\-_]+([\w\-.]+)?\.[\w\-]+$/;
        var validator = $.scojs_valid("#formMain", {
            rules: {
                uid: ['not_empty', {regex: exp_uid}],
                pwd: ['not_empty', {regex: /[a-zA-Z0-9_]{6,20}/}],
                re_pwd: [{matches: 'pwd'}]
            },
            messages: {
                uid: {regex: "请输入正确的邮箱地址或手机号码"},
                pwd: {regex: "密码可由数字、字母、下划线组成，长度为6-20位"},
                re_pwd: {matches: "两次输入的密码不一致"}
            }
        });

        $("#formMain input[name]").bind("blur", function () {
            validator.validate();
        });

        $("form[data-ajax-submit]").bind("submit", function () {

            var valid = validator.validate();

            if (valid && $("#cbAgree")[0].checked == false) {
                showMsg("请先阅读注册协议。");
                return false;
            }

            $(this).ajaxSubmit(function (retObj) {
                switch (retObj.status) {
                    case S.SUCCEED:
                        showMsg("注册成功，请牢记您的帐号与密码，更多精彩等着您。", {
                            ok: function () {
                                window.location.href = "/User";
                            }
                        });

                        break;
                }
            });

            return false;
        });

        $(function () {

            $("#txtUid").on("blur", function () {

                $.get("/User/CheckExist",
                        {uid: this.value},
                        build_ajax_callback({
                            1: function () {
                                $("#mUid").show();
                            },
                            0: function () {
                                $("#mUid").hide();
                            }
                        }),
                        false
                );

                var uid = this.value;

                var exp_phone_number = /^1[\d]{10}$/;

                if (exp_phone_number.test(uid))
                    $("#cKey").fadeIn();
                else
                    $("#cKey").fadeOut();

            });

        });

        function sendKey(send_type) {

            send_type = send_type || 1;

            var uid = $("#txtUid").val();

            if (exp_uid.test(uid))
                $.get("/UserKey/SendKey", {uid: uid, type: send_type}, {
                    1: function () {
                        beginCount($("#btnSendKey"), 60);
                    },
                    10: "发送验证码失败，该帐号已被注册"
                });

        }

        function beginCount($btn, limit) {

            var msg = "秒后重新发送";

            $btn.attr("disabled", "disabled");

            limit--;

            $btn.text(limit + msg);

            if (limit > 1)
                window.setTimeout(beginCount, 1000, $btn, limit);
            else {
                $btn.text("发送验证码");
                $btn.removeAttr("disabled");
            }
        }


    </script>

<!--底部-->
<div class="footer">
    <ul>租赁指南
        <li><a href="#">租赁说明</a></li>
        <li><a href="#">常见问题</a></li>
        <li><a href="#">联系客服</a></li>
    </ul>
    <ul>配送方式
        <li><a href="#">租主物流</a></li>
        <li><a href="#">租客自提</a></li>
        <li><a href="#">物流方式</a></li>
    </ul>
    <ul>支付方式
        <li><a href="#">支付方式</a></li>
        <li><a href="#">发票说明</a></li>
        <li><a href="#">退款指南</a></li>
    </ul>
    <ul>会员帮助
        <li><a href="#">维修保障</a></li>
        <li><a href="#">审核流程</a></li>
        <li><a href="#">租赁保险</a></li>
    </ul>
    <ul>商务合作
        <li><a href="#">商家合作</a></li>
    </ul>
</div>
<div class="footer_box">
    <p><a href="#">关于我们</a>&nbsp;|&nbsp;<a href="#">联系我们</a>&nbsp;|&nbsp;<a href="">租赁问答</a>&nbsp;|&nbsp;<a
            href="">人才招聘</a>&nbsp;|&nbsp;<a
            href="">服务协议</a>&nbsp;|&nbsp;<a href="">意见反馈</a>
        <br>
        Copyright 2015 深圳唐明科技信息有限公司
        <br>
        <a href="http://new.cnzz.com"><img src="/Source/images/zhanzhangtongji.jpg" alt="" width="60"
                                           height="20"/></a><a href="http://www.miibeian.gov.cn/">粤ICP备14075964号-2</a>
    </p>
</div>
<script type="text/template" id="tPagination">
    <nav>
        <ul class="pagination">
            <li class="prev">
                <a href="#url#pageIndex_prev">
                    <span>&laquo;</span>
                </a>
            </li>
            #btns
            <li class="next">
                <a href="#url#pageIndex_next">
                    <span>&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</script>
</body>
</html>