/**
 * Created by wangyong7 on 2017/2/7.
 */
define(function(require, exports, module){
    var Rest = require('mblog.rest');

    var current_page = parseInt($('#page_num').html()),
        total_page   = parseInt($('#page_total').html());

    var bindPageHandle = function() {

        $('.pagination-last').click(function () {
            var last_page = current_page - 1;
            if(last_page <= 0) return false;

            Rest.getPage(last_page).success(function(data){
                $('#page_num').html(last_page);
                current_page = last_page;
                $('#list_container').html(data);
            });
        });

        $('.pagination-next').click(function () {
            var next_page = current_page + 1;
            if(next_page > total_page) return false;

            Rest.getPage(next_page).success(function(data){
                $('#page_num').html(next_page);
                current_page = next_page;
                $('#list_container').html(data);
            });
        });
    };


    exports.init = function(){
        bindPageHandle();
    }
});
