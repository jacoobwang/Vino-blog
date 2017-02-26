/**
 * Created by wangyong7 on 2017/1/13.
 */
define(function(require, exports, module) {

    var RestApi = require('./mblog.rest'),
        Fun     = require('./mblog.func');

    var Events = {

        /**
         * 添加分类
         */
        addCategory:function(){
            $("#js_save_btn").on("click", function(){
                var obj = {
                    title : $("#tag-name").val(),
                    slug  : $("#tag-slug").val(),
                    parent: $("#parent").val()
                }
                console.log(obj);

                var validate = Fun.validate('#addtag');
                if(validate){
                    RestApi.addCategory(obj).success(function(data) {
                        if(data.errno == 0){
                            var tr = '<tr data-id="'+ data.body.term_id +'"><td>'+ obj.title +'</td><td>'+ obj.slug +'</td><td>'+ obj.parent +'</td>\
                            <td>\
                            <div class="tpl-table-black-operation">\
                            <a href="javascript:;"><i class="am-icon-pencil"></i> 编辑 </a>\
                            <a href="javascript:;" class="tpl-table-black-operation-del js_del_btn"> <i class="am-icon-trash"></i> 删除 </a>\
                            </div>\
                            </td>\
                            </tr>';
                            $('#example-r tbody').append(tr);
                            alert(data.body.msg);
                        }
                    });
                } else {
                    alert('所有输入框不为空！');
                }
            })
        },

        /**
         * 更新分类
         */
        updateCategory:function(){
            $("#js_update_btn").on("click", function(){
                var obj = {
                    title : $("#tag-name").val(),
                    slug  : $("#tag-slug").val(),
                    parent: $("#parent").val()
                }

                var id = $('#term_id').val();

                var validate = Fun.validate('#addtag');
                if (validate) {
                    RestApi.updateCategory(obj, id).success(function(data) {
                        if(data.errno == 0){
                            alert('更新成功');
                        }
                    });
                } else {
                    alert('所有输入框不为空！');
                }
            })
        },

        /**
         * 删除分类
         */
        delCategory:function(){
            $("#example-r").delegate(".js_del_btn","click", function(){
                var id = parseInt($(this).closest("tr").attr("data-id"), 10);
                console.log(id);

                RestApi.delCategory(id).success(function(data) {
                   if(data.errno == 0) {
                       $('#example-r tr[data-id="'+ id +'"]').remove();
                       alert('删除成功');
                   }
                });
            })
        },

        //初始化
        init:function(){
            for(var i in this){
                if(this.hasOwnProperty(i)){
                    if( i != 'init' ){
                        this[i]();
                    }
                }
            }
        }

    };

    exports.init = function() {

        Events.init();
    }
});
