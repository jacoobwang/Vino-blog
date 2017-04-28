/**
 * Created by wangyong7 on 2017/1/17.
 */
define(function(require, exports, module){
    var RestApi = require('./bk.rest'),
        Fun     = require('./bk.func'),
        C       = require('./bk.config'),
        editormd = require("editormd");

    require("./editor.md/plugins/image-dialog/image-dialog");

    var Editor;

    function getData(){
        var cates = [];
        $('input[name="category"]').each(function(){
            if($(this).prop("checked") == true) {
                cates.push($(this).val());
            }
        });
        var data = {
            title   : $('#post_title').val(),
            content : Editor.getHTML(),
            md      : Editor.getMarkdown(),
            category: cates,
            tags    : $("#tags").val(),
            thumb   : $("#thumbnail_cotainer img").attr("src") || '',
            origin  : ''
        }
        if(data.thumb){
            data.origin = data.thumb.replace(/thumbnail\//,'');
        }
        return data;
    }


    var Events = {
        // 添加
        addPost:function(){
            $('#js_save_btn').on('click', function(){
                var obj = getData();

                if(obj.title.length === 0){
                    alert('亲，好像忘记填写标题咯');
                    return false;
                }
                if(obj.content.length === 0){
                    alert('亲，写点内容再发表吧');
                    return false;
                }

                RestApi.addPost(obj).success(function(data){
                    if(data.errno == 0) {
                        alert('添加成功');
                        return;
                    }
                })
            })
        },
        // 更新
        updatePost:function(){
            $('#js_update_btn').on('click', function(){
                var obj = getData();
                obj.id = $('#post_id').val();

                if(obj.title.length === 0){
                    alert('亲，好像忘记填写标题咯');
                    return false;
                }
                if(obj.content.length === 0){
                    alert('亲，写点内容再发表吧');
                    return false;
                }

                RestApi.updatePost(obj).success(function(data){
                    if(data.errno == 0) {
                        alert('更新成功');
                        return;
                    }
                })
            })
        },
        // 缩略图
        setThumbnail:function(){
            $('#doc-prompt-toggle').on('click', function() {
                var dialogContent = '<form action="//'+location.host+'/admin/upload" target="upload-image-iframe" method="post" ' +
                        'enctype="multipart/form-data" class="editormd-form"><iframe name="upload-image-iframe" id="upload-image-iframe"></iframe>' +
                            '<label>图片地址</label><input type="text" data-url=""><div class="editormd-file-input">' +
                            '<input type="file" name="upload-image-file" accept="image/*"><input type="submit" value="本地上传"></div></form>';
                var dialog = Editor.createDialog({
                    title      : '缩列图',
                    width      :  465 ,
                    height     :  172,
                    name       : 'dialogName',
                    content    : dialogContent,
                    mask       : true,
                    drag       : true,
                    lockScreen : true,
                    maskStyle  : {
                        opacity         : 0.1,
                        backgroundColor : '#fff'
                    },
                    buttons : {
                        enter : ['確定', function() {
                            var url  = this.find("[data-url]").val();

                            if (url === "")
                            {
                                alert('Error: picture url address can\'t be empty');
                                return false;
                            }
                            $("#thumbnail_cotainer").html("<img style=\"width:100%;height:100%;\" src=\""+ url +"\">");
                            this.hide().lockScreen(false).hideMask();
                            return false;
                        }],

                        cancel : ['取消', function() {
                            this.hide().lockScreen(false).hideMask();
                            return false;
                        }]
                    }
                });

                var fileInput  = dialog.find("[name=\"upload-image-file\"]");

                var loading = function(show){
                    var _loading = dialog.find(".editormd-dialog-mask");
                    _loading[(show) ? "show" : "hide"]();
                };

                fileInput.bind("change", function() {
                    var fileName  = fileInput.val();
                    var isImage   = new RegExp("(\\.(webp|jpg|jpeg|gif|bmp|png))$");

                    if (fileName === "")
                    {
                        alert("Error: upload pictures cannot be empty!");
                        return false;
                    }

                    if (!isImage.test(fileName))
                    {
                        alert("Error: only allows to upload pictures file, upload allowed image file format:webp|jpg|jpeg|gif|bmp|png");
                        return false;
                    }

                    loading(true);

                    var submitHandler = function(){
                        var uploadIframe = document.getElementById("upload-image-iframe");
                        uploadIframe.onload = function() {

                            loading(false);

                            var body = (uploadIframe.contentWindow ? uploadIframe.contentWindow : uploadIframe.contentDocument).document.body;
                            var json = (body.innerText) ? body.innerText : ( (body.textContent) ? body.textContent : null);

                            json = (typeof JSON.parse !== "undefined") ? JSON.parse(json) : eval("(" + json + ")");

                            if (json.success === 1)
                            {
                                dialog.find("[data-url]").val(json.thumb);
                            }
                            else
                            {
                                alert(json.message);
                            }

                            return false;
                        }
                    }
                    dialog.find("[type=\"submit\"]").bind("click", submitHandler).trigger('click');
                });
            });
        },
        // 初始化
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

    exports.init = function(){
        Events.init();

        var content = '';
        if(typeof post !== 'undefined') {
            content = decodeURIComponent(post.content);
            var cates = post.category.split(',');
            for( var i=0; i<cates.length; i++) {
                $('input[name="category"]:checkbox[value='+cates[i]+']').prop("checked",true);
            }
        }

        Editor = editormd("test-editormd", {
            width: "100%",
            height: 800,
            path : C.folder +'assets/js/editor.md/lib/',
            markdown : content,
            //toolbar  : false,             //关闭工具栏
            saveHTMLToTextarea : true,
            htmlDecode : false,            // 开启HTML标签解析，为了安全性，默认不开启
            tex : false,                   // 开启科学公式TeX语言支持，默认关闭
            //previewCodeHighlight : false,  // 关闭预览窗口的代码高亮，默认开启
            flowChart : true,              // 疑似Sea.js与Raphael.js有冲突，必须先加载Raphael.js，Editor.md才能在Sea.js下正常进行；
            sequenceDiagram : true,        // 同上
            imageUpload : true,
            imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL : C.root+"admin/upload",
            onload : function() {
                console.log('onload', this);
            }
        });
    }
});
