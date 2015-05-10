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

    
    <style>
        #cMain td {
            line-height: 25px;
        }
    </style>


</head>
<body>

    <div class="row">
        <style>
    p {
        font-size: 16px;
        font-weight: bold;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #fff;
        padding: 6px;
    }
    .row{
        margin:0px;
        margin-bottom: 32px;
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
            <a href="/UserBankCard/Addition">添加 + </a>
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

        <div class="col-md-6">
            <h3>我是承租方</h3>
            <table id="cMain" class="table table-bordered">
                <thead>
                <th>编号</th>
                <th>评价</th>
                <th>追加内容</th>
                <th>时间</th>
                <th></th>
                </thead>
                <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if($item["level"] == 0): ?><tr class="success">
                            <?php elseif($item["level"] == 1): ?>
                        <tr class="warning">
                            <?php elseif($item["level"] == 2): ?>
                        <tr class="danger"><?php endif; ?>
                    <td><?php echo ($item["id"]); ?></td>
                    <td><?php echo ($item["level_name"]); ?></td>
                    <td ><?php echo (mb_substr($item["description"],0,25,'utf-8')); ?>...</td>
                    <td><?php echo ($item["created_on"]); ?></td>
                    <td >
                        <button class="btn btn-warning btn-xs" onclick="showMsg('<?php echo ($item["description"]); ?>')">
                            查看详情
                        </button>
                    </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div id="cPagination" style="text-align: right">

            </div>
        </div>
    </div>
    <script>
        var pageURL = "/UserEvaluation/Leasee/";
        var pageCount = "<?php echo ($page_count); ?>";
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