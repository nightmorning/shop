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

    
    <style type="text/css"
            >
        .leade-search a {
            color: #000
        }

        .leade-search a:hover {
            color: #F90
        }

        .leade-search .tab-content table tr {
            border-bottom-width: 1px;
            border-bottom-style: dashed;
            border-bottom-color: #FFE7C1;
        }

        .leade-search h4 {
            font-weight: 700;
            font-size: 14px
        }

        .leade-search .tab-content table tr td {
            padding-left: 10px;
        }

        .leade-search .tab-content table {
            border-right-width: 1px;
            border-left-width: 1px;
            border-right-style: solid;
            border-left-style: solid;
            border-right-color: #F0F0F0;
            border-left-color: #F0F0F0;
            border-top-width: 1px;
            border-top-style: solid;
            border-top-color: #F0F0F0;
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
            font-weight: 700
        }

        dl {
            margin-bottom: 5px
        }

        .leade-search {
            width: 1170px;
            margin: 0 auto;
            margin-top: 20px;;
        }

        .right-recommend {
            width: 298px;
            height: auto;
            border: 1px solid #F0F0F0;
        }

        .right-recommend table tr td {
            text-align: center;
            padding: 5px 0;
        }
        .nav > li.active > a {
            background-color:#ffffff;
            color:#000000;
        }
        .pagination>li>a, .pagination>li>span {color: orange}
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
    

    <div class="row" style="margin-top: 20px">
    	<div class="col-md-12" style="margin:0;margin-bottom:20px;"><img src="/Source/images/requrment_liuc.jpg"></div>
    </div>
    <div class="leade-search" role="tabpanel">
        <!-- Nav tabs -->
        <div style="width:860px; position: absolute">
       	  <div class="col-md-1" style="padding:0;"><h4>需求分类：</h4></div>
          <div class="col-md-11">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
      			<li role="presentation" class="active"><a href="#digital" id="digital-tab" role="tab" data-toggle="tab" aria-controls="digital" aria-expanded="true">数码通讯</a></li>
      			<li role="presentation" class=""><a href="#books" role="tab" id="books-tab" data-toggle="tab" aria-controls="books" aria-expanded="false">音像图书</a></li>
      			<li role="presentation" class=""><a href="#appliances" id="appliances-tab" role="tab" data-toggle="tab" aria-controls="appliances" aria-expanded="false">家用电器</a></li>
      			<li role="presentation" class=""><a href="#officebox" id="officebox-tab" role="tab" data-toggle="tab" aria-controls="officebox" aria-expanded="false">办公用品</a></li>
      			<li role="presentation" class=""><a href="#furniture" id="furniture-tab" role="tab" data-toggle="tab" aria-controls="furniture" aria-expanded="false">家装家具</a></li>
                <li role="presentation" class=""><a href="#sortout" aria-controls="sortout" role="tab" data-toggle="tab">运动户外</a></li>
                <li role="presentation" class=""><a href="#costume" aria-controls="costume" role="tab" data-toggle="tab">服装服饰</a></li>
                <li role="presentation" class=""><a href="#caruser" aria-controls="caruser" role="tab" data-toggle="tab">汽车用品</a></li>
                <li role="presentation" class=""><a href="#jewelry" aria-controls="jewelry" role="tab" data-toggle="tab">珠宝首饰</a></li>
                <li role="presentation" class=""><a href="#luxury" aria-controls="luxury" role="tab" data-toggle="tab">奢侈品</a></li>
                <li role="presentation" class=""><a href="#gamesplay" aria-controls="gamesplay" role="tab" data-toggle="tab">娱乐玩具</a></li>
                <li role="presentation" class=""><a href="#healthcare" aria-controls="healthcare" role="tab" data-toggle="tab">保健器材</a></li>
                <li role="presentation" class=""><a href="#calligraphy" aria-controls="calligraphy" role="tab" data-toggle="tab">艺术书法</a></li>
                <li role="presentation" class=""><a href="#petproducts" aria-controls="petproducts" role="tab" data-toggle="tab">宠物用品</a></li>
                <li role="presentation" class=""><a href="#instrument" aria-controls="instrument" role="tab" data-toggle="tab">乐器</a></li>
            </ul>
            </div>
            <span style="line-height:40px;"><b>需求价格</b>：&nbsp;&nbsp;<a href="#"><span style="color:#F00">0-100</span>元</a>&nbsp;&nbsp;<a href="#"><span style="color:#F00">101-200</span>元</a>&nbsp;&nbsp;<a href="#"><span style="color:#F00">201-500</span>元</a>&nbsp;&nbsp;<a href="#"><span style="color:#F00">500</span>元以上</a></span>
        <!-- Tab panes -->
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="digital" aria-labelledby="digital-tab">
                <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <td width="440"><h4>需求信息标题</h4></td>
                        <td width="150"><h4>发布者</h4></td>
                        <td width="150"><h4>意向租金</h4></td>
                        <td width="150"><h4>有效期</h4></td>
                        <td width="150"><h4>满足他</h4></td>
                    </tr>
                    </thead>
                    <tbody  id="trRequirement">

                    </tbody>
                    <tfoot>
                    <tr style="text-align:center">
                        <td>
                            <button id="btnPrev_2" style="padding:0" class="btn btn-warning" disabled="disabled">上一页</button>
                        </td>
                        <td>
                            <button id="btnNext_2" style="padding:0" class="btn btn-warning" disabled="disabled">下一页</button>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="books" aria-labelledby="books-tab">
                <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="440"><h4>需求信息标题</h4></td>
                        <td width="150"><h4>发布者</h4></td>
                        <td width="150"><h4>意向租金</h4></td>
                        <td width="150"><h4>有效期</h4></td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
                <div role="tabpanel" class="tab-pane fade" id="appliances" aria-labelledby="appliances-tab">
                <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="440"><h4>需求信息标题</h4></td>
                        <td width="150"><h4>发布者</h4></td>
                        <td width="150"><h4>意向租金</h4></td>
                        <td width="150"><h4>有效期</h4></td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大dsfdsfsfdsf款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
                <div role="tabpanel" class="tab-pane fade" id="officebox" aria-labelledby="officebox-tab">
                <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="440"><h4>需求信息标题</h4></td>
                        <td width="150"><h4>发布者</h4></td>
                        <td width="150"><h4>意向租金</h4></td>
                        <td width="150"><h4>有效期</h4></td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
                <div role="tabpanel" class="tab-pane fade" id="presentation" aria-labelledby="presentation-tab">
                <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="440"><h4>需求信息标题</h4></td>
                        <td width="150"><h4>发布者</h4></td>
                        <td width="150"><h4>意向租金</h4></td>
                        <td width="150"><h4>有效期</h4></td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大dsfdsfdsfdsf款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一dsfdsf枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
                <div role="tabpanel" class="tab-pane" id="sortout">
                <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="440"><h4>需求信息标题</h4></td>
                        <td width="150"><h4>发布者</h4></td>
                        <td width="150"><h4>意向租金</h4></td>
                        <td width="150"><h4>有效期</h4></td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align:center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
                <div role="tabpanel" class="tab-pane" id="costume">
                <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="440"><h4>需求信息标题</h4></td>
                        <td width="150"><h4>发布者</h4></td>
                        <td width="150"><h4>意向租金</h4></td>
                        <td width="150"><h4>有效期</h4></td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td height="41" colspan="4" style="text-align:center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
                <div role="tabpanel" class="tab-pane" id="caruser">
                <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="440"><h4>需求信息标题</h4></td>
                        <td width="150"><h4>发布者</h4></td>
                        <td width="150"><h4>意向租金</h4></td>
                        <td width="150"><h4>有效期</h4></td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td height="41" colspan="4" style="text-align:center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
                <div role="tabpanel" class="tab-pane" id="jewelry">
                <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="440"><h4>需求信息标题</h4></td>
                        <td width="150"><h4>发布者</h4></td>
                        <td width="150"><h4>意向租金</h4></td>
                        <td width="150"><h4>有效期</h4></td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                        <td width="150">不大款</td>
                        <td width="150">1000元</td>
                        <td width="150">2018-01-01</td>
                    </tr>
                    <tr>
                        <td height="41" colspan="4" style="text-align:center">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">...</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
                <div role="tabpanel" class="tab-pane" id="luxury">
                    <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="440"><h4>需求信息标题</h4></td>
                            <td width="150"><h4>发布者</h4></td>
                            <td width="150"><h4>意向租金</h4></td>
                            <td width="150"><h4>有效期</h4></td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td height="41" colspan="4" style="text-align:center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="gamesplay">
                    <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="440"><h4>需求信息标题</h4></td>
                            <td width="150"><h4>发布者</h4></td>
                            <td width="150"><h4>意向租金</h4></td>
                            <td width="150"><h4>有效期</h4></td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td height="41" colspan="4" style="text-align:center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="healthcare">
                    <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="440"><h4>需求信息标题</h4></td>
                            <td width="150"><h4>发布者</h4></td>
                            <td width="150"><h4>意向租金</h4></td>
                            <td width="150"><h4>有效期</h4></td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td height="41" colspan="4" style="text-align:center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="calligraphy">
                    <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="440"><h4>需求信息标题</h4></td>
                            <td width="150"><h4>发布者</h4></td>
                            <td width="150"><h4>意向租金</h4></td>
                            <td width="150"><h4>有效期</h4></td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td height="41" colspan="4" style="text-align:center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="petproducts">
                    <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="440"><h4>需求信息标题</h4></td>
                            <td width="150"><h4>发布者</h4></td>
                            <td width="150"><h4>意向租金</h4></td>
                            <td width="150"><h4>有效期</h4></td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td height="41" colspan="4" style="text-align:center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="instrument">
                    <table style="margin-top:5px; line-height:40px;" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="440"><h4>需求信息标题</h4></td>
                            <td width="150"><h4>发布者</h4></td>
                            <td width="150"><h4>意向租金</h4></td>
                            <td width="150"><h4>有效期</h4></td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td width="440"><a href="#">需女友一枚，要求大款</a></td>
                            <td width="150">不大款</td>
                            <td width="150">1000元</td>
                            <td width="150">2018-01-01</td>
                        </tr>
                        <tr>
                            <td height="41" colspan="4" style="text-align:center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>            
        </div>
        </div>
            <div style="width: 26%; float: right">
            <div class="requirement-advert">
            <div class="rent_list">
            	<div>
                    <img src="/Source/images/rigister.gif">               </div>
                <table class="table">
                	<tr>
                    	<td colspan="3" style="text-align:center"><input class="btn btn-warning btn-lg" onclick="window.location='publish.html'" type="submit" value="免费发布需求"/></td>
                    </tr>
                </table>
                <table class="table" style="font-size:12px;">
                	<tr>
                    	<td colspan="3" style="text-align:center;border-top:5px solid #f90;"><h4>最新成交</h4></td>
                    </tr>
                    <tr>
                    	<td style="width:8%">1</td>
                        <td>标题标题标题标题标题标题标题</td>
                        <td style="width:30%">发布者</td>
                    </tr>
                    <tr>
                    	<td style="width:8%">2</td>
                        <td>标题标题标题标题标题标题标题</td>
                        <td style="width:30%">发布者</td>
                    </tr>
                    <tr>
                    	<td style="width:8%">3</td>
                        <td>标题标题标题标题标题标题标题</td>
                        <td style="width:30%">发布者</td>
                    </tr>
                    <tr>
                    	<td style="width:8%">4</td>
                        <td>标题标题标题标题标题标题标题</td>
                        <td style="width:30%">发布者</td>
                    </tr>
                    <tr>
                    	<td style="width:8%">5</td>
                        <td>标题标题标题标题标题标题标题</td>
                        <td style="width:30%">发布者</td>
                    </tr>
                    <tr>
                    	<td style="width:8%">6</td>
                        <td>标题标题标题标题标题标题标题</td>
                        <td style="width:30%">发布者</td>
                    </tr>
                </table>
            </div>
        </div>
            <div class="right-recommend">
            <table style="width: 100%;">
                <tr style="padding-left:5px">
                    <td style="text-align: center; background-color:#F00; color:#CFC;border-bottom:2px dotted red;"><h3 style="margin:10px"><b>热租推荐</b></h3></td>
                </tr>
                <tr>
                    <td><img src="/Source/images/shuma.jpg"/></td>
                </tr>
                <tr>
                    <td>数码电子产品</td>
                </tr>
                <tr>
                    <td><img src="/Source/images/shuma.jpg"/></td>
                </tr>
                <tr>
                    <td>数码电子产品</td>
                </tr>
                <tr>
                    <td><img src="/Source/images/shuma.jpg"/></td>
                </tr>
                <tr>
                    <td>数码电子产品</td>
                </tr>
                <tr>
                    <td><img src="/Source/images/shuma.jpg"/></td>

                </tr>
                <tr>
                    <td>数码电子产品</td>
                </tr>
            </table>
            <table class="table">
                <tr>
                    <td><img src="/Source/images/fanggg01.jpg"/></td>
                </tr>
                <tr>
                    <td><img src="/Source/images/fanggg02.jpg"/></td>
                </tr>
                <tr>
                    <td><img src="/Source/images/fanggg03.jpg"/></td>
                </tr>
                <tr>
                    <td><img src="/Source/images/fanggg04.jpg"/></td>
                </tr>
            </table>

        </div>
        </div>
    </div>

</div>
    <script type="text/template" id="tRequirement">
        <tr>
            <td width="440"><a href="/UserRequirement/details">#title</a></td>
            <td width="150">#nick_name</td>
            <td width="150">#money</td>
            <td width="150">#published_on</td>
            <td width="150"><buttton type="button" id="satisfy" class="btn btn-danger btn-xs" onclick="satisfy('#id')">满足</buttton></td>
        </tr>
    </script>
    <script>
        $(function () {
            $.extend({
                'requirePage': function (pageIndex, url, id, tbId) {
                    var url = url + "/requirePage";
                    var prevId = "#btnPrev_" + tbId;
                    var nextId = "#btnNext_" + tbId;
                    pageIndex == null ? 1 : pageIndex;
                    $.get(url, {pageIndex: pageIndex}, function (retObj) {
                        var models = retObj.list;
                        if (models) {
//                            document.write(1);
                            var html = "";
                            var pageNum;
                            if(retObj.page_count == 0){
                                pageNum = 1;
                            }else{
                                pageNum = retObj.page_count
                            }
                            for (var i = 0; i < models.length; i++) {
                                var model = models[i];
                                var template = $("#tRequirement").html().config(model);
                                html += template;
                            }
                            $(id).html(html);
                            pageIndex == 1 ? $(prevId).attr("disabled","disabled") : $(prevId).removeAttr("disabled","disabled");

                            pageIndex == pageNum ? $(nextId).attr("disabled","disabled") : $(nextId).removeAttr("disabled","disabled");


                            $(nextId).click(function () {
                                pageIndex++;
                                $.requirePage(pageIndex, url, id, tbId);
                                pageIndex == pageNum ? $(nextId).attr("disabled","disabled") : $(nextId).removeAttr("disabled","disabled");
                            });

                            $(prevId).click(function () {
                                pageIndex--;
                                $.requirePage(pageIndex, url, id, tbId);
                                pageIndex == 1 ? $(prevId).attr("disabled","disabled") : $(prevId).removeAttr("disabled","disabled");
                            });
                        }
                    });
                }
            });
            $.requirePage(1, "/UserRequirement", "#trRequirement", 2);
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