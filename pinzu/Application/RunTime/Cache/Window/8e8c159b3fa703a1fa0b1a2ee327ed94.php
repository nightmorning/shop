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
    <script type="text/javascript">
        var synavone = document.getElementById("synavone");
        var menu = document.getElementById("menu");
        var new_nav = document.getElementById("new_nav");
        var all_sort = document.createElement("div");
        all_sort.setAttribute("class","all-sort");
        menu.insertBefore(all_sort,new_nav);
        synavone.appendChild(menu);
    </script>

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
      body> table{ font-size: 12px}
    </style>

    
    

</head>
<body>
<div style="height:34px;background-color:#EFEFEF">
    <div style="width:1170px; margin:0 auto; background-color:#EFEFEF">
        <table width="1170" height="30" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="120" align="right">欢迎光临品租网！</td>
                <td width="45">请<a href="#">登陆</a></td>
                <td width="35"><a href="#">注册</a></td>
                <td width="513">&nbsp;</td>
                <td width="87">&nbsp;</td>
                <td width="40">&nbsp;</td>
                <td width="65" align="right"><a href="#">我的订单</a></td>
                <td width="65" align="right"><a href="#">我的发布</a></td>
                <td width="65" align="right"><a href="#">会员中心</a></td>
                <td width="100" align="right">
                    <select name="select" id="select">
                        <option><a href="#"> 客户服务</a></option>
                        <option><a href="#">帮助中心</a></option>
                        <option><a href="#">在线客服</a></option>
                        <option><a href="#">投诉中心</a></option>
                    </select>
                </td>
                <td width="80" align="right"><a href="#">收藏品租网</a></td>
            </tr>
        </table>
    </div>
</div>
<div style="width: 1170px; margin:0 auto; margin-top:10px; margin-bottom:10px; overflow:hidden;">
    <div class="span1"><img src="/Source/images/logo.png" width="200" height="60"/></div>
    <div class="span8"><input type="text" style="width:450px; height:30px; float: left;" placeholder="免费租用">
        <input type="submit" class="btn btn-warning" style="width:60px; height:20px; margin-left: 2px;" value="搜索">
    </div>
    <div class="span2">
        <img src="/Source/images/tel.png" width="22" height="22"/>&nbsp;0755-82882078&nbsp;
        <div class="qrcode"><img src="/Source/images/ewm.png" width="80" height="80"/></div>
    </div>
</div>

<div id="synavone" class="synavone">
    <div id="menu" class="menu">
        <div id="new_nav" class="new_nav">
            <ul style="padding:0">
                <li><a href="hire.html">宜物宜租</a></li>
                <li><a href="require.html">需求专区</a></li>
                <li><a href="deposit.html">代租专区</a></li>
                <li><a href="free.html">免费专区</a></li>
                <li><a href="user.html">会员中心</a></li>
                <li><a href="publish.html">发布中心</a></li>
            </ul>
        </div>
    </div>
</div>

    <form action="/Test/upload" enctype="multipart/form-data" method="post">
        <input type="file" name="photo"/>
        <button type="submit">提交</button>
    </form>

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
    <p><a href="#">关于品租网</a>&nbsp;|&nbsp;<a href="#">联系我们</a>&nbsp;|&nbsp;<a href="">租赁问答</a>&nbsp;|&nbsp;<a href="">人才招聘</a>&nbsp;|&nbsp;<a
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