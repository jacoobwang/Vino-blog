/**
 * Created by wangyong7 on 2017/1/13.
 */
define(function(require, exports, module) {
    var C = require('./mblog.config');

    var defaults = {
        dataType : "json"
    };

    var initAjax = function() {
        $(document).ajaxStart(function() {
            $("body").append('<div id="js_loading" class="ui_loading"><div class="loading"></div></div>');
        }).ajaxStop(function() {
            $("#js_loading").remove();
        }).ajaxError(function(){
            $("#js_loading").remove();
        });
    };

    initAjax();

    /***
     * 获取api url
     * @param {Object} api_name
     */
    var getUrl = function(api_path) {
        var url = C.root + api_path;
        return url;
    };

    /***
     *
     * @param {Object} params
     * @param {Object} type GET/POST/PUT/DELETE
     */
    var baseRest = function(params, type) {
        $.extend(params, defaults);
        params.type = type || "GET";
        var jxhr = $.ajax(params);
        return jxhr;
    };

    /**
     * 添加分类
     * @param data
     */
    exports.addCategory = function(data) {
        var params = {
            data : data,
            url : getUrl('api/category/add')
        };
        return baseRest(params, 'POST');
    };

    /**
     * 更新分类
     * @param data
     */
    exports.updateCategory = function(data, id) {
        var params = {
            data : data,
            url : getUrl('api/category/update/'+id)
        };
        return baseRest(params, 'POST');
    }

    /**
     * 删除分类
     * @param id
     */
    exports.delCategory = function(id) {
        var params = {
            url : getUrl('api/category/del/'+id)
        }
        return baseRest(params);
    };

    /**
     * 添加post
     * @param data
     */
    exports.addPost = function(data) {
        var params = {
            data : data,
            url  : getUrl('api/post/add')
        }
        return baseRest(params, 'POST');
    };

    /**
     * 更新post
     * @param data
     */
    exports.updatePost = function(data) {
        var params = {
            data : data,
            url  : getUrl('api/post/update')
        }
        return baseRest(params, 'POST');
    }

    /**
     * 更新用户信息
     */
    exports.updateUser = function(data) {
        var params = {
            data: data,
            url : getUrl('api/user/update')
        }
        return baseRest(params, 'POST');
    }

    /**
     * 更新设置
     * @param data
     */
    exports.updateSetting = function(data) {
        var params = {
            data: data,
            url : getUrl('api/setting/update')
        }
        return baseRest(params, 'POST');
    }

    /**
     * 获取分页信息
     * @param num
     */
    exports.getPage = function(num) {
        var params = {
            url : getUrl('admin/page/'+ num)
        }
        return baseRest(params);
    }

    /**
     * 登录
     * @param data
     */
    exports.login = function(data) {
        var params = {
            data: data,
            url : getUrl('login')
        }
        return baseRest(params, 'POST');
    }

})