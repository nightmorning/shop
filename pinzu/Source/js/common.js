//获取模型
function getAutoModel(params) {

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

//从指定容器中获取模型
function getAutoModelFromContainer($cAutoModels) {

    var model = {};

    $cAutoModels.find("*[name]").each(function () {

        $this = $(this);

        var name = $this.attr("name");

        var ignore = $this.attr("data-am-ignore");

        var allowEmpty = $this.attr("data-am-allow-empty");

        if (ignore)
            return;

        var value = this.value;

        if (!name)
            return;

        if (value == "" && !allowEmpty)
            return;

        if (this.type == "checkbox")
            value = this.checked ? 1 : 0;

        model[name] = value;
    });

    return model;
}

//消息提示框
function showMsg(msg, _params) {

    if (_params) {

        var onOK = _params["ok"];
        var onCancel = _params["cancel"];

        var _showMsg = null;

        if (onCancel)
            _showMsg = confirm;
        else
            _showMsg = alert;

        var ret = _showMsg(msg);

        if (ret && onOK || ret == undefined && onOK)
            onOK();
        else if (!ret && onCancel)
            onCancel();

    } else
        alert(msg);
}

String.prototype.config = function (obj) {
    var ret = this;

    if (obj) {
        for (var name in obj) {
            var exp = new RegExp("#" + name, "gm")
            ret = ret.replace(exp, obj[name]);
        }
    }
    return ret;
}

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

var _jquery_post_source = $.post;
var _jquery_get_source = $.get;

function _ajaxSend(url, data, func_callback, usePreHandler, isPost) {

    var func_callback2 = function (data) {

        var dataObj = JSON.convert(data);

        if (!dataObj)
            return;

        if (typeof dataObj == "object" && usePreHandler)
            switch (dataObj.status) {
                case S.FAILED:
                    showMsg("服务器繁忙，请稍后再试。");
                    break;
                case S.UNLOGIN:
                    showMsg("请先登录。");
                    window.location.href = "/User/Login";
                    break;
                case S.FORM_INVALID:
                    showMsg("请核对表单的内容已正确填写，如有疑问，请联系客服。");
                    break;
            }

        if (func_callback) {
            var type = typeof func_callback;

            if (type == "function")
                func_callback(dataObj);
            else if (type == "object")
                build_ajax_callback(func_callback)(dataObj);
        }
    }

    var dataType = "text";

    if (isPost)
        _jquery_post_source(url, data, func_callback2, dataType);
    else
        _jquery_get_source(url, data, func_callback2, dataType);
}

function build_ajax_callback(params) {

    var callback = function (retObj) {

        var handler = params[retObj.status];

        if (handler) {
            var handlerType = typeof  handler;

            switch (handlerType) {
                case "string":
                    showMsg(handler);
                    break;
                case "function":
                    handler();
                    break;
            }
        }
    }

    return callback;
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

$.fn.ajaxSubmit = function (func_callback) {

    var $this = $(this);
    var url = $this.attr("action");
    var method = $this.attr("method");

    var func_submit = null;

    if (method == "post")
        func_submit = $.post;
    else
        func_submit = $.get;

    var model = getAutoModelFromContainer($this);

    func_submit(url, model, func_callback);
}

$.fn.pagination = function (options) {

    if (options.total < 2)
        return;

    if (options.current == null) {

        var matchRet = /\/(\d+)$/.exec(location.pathname);

        if (matchRet && matchRet.length > 1)
            options.current = parseInt(matchRet[1], 10);
        else
            options.current = 1;
    }

    var $c = $(this);

    var tPagination = $("#tPagination").html();

    var tBtn = '<li #status><a href="#url"><span>#pageNum</span></a></li>';

    var btns = "";

    for (var i = 0; i < options.total; i++) {
        var pageNum = i + 1;
        var isCurrent = options.current == pageNum;
        btns += tBtn.config({
            url: isCurrent ? "javascript:void(0);" : options.url + pageNum,
            pageNum: pageNum,
            status: isCurrent ? "class=\"active\"" : ""
        });
    }

    tPagination = tPagination.config({
        btns: btns,
        url: options.url,
        pageIndex_prev: options.current - 1,
        pageIndex_next: options.current + 1
    });

    var $cPagination = $(tPagination);
    var $btnPrev = $cPagination.find("li.prev");
    var $btnNext = $cPagination.find("li.next");

    if (options.current <= 1) {
        $btnPrev.addClass("disabled");
        $btnPrev.children("a").attr("href", "javascript:void(0);");
    }
    if (options.current > options.total - 1) {
        $btnNext.addClass("disabled");
        $btnNext.children("a").attr("href", "javascript:void(0);");
    }

    $c.append($cPagination);
}

function fillByModel(model, $c) {
    for (var name in model) {
        var $ele = $c.find("*[name=" + name + "]");
        var value = model[name];
        if ($ele.length > 0) {
            var tagName = $ele[0].tagName;
            switch (tagName) {
                case "TEXTAREA":
                case "SPAN":
                    $ele.text(value);
                    break;
                default :
                    $ele.val(value);
                    break;
            }
        }
    }
}

function safeDel(id) {
    var ele = window.event.srcElement || window.event.target;

    var $parent = $(ele).parent().parent();

    showMsg("确定要删除吗？", {
        ok: function () {
            $.get(location.pathname + "/safeDel", {id: id}, {
                1: function () {
                    $parent.remove();
                }
            });
        }
    });

}

function satisfy(id) {
    var ele = window.event.srcElement || window.event.target;

    var $self = $(ele);
        showMsg("确定能满足他的需求吗？",{
            ok:function () {
                $.get(location.pathname + "/satisfy",{id:id},{
                    1:function () {
                        $self.attr("disabled","disabled");
                    }
                });
            }
    });
}

$(function () {
    var $cPagination = $("#cPagination");

    if ($cPagination && $cPagination.length > 0 &&
        window.pageURL && window.pageCount) {
        $cPagination.pagination({
                total: pageCount,
                url: pageURL
            }
        );
    }

    $(".nav>li>a").each(function () {
            var path = location.pathname.toLowerCase();
            if (this.tagName == "A" && this.href.toLowerCase().indexOf(path) > -1) {
                $(this).parent().addClass("active");
                return false;
            }
            return true;
        }
    );
});


