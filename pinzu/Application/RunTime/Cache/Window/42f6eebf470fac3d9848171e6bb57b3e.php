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

    <script src="/Source/js/common.js"></script>


    <style>
        /** { -webkit-box-sizing: border-box;  -moz-box-sizing: border-box;  font-family: "Microsoft Yahei";  }*/
        .form_user tbody tr td:first-child {  line-height: 56px;  font-size: 16px;  text-align: right;  padding-right: 8px;  }
         .form_user input {  font-size: 013px;  min-height: 40px;  width: 200px;  padding-left: 12px;  outline-color: deepskyblue;  }
       . form label {  cursor: pointer;  font-weight: normal;  }
        .form_user .btn {  padding: 4px;  outline: none  }

        span.message {
            padding-left: 6px;
            font-size: 12px;
            color: deeppink;
            position: absolute;
            line-height: 20px;
            width: 300px;;
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
    </style>

    
    <style type="text/css">
        dl{margin-bottom:5px}
        .img_xq{
            height: 180px;
            width: 220px;
        }
        .thumbnail .caption p span {
            font-size: 14px;
            font-weight: bold;
            color: #F00;
            line-height: 20px;
        }
        .thumbnail .caption p {
            font-weight: bold;
            font-size: 12px;
            line-height: 20px;
        }
        .figure_box{
            width:230px;
            float:left;
            margin-right: 1px;
            margin-left: 1px;
        }
        .leade-search {
            padding-left:50px;
            height: 30px;
            width: 1170px;
        }
        .selectNumberScreen .leade-search input {
            float: left;
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
            </ul>
        </div>
    </div>
</div>
<div style="width: 1170px;margin: 0 auto;overflow: hidden">
    
    <div>手机数码>手机</div>
    <div style="width:1170px; margin:0 auto; overflow:hidden">
        <div class="thumbnail figure_box">
            <div class="img_xq"><img src="/Source/images/shuma.jpg" width="220" height="180"></div>
            <div class="caption">
                <h5>苹果手机手机手机手机</h5>
                <p>租金：￥<span>30.00</span></p>
                <p>押金：￥<span>1500.00</span>&nbsp;&nbsp;<a href="#" class="btn btn-primary btn-xs" role="button">查看详情</a></p>
            </div>
        </div>
        <div class="thumbnail  figure_box">
            <div class="img_xq"><img src="/Source/images/shuma.jpg" width="220" height="180"></div>
            <div class="caption">
                <h5>苹果手机手机手机手机</h5>
                <p>租金：￥<span>30.00</span></p>
                <p>押金：￥<span>1500.00</span>&nbsp;&nbsp;<a href="#" class="btn btn-primary btn-xs" role="button">查看详情</a></p>
            </div>
        </div>
        <div class="thumbnail  figure_box">
            <div class="img_xq"><img src="/Source/images/shuma.jpg" width="220" height="180"></div>
            <div class="caption">
                <h5>苹果手机手机手机手机</h5>
                <p>租金：￥<span>30.00</span></p>
                <p>押金：￥<span>1500.00</span>&nbsp;&nbsp;<a href="#" class="btn btn-primary btn-xs" role="button">查看详情</a></p>
            </div>
        </div>
        <div class="thumbnail  figure_box">
            <div class="img_xq"><img src="/Source/images/shuma.jpg" width="220" height="180"></div>
            <div class="caption">
                <h5>苹果手机手机手机手机</h5>
                <p>租金：￥<span>30.00</span></p>
                <p>押金：￥<span>1500.00</span>&nbsp;&nbsp;<a href="#" class="btn btn-primary btn-xs" role="button">查看详情</a></p>
            </div>
        </div>
        <div class="thumbnail  figure_box">
            <div class="img_xq"><img src="/Source/images/shuma.jpg" width="220" height="180"></div>
            <div class="caption">
                <h5>苹果手机手机手机手机</h5>
                <p>租金：￥<span>30.00</span></p>
                <p>押金：￥<span>1500.00</span>&nbsp;&nbsp;<a href="#" class="btn btn-primary btn-xs" role="button">查看详情</a></p>
            </div>
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
<script type="text/template" id="tLogin_1">
        <span> 欢迎光临品租网！  请&nbsp;<a href="/User/login">登陆</a></span>
        <span><a href="/User/register">注册</a></span>
</script>
<script type="text/template" id="tLogin_2">
        <span> 您好！<a href="/User">#nick_name</a>&nbsp;&nbsp;&nbsp;<a href="/User/logout"> 退出</a></span>
</script>
<script type="text/javascript">
    //$(function(){
        $.extend({
            'isLogin':function(url,id){
                var url = url + "/isLogin";
                $.get(url,{},function(retObj){
                    var models = retObj.list;
                    if (models) {
                        var html = "";
                        for (var i = 0; i < models.length; i++) {
                            var model = models[i];
                            var template = $("#tLogin_2").html().config(model);
                            html += template;
                        }
                        $(id).html(html);
                    }else{
                        var html = "";
                        var template = $("#tLogin_1").html();
                        html += template;
                        $(id).html(html);
                    }
                });
            }
        });
        $.isLogin("/UserInfo","#top");
</script>
</body>
</html>