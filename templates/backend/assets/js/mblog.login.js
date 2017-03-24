/**
 * Created by wangyong7 on 2017/1/18.
 */

define(function(require, exports, module){
    var $    = require('jquery'),
		C	 = require('mblog.config'),
        Rest = require('mblog.rest');

    var save = function(){
        $('.tpl-login-btn').on('click', function(){
            var obj = {
                user : $('#user').val(),
                pwd : $('#pwd').val()
            }
            Rest.login(obj).success(function(data){
                console.log(data);
                if(data.errno == 0) {
                    location.href = C.root + 'admin/home';
                    return;
                }else {
                    if(typeof data.error === 'string'){
                        alert(data.error);
                    }else {
                        var info = 'Error:';
                        for (i in data.error) {
                            info += data.error[i] + ";";
                        }
                        alert(info);
                    }
                }
            });
        })
    }

    exports.init = function(){
        save();
    }
})
