<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="/Source2/styles/kendo.common.min.css"/>
    <link rel="stylesheet" href="/Source2/styles/kendo.Material.min.css"/>
    <link rel="stylesheet" href="/Source2/styles/kendo.dataviz.min.css"/>
    <link rel="stylesheet" href="/Source2/styles/kendo.dataviz.default.min.css"/>

    <script src="/Source2/js/jquery.min.js"></script>
    <script src="/Source2/js/kendo.all.min.js"></script>
    <script src="/Source2/js/common.js"></script>

    <style>
        * {
            font-family: 'Microsoft Yahei';
        }

        .details_img {
            width: 100px;
            height: 100px;
            padding: 2px;;
            border: 2px solid transparent;
        }

        .details_img:hover {
            border: 2px solid deepskyblue;
        }

        #cImages {
            width: 100%;
            min-height: 100px;
            border: 1px solid gainsboro;
            border-radius: 4px;
        }

        #cMenu a {
            color: #444;
        }

    </style>

    
</head>
<body>
<div style="width: 1170px;margin: 0 auto;margin-top:14px;">
    <div>
        <h4>品租网管理系统</h4>
        <ul id="cMenu" style="margin-bottom:24px;display: none;">
            <li><a href="/m.php/WebsiteConfig">基本设定</a></li>
            <li>
                首页
                <ul>
                    <li><a href="/m.php/Banner">轮播图</a></li>
                </ul>
            </li>
            <li>
                <a href="/m.php/Manager">管理员</a>
            </li>
            <li>
                用户
                <ul>
                    <li><a href="/m.php/User">用户列表</a></li>
                    <li><a href="/m.php/UserRequirement">需求</a></li>
                </ul>
            </li>
            <li>
                租赁
                <ul>
                    <li><a href="/m.php/ObjectCategory">物品分类</a></li>
                    <li><a href="/m.php/UserObject">租赁物品</a></li>
                    <li><a href="/m.php/UserLeaseLogs">租赁记录</a></li>
                </ul>
            </li>
            <li>
                <a href="/m.php/Coupon">优惠券</a>
            </li>

            <li style="float: right;background-color:#f8f8f9;cursor: pointer;">
                <a href="/m.php/Manager/Logout">
                    退出登录
                </a>
            </li>
        </ul>
        <script>
            $("#cMenu").kendoMenu();
            $("#cMenu").show();
        </script>
        <!--<div id="cViceNav" style="margin-bottom: 24px;font-size: 14px;padding-left:12px;">-->
        <!--<a href="/m.php/Index" class="k-button">-->
        <!--首页-->
        <!--</a>-->
        <!--->
        <!--<a href="/m.php/User" class="k-button">-->
        <!--注册用户-->
        <!--</a>-->
        <!--->
        <!--<a href="javascript:void(0);" class="k-button">-->
        <!--用户列表-->
        <!--</a>-->
        <!--</div>-->
    </div>
    

    <div id="cGrid"></div>

    <script>
        var moduleName = "Manager";

        $(function () {
            useDataGrid({
                columns: [
                    {field: "id", title: "编号", width: 60},
                    {field: "user_name", title: "管理员帐号", width: 100},
                    {field: "status", title: "状态", width: 60, template: buildSimpleTemplate("status", "正常", "已禁用")},
                    {
                        command: [
                            {
                                name: "启用丨禁用",
                                click: toggle
                            }
                        ], width: 200
                    }
                ]
            });
        });

    </script>

    <script>

        function toggle(e) {

            e.preventDefault();

            last_dataItem = this.dataItem($(e.currentTarget).closest("tr"));

            var status = last_dataItem.status == "1" ? "0" : "1";

            var model = {
                id: last_dataItem.id,
                status: status
            };

            $.post(BASE_URL + "update2", {models: JSON.stringify([model])}, function (retObj) {
                switch (retObj.status) {
                    case R.SUCCEED:
                        last_dataItem.status = status;
                        $kendoGrid.refresh();
                        break;
                    case R.FAILED:
                        showMsg("保存失败。");
                        break;
                }
            });
        }

    </script>


</div>
</body>
</html>