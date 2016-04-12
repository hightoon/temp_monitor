<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"><!--<![endif]-->
<?php $base_url = base_url()."hawkeyes";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>保养记录</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url?>/assets/demo/favicon-89045932c816321dc6c9f378e8aa2956.ico"/>
    <script type="text/javascript">

        var closeLabel="关闭";
        var promptLabel="提示";
        var keywordsNullLabel="请输入搜索关键词";
        var keywordsValidateLabel="搜索关键词不能包含特殊字符";
        var searchingLabel="搜索中";
        var IllealPage="非法页码!";
        var pageOutRange="页码超出范围!";
    
</script>

    <script>
        imgContextPath="/hawkeyes";
    </script>
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/hawkeyes-77cc040b4de3d47775f57279552f3389.css"/>
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/main/application-45f26b600fb6e62f7c6d9e8d07ac2045.css"/>
    <script src="<?php echo $base_url?>/assets/hawkeyes-ff124a59fc282eef7975db5c84a2fcab.js" type="text/javascript" ></script>
    <script src="<?php echo $base_url?>/assets/main/application-361bdee6b3094f0e4e0b4f0bd8316245.js" type="text/javascript" ></script>
    <script src="<?php echo $base_url?>/assets/equipment/select2-6065cd9972703a7cc4cf248d274f48cd.js" type="text/javascript" ></script>
    
        <script src="<?php echo $base_url?>/assets/equipment/select2_locale_zh_CN-2713ce73989c55b44b940e08895836f8.js" type="text/javascript" ></script>
    
    
    <meta name="layout" content="main">
    
    
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/alarm/alarm-right-5945c63362e605cad0057da7e9f93259.css"/>
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/equipment_meter/equipment-meter-0eeea453cc9722227f5bcd97a93ef8f0.css"/>
    <script src="<?php echo $base_url?>/assets/echarts/echarts-init-a1bacc8e1bc65315693f4c710a557faf.js" type="text/javascript" ></script>
    <script src="<?php echo $base_url?>/assets/main/jquery.slimscroll.min-d66884744bac0473a301ad61d3ef82ab.js" type="text/javascript" ></script>
    <script src="<?php echo $base_url?>/assets/main/jquery.ba-resize.min-31407d309d0241bf7c10235f09fca88e.js" type="text/javascript" ></script>

</head>
<body>
<div id="main">
 <!-- /.navbar-static-side -->
        <?php $current_file = basename(__FILE__); require 'menu_top_left.php' ?>

    <div id="content">
        
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <div class="widget-box box" style="margin-top: 0">
                    <div class="widget-title box-header">
                        <span class="icon"><i class="fa fa-hdd-o"></i></span>
                        <ul class="nav nav-tabs">
                            <li id="choosetab_maintain_untreated" status="untreated" class="active"><a data-toggle="tab" href="#tab_untreated">待保养设备</a></li>
                            <li id="maintainStatistics" status="maintainStatistics"><a data-toggle="tab" href="#tab_maintain_statistics">统计</a></li>
                        </ul>
                    </div>
                <div class="box-icons">
                    <a class="expand-link">
                        <i class="fa fa-expand"></i>
                    </a>
                </div>
                <div class="no-move"></div>

                <div class="widget-content nopadding tab-content box-content">
                <div id="tab_untreated" class="tab-pane active">
                    <div class="widget-content" id="showContent" style="border-bottom: none;min-height: 450px;">
                        <div>
                            
                                <div class="buttons" style="margin-right: 20px;padding-bottom: 10px">
                                    <a href="../maintainRecord/index?format=xls&offset=0&max=1" class="btn">
                                        <i class="fa fa-file-excel-o"></i>导出
                                    </a>
                                </div>
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        
                                            <th>客户</th>
                                            
                                                <th>省份</th>
                                            
                                        
                                        <th>型号</th>
                                        <th>设备序列号</th>
                                        <th>发生时间</th>
                                        <th>管理员</th>
                                        
                                        <th>待保养项</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                            
                                                <td>浙江大学信电学院</td>
                                                
                                                    <td>浙江省</td>
                                                

                                            
                                            <td style="line-height: 30px">OTIS60A</td>
                                            <td>
                                                <a href="<?php echo $base_url?>/../index.php/Remote_Download/detail">
                                                    CNZ207297
                                                </a>
                                            </td>
                                            <td>2015-05-06 08:00:00</td>
                                            <td>1号</td>
                                            
                                            <td>
                                                <ul style="list-style: none;margin: 0px;">
                                                    
                                                        <li style="margin-top: 10px">
                                                            <span style="float: left;margin-left: 20px">【电机保养】已超10394小时</span>

                                                            
                                                                <span style="float: right;margin-right: 20px">
                                                                    <a href="#" id="addMaintainRecord_959" dataid="959" class="btn btn-success btn-mini tip-top">
                                                                        <i class="fa fa-wrench"></i>
                                                                        记录保养</a>
                                                                </span>
                                                            
                                                            <br style="clear: both">

                                                        </li>
                                                    
                                                        <li style="margin-top: 10px">
                                                            <span style="float: left;margin-left: 20px">【C级保养】已超8394小时</span>

                                                            
                                                                <span style="float: right;margin-right: 20px">
                                                                    <a href="#" id="addMaintainRecord_958" dataid="958" class="btn btn-success btn-mini tip-top">
                                                                        <i class="fa fa-wrench"></i>
                                                                        记录保养</a>
                                                                </span>
                                                            
                                                            <br style="clear: both">

                                                        </li>
                                                    
                                                        <li style="margin-top: 10px">
                                                            <span style="float: left;margin-left: 20px">【主机保养】已超2394小时</span>

                                                            
                                                                <span style="float: right;margin-right: 20px">
                                                                    <a href="#" id="addMaintainRecord_957" dataid="957" class="btn btn-success btn-mini tip-top">
                                                                        <i class="fa fa-wrench"></i>
                                                                        记录保养</a>
                                                                </span>
                                                            
                                                            <br style="clear: both">

                                                        </li>
                                                    
                                                </ul>
                                            </td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            

                        </div>
                    </div>
                    
                </div>
                <div id="tab_maintain_statistics" class="tab-pane">
                    <script type="text/javascript">

    var language;
    var cookieMessage = document.cookie;
    var lang=returnCookieValue(cookieMessage,"lang");
    if(lang != ""){
        switch (lang){
            case 'zh_CN':
                language='zh-CN';
                break;
            case 'en':
                language='en-US';
                break;
            default :
                language = navigator.language;
                break;
        }
    }else{
        var currentLang = navigator.language;
        if(!currentLang){
            currentLang = navigator.browserLanguage;
        }
        language=currentLang
    }
    $(function(){
        if(language=='en-US'){
            $('.enStatistics').css('margin-top','15%');
        }
    })
    function returnCookieValue(cookieValue,cookieName) {
        var returnCookieValue = "";
        var cookieNameIndex = cookieValue.indexOf(cookieName+"=");
        if (cookieNameIndex!=-1) {
            var cookieValueBeginIndex = cookieNameIndex + cookieName.length + 1;
            var cookieValueEndIndex = cookieValue.indexOf(";",cookieValueBeginIndex);
            if (cookieValueEndIndex==-1) {
                cookieValueEndIndex = cookieValue.length;
            }
            returnCookieValue = cookieValue.substring(cookieValueBeginIndex,cookieValueEndIndex);
        }
        return returnCookieValue;
    }

</script>

<div class="widget-content" id="showContent" style="border-bottom: none;min-height: 300px;">
    <div class="pull-left">
        <div class="row-fluid">
            <div class="span12">
                <div class="alarm_untreated_info_two" style="margin-left: 15%">
                    <div class="cover enStatistics">
                        <span class="name">待保养设备</span>
                    </div>
                    <div class="innerwrap">
                        <div class="nameBox">
                            <span class="name" id="needMaintenanceEquipmentSpan">1</span>
                        </div>
                    </div>
                </div>

                <div class="alarm_untreated_info_two treated" style="margin-left: 15%">
                    <div class="cover enStatistics">
                        <span class="name">待保养项</span>
                    </div>
                    <div class="innerwrap">
                        <div class="nameBox">
                            <span class="name" id="maintenancesSpan">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pull-left" style="margin-left:2.4%">
        <div class="row-fluid">
            <div class="span12">
                <div class="power_info" style="margin-top: 13px">
                    <div class="cover">
                        <span class="name">一周保养走势图</span>
                    </div>
                </div>
                <div class="statistics_info" id="maintenanceStatisticsDiv">

                </div>
            </div>
        </div>
    </div>
</div>





                </div>
            </div>

                </div>
            </div>
        </div>
    </div>
</div>




            <div class="row-fluid">
        <div id="footer" class="span12">
            
        </div>
    </div>
</div>

    </div>
    <div id="downloadClientAlertDialog" title="提示">
        <p><strong><em>手机客户端将于近期提供~<i class="fa fa-smile-o fa-lg"></i></em></strong></p>
    </div>
</div>
<script >
    var submitLabel="确定";
    var cancelLabel="取消";
    var dateList = [];
    var maintenanceList = [];
    var maintenanceItemList = [];
    var items = ["待保养设备","待保养项"];

    $('.statistics_info').width($(".widget-content").width()*0.82) ;
    $('.alarm_untreated_info_two').width($(".widget-content").width()*0.1) ;
    var windowWidth = window.screen.width;
    $(window).resize(function(){
        if(windowWidth!=window.screen.width){
            history.go(0);
            windowWidth = window.screen.width;
        }
    });

    $('.article-post-add').slimscroll({
        height: '80px',
        alwaysVisible:true
    });

    $.ajax({
        url:"../summary/getWeeklyAndYesterdaySummary",
            type: "GET",
            async:false,
            success: function(data) {
                var dataList = data.dataList;
                for(var i=0;i<(dataList.length);i++){
                    dateList.push(dataList[i].date);
                    maintenanceList.push(parseInt(dataList[i].maintenanceCount));
                    maintenanceItemList.push(parseInt(dataList[i].maintenanceItemsCount));
                }
            }
        });

        $("a[id^='addMaintainRecord_']").live('click',function(){
                showAjaxDialog("../maintainRecord/create?alarmId="+$(this).attr('dataid')
                                 , "addMaintainRecordForm"
                                 , "记录保养"
                                 , 550
                                 , 500);
             });
        eChartsInit.init("/hawkeyes");
        require(
            [
                'echarts',
                'echarts/chart/line'
            ],
            function (ec) {
                // 基于准备好的dom，初始化echarts图表
                var theme = eChartsInit.initThemeHelianthus();
                var $maintenanceStatisticsDiv = document.getElementById('maintenanceStatisticsDiv');
                var maintenanceStatisticsChart = ec.init($maintenanceStatisticsDiv,theme);
                var maintenanceStatisticsOption = eChartsInit.initAlarmStatisticsOption(items,maintenanceList,maintenanceItemList,dateList);
                maintenanceStatisticsChart.setOption(maintenanceStatisticsOption);
            }
        );
</script><script >
    var active = "maintainRecord";
    $("#"+active).addClass("active");
    if(active=='basicData' ||active=='organization'  ||active=='manage' || active=='statistics' || active=='permissions'){
      $("#"+active).addClass("open");
    }

    $("#").addClass("active");

    var contextPath="/hawkeyes";
    var eventBus;
    var typeaheadArray="".split(',');
    $("#downloadClientAlertDialog").dialog({
        autoOpen: false,
        width: 400,
        modal: false,
        buttons: {
            "确定": function () {
                $(this).dialog("close");
            }
        }
    });
</script>
</body>
</html>

