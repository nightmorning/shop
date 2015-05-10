<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <title>
        品租网
    </title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

    <script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="/Source/js/common.js"></script>

    <style>
        * {
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
    </style>

    
    <script src="/Source/js/sco/sco.valid.js"></script>


</head>
<body>

    <block name="body">
        <div clas="row">
            <style>
    p {
        font-size: 16px;
        font-weight: bold;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #fff;
        padding: 6px;
    }


</style>


<div class="col-md-2" style="width:150px;">
    <ul class="nav nav-list">
        <li class="nav-header">
            个人中心
        </li>
        <li>
            <a href="/User">首页</a>
        </li>
        <li>
            <a href="/User/Safe">安全中心</a>
        </li>
        <li>
            <a href="/User/ModifyPwd">修改密码</a>
        </li>
        <li>
            <a href="/UserInfo/Editor">修改资料</a>
        </li>
        <li>
            <a href="/User">消息</a>
        </li>
        <li class="nav-header">
            我的银行卡
        </li>
        <li>
            <a href="/UserBankCard">银行卡列表</a>
        </li>
        <li>
            <a href="/UserBankCard/Add">添加 + </a>
        </li>
        <li class="nav-header">
            租赁物品
        </li>
        <li>
            <a href="/UserObject">已发布的物品</a>
        </li>
        <li>
            <a href="/UserLeaseLogs/Leasee">承租记录</a>
        </li>
        <li>
            <a href="/UserLeaseLogs/Lessor">出租记录</a>
        </li>
        <li>
            <a href="/UserObject/Publish">去发布</a>
        </li>
        <li class="nav-header">
            我的评价
        </li>
        <li>
            <a href="/UserEvaluation/Lessor">出租评价</a>
        </li>
        <li>
            <a href="/UserEvaluation/Leasee">承租评价</a>
        </li>
        <li class="nav-header">
            个人需求
        </li>
        <li>
            <a href="/UserRequirement">需求列表</a>
        </li>
        <li>
            <a href="/UserRequirement/Publish">去发布</a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a href="/Help">帮助</a>
        </li>
    </ul>
</div>


            <div class="col-md-8">
                <form data-ajax-submit action="modify" id="formInfoEditor" class="form_user" method="post">

                    <table>
                        <tr>
                            <td><label for="txtBankName">开户行</label></td>
                            <td>
                                <input type="text" class="form-control" id="txtBankName" name="card_from" value=""/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="txtCardNo">银行卡号</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="txtCardNo" name="card_no" value=""/>
                            </td>
                        </tr>
                        <tr>
                            <td><label>银行卡照片</label></td>
                            <td style="width: 200px;padding-bottom: 10px;padding-top:12px;" id="cImg">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-info"
                                        onclick="document.getElementById('fileCardImg').click();">添加+
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-warning"
                                        style="font-size:18px;margin-top:12px;width:200px;">
                                    保存信息
                                </button>
                            </td>
                        </tr>
                    </table>

                </form>

                <div style="display: none;">
                    <form action="/Test/Upload" target="iFileUploader" enctype="multipart/form-data" method="post">
                        <!--<form action="/Test/Upload"  enctype="multipart/form-data" method="post">-->
                        <input type="file" name="cardImg" id="fileCardImg" onchange="this.parentElement.submit();"/>
                    </form>
                    <iframe src="" name="iFileUploader" frameborder="0"></iframe>
                </div>
            </div>
        </div>

        <script>

            var validator = $.scojs_valid("#formInfoEditor", {
                rules: {
                    card_from: ["not_empty"],
                    card_no: [{regex: /^[\d]{9,30}$/}]
                },
                messages: {
                    card_from: {"not_empty": "请输入正确的开户银行名称，如中国工商银行"},
                    card_no: {regex: "请输入正确的银行卡号，无需空格"}
                }
            });

            var cardImgCount = 0;

            $("#formInfoEditor input[name]").bind("blur", function () {
                validator.validate();
            });

            $("form[data-ajax-submit]").bind("submit", function () {

                var valid = validator.validate();

                if (valid) {
                    if (cardImgCount == 0) {
                        showMsg("请至少上传一张身份证扫描件以供信息审核，谢谢合作。")
                        return false;
                    }

                    $(this).ajaxSubmit(function (retObj) {
                        switch (retObj.status) {
                            case S.SUCCEED:
                                window.location.href = "/User";
                                break;
                        }
                    });
                }


                return false;
            });

            function uploadFileSucceed(fileName) {

                var template = $("#tImg").html();

                template = template.config({fileName: fileName});

                $("#cImg").append(template);

                cardImgCount++;
            }

        </script>

        <script type="text/template" id="tImg">
            <a href="/Uploads/Temp/#fileName" target="_blank" class="thumbnail img">
                <img src="/Uploads/Temp/#fileName">
            </a>
            <input type="hidden" name="cardImg[]" value="#fileName"/>
        </script>
    
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