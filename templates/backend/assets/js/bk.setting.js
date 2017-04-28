/**
 * Created by wangyong7 on 2017/1/20.
 */

define(function(require, exports, module){
    var Rest = require('bk.rest'),
        Fun  = require('bk.func');

    var save = function(){
        $('#js_save_btn').on('click', function(){
            var obj = {
                site_title    : $('input[name="title"]').val(),
                site_desc     : $('input[name="desc"]').val(),
                site_email    : $('input[name="email"]').val(),
                site_logo     : $('input[name="logo"]').val(),
                site_thumbnail: $('input[name="thumbnail"]').val(),
                banner1       : $('input[name="banner1"]').val(),
                banner2       : $('input[name="banner2"]').val(),
                banner3       : $('input[name="banner3"]').val(),
                banner4       : $('input[name="banner4"]').val(),
                register_open : $('input[name="register_open"]').val()
            }
            obj = Fun.removeNullData(obj);
            console.log(obj);
            Rest.updateSetting(obj).success(function(data){
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