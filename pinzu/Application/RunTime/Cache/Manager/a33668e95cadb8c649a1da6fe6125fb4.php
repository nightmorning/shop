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
        身份审核状态：<input type="text" name="identity_valid" id="sIdentity_valid_f"/>
        <button class="k-button" onclick="reloadTable()">查询</button>
        <hr/>
    </div>

    <div id="cGrid"></div>

    <div id="cWin"></div>

    <script>
        var folderKey = 2;

        var moduleName = "User";

        $(function () {
            useDataGrid({
                columns: [
                    {field: "id", title: "编号", width: 60},
                    {field: "phone_number", title: "手机号码", width: 100},
                    {field: "email_address", title: "邮箱地址", width: 100},
                    {
                        field: "status", title: "状态", width: 60, template: buildTemplate(dict_user_status, "status")
                    },
                    {
                        field: "identity_valid",
                        title: "身份证状态",
                        width: 60,
                        template: buildTemplate(dict_identity_status, "identity_valid")
                    },
                    {
                        command: [
                            {
                                name: "查看详情",
                                click: showDetails
                            }
                        ], width: 200
                    }
                ]
            });
        });

    </script>

    <script type="text/x-kendo-template" id="tDetails">
        <div id="cDetails">
            <input type="hidden" name="id" value="#= id#"/>

            <h4>真实姓名：#= real_name#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;身份证号：#= card_no#</h4>

            <p>昵称：#= nick_name#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;验证状态：#= dict_user_status[status]#</p>

            <p>手机号码：#= phone_number#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;邮箱地址：#= email_address#</p>

            <p>
                身份证图片<span style="font-size: 14px;color: deepskyblue;">(点击放大)</span>
                <br/>
            </p>

            <div id="cImages">
                #= loadImages(id) #
            </div>

            <p>
                身份证审核：<input name="identity_valid" id="sIdentity_valid" value="#= identity_valid#"/>
            </p>

            <p style="text-align: right;">
                <span style="color:deepskyblue;font-size:16px;" id="cTips_1"></span>
                <button class="k-button k-primary" onclick="updateModel()">保存</button>
            </p>

        </div>
    </script>

    <script>
        function details_ddl_init() {

            var $sIdentity_valid = $("#sIdentity_valid");

            var $ddlStatus = $sIdentity_valid.kendoDropDownList({
                dataTextField: "name",
                dataValueField: "id",
                autoBind: false,
                dataSource: convertToList(dict_identity_status)
            });

            $sIdentity_valid.data("kendoDropDownList").value($sIdentity_valid.val());
        }

        $(function(){
            var $sIdentity_valid_f = $("#sIdentity_valid_f");

            $sIdentity_valid_f.kendoDropDownList({
                dataTextField: "name",
                dataValueField: "id",
                autoBind: false,
                optionLabel:"所有状态",
                dataSource: convertToList(dict_identity_status)
            });

        });

    </script>


</div>
</body>
</html>