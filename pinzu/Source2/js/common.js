var dict_status = {
    "0": "未审核",
    "1": "已通过",
    "2": "已驳回"
};
var dict_return_way = {
    "0": "租主自取"
};
var dict_deal_way = {
    "0": "租主包送"
};
var dict_shortest_lease = {
    "0": "一个月",
    "1": "两个月",
    "2": "三个月",
    "3": "半年",
    "4": "一年"
};
var dict_invoice_type = {
    "1": "免费",
    "2": "收费",
    "3": "无"
};
var dict_user_status = {
    "0": "未验证",
    "1": "手机已验证",
    "2": "邮箱已验证",
    "3": "完全验证"
};
var dict_identity_status = {
    "0": "未审核",
    "1": "通过",
    "2": "驳回"
};

var S = {
    //失败
    FAILED: 0,
    //用户未登录
    UNLOGIN: -99,
    //表单验证不通过
    FORM_INVALID: -98,
    //成功
    SUCCEED: 1,
    //自定义异常
    CUSERROR: 10
};

var BASE_URL = "http://" + window.location.host + "/m.php/";

var wndDetails, last_dataItem, $kendoGrid, dataSource;

JSON.convert = function (json) {
    try {
        return eval("(" + json + ")");
    }
    catch (ex) {
        if (window.console) {
            console.debug("执行JSON转换时出错，JSON内容如下：");
            console.debug(json);
        }
    }
    return null;
}

function getModelFromRequest() {

    var name, value, i;

    var str = location.href;

    var num = str.indexOf("?");

    str = str.substr(num + 1);

    var arrtmp = str.split("&");

    for (i = 0; i < arrtmp.length; i++) {

        num = arrtmp[i].indexOf("=");

        if (num > 0) {

            name = arrtmp[i].substring(0, num);

            value = arrtmp[i].substr(num + 1);

            this[name] = value;

        }
    }
}

function convertToList(dict, keyName, valueName) {

    keyName = keyName || "id";
    valueName = valueName || "name";

    var arr = new Array();

    for (var key in dict) {
        var obj = {};
        obj[keyName] = key;
        obj[valueName] = dict[key];
        arr.push(obj);
    }

    return arr;
}

function showMsg(content) {
    alert(content);
}

function loadImages(subFolder, c_id) {

    if (window.folderKey == null)
        return;

    c_id = c_id || "cImages";

    $.get("Handler/GetFiles", {
        "fk": window.folderKey,
        "sf": subFolder
    }, function (retObj) {
        if (retObj.status == 1) {

            var paths = JSON.convert(retObj.paths);

            if (paths && paths.length > 0)
                for (var i = 0; i < paths.length; i++)
                    $("#" + c_id).append("<a href='javascript:void(0)' onclick='window.open(\"/" + paths[i] + "\",\"newwindow\",\"height=400,width=600\");' ><img src='/" + paths[i] + "' class='details_img' /></a>");
        }
    });
    return "";
}

function objCompare(obj, targetObj) {
    for (var name in obj) {
        if (obj[name] != targetObj[name])
            return false;
    }
    return true;
}

function showTips(tips, c_tips_id) {

    if (!tips)
        return;

    c_tips_id = c_tips_id || "cTips_1";

    var $cTips = $("#" + c_tips_id);

    if ($cTips && $cTips.length > 0) {
        $cTips.html(tips);
        $cTips.show();
    }
}

function hideTips(c_tips_id) {
    c_tips_id = c_tips_id || "cTips_1";
    var $cTips = $("#" + c_tips_id);

    if ($cTips && $cTips.length > 0) {
        $cTips.hide();
    }
}

var modules = {
    "enable_ajax_rewrite": function () {
        var _jquery_post_source = $.post;
        var _jquery_get_source = $.get;

        var _ajaxSend = function (url, data, func_callback, usePreHandler, isPost) {

            var func_callback2 = function (data) {

                var dataObj = JSON.convert(data);

                if (!dataObj)
                    return;

                if (typeof dataObj == "object" && usePreHandler)
                    switch (dataObj.status) {
                        case S.FAILED:
                            showMsg("操作失败。");
                            break;
                        case S.UNLOGIN:
                            showMsg("请先登录。");
                            window.location.href = BASE_URL + "/Manager/Login";
                            break;
                        case S.FORM_INVALID:
                            showMsg("请核对表单的内容已正确填写。");
                            break;
                    }

                if (func_callback) {
                    var type = typeof func_callback;

                    if (type == "function")
                        func_callback(dataObj);
                }
            }

            var dataType = "text";

            if (isPost)
                _jquery_post_source(url, data, func_callback2, dataType);
            else
                _jquery_get_source(url, data, func_callback2, dataType);
        }

        $.post = function (url, data, func_callback, usePreHandler) {
            if (usePreHandler == undefined || usePreHandler == null)
                usePreHandler = true;

            _ajaxSend(url, data, func_callback, usePreHandler, true);
        }

        $.get = function (url, data, func_callback, usePreHandler) {
            if (usePreHandler == undefined || usePreHandler == null)
                usePreHandler = true;
            _ajaxSend(url, data, func_callback, usePreHandler, false);
        }
    },
    "enable_details_wnd": function () {

        window.getWndClose = function (c_details_id) {

            return function () {
                var model = getAutoModel(c_details_id);

                for (var name in model) {
                    last_dataItem[name] = model[name];
                }

                $kendoGrid.refresh();

            }
        }

        window.showDetails = function (e) {
            e.preventDefault();

            var detailsTemplate = kendo.template($("#tDetails").html());

            last_dataItem = this.dataItem($(e.currentTarget).closest("tr"));

            wndDetails.content(detailsTemplate(last_dataItem));

            if (window.details_ddl_init)
                details_ddl_init();

            wndDetails.center().open();
        }
    },
    "enable_auto_model": function () {
        window.getAutoModel = function (params) {

            var paramsType = typeof params;

            switch (paramsType) {
                case "string":

                    $cAutoModels = $("#" + params);

                    return getAutoModelFromContainer($cAutoModels);

                    break;

                case "object":

                    $cAutoModels = params;

                    return getAutoModelFromContainer($cAutoModels);

                    break;
            }
        }
        window.getAutoModelFromContainer = function ($cAutoModels) {

            var model = {};

            $cAutoModels.find("*[name]").each(function () {

                $this = $(this);

                var name = $this.attr("name");

                var value = this.value;

                if (value == "" || name == null || name == "" || name == undefined)
                    return;

                if (this.type == "checkbox")
                    value = this.checked ? 1 : 0;

                model[name] = value;

            });

            return model;
        }
    },
    "enable_data_grid": function () {
        window.getModel = function (e, kendoGrid) {

            if (kendoGrid == null)
                return null;

            var tr = $(e.target).closest("tr");
            var uid = tr.attr("data-uid");

            var items = kendoGrid.dataItems();
            var item;

            var dict = {};

            for (var i = 0; i < items.length; i++) {
                item = items[i];
                dict[item.uid] = item;
            }

            return dict[uid];
        }

        window.buildDropDownEditor = function (dataSource) {

            return function (container, options) {
                $('<input data-bind="value:' + options.field + '"/>')
                    .appendTo(container)
                    .kendoDropDownList({
                        dataTextField: "name",
                        dataValueField: "id",
                        autoBind: false,
                        dataSource: dataSource,
                        optionLabel: "待选择..."
                    });
            };
        }

        window.buildTemplate = function (dict, keyName, emptyValue) {

            keyName = keyName || "id";

            emptyValue = emptyValue || "";

            return function (model) {

                var key = model[keyName];

                if (key == undefined)
                    model[keyName] = 0;

                return dict[key] || "";
            };
        }

        window.buildSimpleTemplate = function (keyName, isTrue, isFalse) {

            isTrue = isTrue || "是";
            isFalse = isFalse || "否";

            return function (model) {

                var key = model[keyName];

                if (key)
                    return key == 1 ? isTrue : isFalse;
                else
                    return "";
            };
        }

        window._crud_before = function (options, operation) {

            if (operation == "update" && options && options.models) {

                var model = options.models[0];

                for (var key in model) {

                    //移除为空的外键字段
                    if (key.indexOf("id") > 0 && model[key] == "")
                        model[key] = undefined;
                }
            }
        }

        window.useDataGrid = function (params) {

            if (params == null || params.columns == null)
                return;

            params.c_grid_id = params.c_grid_id || "cGrid";
            params.c_win_id = params.c_win_id || "cWin";
            params.c_details_id = params.c_details_id || "cDetails";
            params.use_details_win = params.use_details_win == null ? true : params.use_details_win;

            var config_dataSource = {
                transport: _transport,
                batch: true,
                pageSize: 20,
                schema: {
                    model: params.model || {
                        id: PKName,
                        fields: {
                            id: {editable: false, nullable: true}
                        }
                    }
                }
            };

            dataSource = new kendo.data.DataSource(config_dataSource);

            var config_dataGrid = {
                dataSource: dataSource,
                messages: _message,
                pageable: true,
                height: 800,
                editable: {
                    mode: "popup",
                    window: {
                        title: "编辑",
                        animation: false
                    }
                },
                columns: params.columns,
                toolbar: params.toolbar || null
            };

            $("#" + params.c_grid_id).kendoGrid(config_dataGrid);

            $kendoGrid = $("#" + params.c_grid_id).data("kendoGrid");

            var config_details = {
                title: "详情",
                modal: true,
                visible: false,
                resizable: false,
                width: 600,
                close: params.use_details_win ? getWndClose(params.c_details_id) : function () {
                }
            };

            wndDetails = $("#" + params.c_win_id).kendoWindow(config_details).data("kendoWindow");

        }

        window.updateModel = function (c_id) {

            c_id = c_id || "cDetails";

            var model = getAutoModel(c_id);

            if ((window.lastUpdated_model == null && last_dataItem != null && objCompare(model, last_dataItem)) ||
                (window.lastUpdated_model != null && objCompare(model, window.lastUpdated_model)))
                return;

            if (window.allowedUpdate != undefined && window.allowedUpdate == false)
                return;

            hideTips();

            $.post(BASE_URL + "update2", {models: JSON.stringify([model])}, function (retObj) {

                var tips = "";

                switch (retObj.status) {
                    case S.SUCCEED:
                        tips = "保存成功！";
                        break;
                    case S.FAILED:
                        tips = "保存失败！";
                        break;
                }

                showTips(tips);

                if (window.allowedUpdate != undefined)
                    window.allowedUpdate = false;

            });

            window.lastUpdated_model = model;


        }

        window.reloadTable = function (dataSource) {
            dataSource = dataSource || window.dataSource;

            if (dataSource)
                dataSource.read();
        }

        window.getCURDData = function (operation) {

            if (operation == "read") {
                return {conditions: JSON.stringify(getAutoModel("cFilter"))};
            }

            return {};
        }


    },
    "enable_save_index": function () {
        window.indexUp = function (e) {
            var $tr = $(e.target).closest("tr");

            var $target = $tr.prev();

            if ($target)
                $tr.insertBefore($target);
        }

        window.indexDown = function (e) {

            var $tr = $(e.target).closest("tr");

            var $target = $tr.next();

            if ($target)
                $tr.insertAfter($target);
        }

        window.getIds_sorted = function () {

            var ids = Array();
            var items = $kendoGrid.dataItems();
            var item;

            var dict = {};

            for (var i = 0; i < items.length; i++) {
                item = items[i];
                dict[item.uid] = item[PKName];
            }

            $("#cGrid tr[data-uid]").each(function () {
                var uid = this.getAttribute("data-uid");
                ids.push(dict[uid]);
            });

            return ids.join(",");
        }
    }
};

modules.enable_ajax_rewrite();
modules.enable_auto_model();
modules.enable_details_wnd();
modules.enable_data_grid();

$(function () {

    if (window.moduleName == undefined)
        return;

    BASE_URL += moduleName + "/";

    var kendo_actions = ["create", "update", "destroy", "read"];

    window._transport = window._message = null;

    window.PKName = "id";

    window._transport = {
        read: {
            url: BASE_URL + kendo_actions[3],
            dataType: "jsonp"
        },
        update: {
            url: BASE_URL + kendo_actions[1],
            dataType: "jsonp",
            type: "GET"
        },
        destroy: {
            url: BASE_URL + kendo_actions[2],
            dataType: "jsonp",
            type: "GET"
        },
        create: {
            url: BASE_URL + kendo_actions[0],
            dataType: "jsonp",
            type: "GET"
        },
        parameterMap: function (options, operation) {

            var data = {};

            if (window._crud_before)
                _crud_before(options, operation)

            if (window.getCURDData) {
                var data2 = getCURDData(operation);

                if (data2)
                    for (var key in data2) {
                        data[key] = data2[key];
                    }
            }

            if (operation !== "read" && options.models) {

                data["models"] = kendo.stringify(options.models);

                if (operation == "destroy") {

                    var params = {};

                    var PKValue = options.models[0][PKName];

                    params[PKName] = PKValue;

                    return params;
                }
            }

            return data;
        }
    };

    window._message = {
        commands: {
            cancel: "撤销修改",
            canceledit: "取消",
            create: "添加",
            destroy: "删除",
            edit: "编辑",
            save: "保存修改",
            select: "查询",
            update: "保存"
        }
    };

});
