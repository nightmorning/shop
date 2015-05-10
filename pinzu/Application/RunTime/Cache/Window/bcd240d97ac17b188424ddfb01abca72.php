<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <title>
        品租网
    </title>
    <link rel="stylesheet" href="/Source/css/bootstrap.css">

    <link rel="stylesheet" href="/Source/css/style.css">

    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script src="/Source/js/common.js"></script>


    <style>
        /** { -webkit-box-sizing: border-box;  -moz-box-sizing: border-box;  font-family: "Microsoft Yahei";  }*/
        .form_user tbody tr td:first-child {  line-height: 56px;  font-size: 16px;  text-align: center;  padding-right: 8px;  }
         .form_user input {  font-size: 013px;  min-height: 40px;  width: 200px;  padding-left: 12px;  outline-color: deepskyblue;  }
       . form label {  cursor: pointer;  font-weight: normal;  }
        .form_user .btn {  padding: 4px;  outline: none  }

        span.message {
            padding-left: 6px;
            font-size: 12px;
            color: deeppink;
            position: absolute;
            line-height: 20px;
            width: 320px;;
        }
        .table-label{width: 100px;}

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
        .top_nav{text-align: right}
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
        .requirement-advert {
            border: 1px solid #F0F0F0;
            width: 300px;
        }

        .rent_list {
            width: 100%
        }
        .rent_list table tr{border-bottom: 1px solid #F0F0F0;}
        .rent_list table tr td{border-top:0px;}
    </style>

    

    <style>
        #cUserInfo {
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
            padding: 12px;
            line-height: 30px;
            background-color: #f5f5f5;
            margin: 0px;
        }

        #cUserInfo .btn-xs {
            margin-left: 2px;
        }

    </style>


</head>
<body>
<div style="height:34px;background-color:#EFEFEF">
    <div class="row" style="width:1170px; margin:0 auto; background-color:#EFEFEF; line-height: 30px">
        <div class="col-md-3 top_nav_one" id="top">
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-5 top_nav">
            <a href="/UserLeaseLogs/Lessee">我的订单</a>
            <a href="/UserObject/publish">我的发布</a>
            <a href="/User">会员中心</a>
            <a role="presentation" class="dropdown"><a id="drop4" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">客户服务<span class="caret"></span></a>
        <ul id="menu1" class="dropdown-menu" style="left:300px;min-width:0;" role="menu" aria-labelledby="drop4">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="www.baidu.com">在线客服</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">帮助中心 </a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">投诉中心 </a></li></ul>
      </a>
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
                    <button class="btn btn-default" style="width:60px;height:34px;margin-right:-2px;border: none;background-color: orange;color: #ffffff;" onclick="window.location='../UserObject/region_search.html'" type="button">搜索</button>
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
                <li><a href="/StationInfo">站内资讯</a></li>
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
        <li class="nav-header">
            资金管理
        </li>
        <li>
            <a href="/UserFund">我的资金</a>
        </li>
        <li>
            <a href="/UserFund/Expense">开销记录</a>
        </li>
    </ul>
</div>


        <div class="col-md-9">

            <h3>温馨提示</h3>

            <p>
                <a href="/UserInfo/Editor" class="btn btn-primary btn-danger">马上完善</a>
                欢迎加入品租网，为了保障您的利益，请先完善个人信息，谢谢合作。
            </p>

            <h3>
                个人信息
            </h3>

            <div class="row" id="cUserInfo">
                <div class="col-md-4">
                    昵称：<span name="nick_name"></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <br/>
                    手机号码：<span name="phone_number"></span>
                    <br/>
                    邮箱地址：<span name="email_address">}</span>
                    <br/>
                    地址：<span name="address"></span>
                    <br/>
                    注册日期：<span name="created_on"></span>

                </div>
                <div class="col-md-4">
                    真实姓名：<span name="real_name"></span>
                    <br/>
                    身份证号码：<span name="card_no"></span>
                    <br/>
                    银行卡数量：<span name="bank_card_num" style="color:dodgerblue;"></span>
                    <a href="/UserBankCard/Addition" class="btn btn-default btn-xs">添加银行卡</a>
                    <br/>
                    帐号安全系数：<span name="safe_level" style="color:dodgerblue;"></span>
                    <a href="/User/Safe" class="btn btn-default btn-xs">提高安全系数</a>
                    <br/>
                    <span style="color:#808080;">*信用系数：（待开放）</span>
                </div>
                <div class="col-md-3">
                    已发布物品：<span name="published_object_num"></span>
                    <br/>
                    已发布需求：<span name="published_requirement_num"></span>
                    <br/>
                    出租次数：<span name="lessor_time"></span>
                    <br/>
                    承租次数：<span name="lessee_time"></span>
                    <br/>
                    好评率：<span name="positive_ratio" style="color:dodgerblue;"></span>
                    <button type="button" class="btn btn-default btn-xs">什么是好评率？</button>
                    <br/>

                </div>
                <div class="col-md-2" style="position: absolute;text-align: right;right:0px;">
                    <a href="/UserInfo/Editor" class="btn btn-primary btn-xs">编辑个人信息</a>
                    <br/>
                    <a href="/UserBankCard" class="btn btn-warning btn-xs">银行卡管理</a>
                    <br/>
                    <a href="/User/ModifyPwd" class="btn btn-danger btn-xs">修改密码</a>
                    <br/>
                    <a href="/User/Safe" class="btn btn-info btn-xs">修改手机/邮箱</a>
                    <br/>
                </div>
            </div>

            <h3>
                物品租赁
            </h3>

            <p>
                <a href="/UserObject/Publish" class="btn btn-info">我要出租</a>
                手上有闲置物品？快速发布！
            </p>

            <p>
                <a href="/UserObject" class="btn btn-warning">我要承租</a>
                少侠~少侠，租个蒙古包呗？
            </p>

            <p>
                <a href="/UserLeaseLogs/Lessor" class="btn btn-info">出租记录</a>
                想查看出租记录？轻轻一点，一睹为快！
            </p>

            <p>
                <a href="/UserLeaseLogs/Leasee" class="btn btn-warning">承租记录</a>
                查看承租记录的入口就在这儿~~
            </p>

            <h3>
                需求
            </h3>

            <p>
                <a href="/UserRequirement/Publish" class="btn btn-info" alt="">发布需求</a>
                江湖上没有少侠您心仪的玩意儿？没关系，品租网免费为您诏告天下
            </p>


        </div>

    </div>
    <script>

        $(function () {
            var testData = {
                real_name: "<?php echo ($details["real_name"]); ?>",
                card_no: "<?php echo ($details["card_no"]); ?>",
                bank_card_num:"<?php echo ($extra["bankCard"]); ?>",
                safe_level: "85%",
                nick_name: "<?php echo ($details["nick_name"]); ?>",
                phone_number: "<?php echo ($details["phone_number"]); ?>",
                email_address: "<?php echo ($details["email_address"]); ?>",
                address: "<?php echo ($details["address"]); ?>",
                created_on: "<?php echo ($details["created_on"]); ?>",
                published_object_num: "<?php echo ($extra["object"]); ?>",
                published_requirement_num: "<?php echo ($extra["requirement"]); ?>",
                lessor_time: "<?php echo ($extra["lessor_time"]); ?>",
                lessee_time: "<?php echo ($extra["lessee_time"]); ?>",
                positive_ratio: "90%"
            };

            fillByModel(testData, $("#cUserInfo"))
        });

    </script>

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
<script type="text/template" id="tLogin_1">
        <span> 欢迎光临品租网！  请&nbsp;<a href="/User/login">登陆</a></span>
        <span><a href="/User/register">注册</a></span>
</script>
<script type="text/template" id="tLogin_2">
        <span> 您好！<a href="/User">#nick_name</a>&nbsp;&nbsp;&nbsp;<a href="/User/logout"> 退出</a></span>
</script>
<script type="text/javascript">
//    $(function() {
        $.extend({
            'isLogin': function (url, id) {
                var url = url + "/isLogin";
                $.get(url, {}, function (retObj) {
                    var models = retObj.list;

                    if (models) {
                        var html = "";

                        for (var i = 0; i < models.length; i++) {
                            var model = models[i];
                            var template = $("#tLogin_2").html().config(model);
                            html += template;
                        }
                        $(id).html(html);
                    } else {
                        document.write(1);
                        var html = "";
                        var template = $("#tLogin_1").html();
                        html += template;
                        $(id).html(html);
                    }
                });
            }
        });
//    }
        if ($.isLogin("/UserInfo", "#top")) {
            $.isLogin("/UserInfo", "#top");
        } else {
            var html = "";
            var template = $("#tLogin_1").html();
            html += template;
            $("#top").html(html);
        }
</script>
</body>
</html>