/**
 * Created by wangyong7 on 2017/1/13.
 */
define(function(require, exports, module) {

    exports.init = function() {
        // 页面数据
        //var pageData = {
        //    // ===============================================
        //    // 首页
        //    // ===============================================
        //    'index': function indexData() {
        //        $('#example-r').DataTable({
        //
        //            bInfo: false, //页脚信息
        //            dom: 'ti'
        //        });
        //
        //
        //        // ==========================
        //        // 百度图表A http://echarts.baidu.com/
        //        // ==========================
        //
        //        var echartsA = echarts.init(document.getElementById('tpl-echarts')),
        //        option = {
        //            tooltip: {
        //                trigger: 'axis'
        //            },
        //            grid: {
        //                top: '3%',
        //                left: '3%',
        //                right: '4%',
        //                bottom: '3%',
        //                containLabel: true
        //            },
        //            xAxis: [{
        //                type: 'category',
        //                boundaryGap: false,
        //                data: ['周一', '周二', '周三', '周四', '周五', '周六', '周日']
        //            }],
        //            yAxis: [{
        //                type: 'value'
        //            }],
        //            textStyle: {
        //                color: '#838FA1'
        //            },
        //            series: [{
        //                name: '邮件营销',
        //                type: 'line',
        //                stack: '总量',
        //                areaStyle: { normal: {} },
        //                data: [120, 132, 101, 134, 90],
        //                itemStyle: {
        //                    normal: {
        //                        color: '#1cabdb',
        //                        borderColor: '#1cabdb',
        //                        borderWidth: '2',
        //                        borderType: 'solid',
        //                        opacity: '1'
        //                    },
        //                    emphasis: {
        //
        //                    }
        //                }
        //            }]
        //        };
        //
        //        echartsA.setOption(option);
        //    }
        //}

        // 读取body data-type 判断是哪个页面然后执行相应页面方法，方法在下面。
        //var dataType = $('body').attr('data-type');

        //for (key in pageData) {
        //    if (key == dataType) {
        //        pageData[key]();
        //    }
        //}
    }
});