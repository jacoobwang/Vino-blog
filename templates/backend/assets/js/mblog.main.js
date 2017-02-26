/**
 * Created by wangyong7 on 2017/1/13.
 */
(function() {

    var alias = {
        'jquery':'jquery.min2',
        'editormd' : "./editor.md/editormd"
    }

    seajs.config({
        alias : alias,
        map : [[ /^(.*\.(?:css|js))(.*)$/i, '$1?20160331' ]],
        debug : 0
    });

})();


define(function(require, exports) {

    exports.load = function(name, options) {

        require.async('./' + name, function(mod) {
            if (mod && mod.init) {
                //如果有init函数，初始化时则执行init();
                mod.init();
                console.info('init web');
            }
        });
    };

});

$(function() {
    autoLeftNav();
    $(window).resize(function() {
        autoLeftNav();
        console.log($(window).width())
    });

    // 风格切换
    $('.tpl-skiner-toggle').on('click', function() {
        $('.tpl-skiner').toggleClass('active');
    });

    $('.tpl-skiner-content-bar').find('span').on('click', function() {
        $('body').attr('class', $(this).attr('data-color'))
        saveSelectColor.Color = $(this).attr('data-color');
        // 保存选择项
        storageSave(saveSelectColor);

    });

    var saveSelectColor = {
        'Name': 'SelcetColor',
        'Color': 'theme-black'
    }

    // 判断用户是否已有自己选择的模板风格
    if (storageLoad('SelcetColor')) {
        $('body').attr('class', storageLoad('SelcetColor').Color)
    } else {
        storageSave(saveSelectColor);
        $('body').attr('class', 'theme-black')
    }

    // logout
    $('#js_logout').click(function(){

    });

    // 侧边菜单
    //$('.sidebar-nav-sub-title').on('click', function() {
    //    $(this).siblings('.sidebar-nav-sub').slideToggle(80)
    //        .end()
    //        .find('.sidebar-nav-sub-ico').toggleClass('sidebar-nav-sub-ico-rotate');
    //})

});


// 侧边菜单开关
function autoLeftNav() {
    $('.tpl-header-switch-button').on('click', function() {
        if ($('.left-sidebar').is('.active')) {
            if ($(window).width() > 1024) {
                $('.tpl-content-wrapper').removeClass('active');
            }
            $('.left-sidebar').removeClass('active');
        } else {

            $('.left-sidebar').addClass('active');
            if ($(window).width() > 1024) {
                $('.tpl-content-wrapper').addClass('active');
            }
        }
    })

    if ($(window).width() < 1024) {
        $('.left-sidebar').addClass('active');
    } else {
        $('.left-sidebar').removeClass('active');
    }
}

// 本地缓存
function storageSave(objectData) {
    localStorage.setItem(objectData.Name, JSON.stringify(objectData));
}

function storageLoad(objectName) {
    if (localStorage.getItem(objectName)) {
        return JSON.parse(localStorage.getItem(objectName))
    } else {
        return false
    }
}


