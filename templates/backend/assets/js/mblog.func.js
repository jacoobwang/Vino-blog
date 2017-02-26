/**
 * Created by wangyong7 on 2017/1/13.
 */
define(function(require, exports, module){

    /**
     * 表单验证
     */
    exports.validate = function(container){
        var _validate = true,
            error = 0;
        $(":input[data-validate]",container).each(function(){
            var val = $(this).val();
            //不为空
            if(!val || val ==0){
                error++;
            }
        });

        error && (_validate = false);
        console.info(_validate,'_validate');
        return _validate;
    };

    /**
     * 去掉对象中为空的字段
      * @param obj
     * @returns {*}
     */
    exports.removeNullData = function(obj){
        for(var i in obj){
            if(obj[i].length == 0) delete obj[i];
        }
        return obj;
    }
});