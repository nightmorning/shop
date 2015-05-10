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
    

    <div id="cFilter" style="margin-bottom: 12px;">
        用户名：<input name="uid" class="k-textbox" placeholder="手机号码/邮箱地址"/>
        审核状态：<input type="text" name="status" id="sStatus_f"/>
        <button class="k-button" onclick="reloadTable()">查询</button>
        <hr/>
    </div>

    <div id="cGrid"></div>

    <div id="cWin"></div>

    <script>
        var moduleName = "UserRequirement";

        $(function () {
            useDataGrid({
                columns: [
                    {field: "id", title: "编号", width: 60},
                    {field: "user_name", title: "用户名", width: 100},
                    {field: "title", title: "标题", width: 250},
                    {
                        field: "status", title: "状态", width: 60, template: buildTemplate(dict_status, "status")
                    },
                    {
                        command: [
                            {
                                name: "查看详情",
                                click: showDetails
                            },
                            "destroy",
                        ], width: 200
                    }
                ]
            });
        });

    </script>

    <script type="text/x-kendo-template" id="tDetails">
        <div id="cDetails">
            <h4>#= title#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发布者：#= user_name#</h4>

            <p>#= description#</p>


            <input type="hidden" name="id" value="#= id#"/>

            <p>
                当前状态：<input name="status" id="sStatus" value="#= status#"/>
            </p>

            <p style="text-align: right;">
                <span style="color:deepskyblue;font-size:16px;" id="cTips_1"></span>
                <button class="k-button k-primary" onclick="updateModel()">保存</button>
            </p>

        </div>
    </script>

    <script>
        function details_ddl_init() {

            var $sStatus = $("#sStatus");

            var $ddlStatus = $sStatus.kendoDropDownList({
                dataTextField: "name",
                dataValueField: "id",
                autoBind: false,
                dataSource: convertToList(dict_status)
            });

            $sStatus.data("kendoDropDownList").value($sStatus.val());
        }

        $(function(){
            var $sStatus_f = $("#sStatus_f");

            $sStatus_f.kendoDropDownList({
                dataTextField: "name",
                dataValueField: "id",
                autoBind: false,
                optionLabel:"所有状态",
                dataSource: convertToList(dict_status)
            });

        });
    </script>



</div>
</body>
</html>