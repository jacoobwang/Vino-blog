/**
 * Created by wangyong7 on 2017/1/18.
 */

define(function(require, exports, module){
    var $    = require("jquery"),
        Rest = require('mblog.rest');

    var save = function(){
        $('#js_save_btn').on('click', function(){
            var obj = {
                user_nickname : $('#nickname').val(),
                user_email    : $('#email').val(),
                user_avatar   : $('#avatar').val(),
                user_profile  : $('#user_profile').val(),
                user_github   : $('#github').val(),
                user_weibo    : $('#weibo').val()
            }
            for(var i in obj){
                if(obj[i].length == 0) delete obj[i];
            }
            Rest.updateUser(obj).success(function(data){
                console.log(data);
                if(data.errno == 0) {
                    alert('更新成功');
                    return;
                }
            });
        })
    }

    exports.init = function(){
        save();
    }
})