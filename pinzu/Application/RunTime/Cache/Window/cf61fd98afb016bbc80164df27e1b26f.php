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
        .region-top{  width: 900px;  line-height: 40px;  float: left;margin-top: 20px;  }
        .region-right-text{border-bottom: 2px dashed #f90;background-color: orange;color: #ffffff;line-height: 40px; font-size: 18px ;padding-left: 10px;}
        .row .region-top.col-md-9 a {  float: left;  margin-right:10px;  }
        .region-sort{border-bottom: 1px dashed #F0F0F0;overflow: hidden}
        .region-products-list{width: 24%;float: left;margin-right:8px; }
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
    
    <div class="row">
        <div class="region-top col-md-9">
            <div class="region-sort">
                <h4 style="float:left; margin-right:20px;width: 80px;">所有分类:</h4>
                <a href="">手机数码</a>
                <a href="">保健器材</a>
                <a href="">电脑办公</a>
                <a href="">家用电器</a>
                <a href="">图书影音</a>
                <a href="">家具家装</a>
                <a href="">珠宝首饰</a>
                <a href="">钟表礼品</a>
                <a href="">户外运动</a>
            </div>
            <div class="region-sort" style="clear: both">
                <h4 style="float:left; margin-right:20px;width: 80px;">价&nbsp;&nbsp;格:</h4>
                <a href="">0-100元</a>
                <a href="">100-200元</a>
                <a href="">200-500元</a>
                <a href="">500-1000元</a>
                <a href="">1000-2000元</a>
                <a href="">2000-5000元</a>
                <a href="">5000以上</a>
            </div>
            <div class="region-sort" style="clear: both;">
                <h4 style="float:left; margin-right:20px;width: 80px;">区&nbsp;&nbsp;域:</h4>
                <a href="">罗湖区</a>
                <a href="">福田区</a>
                <a href="">龙岗区</a>
                <a href="">盐田区</a>
                <a href="">南山区</a>
                <a href="">宝安区</a>
                <a href="">龙华新区</a>
                <a href="">坪山新区</a>
                <a href="">大鹏新区</a>
                <a href="">光明新区</a>
            </div>
            <div>
                <div class="region-products-list">
                    <div class="thumbnail">
                        <a href="../UserObject/Details.html"><img data-src="holder.js/100%x200" alt="100%x200" src="/Source/images/shuma.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a>
                        <div class="caption">
                            <h4><a href="../UserObject/Details.html">iphone6超值体验</a></h4>
                            <p>租金：¥&nbsp;<span style="color: #ff0000">20.00</span>&nbsp;元/天<br>押金：¥&nbsp;<span style="color: #ff0000">5000.00</span>&nbsp;元</p>
                        </div>
                    </div>
                </div>
                <div class="region-products-list">
                    <div class="thumbnail">
                        <a href=""><img data-src="holder.js/100%x200" alt="100%x200" src="/Source/images/shuma.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a>
                        <div class="caption">
                            <h4><a href="">iphone6超值体验</a></h4>
                            <p>租金：¥&nbsp;<span style="color: #ff0000">20.00</span>&nbsp;元/天<br>押金：¥&nbsp;<span style="color: #ff0000">5000.00</span>&nbsp;元</p>
                        </div>
                    </div>
                </div>
                <div class="region-products-list">
                    <div class="thumbnail">
                        <a href=""><img data-src="holder.js/100%x200" alt="100%x200" src="/Source/images/shuma.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a>
                        <div class="caption">
                            <h4><a href="">iphone6超值体验</a></h4>
                            <p>租金：¥&nbsp;<span style="color: #ff0000">20.00</span>&nbsp;元/天<br>押金：¥&nbsp;<span style="color: #ff0000">5000.00</span>&nbsp;元</p>
                        </div>
                    </div>
                </div>
                <div class="region-products-list">
                    <div class="thumbnail">
                        <a href=""><img data-src="holder.js/100%x200" alt="100%x200" src="/Source/images/shuma.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a>
                        <div class="caption">
                            <h4><a href="">iphone6超值体验</a></h4>
                            <p>租金：¥&nbsp;<span style="color: #ff0000">20.00</span>&nbsp;元/天<br>押金：¥&nbsp;<span style="color: #ff0000">5000.00</span>&nbsp;元</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-top: 20px">
            <div class="region-right-text">热租推荐</div>
            <div>
                <div class="thumbnail">
                    <a href=""><img data-src="holder.js/100%x200" alt="100%x200" src="/Source/images/shuma.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a>
                    <div class="caption">
                        <h4><a href="">iphone6超值体验</a></h4>
                        <p>租金：¥&nbsp;<span style="color: #ff0000">20.00</span>&nbsp;元/天<br>押金：¥&nbsp;<span style="color: #ff0000">5000.00</span>&nbsp;元</p>
                    </div>
                </div>
                <div class="thumbnail">
                   <a href=""><img data-src="holder.js/100%x200" alt="100%x200" src="/Source/images/shuma.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a>
                    <div class="caption">
                        <h4><a href="">iphone6超值体验</a></h4>
                        <p>租金：¥&nbsp;<span style="color: #ff0000">20.00</span>&nbsp;元/天<br>押金：¥&nbsp;<span style="color: #ff0000">5000.00</span>&nbsp;元</p>
                    </div>
                </div>
                <div class="thumbnail">
                    <a href=""><img data-src="holder.js/100%x200" alt="100%x200" src="/Source/images/shuma.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a>
                    <div class="caption">
                        <h4><a href="">iphone6超值体验</a></h4>
                        <p>租金：¥&nbsp;<span style="color: #ff0000">20.00</span>&nbsp;元/天<br>押金：¥&nbsp;<span style="color: #ff0000">5000.00</span>&nbsp;元</p>
                    </div>
                </div>
                <div class="thumbnail">
                   <a href=""><img data-src="holder.js/100%x200" alt="100%x200" src="/Source/images/shuma.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a>
                    <div class="caption">
                        <h4><a href="">iphone6超值体验</a></h4>
                        <p>租金：¥&nbsp;<span style="color: #ff0000">20.00</span>&nbsp;元/天<br>押金：¥&nbsp;<span style="color: #ff0000">5000.00</span>&nbsp;元</p>
                    </div>
                </div>
                <div class="thumbnail">
                    <a href=""><img data-src="holder.js/100%x200" alt="100%x200" src="/Source/images/shuma.jpg" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a>
                    <div class="caption">
                        <h4><a href="">iphone6超值体验</a></h4>
                        <p>租金：¥&nbsp;<span style="color: #ff0000">20.00</span>&nbsp;元/天<br>押金：¥&nbsp;<span style="color: #ff0000">5000.00</span>&nbsp;元</p>
                    </div>
                </div>
            </div>
            <div>
                <img data-src="holder.js/100%x100%" class="img-rounded" alt="100%x200" src="/Source/images/fanggg01.jpg" data-holder-rendered="true" style="width: 270px;margin-bottom: 10px;">
                <img data-src="holder.js/100%x100%" class="img-rounded" alt="100%x200" src="/Source/images/fanggg02.jpg" data-holder-rendered="true" style="width: 270px;margin-bottom: 10px;">
                <img data-src="holder.js/100%x100%" class="img-rounded" alt="100%x200" src="/Source/images/fanggg03.jpg" data-holder-rendered="true" style="width: 270px;margin-bottom: 10px;">
                <img data-src="holder.js/100%x100%" class="img-rounded" alt="100%x200" src="/Source/images/fanggg04.jpg" data-holder-rendered="true" style="width: 270px">
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