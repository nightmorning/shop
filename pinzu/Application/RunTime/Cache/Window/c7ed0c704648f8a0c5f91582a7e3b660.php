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

    
    <style type="text/css">
        .details-top-left {
            width: 328px;
            float: left
        }

        .details-left-up {
            width: 320px;
            height: 300px;
            margin-left: 4px;
            float: left;
            border: 1px solid red
        }

        .details-top-down {
            width: 80px;
            height: 60px;
            float: left;
            margin: 1px;
            border: 1px solid red
        }

        .details-top-right {
            width: 645px;
            float: left;
            font-size: 16px;
            line-height: 40px;
            margin-left: 15px;
            position: relative;
        }
        .details-top-right-user{width: 232px;float: right;margin-left: -50px}

        .details-center {
            clear: both;
            padding-top: 40px
        }

        .details-center-right {
            line-height: 30px;
            font-size: 14px
        }

        .details-center-td-first {
            width: 200px
        }

        .details-center-td-second {
            width: 150px
        }

        .details-center-right-details {
            margin-top: 40px;
            line-height: 30px;
            text-indent: 2em;
        }

        .details-center-right-details ul {
            text-align: center
        }

        .details-center-right-details ul li img {
            width: 600px;
            height: 450px;
            margin: 0 auto
        }

        .details-center-ad {
            text-align: center;
            margin-bottom: 10px;
        }

        .detalis-top-input {
            width: 180px;
            font-size: 18px;
        }

        .details-vip-explain {
            width: 200px;
            height: 40px;
            position: absolute;
            top: 0px;
            right: 50px;
            visibility: hidden;
            border: 2px solid #cccccc;
            padding-left: 5px;
        }
        .menber-image{width:80px;height:80px;border:1px solid #CCC;padding: 0;}
        .credit_rating{
            width:75px;
            line-height:10px;
            float:left;
            background-image: url("/Source/images/backgd_five_star.png");
            background-repeat: repeat-x;
        }
        .details_padding{padding:0}
    </style>
    <link href="/Source/css/demo.css" type="text/css" rel="stylesheet"/>
    <link href="/Source/css/date/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript">
        function MM_showHideLayers() { //v9.0
            var i, p, v, obj, args = MM_showHideLayers.arguments;
            for (i = 0; i < (args.length - 2); i += 3)
                with (document) if (getElementById && ((obj = getElementById(args[i])) != null)) {
                    v = args[i + 2];
                    if (obj.style) {
                        obj = obj.style;
                        v = (v == 'show') ? 'visible' : (v == 'hide') ? 'hidden' : v;
                    }
                    obj.visibility = v;
                }
        }
    </script>
    <script src="/Source/js/date/bootstrap-datetimepicker.min.js"></script>
    <script src="/Source/js/date/bootstrap-datetimepicker.zh-CN.js"></script>



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
    
    <div style="margin-top: 10px;margin-bottom: 30px">
        <div class="details-top-left">
            <div id="preview">
                <div class="jqzoom" id="spec-n1">
                    <IMG height="300" src="/Source/images/goods/06.jpg" jqimg="/Source/images/goods/06.jpg"
                         width="320">
                </div>
                <div id="spec-n5">
                    <div class="control" id="spec-left">
                        <img src="/Source/images/goods/left.gif"/>
                    </div>
                    <div id="spec-list">
                        <ul class="list-h">
                            <li><img src="/Source/images/goods/img01.jpg"></li>
                            <li><img src="/Source/images/goods/img02.jpg"></li>
                            <li><img src="/Source/images/goods/img03.jpg"></li>
                            <li><img src="/Source/images/goods/01.jpg"></li>
                            <li><img src="/Source/images/goods/02.jpg"></li>
                            <li><img src="/Source/images/goods/03.jpg"></li>
                            <li><img src="/Source/images/goods/04.jpg"></li>
                            <li><img src="/Source/images/goods/05.jpg"></li>
                            <li><img src="/Source/images/goods/06.jpg"></li>
                            <li><img src="/Source/images/goods/img01.jpg"></li>
                        </ul>
                    </div>
                    <div class="control" id="spec-right">
                        <img src="/Source/images/goods/right.gif"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="details-top-right" id="cUserObject">
            <div class="col-md-6"><h4>三星32寸高清电视</h4></div>
            <div class="col-md-6"><img id="one" onmouseover="MM_showHideLayers('two','','show')"
                                       onmouseout="MM_showHideLayers('two','','hide')"
                                       src="/Source/images/safeVIP.png"/></div>
            <div id="two" class="details-vip-explain"><b>保</b>：是保证金&nbsp;&nbsp;&nbsp;&nbsp;<b>V</b>：是VIP</div>
            <div class="col-md-12">租金：<span name="price_day" style="color: #ff0000"></span>元</div>
            <div class="col-md-5">押金：<span name="price_pledge" style="color: #ff0000"></span>元</div>
            <div class="col-md-7">交易方式:租主包送</div>
            <div class="col-md-5">起租：3个月</div>
            <div class="col-md-7">归还方式：租客包送</div>
            <div class="col-md-12">地址：<span name="address"></span></div>
            <div class="col-md-5">起租时间：
                <div class="input-group date form_datetime col-md-7" id="dpstart" data-link-field="dtp_input1">
                    <input id="startdate" class="form-control" size="20" type="text" value="" readonly="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
            </div>
            <div class="col-md-5">退租时间：
                <div class="input-group date form_datetime col-md-7" id="dpend" data-link-field="dtp_input1">
                    <input id="enddate" class="form-control" size="16" type="text" value="" readonly="">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 20px;" id="number">数量：</div>
            <div class="col-md-5"><a target="_blank"
                                     href="http://wpa.qq.com/msgrd?v=3&uin=2968447374&site=qq&menu=yes"><input
                    class="btn btn-success detalis-top-input" type="submit" value="在线客服"/></a></div>
            <div class="col-md-7"><input class="btn btn-warning detalis-top-input"
                                        id="submit" onclick="window.location='scheduled_confirm.html'" type="submit" value="立即预定">
            </div>
        </div>
        <div class="details-top-right-user">
            <div class="col-md-12 details_padding"><p><b>出租信息</b></p></div>
            <div class="col-md-5 menber-image"><img src="/Source/images/user.gif"></div>
            <div class="col-md-7 details_padding">
                <div class="col-md-12">会员名：XXXXX</div>
                <div class="col-md-12">积  分：200</div>
                <div class="col-md-12"><div style="float: left">诚信等级：</div><div class="credit_rating"><img src="/Source/images/five_star.jpg"></div></div>
            </div>
            <div class="col-md-12 details_padding">联系人：李经理</div>
            <div class="col-md-12 details_padding">会员类型：<span>VIP</span></div>
            <div class="col-md-12 details_padding">认证：<img src="/Source/images/phone.png">&nbsp;<img src="/Source/images/name.png">&nbsp;<img src="/Source/images/email.png"></div>
            <div class="col-md-12 details_padding">保障金：无</div>
            <div class="col-md-12 details_padding">所在地：深圳市罗湖区XXX号</div>
        </div>
    </div>
    <div class="details-center">
        <div class="col-md-3">
            <div class="col-sm-12">
                <div class="thumbnail">
                    <img src="/Source/images/spxq01.png" alt="...">

                    <div class="caption">
                        <h4>三星32寸高清电视</h4>

                        <p>100元/月</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="thumbnail">
                    <img src="/Source/images/spxq01.png" alt="...">

                    <div class="caption">
                        <h4>三星32寸高清电视</h4>

                        <p>100元/月</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="thumbnail">
                    <img src="/Source/images/spxq01.png" alt="...">

                    <div class="caption">
                        <h4>三星32寸高清电视</h4>

                        <p>100元/月</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="thumbnail">
                    <img src="/Source/images/spxq01.png" alt="...">

                    <div class="caption">
                        <h4>三星32寸高清电视</h4>

                        <p>100元/月</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="thumbnail">
                    <img src="/Source/images/spxq01.png" alt="...">

                    <div class="caption">
                        <h4>三星32寸高清电视</h4>

                        <p>100元/月</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 details-center-ad"><img src="/Source/images/fanggg01.jpg"/></div>
            <div class="col-md-12 details-center-ad"><img src="/Source/images/fanggg02.jpg"/></div>
            <div class="col-md-12 details-center-ad"><img src="/Source/images/fanggg03.jpg"/></div>
            <div class="col-md-12 details-center-ad"><img src="/Source/images/fanggg04.jpg"/></div>
        </div>
        <div class="col-md-9">
            <div class="navbar navbar-default"
                 style="background-color: #F90;color: #ffffff;padding-left: 10px;line-height:50px;font-size: 24px">商品详情
            </div>
            <div class="details-center-right">
                <table style="margin:0 auto">
                    <tr>
                        <td>商品型号：</td>
                        <td class="details-center-td-first">三星UxWmhhjjw</td>
                        <td> 类型：</td>
                        <td> LED液晶电视机</td>
                    </tr>
                    <tr>
                        <td>屏幕尺寸：</td>
                        <td class="details-center-td-first">32英寸</td>
                        <td> 分辨率：</td>
                        <td>高清：1366*768</td>
                    </tr>
                    <tr>
                        <td>新旧程度：</td>
                        <td class="details-center-td-first">九成新</td>
                        <td>发票：</td>
                        <td>无</td>
                    </tr>
                </table>
            </div>
            <div class="details-center-right-details">
                <ul style="list-style-type: none ">
                    <li><img src="/Source/images/spxq01.png"/></li>
                    <li><img src="/Source/images/spxq01.png"/></li>
                    <li><img src="/Source/images/spxq01.png"/></li>
                    <li><img src="/Source/images/spxq01.png"/></li>
                    <li><img src="/Source/images/spxq01.png"/></li>
                </ul>
                <p>
                    &本公司出租夏普、索尼、三星等液晶电视。以及承接大屏幕拼接的相关项目。业务范围：婚庆、展会、各种会议、文艺晚会、庆典活动、商业庆典、新闻发布、晚会派对、竟技比赛、签约入位、开工奠基、剪彩开幕、广场文化、时装表演、广告宣传、产品发布会、明星见面会、企业年会、节日舞会等。本公司凭借多年来创新发展，积累了相当丰富的经验，贴心的服务，过硬的技术，对于客户售后维护应急有着极快的反应能力。立志于"一切以客户为中心，急客户之所需"的服务宗旨。
                    深圳唐明国际投资有限公司真诚的希望与社会各界继续保持友好的合作伙伴关系，携手共进，不断开拓发展，携手共创美好明天。</p>
                <br/>
                <br/>

                <p><strong>交易规则：</strong>
                    若距预定日期14：00大于等于 1 天（1*24小时），租金全额退还；否则扣除租金的 10% 作为违约金，并支付给租主。</p>

                <p><strong>安全提示：</strong>
                    交易过程中请不要随意接收可疑文件和点击不明来源的链接，付款前务必核实网站域名和详细支付信息。</p>

                <p><strong>免责声明：</strong>
                    唐明国际所展示的宝贝供求信息由租赁双方自行提供，其真实性、准确性和合法性由信息发布人负责。唐明国际不提供任何保证，并不承担任何法律责任。唐明国际友情提醒：为保障您的利益，请网上成交。
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $(".jqzoom").jqueryzoom({
                xzoom: 400,
                yzoom: 400,
                offset: 10,
                position: "right",
                preload: 1,
                lens: 1
            });
            $("#spec-list").jdMarquee({
                deriction: "left",
                width: 350,
                height: 56,
                step: 2,
                speed: 10,
                delay: 10,
                control: true,
                _front: "#spec-right",
                _back: "#spec-left"
            });
            $("#spec-list img").bind("mouseover",
                    function () {
                        var src = $(this).attr("src");
                        $("#spec-n1 img").eq(0).attr({
                            src: src.replace("\/n5\/", "\/n1\/"),
                            jqimg: src.replace("\/n5\/", "\/n0\/")
                        });
                        $(this).css({
                            "border": "2px solid #ff6600",
                            "padding": "1px"
                        });
                    }).bind("mouseout",
                    function () {
                        $(this).css({
                            "border": "1px solid #ccc",
                            "padding": "2px"
                        });
                    });
        })
    </script>
    <script src="/Source/js/plugins.js" type="text/javascript"></script>
    <script>
        var myDate = new Date();
        $("#dpstart").datetimepicker({
            format: "yyyy-mm-dd",
            startDate: myDate.getDate(),
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left",
            minView: 2,
            todayHighlight: true,
            language: 'zh-CN'
        });
        $("#dpend").datetimepicker({
            format: "yyyy-mm-dd",
            startDate: myDate.getDate(),
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left",
            minView: 2,
            todayHighlight: true,
            language: 'zh-CN'
        });
        $("#submit").click(function(){
            var $startDate = $("#startdate").val();
            var $endDate = $("#enddate").val();
            $.get('UserObject/dateTime',{}, function (retObj) {
                retObj.startDate = $startDate;
                retObj.endDate = $endDate;
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            var testData = {
                real_name: "<?php echo ($details["real_name"]); ?>",
                price_day:"<?php echo ($details["price_day"]); ?>",
                price_pledge:"<?php echo ($details["price_pledge"]); ?>",
                address:"<?php echo ($details["address"]); ?>"

            };

            fillByModel(testData, $("#cUserObject"))
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