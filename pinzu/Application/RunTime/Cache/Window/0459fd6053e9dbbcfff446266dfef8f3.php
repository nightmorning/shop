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

    

    <link rel="stylesheet" href="/Source/css/style_nav.css">
    <link rel="stylesheet" href="/Source/css/jd.css"/>

    <style type="text/css">
        a{color:#000000 }
        .two_left a:link {
            color: #333;
        }
        .two_left a:hover {
            color: #F90;
        }
        .center_left_one {
            width: 880px;
            height: 400px;
            position: relative;
            -webkit-box-sizing: inherit;
            -moz-box-sizing: inherit;
            box-sizing: inherit;
        }

        .ap-liucheng {
            height: 70px;
            width: 620px;
            position: absolute;
            left: 255px;
            top: 327px;
            border: 1px solid #F0F0F0;
        }
        .promotion_ads_input{
            text-align: center;
            line-height: 30px;}
        .news-info{width: 280px;}
        .index-nav-center{width:880px;height:160px;clear:both;border:1px solid #F0F0F0;}
        .index-nav-center ul{width:166px; float:left; list-style-type:none;margin-left:-20px;padding-left:22px;font-size: 12px;}

        .index-nav-center ul li:first-child
        {
            color:#FFF;
            background:#ff8f00;
            padding-left: 5px;
            font-size: 18px;
            font-weight: 700;
            height: 30px;
            line-height: 30px;
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
                <li><a href="../UserRequirement/zone">需求专区</a></li>
                <li><a href="../UserFree">免费专区</a></li>
                <li><a href="../User">会员中心</a></li>
                <li><a href="../UserInfo/distribution_center">发布中心</a></li>
                <li><a href="../StationInfo">站内资讯</a></li>
            </ul>
        </div>
    </div>
</div>
<div style="width: 1170px;margin: 0 auto;overflow: hidden">
    

    <div class="index_center">
        <div class="index_center_left" id="cNav" style="position:relative;">
            <div class="center_left_one">
                <div class="all-sort-list" style="width:250px; height:470px; float: left;display:block;z-index: 20000;font:12px/1.5 \5b8b\4f53,arial,sans-serif;margin-left:-1px;"
                     id="all-sort-list">
                    <div class="item bo" style="height:30px; line-height:30px;">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/手机数码.png" width="20"
                                                                height="20"/> 数码通讯</a></div>

                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">手机通讯</a></dt>
                                    <dd><em><a href="#">功能手机</a></em><em><a href="#">智能手机</a></em><em><a
                                            href="#">对讲机</a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">手机配件</a></dt>
                                    <dd><em><a href="#">蓝牙耳机</a></em><em><a href="#">移动电源</a></em><em><a
                                            href="#">手机饰品</a></em><em><a href="">便捷\无线音箱</a></em><em><a href="">存储卡</a></em><em><a
                                            href="">充电器\数据线</a></em><em><a href="">创意配件</a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">摄影摄像</a></dt>
                                    <dd><em><a href="#">数码相机</a></em><em><a href="#">单反相机</a></em><em><a
                                            href="#">摄像机</a></em><em><a href="">拍立得</a></em><em><a href="">运动相机</a></em><em><a
                                            href="">户外器材</a></em><em><a href="">影棚器材</a></em><em><a
                                            href="">数码相框</a></em><em><a href="">镜头</a></em></dd>
                                </dl>
                                <dl class="fore4">
                                    <dt><a href="#">数码配件</a></dt>
                                    <dd><em><a href="#">存储卡</a></em><em><a href="#">读卡器</a></em><em><a
                                            href="#">电池\充电器</a></em><em><a href="">滤镜</a></em><em><a
                                            href="">相机包</a></em><em><a href="">三脚架\云台</a></em><em><a
                                            href="">机身附件</a></em><em><a href="">镜头附件</a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt><a href="#">音影娱乐</a></dt>
                                    <dd><em><a href="#">耳机\耳麦</a></em><em><a href="#">音箱\音响</a></em><em><a
                                            href="#">麦克风</a></em><em><a href="">MP3\MP4\DVD</a></em><em><a
                                            href="">专业音频</a></em><em><a href="">苹果周边</a></em></dd>
                                </dl>
                                <dl class="fore6">
                                    <dt><a href="#">智能设备</a></dt>
                                    <dd><em><a href="#">智能手环</a></em><em><a href="#">智能手表</a></em><em><a
                                            href="#">智能眼镜</a></em><em><a href="">运动跟踪器</a></em><em><a
                                            href="">智能配饰</a></em><em><a href="">体感车</a></em></dd>
                                </dl>
                                <dl class="fore7">
                                    <dt><a href="#">其他</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/数码音影.png" width="20"
                                                                height="20"/> 音像图书</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">音像制品</a></dt>
                                    <dd><em><a href="#">音乐</a></em><em><a href="#">影视</a></em><em><a
                                            href="#">教育影像</a></em><em><a href="#">游戏</a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">电子教育</a></dt>
                                    <dd><em><a href="#">学生平板</a></em><em><a href="#">点读机\笔</a></em><em><a
                                            href="#">早教益智</a></em><em><a href="#">录音笔</a></em><em><a
                                            href="#">电纸书</a></em><em><a href="">电子词典</a></em><em><a href="">复读机</a></em>
                                    </dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">实体书籍</a></dt>
                                    <dd><em><a href="#">青少儿</a></em><em><a href="#">教育教材</a></em><em><a href="#">生活</a></em><em><a
                                            href="#">人文社科</a></em><em><a href="#">经管励志</a></em><em><a
                                            href="#">科技</a></em><em><a href="#">文艺</a></em><em><a href="#">工具书</a></em>
                                    </dd>
                                </dl>
                                <dl class="fore4">
                                    <dt>其他</dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/家用电器.png" width="20"
                                                                height="20"/> 家用电器</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">大家电</a></dt>
                                    <dd><em><a href="#">电视</a></em><em><a href="#">冰箱\冰柜\酒柜</a></em><em><a
                                            href="#">洗衣机</a></em><em><a href="">家庭影像\音响</a></em><em><a href="">家电配件</a></em>
                                    </dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">生活电器</a></dt>
                                    <dd><em><a href="#">风扇</a></em><em><a href="#">净化器</a></em><em><a
                                            href="#">加湿器</a></em><em><a href="">扫地机器人</a></em><em><a
                                            href="">吸尘器</a></em><em><a href="">除湿机</a></em><em><a
                                            href="">干衣机</a></em><em><a href="">取暖电器</a></em><em><a
                                            href="">生活电器配件</a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">厨房电器</a></dt>
                                    <dd><em><a href="#">面包机</a></em><em><a href="#">咖啡机</a></em><em><a
                                            href="">微波炉</a></em><em><a href="">电烤箱</a></em><em><a
                                            href="">电磁炉</a></em><em><a href="">料理\榨汁机</a></em><em><a
                                            href="">电炖锅</a></em></dd>
                                </dl>
                                <dl class="fore4">
                                    <dt>其他厨房电器</dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/电脑办公.png" width="20"
                                                                height="20"/> 办公用品</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">电脑整机</a></dt>
                                    <dd><em><a href="#">笔记本</a></em><em><a href="#">平板电脑</a></em><em><a href="#">服务器</a></em><em><a
                                            href="#">台式机</a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">电脑配件</a></dt>
                                    <dd><em><a href="#">CPU</a></em><em><a href="#">主板</a></em><em><a
                                            href="#">显卡</a></em><em><a href="#">硬盘</a></em><em><a
                                            href="#">内存</a></em><em><a href="#">显示器</a></em><em><a
                                            href="">刻录机\光驱</a></em><em><a href="">声卡\扩展卡</a></em><em><a href="">散热器</a></em><em><a
                                            href="">机箱</a></em><em><a href="">电源</a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">办公设备</a></dt>
                                    <dd><em><a href="#">投影设备</a></em><em><a href="#">打印机</a></em><em><a
                                            href="#">传真设备</a></em><em><a href="#">扫描设备</a></em><em><a
                                            href="#">碎纸机</a></em><em><a href="#">考勤机</a></em><em><a
                                            href="#">保险柜</a></em><em><a href="#">投影配件</a></em></dd>
                                </dl>
                                <dl class="fore4">
                                    <dt>外设产品</dt>
                                    <dd><em><a href="#">U盘</a></em><em><a href="#">移动硬盘</a></em><em><a href="#">摄像头</a></em><em><a
                                            href="#">手写板</a></em><em><a href="#">外置盒</a></em><em><a
                                            href="#">电脑工具</a></em><em><a href="#">UPS</a></em><em><a
                                            href="#">游戏设备</a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt>网络产品</dt>
                                    <dd><em><a href="#">路由器</a></em><em><a href="#">网卡</a></em><em><a
                                            href="#">交换机</a></em><em><a href="#">上网卡</a></em><em><a
                                            href="#">网络盒子</a></em><em><a href="#">网络配件</a></em></dd>
                                </dl>
                                <dl class="fore6">
                                    <dt>其他</dt>
                                    <dd><em><a href=""></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/居家生活.png" width="20"
                                                                height="20"/> 家装家具</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">家具</a></dt>
                                    <dd><em><a href="#">卧室家具</a></em><em><a href="#">客厅家具</a></em><em><a
                                            href="#">餐厅家具</a></em><em><a href="#">书房家具</a></em><em><a href="#">储物家具</a></em><em><a
                                            href="#">阳台\户外</a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">厨具</a></dt>
                                    <dd><em><a href="#">烹饪锅具</a></em><em><a href="#">刀剪菜板</a></em><em><a
                                            href="#">水具九局</a></em><em><a href="#">餐具</a></em><em><a
                                            href="#">厨房配件</a></em><em><a href="#">茶具\咖啡具</a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">灯具</a></dt>
                                    <dd><em><a href="#">台灯</a></em><em><a href="#">筒灯射灯</a></em><em><a href="">LED灯</a></em><em><a
                                            href="">节能灯</a></em><em><a href="">落地灯</a></em><em><a
                                            href="">应急灯\手电</a></em><em><a href="">装饰灯</a></em><em><a href="">吊灯</a></em><em><a
                                            href="">氛围照明</a></em></dd>
                                </dl>
                                <dl class="fore4">
                                    <dt><a href="#">生活日用</a></dt>
                                    <dd><em><a href="#">收纳用品</a></em><em><a href="">雨伞雨具</a></em><em><a
                                            href="">缝纫\针织</a></em><em><a href="">洗晒\熨烫</a></em><em><a
                                            href="">其他</a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt><a href="">家装软饰</a></dt>
                                    <dd><em><a href="#">节庆饰品</a></em><em><a href="">手工\十字绣</a></em><em><a
                                            href="">装饰摆件</a></em><em><a href="">花瓶花艺</a></em><em><a
                                            href="">创艺家居</a></em><em><a href="">装饰字画</a></em><em><a
                                            href="">帘艺隔断</a></em><em><a href="">相框\照片墙</a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt><a href="">其他</a></dt>

                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/户外运动.png" width="20"
                                                                height="20"/> 运动户外</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">健身器材</a></dt>
                                    <dd><em><a href="#">跑步机</a></em><em><a href="#">哑铃</a></em><em><a
                                            href="#">健身车\动感单车</a></em><em><a href="#">综合训练器</a></em><em><a
                                            href="">武术搏击</a></em><em><a href="">仰卧板\收腹机</a></em><em><a href="">运动护具</a></em><em><a
                                            href="">其他</a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">骑行运动</a></dt>
                                    <dd><em><a href="#">山地车</a></em><em><a href="#">折叠车</a></em><em><a href="#">电动车</a></em><em><a
                                            href="#">骑行装备</a></em><em><a href="#">骑行服</a></em><em><a href="">其他</a></em>
                                    </dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">体育用品</a></dt>
                                    <dd><em><a href="#">球具</a></em><em><a href="#">高尔夫</a></em><em><a href="#">滑轮滑板</a></em><em><a
                                            href="#">棋牌麻将</a></em><em><a href="#">台球具</a></em><em><a
                                            href="#">其他</a></em></dd>
                                </dl>
                                <dl class="fore4">
                                    <dt>户外装备</dt>
                                    <dd><em><a href="#">背包</a></em><em><a href="#">帐篷\垫子</a></em><em><a
                                            href="#">睡袋\吊床</a></em><em><a href="#">登山攀岩</a></em><em><a href="">户外照明</a></em><em><a
                                            href="">便捷座椅床</a></em><em><a href="">户外工具</a></em><em><a
                                            href="">滑雪装备</a></em><em><a href="">望远镜</a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt><a href="#">水上运动</a></dt>
                                    <dd><em><a href="#">游泳设备</a></em><em><a href="#">钓鱼设备</a></em><em><a
                                            href="#">滑浪设备</a></em><em><a href="#">水上摩托</a></em><em><a
                                            href="#">快艇</a></em><em><a href="#">游艇\帆船</a></em><em><a href="">其他</a></em>
                                    </dd>
                                </dl>
                                <dl class="fore6">
                                    <dt><a href="#">天文器材</a></dt>
                                    <dd><em><a href="#">天文望远镜</a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/服饰珠宝.png" width="20"
                                                                height="20"/> 服装服饰</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">男装</a></dt>
                                    <dd><em><a href="#">礼服</a></em><em><a href="#">皮衣外套</a></em><em><a
                                            href="#">演出服饰品</a></em><em><a href="#">其他</a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">女装</a></dt>
                                    <dd><em><a href="#">礼服</a></em><em><a href="#">皮衣外套</a></em><em><a
                                            href="#">演出服饰品</a></em><em><a href="#">其他</a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">服饰配件</a></dt>
                                    <dd><em><a href="#">眼镜</a></em><em><a href="#">腰带\围巾</a></em><em><a
                                            href="#">领带\领结</a></em><em><a href="#">帽子\手套</a></em><em><a
                                            href="">其他</a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../Source/images/汽车用品.png" alt="" width="20"
                                                                height="20"/> 汽车用品</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">车载电器</a></dt>
                                    <dd><em><a href="#">导航仪</a></em><em><a href="#">安全预警仪</a></em><em><a
                                            href="#">行车记录仪</a></em><em><a href="#">倒车雷达</a></em><em><a href="">蓝牙设备</a></em><em><a
                                            href="">净化器</a></em><em><a href="">吸尘器</a></em><em><a
                                            href="">车用冰箱</a></em><em><a href="">其他</a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">安全检测</a></dt>
                                    <dd><em><a href="#">安全座椅</a></em><em><a href="#">充气泵</a></em><em><a href="#">服饰</a></em><em><a
                                            href="#">防盗设备</a></em><em><a href="#">应急救援</a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/手表首饰.png" alt="" width="20"
                                                                height="20"/> 珠宝首饰</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">耳环</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">戒指</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">项链</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore4">
                                    <dt><a href="#">手链\手环</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt><a href="#">其他</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/奢侈品.png" alt="" width="20"
                                                                height="20"/> 奢侈品</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">钟表</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">男包</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">女包</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore4">
                                    <dt><a href="#">功能箱包</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt><a href="#">火机烟具</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt><a href="#">收藏品</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt><a href="#">古董把玩</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/娱乐玩具.png" alt="" width="20"
                                                                height="20"/> 娱乐玩具</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">电动娱乐</a></dt>
                                    <dd><em><a href="#">游戏机</a></em><em><a href="">遥控电动</a></em><em><a
                                            href="">其他</a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">儿童玩具</a></dt>
                                    <dd><em><a href="#">益智玩具</a></em><em><a href="">普通玩具</a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">成人玩具</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/保健器材.png" alt="" width="20"
                                                                height="20"/> 保健器材</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">保健检测</a></dt>
                                    <dd><em><a href="#">血压仪器</a></em><em><a href="#">养生器械</a></em><em><a
                                            href="#">康复辅助</a></em><em><a href="#">护理工具</a></em><em><a
                                            href="#">其他</a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/艺术书法.png" alt="" width="20"
                                                                height="20"/> 艺术书画</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">工艺品</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">原创艺术品</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">书画</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/宠物用品.png" alt="" width="20"
                                                                height="20"/> 宠物用品</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">水族用品</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">宠物服饰</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">宠物玩具</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore4">
                                    <dt><a href="#">宠物器材</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore5">
                                    <dt><a href="#">宠物器材</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="height:30px; line-height:30px">
                        <div class="fenlei_nav"><a href=""><img src="../../Source/images/乐器.png" alt="" width="20"
                                                                height="20"/> 乐器</a></div>
                        <div class="item-list clearfix">
                            <div class="close">x</div>
                            <div class="subitem">
                                <dl class="fore1">
                                    <dt><a href="#">古典音乐器械</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore2">
                                    <dt><a href="#">现代音乐器械</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                                <dl class="fore3">
                                    <dt><a href="#">其他</a></dt>
                                    <dd><em><a href="#"></a></em></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="zxx_constr" style="width: auto">
                    <!--  body of jd.html -->
                    <div class="jd_body">
                        <div id="jdAdSlide" class="jd_ad_slide">
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
                </div>

                <div class="ap-liucheng"><img src="/Source/images/zhulinliuchen.png" width="620" height="70"/></div>
            </div>
            <div class="ap-liucheng" style="top:400px"><img src="/Source/images/index-images-01.gif" width="620"
                                                            height="66"/></div>
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
        <div class="index_center_right">
            <div><a href="/UserObject/publish"> <img src="/Source/images/出租.jpg" width="280" height="68"/></a></div>
            <div><a href="/UserRequirement/publish"><img src="/Source/images/求租.jpg" width="280" height="68"/></a>
            </div>
            <style>
                #formMain tr {
                    line-height: 30px;
                    font-weight: bold;
                    font-size: 13px;
                }
                #formMain tr td:first-child {
                    text-align: right;
                }

                #formMain input.form-control {
                    height:25px;
                }
            </style>
            <form data-ajax-submit action="/User/log_user" id="formMain" method="post">
                <div class="index_center_logon">
                    <table width="280" border="0" cellspacing="0" cellpadding="0" style="line-height: 25px"
                           id="unlogin">
                        <tr>
                            <td>用户名：</td>
                            <td style="width: 140px;"><input type="text" name="uid" class="form-control"/></td>
                            <td><a href="/User/Register">立即注册</a></td>
                        </tr>
                        <tr>
                            <td>密&nbsp;&nbsp; 码：</td>
                            <td><input type="password" name="pwd" class="form-control"/></td>
                            <td><a href="/User/FindMyPwd">忘记密码</a>？</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="text-align: center">
                                <input class="btn btn-warning btn-xs"
                                       style="font-size:14px;width: 80px; height:25px;padding-left:12px;padding-right:12px;"
                                       type="submit" value="登 陆"/>
                            </td>
                            <td>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </form>
            <div style="border-bottom:1px solid #cccccc; "><a href="Integrity/index.html"><img src="/Source/images/chengxintong.png" width="280" height="70"/></div>
            <div class="row" style="padding:0;margin:0;">
                <div class="col-md-6" style="padding:0;border-right:1px solid #cccccc; "><img src="/Source/images/images01.png"></div>
                <div class="col-md-6" style="padding:0"><img src="/Source/images/images02.png"></div>
            </div>
        </div>
    </div>

    <div class="center_two">
        <div class="two_left">

            <div class="two_left_nav">
                <div class="two_nav_top">数码通讯</div>
                <div style="border:1px solid #f0f0f0; border-top-style: none; width: 438px; height: 250px;">
                    <div class="two_nav_content">
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">手机通讯</a>
                            </li>
                            <li><a href="UserObject/region_search.html">功能手机</a></li>
                            <li><a href="UserObject/region_search.html">&nbsp; 只能手机</a></li>
                            <li>&nbsp;<a href=""> 对讲机</a></li>
                        </ul>
                        <ul>
                        <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">手机配件</a>
                        </li>
                        <li><a href="UserObject/region_search.html">蓝牙耳机</a></li>
                        <li>&nbsp;<a href="UserObject/region_search.html"> 移动电源</a></li>
                        <li>&nbsp;<a href="">手机饰品</a></li>
                        <li>&nbsp;<a href="">便捷\无线音箱</a></li>
                        <li>&nbsp;<a href=""> 存储卡</a></li>
                        <li>&nbsp;<a href="">充电器\数据线</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">摄影摄像</a>
                            </li>
                            <li><a href="UserObject/region_search.html">数码相机</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html"> 单反相机</a></li>
                            <li>&nbsp; <a href="">摄像机</a></li>
                            <li>&nbsp; <a href="">拍立得</a></li>
                            <li>&nbsp; <a href="">运动相机</a></li>
                            <li>&nbsp; <a href="">影棚器材</a></li>
                            <li>&nbsp; <a href="">相框</a></li>
                            <li>&nbsp; <a href="">镜头</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">数码配件</a>
                            </li>
                            <li><a href="UserObject/region_search.html">存储卡</a></li>
                            <li>&nbsp; <a href="UserObject/region_search.html">读卡器</a></li>
                            <li>&nbsp;<a href=""> 电池/充电器</a></li>
                            <li>&nbsp;<a href=""> 相机包</a></li>
                            <li>&nbsp;<a href=""> 三脚架/云台</a></li>
                            <li>&nbsp;<a href=""> 机身附件</a></li>
                            <li>&nbsp;<a href=""> 镜头附件</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">音影娱乐</a>
                            </li>
                            <li><a href="UserObject/region_search.html">耳机/耳麦</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">音箱\音响</a></li>
                            <li>&nbsp; <a href="">麦克风</a></li>
                            <li>&nbsp;<a href=""> MP3/MP4/DVD</a></li>
                            <li>&nbsp; <a href="">专业音频</a></li>
                            <li>&nbsp; <a href="">苹果周边</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">智能设备</a>
                            </li>
                            <li><a href="UserObject/region_search.html">智能手环</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">智能手表</a></li>
                            <li>&nbsp; <a href="">智能眼镜</a></li>
                            <li>&nbsp;<a href="">运动跟踪器</a></li>
                            <li>&nbsp;<a href=""> 智能配饰</a></li>
                            <li>&nbsp; <a href="">体感车</a></li>
                        </ul>
                    </div>
                    <div class="two_nav_right"><span class="center_lei_one_there"><img src="/Source/images/shuma.jpg"
                                                                                       alt="" width="120" height="99"/></span><span
                            class="center_lei_one_there"><img src="/Source/images/IT.jpg" alt="" width="120"
                                                              height="99"/></span></div>
                </div>
            </div>

            <div class="two_left_nav">
                <div class="two_nav_top">家装家具</div>
                <div style="border:1px solid #f0f0f0; border-top-style: none; width: 438px; height: 250px;">
                    <div class="two_nav_content">
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">家具</a></li>
                            <li><a href="UserObject/region_search.html">卧室家具</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">客厅家具</a></li>
                            <li>&nbsp; <a href="">餐厅家具</a></li>
                            <li>&nbsp;<a href="">书房家具</a></li>
                            <li>&nbsp;<a href="">储物家具</a></li>
                            <li>&nbsp;<a href="">阳台\户外</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">厨具</a></li>
                            <li><a href="UserObject/region_search.html">烹饪锅具</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">刀剪菜板</a></li>
                            <li>&nbsp; <a href="">水具九局</a></li>
                            <li>&nbsp;<a href="">餐具</a></li>
                            <li>&nbsp;<a href="">厨房配件</a></li>
                            <li>&nbsp;<a href="">茶具\咖啡具</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">灯具</a></li>
                            <li><a href="UserObject/region_search.html">灯具</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">筒灯射灯</a></li>
                            <li>&nbsp; <a href="">LED灯</a></li>
                            <li>&nbsp;<a href="">节能灯</a></li>
                            <li>&nbsp;<a href="">落地灯</a></li>
                            <li>&nbsp;<a href="">应急灯\手电</a></li>
                            <li>&nbsp;<a href="">装饰灯</a></li>
                            <li>&nbsp;<a href="">吊灯</a></li>
                            <li>&nbsp;<a href="">氛围照明</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">生活日用</a></li>
                            <li><a href="UserObject/region_search.html">收纳用品</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">雨伞雨具</a></li>
                            <li>&nbsp; <a href="">缝纫\针织</a></li>
                            <li>&nbsp;<a href="">洗晒\熨烫</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">家装软饰</a></li>
                            <li><a href="UserObject/region_search.html">节庆饰品</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">手工\十字绣</a></li>
                            <li>&nbsp; <a href="">装饰摆件</a></li>
                            <li>&nbsp;<a href="">花瓶花艺</a></li>
                            <li>&nbsp;<a href="">创艺家居</a></li>
                            <li>&nbsp;<a href="">装饰字画</a></li>
                            <li>&nbsp;<a href="">帘艺隔断</a></li>
                            <li>&nbsp;<a href="">相框\照片墙</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">其他</a></li>
                        </ul>
                    </div>
                    <div class="two_nav_right"><span class="center_lei_one_there"><img src="/Source/images/shuma.jpg"
                                                                                       alt="" width="120" height="99"/></span><span
                            class="center_lei_one_there"><img src="/Source/images/IT.jpg" alt="" width="120"
                                                              height="99"/></span></div>
                </div>
            </div>

            <div class="center_photo_"><span class="center_lei_four"><img src="/Source/images/gg03.png" alt=""
                                                                          width="880" height="60"/></span></div>

            <div class="two_left_nav">
                <div class="two_nav_top">办公用品</div>
                <div style="border:1px solid #f0f0f0; border-top-style: none; width: 438px; height: 200px;">
                    <div class="two_nav_content">
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">电脑整机</a>
                            </li>
                            <li><a href="UserObject/region_search.html">笔记本</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">平板电脑</a></li>
                            <li>&nbsp; <a href="">服务器</a></li>
                            <li>&nbsp;<a href="">电烤箱</a></li>
                            <li>&nbsp;<a href="">台式机</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">电脑配件</a>
                            </li>
                            <li><a href="UserObject/region_search.html">CPU</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">主板</a></li>
                            <li>&nbsp; <a href="">显卡</a></li>
                            <li>&nbsp;<a href="">硬盘</a></li>
                            <li>&nbsp;<a href="">内存</a></li>
                            <li>&nbsp;<a href="">显示器</a></li>
                            <li>&nbsp;<a href="">刻录机\光驱</a></li>
                            <li>&nbsp;<a href="">声卡\扩展卡</a></li>
                            <li>&nbsp;<a href="">散热器</a></li>
                            <li>&nbsp;<a href="">机箱</a></li>
                            <li>&nbsp;<a href="">电源</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">办公设备</a>
                            </li>
                            <li><a href="UserObject/region_search.html">投影设备</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">打印机</a></li>
                            <li>&nbsp; <a href="">传真设备</a></li>
                            <li>&nbsp;<a href="">扫描设备</a></li>
                            <li>&nbsp;<a href="">碎纸机</a></li>
                            <li>&nbsp;<a href="">考勤机</a></li>
                            <li>&nbsp;<a href="">保险柜</a></li>
                            <li>&nbsp;<a href="">投影配件</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">外设产品</a>
                            </li>
                            <li><a href="UserObject/region_search.html">U盘</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">移动硬盘</a></li>
                            <li>&nbsp; <a href="">摄像头</a></li>
                            <li>&nbsp;<a href="">手写板</a></li>
                            <li>&nbsp;<a href="">外置盒</a></li>
                            <li>&nbsp;<a href="">电脑工具</a></li>
                            <li>&nbsp;<a href="">UPS</a></li>
                            <li>&nbsp;<a href="">游戏设备</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">网络产品</a>
                            </li>
                            <li><a href="UserObject/region_search.html">路由器</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">网卡</a></li>
                            <li>&nbsp; <a href="">交换机</a></li>
                            <li>&nbsp;<a href="">上网卡</a></li>
                            <li>&nbsp;<a href="">网络盒子</a></li>
                            <li>&nbsp;<a href="">网络配件</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                    </div>
                    <div class="two_nav_right"><span class="center_lei_one_there"><img src="/Source/images/shuma.jpg"
                                                                                       alt="" width="120" height="99"/></span><span
                            class="center_lei_one_there"><img src="/Source/images/IT.jpg" alt="" width="120"
                                                              height="99"/></span></div>
                </div>
            </div>

            <div class="two_left_nav">
                <div class="two_nav_top">家用电器</div>
                <div style="border:1px solid #f0f0f0; border-top-style: none; width: 438px; height: 200px;">
                    <div class="two_nav_content">
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">大家电</a>
                            </li>
                            <li><a href="UserObject/region_search.html">电视</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">冰箱\冰柜\酒柜</a></li>
                            <li>&nbsp; <a href="">洗衣机</a></li>
                            <li>&nbsp;<a href="">家庭影像\音响</a></li>
                            <li>&nbsp;<a href="">家电配件</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">生活电器</a>
                            </li>
                            <li><a href="UserObject/region_search.html">风扇</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">净化器</a></li>
                            <li>&nbsp; <a href="">加湿器</a></li>
                            <li>&nbsp;<a href="">扫地机器人</a></li>
                            <li>&nbsp;<a href="">吸尘器</a></li>
                            <li>&nbsp;<a href="">除湿机</a></li>
                            <li>&nbsp;<a href="">干衣机</a></li>
                            <li>&nbsp;<a href="">取暖电器</a></li>
                            <li>&nbsp;<a href="">生活电器配件</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">厨房电器</a>
                            </li>
                            <li><a href="UserObject/region_search.html">面包机</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">咖啡机</a></li>
                            <li>&nbsp; <a href="">微波炉</a></li>
                            <li>&nbsp;<a href="">电烤箱</a></li>
                            <li>&nbsp;<a href="">电磁炉</a></li>
                            <li>&nbsp;<a href="">料理\榨汁机</a></li>
                            <li>&nbsp;<a href="">电炖锅</a></li>
                            <li>&nbsp;<a href="">其他厨房电器</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">其他家用电器</a>
                            </li>
                        </ul>
                    </div>
                    <div class="two_nav_right"><span class="center_lei_one_there"><img src="/Source/images/shuma.jpg"
                                                                                       alt="" width="120" height="99"/></span><span
                            class="center_lei_one_there"><img src="/Source/images/IT.jpg" alt="" width="120"
                                                              height="99"/></span></div>
                </div>
            </div>

            <div class="center_photo_"><span class="center_lei_four"><img src="/Source/images/gg02.png" alt=""
                                                                          width="880" height="60"/></span></div>

            <div class="two_left_nav">
                <div class="two_nav_top">运动户外</div>
                <div style="border:1px solid #f0f0f0; border-top-style: none; width: 438px; height: 200px;">
                    <div class="two_nav_content">
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">健身器材</a></li>
                            <li><a href="UserObject/region_search.html">跑步机</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">哑铃</a></li>
                            <li>&nbsp; <a href="">健身车\动感单车</a></li>
                            <li>&nbsp;<a href="">综合训练器</a></li>
                            <li>&nbsp;<a href="">武术搏击</a></li>
                            <li>&nbsp;<a href="">仰卧板\收腹机</a></li>
                            <li>&nbsp;<a href="">运动护具</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">骑行运动</a></li>
                            <li><a href="UserObject/region_search.html">山地车</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">折叠车</a></li>
                            <li>&nbsp; <a href="">电动车</a></li>
                            <li>&nbsp;<a href="">骑行装备</a></li>
                            <li>&nbsp;<a href="">骑行服</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">体育用品</a></li>
                            <li><a href="UserObject/region_search.html">球具</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">高尔夫</a></li>
                            <li>&nbsp; <a href="">滑轮滑板</a></li>
                            <li>&nbsp;<a href="">棋牌麻将</a></li>
                            <li>&nbsp;<a href="">台球具</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">户外装备</a></li>
                            <li><a href="UserObject/region_search.html">背包</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">帐篷\垫子</a></li>
                            <li>&nbsp; <a href="">睡袋\吊床</a></li>
                            <li>&nbsp;<a href="">登山攀岩</a></li>
                            <li>&nbsp;<a href="">户外照明</a></li>
                            <li>&nbsp;<a href="">便捷座椅床</a></li>
                            <li>&nbsp;<a href="">户外工具</a></li>
                            <li>&nbsp;<a href="">滑雪装备</a></li>
                            <li>&nbsp;<a href="">望远镜</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">水上运动</a></li>
                            <li><a href="UserObject/region_search.html">游泳设备</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">钓鱼设备</a></li>
                            <li>&nbsp; <a href="">滑浪设备</a></li>
                            <li>&nbsp;<a href="">水上摩托</a></li>
                            <li>&nbsp;<a href="">快艇</a></li>
                            <li>&nbsp;<a href="">游艇\帆船</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">天文器材</a></li>
                            <li><a href="UserObject/region_search.html">天文望远镜</a></li>
                        </ul>
                    </div>
                    <div class="two_nav_right"><span class="center_lei_one_there"><img src="/Source/images/shuma.jpg"
                                                                                       alt="" width="120" height="99"/></span><span
                            class="center_lei_one_there"><img src="/Source/images/IT.jpg" alt="" width="120"
                                                              height="99"/></span></div>
                </div>
            </div>

            <div class="two_left_nav">
                <div class="two_nav_top">服装服饰</div>
                <div style="border:1px solid #f0f0f0; border-top-style: none; width: 438px; height: 200px;">
                    <div class="two_nav_content">
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">男装</a></li>
                            <li><a href="UserObject/region_search.html">礼服</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">皮衣外套</a></li>
                            <li>&nbsp; <a href="">演出服饰</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">女装</a></li>
                            <li><a href="UserObject/region_search.html">礼服</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">皮衣外套</a></li>
                            <li>&nbsp; <a href="">演出服饰</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">服饰配件</a></li>
                            <li><a href="UserObject/region_search.html">眼镜</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">腰带\围巾</a></li>
                            <li>&nbsp; <a href="">领带\领结</a></li>
                            <li>&nbsp;<a href="">帽子\手套</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                    </div>
                    <div class="two_nav_right"><span class="center_lei_one_there"><img src="/Source/images/shuma.jpg"
                                                                                       alt="" width="120" height="99"/></span><span
                            class="center_lei_one_there"><img src="/Source/images/IT.jpg" alt="" width="120"
                                                              height="99"/></span></div>
                </div>
            </div>

            <div class="center_photo_"><span class="center_lei_four"><img src="/Source/images/gg03.png" alt=""
                                                                          width="880" height="60"/></span></div>


            <div class="two_left_nav">
                <div class="two_nav_top">影音图书</div>
                <div style="border:1px solid #f0f0f0; border-top-style: none; width: 438px; height: 115px;">
                    <div class="two_nav_content">
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">音像制品</a>
                            </li>
                            <li><a href="UserObject/region_search.html">音乐</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">影视</a></li>
                            <li>&nbsp; <a href="">教育影像</a></li>
                            <li>&nbsp;<a href="">游戏</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">电子教育</a>
                            </li>
                            <li><a href="UserObject/region_search.html">学生平板</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">点读机\笔</a></li>
                            <li>&nbsp; <a href="">早教益智</a></li>
                            <li>&nbsp;<a href="">录音笔</a></li>
                            <li>&nbsp;<a href=""> 电子书</a></li>
                            <li>&nbsp; <a href="">电子词典</a></li>
                            <li>&nbsp; <a href="">复读机</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="UserObject/region_search.html">实体书籍</a>
                            </li>
                            <li><a href="UserObject/region_search.html">青少儿</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">教育教材</a></li>
                            <li>&nbsp; <a href="">生活</a></li>
                            <li>&nbsp;<a href="">人文社科</a></li>
                            <li>&nbsp;<a href="">经管励志</a></li>
                            <li>&nbsp; <a href="">科技</a></li>
                            <li>&nbsp; <a href="">文艺</a></li>
                            <li>&nbsp; <a href="">工具书</a></li>
                        </ul>
                    </div>
                    <div class="two_nav_right"><span class="center_lei_one_there"><img src="/Source/images/shuma.jpg"
                                                                                       alt="" width="120" height="99"/></span></div>
                </div>
            </div>

            <div class="two_left_nav">
                <div class="two_nav_top">汽车用品</div>
                <div style="border:1px solid #f0f0f0; border-top-style: none; width: 438px; height: 115px;">
                    <div class="two_nav_content">
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">车载电器</a></li>
                            <li><a href="UserObject/region_search.html">导航仪</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">安全预警仪</a></li>
                            <li>&nbsp; <a href="">行车记录仪</a></li>
                            <li>&nbsp;<a href="">倒车雷达</a></li>
                            <li>&nbsp;<a href="">蓝牙设备</a></li>
                            <li>&nbsp;<a href="">净化器</a></li>
                            <li>&nbsp;<a href="">吸尘器</a></li>
                            <li>&nbsp;<a href="">车用冰箱</a></li>
                            <li>&nbsp;<a href="">其他</a></li>
                        </ul>
                        <ul>
                            <li style="width:60px; font-weight:bold;"><a style="color:#F00" href="">安全检测</a></li>
                            <li><a href="UserObject/region_search.html">安全座椅</a></li>
                            <li>&nbsp;<a href="UserObject/region_search.html">充气泵</a></li>
                            <li>&nbsp; <a href="">防盗设备</a></li>
                            <li>&nbsp;<a href="">应急救援</a></li>
                        </ul>
                    </div>
                    <div class="two_nav_right"><span class="center_lei_one_there"><img src="/Source/images/shuma.jpg"
                                                                                       alt="" width="120" height="99"/></span></div>
                </div>
            </div>

            <div class="center_photo_"><img src="/Source/images/gg01.png" width="880" height="60"/></div>
            <div class="index-nav-center">
                <ul>
                    <li>娱乐玩具</li>
                    <li><a href="">电动娱乐</a></li>
                    <li><a href="">儿童玩具</a></li>
                    <li><a href="">成人玩具</a></li>
                </ul>
                <ul>
                    <li>保健器材</li>
                    <li><a href="">保健检测</a></li>
                </ul>
                <ul>
                    <li>艺术书画</li>
                    <li><a href="">工艺品</a></li>
                    <li><a href="">原创艺术品</a></li>
                    <li><a href="">书画</a></li>
                </ul>
                <ul>
                    <li>宠物用品</li>
                    <li><a href="">水族用品</a></li>
                    <li><a href="">宠物玩具</a></li>
                    <li><a href="">宠物服饰</a></li>
                    <li><a href="">宠物器材</a></li>
                    <li><a href="">宠物保健</a></li>
                </ul>
                <ul>
                    <li>珠宝首饰</li>
                    <li><a href="">耳环</a></li>
                    <li><a href="">戒指</a></li>
                    <li><a href="">项链</a></li>
                    <li><a href="">手链\手环</a></li>
                    <li><a href="">其他</a></li>
                </ul>
                <ul>
                    <li>奢侈品</li>
                    <li><a href="">钟表</a></li>
                    <li><a href="">男包</a></li>
                    <li><a href="">女包</a></li>
                    <li><a href="">功能箱包</a></li>
                    <li><a href="">火机烟具</a></li>
                    <li><a href="">收藏品</a></li>
                    <li><a href="">古董把玩</a></li>
                </ul>
            </div>

            <div class="center_photo_"><span class="center_lei_four"><img src="/Source/images/gg03.png" alt=""
                                                                          width="880" height="60"/></span></div>

        </div>
        <div class="two_right">
            <div class="right_requirement">
                <table class="right_requirement_table" width="260" border="0" cellpadding="0" cellspacing="0">
                    <tbody>

                    <div class="row" style="line-height: 40px;">
                        <div class="col-md-6"><h4>最新发布</h4></div>
                        <div class="col-md-2">
                            <button id="btnPrev_1" style="padding:0" class="btn btn-warning" disabled="disabled">上一页</button>
                        </div>
                        <div class="col-md-4">
                            <button id="btnNext_1" style="padding:0" class="btn btn-warning" disabled="disabled">下一页</button>
                        </div>
                    </div>
                    </tbody>
                    <table style="width: 100%">
                        <tbody id="tbObject">
                        </tbody>
                    </table>

                    <tbody>
                    <div  style="line-height: 40px;">
                        <div class="col-md-6"><h4>最新需求</h4></div>
                        <div class="col-md-2">
                            <button id="btnPrev_2" class="btn btn-warning" style="padding:0" disabled="disabled">上一页</button>
                        </div>
                        <div class="col-md-4">
                            <button id="btnNext_2" class="btn btn-warning" style="padding:0" disabled="disabled">下一页</button>
                        </div>
                    </div>
                    </tbody>
                    <table  style="width: 100%;display: block;">
                        <tbody id="tbRequirement">
                        </tbody>
                    </table>
                </table>
            </div>
            <div class="rent_list">
                <table class="table">
                    <tr>
                        <td colspan="3" style="text-align: center"><h4>租金排行榜</h4></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>用户名</td>
                        <td>财富金</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>name</td>
                        <td>100租金</td>
                    </tr>
                </table>
            </div>
            <img src="/Source/images/haishangyundong.jpg" dynsrc=""/>
            <ul>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
            </ul>
            <img src="/Source/images/haishangyundong.jpg" alt="" dynsrc=""/>
            <ul>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
            </ul>
            <img src="/Source/images/haishangyundong.jpg" alt="" dynsrc=""/>
            <ul>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
            </ul>
            <img src="/Source/images/haishangyundong.jpg" alt="" dynsrc=""/>
            <ul>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
            </ul>
            <img src="/Source/images/haishangyundong.jpg" alt="" dynsrc=""/>
            <ul>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
                <li>待定待定待定</li>
            </ul>
        </div>
    </div>

    <!--促销部分-->
    <div class="promotion_ads">
        <h3 class="h2_sy">免租商品</h3>

        <div class="promotion_ads_one">
            <img src="/Source/images/zhubao.jpg" width="140" height="140"/>
            <ul>
                <li><h4 style="text-align:center">精品戒指</h4></li>
                <li>租金：¥<span>20.00</span></li>
                <li>押金：¥<span>2000.00</span></li>
                <li class="promotion_ads_input"><input type="submit" class="btn btn-success" value="立即预定"/></li>
            </ul>
            <img src="/Source/images/zhubao.jpg" width="140" height="140"/>
            <ul>
                <li><h4 style="text-align:center">精品戒指</h4></li>
                <li>租金：¥<span>20.00</span></li>
                <li>押金：¥<span>2000.00</span></li>
                <li class="promotion_ads_input"><input type="submit" class="btn btn-success" value="立即预定"/></li>
            </ul>
            <img src="/Source/images/zhubao.jpg" width="140" height="140"/>
            <ul>
                <li><h4 style="text-align:center">精品戒指</h4></li>
                <li>租金：¥<span>20.00</span></li>
                <li>押金：¥<span>2000.00</span></li>
                <li class="promotion_ads_input"><input type="submit" class="btn btn-success" value="立即预定"/></li>
            </ul>
            <img src="/Source/images/zhubao.jpg" width="140" height="140"/>
            <ul>
                <li><h4 style="text-align:center">精品戒指</h4></li>
                <li>租金：¥<span>20.00</span></li>
                <li>押金：¥<span>2000.00</span></li>
                <li class="promotion_ads_input"><input type="submit" class="btn btn-success" value="立即预定"/></li>
            </ul>
        </div>
    </div>
    <!--精品推荐-->
    <div class="promotion_ads">
        <h3 class="h2_sy">精品推荐</h3>

        <div class="promotion_ads_one">
            <img src="/Source/images/spdd_tp07.jpg" width="140" height="140"/>
            <ul>
                <li>
                    <h4 style="text-align:center;">海尔空调新上市</h4></li>
                <li>租金：¥<span>20.00</span></li>
                <li>押金：¥<span>2000.00</span></li>
                <li class="promotion_ads_input"><input type="submit" class="btn btn-success" value="立即预定"/></li>
            </ul>
            <img src="/Source/images/spdd_tp07.jpg" alt="" width="140" height="140"/>
            <ul>
                <li><h4 style="text-align:center;">海尔空调新上市</h4>
                </li>
                <li>租金：¥<span>20.00</span></li>
                <li>押金：¥<span>2000.00</span></li>
                <li class="promotion_ads_input"><input type="submit" class="btn btn-success" value="立即预定"/></li>
            </ul>
            <img src="/Source/images/spdd_tp07.jpg" alt="" width="140" height="140"/>
            <ul>
                <li><h4 style="text-align:center;">海尔空调新上市</h4>
                </li>
                <li>租金：¥<span>20.00</span></li>
                <li>押金：¥<span>2000.00</span></li>
                <li class="promotion_ads_input"><input type="submit" class="btn btn-success" value="立即预定"/></li>
            </ul>
            <img src="/Source/images/spdd_tp07.jpg" alt="" width="140"
                                                      height="140"/></a>
                <ul>
                    <li><h4 style="text-align:center;"><a href="../UserObject/Details.html">海尔空调新上市</a></h4>
                    </li>
                    <li>租金：¥<span>20.00</span></li>
                    <li>押金：¥<span>2000.00</span></li>
                    <li class="promotion_ads_input"><input type="submit" onclick="window.location='../UserObject/scheduled_confirm.html'" class="btn btn-success" value="立即预定"/></li>
                </ul>
        </div>
    </div>

    <script type="text/template" id="tRequirement">

        <tr class="news-info">
            <td width="30" height="25"><a href="#">#title</a></td>
            <td colspan="2"><a href="/UserRequirement/Details/#id">#description</a></td>
        </tr>
    </script>

    <script type="text/javascript">
        $(function () {
//            $('.right_requirement_table').click(function () {
            $.extend({
                'page': function (pageIndex, url, id, tbId) {
                    var url = url + "/page";
                    var prevId = "#btnPrev_" + tbId;
                    var nextId = "#btnNext_" + tbId;
                    pageIndex == null ? 1 : pageIndex;
                    $.get(url, {pageIndex: pageIndex}, function (retObj) {
                        var models = retObj.list;

                        if (models) {
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
                                pageIndex == pageNum ? $(nextId).attr("disabled","disabled") : $(nextId).removeAttr("disabled","disabled");
                                $.page(pageIndex, url, id, tbId);
                            });

                            $(prevId).click(function () {
                                pageIndex--;
                                pageIndex == 1 ? $(prevId).attr("disabled","disabled") : $(prevId).removeAttr("disabled","disabled");
                                $.page(pageIndex, url, id, tbId);
                            });
                        }
                    });
                }
            });

            $.page(1, "/UserRequirement", "#tbRequirement", 2);
            $.page(1, "/UserObject", "#tbObject", 1);
//            });
        });


        $("form[data-ajax-submit]").bind("submit", function () {


            $(this).ajaxSubmit(function (retObj) {
                switch (retObj.status) {
                    case S.SUCCEED:
                        window.location.href = "/User";
                        break;
                    case S.CUSERROR + 1:
                        showMsg("您所输入的帐号并不存在，请核对后再试。");
                        break;
                    case S.CUSERROR :
                        showMsg("您所输入的密码有误，请核对后再试。");
                        break;
                }
            });
            return false;
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