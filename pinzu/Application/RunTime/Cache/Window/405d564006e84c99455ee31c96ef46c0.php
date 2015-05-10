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
        * { -webkit-box-sizing: border-box;  -moz-box-sizing: border-box;  font-family: "Microsoft Yahei";  }
        .form_user tbody tr td:first-child {  line-height: 56px;  font-size: 16px;  text-align: right;  padding-right: 8px;  }
         .form_user input {  font-size: 13px;  min-height: 40px;  width: 200px;  padding-left: 12px;  outline-color: deepskyblue;  }
       . form label {  cursor: pointer;  font-weight: normal;  }
        .form_user .btn {  padding: 4px;  outline: none  }

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
        .btn-default.active, .btn-default.focus, .btn-default:active, .btn-default:focus, .btn-default:hover, .open>.dropdown-toggle.btn-default {
            color: #333;
            background-color: #ffffff;
            border-color: #ffffff;
        }
    </style>

    
    <script src="/Source/js/sco/sco.valid.js"></script>


</head>
<body>
<div style="height:34px;background-color:#EFEFEF">
    <div class="row" style="width:1170px; margin:0 auto; background-color:#EFEFEF; line-height: 30px">
        <div class="col-md-3 top_nav_one">
            <span> 欢迎光临品租网！  请&nbsp;<a href="/User/login">登陆</a></span>
            <span><a href="/User/register">注册</a></span>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-5 top_nav">
            <a href="/UserInfo/">我的订单</a>
            <a href="/UserObject/publish">我的发布</a>
            <a href="/User">会员中心</a>
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
    <div class="col-md-3"><a href="/Index"><img src="/Source/images/logo.png" width="200" height="60"/></a> </div>
    <div class="col-md-6" style="margin-top: 20px;border: 2px solid #F90;padding: 0 0;">
        <!--<input type="text" style="width:450px; height:30px; float: left;border: none;"placeholder="免费租用">-->
        <div>
            <div class="input-group">
                <span class="input-group-btn" style="width:80px;background-color: orange;">
                    <select class="form-control btn btn-default" style="line-height: 25px; border: 0px solid #f90">
                        <option>宝贝</option>
                        <option>需求</option>
                    </select>
                </span>
                <input type="text" class="form-control" style="border: none;" placeholder="免费租用">
                <span class="input-group-btn">
                    <button class="btn btn-default" style="width:60px;height:34px;margin-right:-2px;border: none;background-color: orange;color: #ffffff;" type="button">搜索</button>
                </span>
            </div><!-- /input-group -->
        </div>

    </div>
    <div class="col-md-3" style="line-height: 80px">
        <div class="qrcode" style="float: right"><img src="/Source/images/ewm.png"
                                                      style="width: 80px;height: 80px;"/></div>
        <img src="/Source/images/tel.png"/>&nbsp;0755-82882078&nbsp;
    </div>
</div>

<div id="synavone" class="synavone">
    <div id="menu" class="menu">
        <div class="all-sort" id="all-sort">全部商品分类</div>
        <div class="new_nav">
            <ul style="padding:0">
                <li><a href="/Index">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
                <li><a href="/UserRequirement/zone">需求专区</a></li>
                <li><a href="/UserFree">免费专区</a></li>
                <li><a href="/User">会员中心</a></li>
                <li><a href="/UserInfo/distribution_center">发布中心</a></li>
            </ul>
        </div>
    </div>
</div>
<div style="width: 1170px;margin: 0 auto;overflow: hidden">
    
    <div class="row">
        <style>
    .row p {
        font-size: 16px;
        font-weight: bold;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #fff;
        padding: 6px;
    }

    .row {
        margin: 0px;
        margin-bottom: 32px;

    }

    body > .row {
        width: 1170px;
        margin: 0 auto;
        margin-top: 30px;
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
            我的优惠券
        </li>
        <li>
            <a href="/UserOwnCoupon">优惠券列表</a>
        </li>
        <li>
            <a href="/UserOwnCoupon">激活优惠券</a>
        </li>
        <li class="nav-header">
            我的银行卡
        </li>
        <li>
            <a href="/UserBankCard">银行卡列表</a>
        </li>
        <li>
            <a href="/UserBankCard/Addition">添加 + </a>
        </li>
        <li class="nav-header">
            租赁物品
        </li>
        <li>
            <a href="/UserObject">已发布的物品</a>
        </li>
        <li>
            <a href="/UserLeaseLogs/Lessee">承租记录</a>
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
            <a href="/UserEvaluation/Lessee">承租评价</a>
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

        <div class="col-md-6">
            <form data-ajax-submit action="pub" id="formMain" class="form_user" method="post">

                <table>
                    <tr>
                        <td><label for="txtTitle">标题</label></td>
                        <td colspan="2">
                            <input type="text" class="form-control" id="txtTitle" name="title" style="width: 300px;"
                                   value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="txtPriceDay">日租金</label></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">￥</span>
                                <input type="text" class="form-control" name="price_day" id="txtPriceDay">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="txtPriceMonth">月租金</label></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">￥</span>
                                <input type="text" class="form-control" name="price_month" id="txtPriceMonth">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="txtPricePledge">押金</label></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">￥</span>
                                <input type="text" class="form-control" name="price_pledge" id="txtPricePledge">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="txtQuantity">数量</label></td>
                        <td>
                            <input type="text" class="form-control" name="quantity" id="txtQuantity">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="sSendWay">寄送方式</label></td>
                        <td>
                            <select class="form-control" name="send_way" id="sSendWay">
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="sReturnWay">返还方式</label></td>
                        <td>
                            <select class="form-control" name="return_way" id="sReturnWay">
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="txtPriceExpress">运费</label></td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-addon">￥</span>
                                <input type="text" class="form-control" name="price_express" id="txtPriceExpress">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="txtDescription">描述</label></td>
                        <td colspan="2">
                    <textarea id="txtDescription" class="form-control" name="description"
                              style="width: 300px;height: 100px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><label>照片</label></td>
                        <td style="width: 200px;padding-bottom: 10px;padding-top:12px;" id="cImg">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-info"
                                    onclick="document.getElementById('fileCardImg').click();">
                                添加+
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="txtContactName">联系人</label></td>
                        <td>
                            <input type="text" class="form-control" name="contact_name" id="txtContactName">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="txtContactNumber">联系号码</label></td>
                        <td>
                            <input type="text" class="form-control" name="contact_number" id="txtContactNumber">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="txtAddress">联系地址</label></td>
                        <td>
                            <input type="text" class="form-control" name="address" id="txtAddress">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">
                            <button type="submit" class="btn btn-warning"
                                    style="font-size:18px;margin-top:12px;width:200px;;">
                                立即发布
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

            <script>

                var exp_number = {regex: /^\d+$/};
                var exp_decimal = {regex: /^\d+$|^\d+\.\d+$/}

                var validator = $.scojs_valid("#formMain", {
                    rules: {
                        title: ["not_empty", {min_length: 4}, {max_length: 20}],
                        price_day: ["not_empty", exp_decimal],
                        price_month: ["not_empty", exp_number],
                        price_pledge: ["not_empty", exp_number],
                        quantity: ["not_empty", exp_number],
                        price_express: ["not_empty", exp_number],
                        description: ["not_empty", {min_length: 10}, {max_length: 400}],
                        contact_name: ["not_empty", {regex: /^[\u4e00-\u9fa5a-zA-Z0-9_]{2,6}$/}],
                        contact_number: ["not_empty", {regex: /^[\d-]{8,20}$/}],
                        address: ["not_empty", {min_length: 5}, {max_length: 40}]
                    },
                    messages: {}
                });

                var cardImgCount = 0;

                $("#formMain input[name]").bind("blur", function () {
                    validator.validate();
                });

                $("form[data-ajax-submit]").bind("submit", function () {

                    var valid = validator.validate();

                    if (valid) {
                        if (cardImgCount == 0) {
                            showMsg("请至少上传一张物品图片以供信息审核，谢谢合作。")
                            return false;
                        }

                        $(this).ajaxSubmit(function (retObj) {
                            switch (retObj.status) {
                                case S.SUCCEED:
                                    showMsg("添加成功！")
                                    window.location.href = "/UserObject";
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

                function buildSelector($cSelector, dict) {
                    for (var key in dict) {
                        var value = dict[key];
                        $cSelector.append("<option value='" + key + "'>" + value + "</option>");
                    }
                }

                $(function () {

                    var dict_return_way = {
                        0: "租主自取"
                    };
                    var dict_send_way = {
                        0: "租主包送"
                    };

                    buildSelector($("#sReturnWay"), dict_return_way);
                    buildSelector($("#sSendWay"), dict_send_way);

                    var testData = {
                        title: "全新MacBook Air 13寸高配",
                        price_day: "30",
                        price_month: "800",
                        price_pledge: "4000",
                        quantity: "4",
                        price_express: "10",
                        description: "手快有手慢无，各位乡亲欲租从速。",
                        contact_name: "姜R",
                        contact_number: "13652011541",
                        address: "深圳市福佑路2号"
                    };

                    for (var name in testData) {
                        var ele = $("*[name=" + name + "]");
                        ele.val(testData[name]);
                    }

                    $('.dropdown-toggle').dropdown();
                });

            </script>

            <script type="text/template" id="tImg">
                <a href="/Uploads/Temp/#fileName" target="_blank" class="thumbnail img">
                    <img src="/Uploads/Temp/#fileName">
                </a>
                <input type="hidden" name="cardImg[]" value="#fileName"/>
            </script>
        </div>
    </div>

</div>
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
    <p style="margin:0 0 0"><a href="#">关于我们</a>&nbsp;|&nbsp;<a href="#">联系我们</a>&nbsp;|&nbsp;<a href="">租赁问答</a>&nbsp;|&nbsp;<a
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