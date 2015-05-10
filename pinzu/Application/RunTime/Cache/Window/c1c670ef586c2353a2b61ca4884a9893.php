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

    
<link rel="stylesheet" href="/Source/css/jd.css"/>
<style type="text/css">
ul{ padding:0;list-style-type:none;text-align: center;
-webkit-padding-start:0px}
.free_zone{margin-top: 20px;margin-right: auto;margin-bottom: 5px;margin-left: auto;overflow: hidden;
background-color: #F8F8F8;border: 1px solid #CCC;
padding-top: 5px;padding-bottom: 5px;}
.free_zone_nav_right {
	float: left;
	/* [disabled]margin-left: 3px; */
	overflow: hidden;
	width: 1160px;
}
.shop-good{
	float: left;
	border: 1px solid #CCC;
	position: relative;
	width: 802px;
	margin-right: 8px;
	margin-left: 2px;
}
.shop-image{width:240px;height:200px}
.shop-good ul li{text-align:left;padding-left:10px;}
.shop-input{background-color:#F93;border:none;color:#fff}
.shop-input-kj{position:absolute;left: 168px;top: 241px;}
.shop-good ul li span{font-weight:bold;color:#F00;font-size:16px}
.shop-down-ad{float:left;border:1px solid #CCC;margin-top: 5px;margin-bottom: 0px;margin-left: 5px;width: 1150px;}
.shop-down-image{
	float: left;
	width: 275px;
	margin-right: 5px;
}
.free_zone .free_zone_top .shop-down-ad .shop-down-image img {float:left;width:150px;height:80px;padding-top: 5px;padding-left: 5px;}
.free_zone .free_zone_top .shop-down-ad .shop-down-image ul {float:left;width:100px;height:75px;border-right: 1px solid #ccc;margin-top: 5px;}
.free_zone_center{width:1170px;margin-top: 0px;margin-right: auto;margin-bottom: 40px;margin-left: auto;overflow: hidden;background-color: #F8F8F8;border: 1px solid #CCC;}
.health-up{line-height:40px;border-bottom-width: 2px;border-bottom-style: dashed;border-bottom-color: #F90;background-color: #F9F9F9;font-family: "微软雅黑";font-size: 18px;font-weight: normal;overflow: hidden;clear: both;padding-right: 5px;padding-left: 5px;color: #F90;}
.health-image-tp{width:282px;height:300px;float: left;margin-left: 5px;border: 1px solid #CCC;margin-top: 5px;margin-right: 3px;}
.health-image-tp ul li span{color:#F00;font-size:16px;font-weight:bold}

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
    
<div class="free_zone">
  <div class="free_zone_top">
        <div class="free_zone_nav_right">
   	        <div class="shop-good" style="padding-bottom:5px">
				<!--  body of jd.html -->
                    <div class="jd_body" style="position:static;width:800px;">
                        <div id="jdAdSlide" class="jd_ad_slide" style="width:785px">
                            <img src="/Source/images/rBEhVlJ5oCUIAAAAAAE4O585pSAAAFGKgINDgcAAThT749.jpg"
                                 class="jd_ad_img">
                            <img data-src="/Source/images/rBEhVlJ4ugUIAAAAAADNu0WERsYAAFE9ABekBAAAM3T074.jpg"
                                 class="jd_ad_img">
                            <img data-src="/Source/images/rBEhUlJzCqoIAAAAAAE7yTNr8uEAAE2ggLjA1QAATvh176.jpg"
                                 class="jd_ad_img">
                            <img data-src="/Source/images/rBEhVVJ40jMIAAAAAAEESo4hULIAAFFRgKzU_IAAQRi366.jpg"
                                 class="jd_ad_img">
                            <img data-src="/Source/images/rBEhVlJ5oCUIAAAAAAE4O585pSAAAFGKgINDgcAAThT749.jpg"
                                 class="jd_ad_img">
                            <img data-src="/Source/images/rBEhVlJ5mUEIAAAAAAFZ8YVO0RYAAFGEwKl9xAAAVoJ892.jpg"
                                 class="jd_ad_img">
                            <img data-src="/Source/images/rBEhVlJ5sGsIAAAAAAEw4mmfc50AAFGdwOMkwIAATD6787.jpg"
                                 class="jd_ad_img">

                            <div id="jdAdBtn" class="jd_ad_btn"></div>
                            <!-- add active -->
                        </div>
                    </div>
                

            <!--所有分类JS代码-->
            <script type="text/javascript">
                $('.all-sort-list > .item').hover(function () {
                    var eq = $('.all-sort-list > .item').index(this),				//获取当前滑过是第几个元素
                            h = $('.all-sort-list').offset().top,						//获取当前下拉菜单距离窗口多少像素
                            s = $(window).scrollTop(),									//获取游览器滚动了多少高度
                            i = $(this).offset().top,									//当前元素滑过距离窗口多少像素
                            item = $(this).children('.item-list').height(),				//下拉菜单子类内容容器的高度
                            sort = $('.all-sort-list').height();						//父类分类列表容器的高度

                    if (item < sort) {												//如果子类的高度小于父类的高度
                        if (eq == 0) {
                            $(this).children('.item-list').css('top', (i - h));
                        } else {
                            $(this).children('.item-list').css('top', (i - h) + 1);
                        }
                    } else {
                        if (s > h) {												//判断子类的显示位置，如果滚动的高度大于所有分类列表容器的高度
                            if (i - s > 0) {											//则 继续判断当前滑过容器的位置 是否有一半超出窗口一半在窗口内显示的Bug,
                                $(this).children('.item-list').css('top', (s - h) + 2);
                            } else {
                                $(this).children('.item-list').css('top', (s - h) - (-(i - s)) + 2);
                            }
                        } else {
                            $(this).children('.item-list').css('top', 3);
                        }
                    }

                    $(this).addClass('hover');
                    $(this).children('.item-list').show();
                }, function () {
                    $(this).removeClass('hover');
                    $(this).children('.item-list').hide();
                });

                $('.item > .item-list > .close').click(function () {
                    $(this).parent().parent().removeClass('hover');
                    $(this).parent().hide();
                });
            </script>

            <script src="/Source/js/jquery-powerSwitch.jd.js"></script>
            <script>
                // 大的图片广告
                // 根据图片创建id,按钮元素等，实际开发建议使用JSON数据类似
                var htmlAdBtn = '';
                $("#jdAdSlide img").each(function (index, image) {
                    var id = "adImage" + index;
                    htmlAdBtn = htmlAdBtn + '<a href="javascript:" class="jd_ad_btn_a" data-rel="' + id + '">' + (index + 1) + '</a>';
                    image.id = id;
                });
                $("#jdAdBtn").html(htmlAdBtn).find("a").powerSwitch({
                    eventType: "hover",
                    classAdd: "active",
                    animation: "fade",
                    autoTime: 5000,
                    onSwitch: function (image) {
                        if (!image.attr("src")) {
                            image.attr("src", image.attr("data-src"));
                        }
                    }
                }).eq(0).trigger("mouseover");

                // 便民服务
                $("#servNav a").powerSwitch({
                    classAdd: "active",
                    eventType: "hover",
                    onSwitch: function () {
                        $("#pointLine").animate({"left": $(this).position().left}, 200);
                    }
                });

            </script>
            </div>
            
      <div class="shop-good" style="width:338px;padding-top: 40px;">
      	<div style="text-align:center">
           <a href="#" class="btn btn-warning btn-lg" style="width:200px; padding:5px 10px;
font-size:24px; margin-bottom:40px;">发布商品</a>
           <a href="#" class="btn btn-info btn-lg" style="width:200px; padding:5px 10px; margin-bottom:40px;font-size:24px;">发布需求</a>
        </div>
        <div>
           <a href="#"><img src="/Source/images/mianfei01.png" style="float:left; margin:1px 1px;"></a>
           <a href="#"><img src="/Source/images/mianfei02.png" style="float:left;margin:1px 1px;"></a>
        </div>
      </div>
      <div class="shop-down-ad">
          <div class="shop-down-image">
              <img src="/Source/images/shuma.jpg" width="150" height="80">
              <ul>
                  <li>手机 平板 电脑</li>
                  <li>0租金</li>
                  <li>立即抢定</li>
              </ul>
        </div>
          <div class="shop-down-image">
              <img src="/Source/images/shuma.jpg" width="150" height="80">
              <ul>
                  <li>手机 平板 电脑</li>
                  <li>0租金</li>
                  <li>立即抢定</li>
              </ul>
          </div>
          <div class="shop-down-image">
              <img src="/Source/images/shuma.jpg" width="150" height="80">
              <ul>
                  <li>手机 平板 电脑</li>
                  <li>0租金</li>
                  <li>立即抢定</li>
              </ul>
          </div>
          <div class="shop-down-image">
              <img src="/Source/images/shuma.jpg" width="150" height="80">
              <ul>
                  <li>手机 平板 电脑</li>
                  <li>0租金</li>
                  <li>立即抢定</li>
              </ul>
          </div>
    </div>
  </div>
</div>

<div class="free_zone_center">

    <div class="health-up"><span style="float:left">保健器材</span><span style="float:right; font-size:14px">更多>>>></span></div>
        	<div class="health-image-tp">
               <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
               <ul>
               	<li><a href="/UserObject/details">水上乐园，好生活，好家伙</a></li>
                <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
                <li>押金：￥ <span>3000.00</span>元</li>
               </ul>
            </div>
            <div class="health-image-tp">
          	<div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
               <ul>
               	<li>水上乐园，好生活，好家伙</li>
                <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
                <li>押金：￥ <span>3000.00</span>元</li>
               </ul>
          </div>
            <div class="health-image-tp">
          	<div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
               <ul>
               	<li>水上乐园，好生活，好家伙</li>
                <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
                <li>押金：￥ <span>3000.00</span>元</li>
               </ul>
          </div>
            <div class="health-image-tp">
          	<div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
               <ul>
               	<li>水上乐园，好生活，好家伙</li>
                <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
                <li>押金：￥ <span>3000.00</span>元</li>
               </ul>
          </div>
    <div class="health-up"><span style="float:left">家居家装</span><span style="float:right; font-size:14px">更多>>>></span></div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
    <div class="health-up"><span style="float:left">电脑办公</span><span style="float:right; font-size:14px">更多>>>></span></div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
    <div class="health-up"><span style="float:left">家用电器</span><span style="float:right; font-size:14px">更多>>>></span></div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
    <div class="health-up"><span style="float:left">手机数码</span><span style="float:right; font-size:14px">更多>>>></span></div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
    <div class="health-up"><span style="float:left">图书音影</span><span style="float:right; font-size:14px">更多>>>></span></div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
    <div class="health-up"><span style="float:left">珠宝饰品</span><span style="float:right; font-size:14px">更多>>>></span></div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
    <div class="health-up"><span style="float:left">钟表礼品</span><span style="float:right; font-size:14px">更多>>>></span></div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
    <div class="health-up"><span style="float:left">户外运动</span><span style="float:right; font-size:14px">更多>>>></span></div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
    </div>
            <div class="health-image-tp">
        <div><img src="/Source/images/haishangyundong.jpg" width="280" height="220" /></div>
        <ul>
            <li>水上乐园，好生活，好家伙</li>
            <li>租金：￥ &nbsp;  <span>0.00</span>&nbsp;&nbsp;&nbsp;&nbsp; 元</li>
            <li>押金：￥ <span>3000.00</span>元</li>
        </ul>
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