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
    <title>报警列表</title>
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
    
    
    <script src="<?php echo $base_url?>/assets/echarts/echarts-init-a1bacc8e1bc65315693f4c710a557faf.js" type="text/javascript" ></script>
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/alarm/alarm-right-5945c63362e605cad0057da7e9f93259.css"/>

</head>
<body>
<div id="main">
    
<div id="header">
    <h1><a href="<?php echo $base_url?>/../index.php/elevator/admin">&nbsp;</a></h1>
</div>

    
        <div id="search" class="input-append">
            <input type="text" placeholder="搜索" onkeypress="if (event.keyCode == 13) search(this);" value="" sControllerName="alarm" activeController="alarm"/>
            <button type="submit" class="tip-left" id="searchButton" data-original-title="搜索" onclick="search(this);" sControllerName="alarm" activeController="alarm">
                <i class="icon-search icon-white"></i>
            </button>
        </div>
    


<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav pull-right">
        <li class="dropdown">
            <ul class="dropdown-menu">
                <li>
                    
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-vimeo-square"></i> <span class="text">Administrator</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                
                    <li>
                        <a href="<?php echo $base_url?>/../index.php/elevator/changePwd">
                            <i class="fa fa-lock fa-fw"></i>
                            <span style="padding-left: 5px;">修改密码</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url?>/../index.php/elevator/personalInfo">
                            <i class="fa fa-info-circle fa-fw"></i>
                            <span style="padding-left: 5px;">个人资料</span>
                        </a>
                    </li>
                
                <li>
                    <a href="<?php echo $base_url?>/../index.php/elevator/index">
                        <i class="fa fa-sign-out fa-fw"></i>
                        <span style="padding-left: 5px;">退出</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>


    
<div id="sidebar">
    <a href="#" class="visible-phone"><i class="fa fa-home"></i> 首页</a>
    <ul>
        
            <li id="desktop">
                <a href="<?php echo $base_url?>/../index.php/elevator/admin"><i class="fa fa-home fa-fw"></i><span>首页</span></a>
            </li>
        
        
            <li id="equipment">
                
                    <a href="<?php echo $base_url?>/../index.php/elevator/equipment"><i class="fa fa-hdd-o fa-fw"></i><span>设备</span></a>
                
            </li>
        
        
        
            <li id="alarm">
                <a href="<?php echo $base_url?>/../index.php/elevator/alarm">
                    <i class="fa fa-exclamation-circle fa-fw"></i><span>报警</span>
                </a>
            </li>
        
        
        <li id="maintainRecord">
            <a href="<?php echo $base_url?>/../index.php/elevator/maintainRecord"><i
                    class="fa fa-wrench fa-fw"></i><span>保养</span></a>
        </li>
        
        
            
                <li id="needEnergyEquipmentPage">
                    <a href="<?php echo $base_url?>/../index.php/elevator/needEnergy">
                        <i class="fa fa-line-chart fa-fw"></i><span>节能分析</span>
                    </a>
                </li>
            
        
            <li id="organization" class="submenu">
                <a href="#"><i class="fa fa-codepen fa-fw"></i><span>组织</span></a>
                <ul>
                    <li id="myInfo"><a href="<?php echo $base_url?>/../index.php/elevator/personalInfo"><i
                            class="fa fa-user goright fa-fw"></i>我的账户</a></li>
                    
                        <li id="manageMembers"><a href="<?php echo $base_url?>/../index.php/elevator/manageMembers" href=""><i
                                    class="fa fa-file-text-o goright fa-fw"></i>人员管理</a></li>
                    
                    
                        
                            <li id="CLIENT"><a href="<?php echo $base_url?>/../index.php/elevator/client" href=""><i
                                        class="fa fa-file-text-o goright fa-fw"></i>
                                    客户
                                </a></li>
                        
                    
                    
                    
                </ul>
            </li>
        
        
        
        
    </ul>
</div>



    <div id="content">
        
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="">
                <div class="widget-box box">
                    <div class="widget-title box-header">
                        <div class="box-name">
                            <span class="icon"><i class="fa fa-exclamation-circle"></i></span>
                            <ul class="nav nav-tabs">
                                <li id="choosetab_alarm_untreated" status="untreated"><a data-toggle="tab" href="#tab_untreated">报警中</a></li>
                                <li id="choosetab_alarm_treated" status="treated"><a data-toggle="tab" href="#tab_treated">已恢复</a></li>
                                
                                <li id="alarmStatistics" status="alarmStatistics"><a data-toggle="tab" href="#tab_alarm_statistics">统计</a></li>
                            </ul>
                        </div>
                        <div class="box-icons">
                            <a class="expand-link">
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                        <div class="no-move"></div>
                    </div>
                    <div class="widget-content nopadding tab-content box-content">
                        <div id="tab_untreated" class="tab-pane">
                        </div>
                        <div id="tab_treated" class="tab-pane">
                        </div>
                        
                        <div id="tab_alarm_statistics" class="tab-pane">
                            <script type="text/javascript">

    var language ="zh_CN";
    $(function(){
        if(language=='en_US'){
            $('.enStatistics').css('margin-top','13%');
        }
    })

</script>

<div class="widget-content" id="showContent" style="border-bottom: none;min-height: 300px;">
<div class="pull-left">
    <div class="row-fluid">
        <div class="span12">
            <div class="alarm_untreated_info_two" style="margin-left: 15%">
                <div class="cover enStatistics">
                    <span class="name">昨日新增报警</span>
                </div>
                <div class="innerwrap">
                    <div class="nameBox">
                        <span class="name" id="alarmCountSpan">0</span>
                    </div>
                </div>
            </div>

            <div class="alarm_untreated_info_two treated" style="margin-left: 15%">
                <div class="cover enStatistics">
                    <span class="name">昨日恢复报警</span>
                </div>
                <div class="innerwrap">
                    <div class="nameBox">
                        <span class="name" id="treatedAlarmCountSpan">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pull-right">
    <div class="row-fluid">
        <div class="span12">
            <div class="power_info" style="margin-top: 13px">
                <div class="cover">
                    <span class="name">一周报警走势图</span>
                </div>
            </div>
            <div class="statistics_info" id="alarmStatisticsDiv">

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

<script type="text/javascript">
    $(function(){
        var dateList = [];
        var untreatedList = [];
        var treatedList = [];
        var items = ["新增报警","已恢复报警"];

        $.ajax({
            url:"../summary/getWeeklyAndYesterdaySummary",
            type: "GET",
            async:false,
            success: function(data) {
                var dataList = data.dataList;
                for(var i=0;i<(dataList.length);i++){
                    dateList.push(dataList[i].date);
                    untreatedList.push(parseInt(dataList[i].alarmUntreated));
                    treatedList.push(parseInt(dataList[i].alarmTreated));
                }
                $('#alarmCountSpan').text(data.yesterdayAlarmUntreatedTotal);
                $('#treatedAlarmCountSpan').text(data.yesterdayAlarmTreatedTotal);
            }
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
                var $alarmStatisticsDiv = document.getElementById('alarmStatisticsDiv');
                var alarmStatisticsChart = ec.init($alarmStatisticsDiv,theme);
                var alarmStatisticsOption = eChartsInit.initAlarmStatisticsOption(items,untreatedList,treatedList,dateList);
                alarmStatisticsChart.setOption(alarmStatisticsOption);
            }
        );
//        $('.span12 .pull-left').width($(".container-fluid .row-fluid .span12").width()-325);
        $('.statistics_info').width($(".widget-content").width()*0.82) ;
        $('.alarm_untreated_info_two').width($(".widget-content").width()*0.1) ;

        var windowWidth = window.screen.width;
        $(window).resize(function(){
            if(windowWidth!=window.screen.width){
                history.go(0);
                windowWidth = window.screen.width;
            }
        });

        $(".pagination a").live("click",function(){
            var url = $(this).attr("data");
            if(url){
                var status=$("li[id^='choosetab_alarm_'].active").attr('status');
//                App.blockUI($("#tab_"+status),10,'数据加载中');
                $("#tab_"+status).load(url,function(){
//                    App.unblockUI($("#tab_"+status));
                });
            }
        });

        var status="";
        if(status=='untreated'){
            $("#choosetab_alarm_untreated,#tab_untreated").addClass("active");
        }else if(status=='treated'){
            $("#choosetab_alarm_treated,#tab_treated").addClass("active");
        }else if(status=='alarmStatistics'){
            $("#alarmStatistics,#tab_alarm_statistics").addClass("active");
        }else{
            $("#choosetab_alarm_untreated_long_time,#tab_untreated_long_time").addClass("active");
        }

        $("li[id^='choosetab_']").click(function(){
            var url = "../alarm/list?status="+$(this).attr("status");
            var $mbder=$("div[id=tab_"+$(this).attr("status")+"]");
            $mbder.load(url);
        });
        $("li[id='alarmStatistics']").click(function(){
            $('.statistics_info').width($(".widget-content").width()*0.84) ;
            $('.alarm_untreated_info_two').width($(".widget-content").width()*0.1) ;
        });

        $("li[id='choosetab_alarm_untreated']").click();
        $('.nav-tabs a:first').tab('show');

        $("a[id^='sendSMS_']").live('click',function(){
            var title = "发送报警";
            var url = "../alarm/show?alarmId="+$(this).attr('dataid');
            var dialog =  $("<div id='ajaxDialog' title='"+title+"'></div>");
            dialog.load(url);
            dialog.dialog({
                width:550,
                height:220,
                modal:true,
                resizable:false,
                close: function(event, ui) { $(this).remove();}
            });
            $(".ui-dialog").css('top','20%');
            dialog=null;
        });
    });

</script>

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
    var active = "alarm";
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

