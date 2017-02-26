const  DOMAIN = 'http://localhost/blog2/';

$(function() {

    (function() {
        $(document).ajaxStart(function() {
            $("body").append('<div id="js_loading" class="ui_loading"><div class="loading"></div></div>');
        }).ajaxStop(function() {
            $("#js_loading").remove();
        }).ajaxError(function(){
            $("#js_loading").remove();
        });
    })();

    var current_page = parseInt($('#page_num').html()),
        total_page = parseInt($('#page_total').html()),
        category   = parseInt($('#category_id').html()) || false;

    $('.am-pagination-next').click(function(){
        var next_page = current_page + 1,
            gUrl = 'api/page/'+next_page;

        if(next_page > total_page) return false;
        if(category) gUrl = 'api/page/'+category+'/'+next_page;

        $.ajax({
            url : DOMAIN + gUrl,
            type: 'GET',
            success: function(data){
                $('#article-container').html(data);
                $('#page_num').html(next_page);
                current_page = next_page;
            }
        });
    });

    $('.am-pagination-prev').click(function(){
        var last_page = current_page - 1,
            gUrl = 'api/page/'+last_page;

        if(last_page <= 0) return false;
        if(category) gUrl = 'api/page/'+category+'/'+last_page;

        $.ajax({
            url : DOMAIN + gUrl,
            type: 'GET',
            success: function(data){
                $('#article-container').html(data);
                $('#page_num').html(last_page);
                current_page = last_page;
            }
        });
    });


});