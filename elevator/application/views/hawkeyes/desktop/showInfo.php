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
    <title>首页</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url?>/assets/demo/favicon-89045932c816321dc6c9f378e8aa2956.ico"/>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3de8Nlpw48Flkn8YNmGPRcyt"></script>
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
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/user/user-right-97075555f622b53144afb5fd7bdc7b47.css"/>

</head>
<body>
<div id="main">
    
<div id="header">
    <h1><a href="<?php echo $base_url?>/../index.php/elevator/admin">&nbsp;</a></h1>
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
                        <i class="fa fa-line-chart fa-fw"></i><span>能耗分析</span>
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
                <div class="pull-left">
                    <div class="widget-box widget-info">
                        <div class="widget-content nopadding">
                            <div class="test-show"></div>
                            <div class="info-head-type">
                                <div class="row-fluid">
                                    <div class="span10 offset1">
                                        <div class="span2"><span id="info_span_alarm" class="badge badge-success cursor-point" onclick="showInfo(this);" sourceLabel="alarm">&nbsp;&nbsp;全部&nbsp;&nbsp;</span></div>
                                        
                                            <div class="span2"><span id="info_span_equipmentMeter" class="badge cursor-point" onclick="showInfo(this);" sourceLabel="equipmentMeter">&nbsp;&nbsp;保养&nbsp;&nbsp;</span></div>
                                        
                                        <div class="span2"><span id="info_span_equipment" class="badge cursor-point" onclick="showInfo(this);" sourceLabel="equipment">&nbsp;&nbsp;设备&nbsp;&nbsp;</span></div>
                                        
                                        <div class="span2"><span id="info_span_all" class="badge cursor-point"  onclick="showInfo(this);" sourceLabel="all">&nbsp;&nbsp;报警&nbsp;&nbsp;</span></div>
                                    </div>
                                </div>
                            </div>
                            <div id="infoListDiv">
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
            $('.cnContent').hide();
            $('.enContent').show();
        }else{
            $('.enContent').hide();
            $('.cnContent').show();
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

<div class="alert alert-warning text-center no-margin hide" style="z-index: 99999 !important;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    
    <a href="javascript:;" class="text-error" onclick="readInfos(this);"><i class="fa fa-bullhorn fa-lg"></i>：<span>1条新消息，点击查看</span></a>
    
</div>

    <ul class="recent-posts">
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="<?php echo $base_url?>/../equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297电梯加速度过高报警已经恢复，恢复时间：2015-04-26 16:13:28</span>
                        <span class="enContent" style="display: none">设备CNZ207297电梯加速度过高报警已经恢复，恢复时间：2015-04-26 16:13:28</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="945"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-04-26 16:13:28</span>
                </div>
            </li>
			
			<li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">保养</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="<?php echo $base_url?>/../equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297保养期限还剩余1个月 </span>
                        <span class="enContent" style="display: none">设备CNZ207297保养期限还剩余1个月 </span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="944"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-04-26 14:11:58</span>
                </div>
            </li>
      
        
            <li>
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">保养</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="<?php echo $base_url?>/../equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297电梯已保养，保养时间：2015-04-26 13:52:15</span>
                        <span class="enContent" style="display: none">设备CNZ207297电梯已保养，保养时间：2015-04-26 13:52:15</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="942"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-04-26 13:52:15</span>
                </div>
            </li>
        
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="<?php echo $base_url?>/../equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297电梯加速度过高报警已经恢复，恢复时间：2015-04-26 13:39:44</span>
                        <span class="enContent" style="display: none">设备CNZ207297电梯加速度过高报警已经恢复，恢复时间：2015-04-26 13:39:44</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="941"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-04-26 13:39:44</span>
                </div>
            </li>
        
                
                    <div class="info-head info-warning">
                        <span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">设备</span></span>
                    </div>
                    <div class="user-thumb-add">
                        <img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
                    </div>
                
                <div class="article-post-add">
                    
                    
                        <p><a href="<?php echo $base_url?>/../equipment/show/6"><strong>CNZ207297</strong></a></p>
                    
                    
                    <span class="info-cotent" >
                        <span class="cnContent" style="display: none">设备CNZ207297电梯目前总开机时间达1000小时，记录时间：2015-04-26 13:31:27</span>
                        <span class="enContent" style="display: none">设备CNZ207297电梯目前总开机时间达1000小时，记录时间：2015-04-26 13:31:27</span>
                        
                        
                            <a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="940"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>快照</span></a>
                            <a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>
                                收起</span></a>
                        
                        
                    </span>
                    <span class="info-time">2015-04-26 13:31:27</span>
                </div>
            </li>
        
        
            <li class="viewall">
                <span class="badge badge-inverse" onclick="loadMoreInfos(this);">&nbsp;&nbsp;
                显示更早10条&nbsp;&nbsp;</span>
            </li>
        
    </ul>

<span class="hidden" id="total" value="500"></span>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="person_info">
                                <div class="cover">
                                    <div class="headpic">
                                        <a class="tip-top" title="Administrator" href="javascript:;">
                                            <img class="img-circle" width="60" height="60" alt="Administrator" src="<?php echo $base_url?>/assets/demo/user-4188dcce14f44716ad954ead816ee162.png">
                                        </a>
                                    </div>
                                </div>
                                <div class="innerwrap">
                                    <div class="nameBox">
                                        <span class="name">Administrator</span>
                                    </div>
                                    <ul class="user_atten clearfix f20">
                                        <li class="line1">
                                            
                                                <a href="<?php echo $base_url?>/../index.php/elevator/equipment" class="txt1">
                                                    <span class="txt2">全部</span>
                                                    <strong>0</strong>
                                                </a>
                                            
                                        </li>
                                        <li class="line1">
                                            <a href="<?php echo $base_url?>/../alarm/index" class="txt1">
                                                <span class="txt2">报警中</span>
                                                <strong>0</strong>
                                            </a>
                                        </li>
                                        <li class="line1">
                                            
                                                <a href="<?php echo $base_url?>/../maintainRecord/index" class="txt1">
                                                    <span class="txt2">待保养</span>
                                                    <strong>0</strong>
                                                </a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="power_info" id="map_info">
                                <!--div class="cover">
                                    <span class="name">昨日耗电量 &nbsp;&nbsp;(度 )</span>
                                </div>
                                <div class="innerwrap">
                                    <div class="nameBox">
                                        <span class="name" id="yesterdayPowerConsumptionSpan">0.00</span>
                                    </div>
                                </div-->
                            </div>
							 
							<script type="text/javascript"> 
							var map = new BMap.Map("map_info");          // 创建地图实例  
							var point = new BMap.Point(116.404, 39.915);  // 创建点坐标  
							map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别 
						    var marker = new BMap.Marker(point);
							map.addOverlay(marker);
							</script> 
                            

                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <a href="<?php echo $base_url?>/../alarm/index">
                                <div class="alarm_untreated_info">
                                    <div class="cover">
                                        <span class="name">昨日新增报警</span>
                                    </div>
                                    <div class="innerwrap">
                                        <div class="nameBox">
                                            <span class="name" id="alarmCountSpan">0</span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="<?php echo $base_url?>/../alarm/index?status=treated">
                                <div class="alarm_untreated_info treated">
                                    <div class="cover">
                                        <span class="name">昨日恢复报警</span>
                                    </div>
                                    <div class="innerwrap">
                                        <div class="nameBox">
                                            <span class="name" id="treatedAlarmCountSpan">0</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="templete snapshot hidden">
        <div class="row-fluid">

        </div>
    </div>

    <ul class="ul-templete hidden">
    </ul>
    <a class="tip-top hidden" id="gotop" href="#top" title="返回顶部"><i class="fa fa-arrow-circle-up"></i></a>
    

            <div class="row-fluid">
        <div id="footer" class="span12">
            
        </div>
    </div>

    
    <div id="downloadClientAlertDialog" title="提示">
        <p><strong><em>手机客户端将于近期提供~<i class="fa fa-smile-o fa-lg"></i></em></strong></p>
    </div>
	
<script >

        $(window.document).scroll(function () {
            var availHeight = window.screen.availHeight;
            var elememntToTopHeihgt = $("#gotop").offset().top+$(document).scrollTop();
            if(elememntToTopHeihgt > availHeight){
                $("#gotop").removeClass('hidden');
            }else{
                $("#gotop").addClass('hidden');
            }
        });


        $('.span12 .pull-left').width($(".container-fluid .row-fluid .span12").width()-325);

        var windowWidth = window.screen.width;
        $(window).resize(function(){
            if(windowWidth!=window.screen.width){
                history.go(0);
                windowWidth = window.screen.width;
            }
        });

        $.ajax({
          url: "<?php echo $base_url?>/../desktop/getUserEquipmentStatistics",
          success: function(data){
                $('.user_atten li:eq(0) strong').text(data.equipmentCount);
                $('.user_atten li:eq(1) strong').text(data.alarmEquipmentCount);
                $('.user_atten li:eq(2) strong').text(data.needMaintenanceEquipmentCount);
            }
        });

        var max=parseInt("10");
        var total=parseInt($("#total").attr('value'));
        var liLength = $("#infoListDiv").find("li:[class!='viewall']").length;
        doAftermath(total,liLength);


        setInterval("loadInfoAjax()",60000);

        function loadInfoAjax(){
            var sourceLabel=$("span[id^='info_span_'].badge-success").attr('sourceLabel');
            $.get("<?php echo $base_url?>/../inbox/getUnReadInboxNumber?sourceLabel="+sourceLabel, function(data) {
                if(parseInt(data.inboxUnreadTotal)>0){
                    var spanText=data.inboxUnreadTotal;
                    switch (sourceLabel)
                    {
                    case 'alarm':
                        spanText=spanText+"条新报警消息，";
                        break;
                    case 'equipmentMeter':
                        spanText=spanText+"条新保养消息，";
                        break;
                    case 'equipment':
                        spanText=spanText+"条新设备消息，";
                        break;
                    case 'sampler':
                        spanText=spanText+"条新采集器消息，";
                        break;
                    case 'all':
                        spanText=spanText+"条新消息，";
                        break;
                    }
                    spanText=spanText+"点击查看";
                    $('.alert-warning', $('#infoListDiv')).find("span").text(spanText);
                    $('.alert-warning', $('#infoListDiv')).fadeIn('1000');
                    setTimeout(function(){$('.alert-warning', $('#infoListDiv')).fadeOut(8000);},5000);
                }
            });
        }

        function showInfo(obj){
            max=parseInt("10");

            var sourceLabel=$(obj).attr("sourceLabel");
            $("span[id^='info_span_']").removeClass('badge-success');
            $(obj).addClass('badge-success');
            var url = "<?php echo $base_url?>/admin/getInfo?sourceLabel="+sourceLabel+"&max="+max;

            $("#infoListDiv").load(url, function() {
                total=parseInt($("#total").attr('value'));
                liLength = $("#infoListDiv").find("li:[class!='viewall']").length;
                doAftermath(total,liLength);
            });
        }

        function showSnapshot(obj) {
            var alarmId = $(obj).attr('sourceid');
            var url = "<?php echo $base_url?>/../alarm/getAlarmSnapshot?alarmId="+alarmId;
            $(".templete.hidden").load(url, function() {
                $(obj).hide(10,function(){
                    $(obj).nextAll('a').removeClass('hidden');
                    var $templateDiv=$(".templete.hidden").clone();
                    $templateDiv.removeClass('hidden');
                    $(obj).closest('span.info-cotent').after($templateDiv);
                });
            });
        }

        function hideSnapshot(obj) {
            $(obj).prev('a').show(10,function(){
                $(obj).addClass('hidden');
                $(obj).closest('span.info-cotent').next('div').remove();
            });
        }

        function loadMoreInfos(obj){
            max="10";
            var $lastli = $(".recent-posts").find("li:[class!='viewall']").last();
            var offset = $(".recent-posts").find("li:[class!='viewall']").length;
            var sourceLabel=$("span[id^='info_span_'].badge-success").attr('sourceLabel');
            var url = "<?php echo $base_url?>/admin/getInfo?offset="+offset+"&sourceLabel="+sourceLabel+"&max="+max;
            var messageTip="已无更多数据";
            $(".ul-templete.hidden").load(url, function() {
                var $templateLi=$(".ul-templete.hidden").children('li').clone();
                $lastli.after($templateLi);
                if(($templateLi.length)< max){
                    $(obj).removeAttr('onclick');
                    $(obj).css('cursor','default');
                    $(obj).removeClass('badge-inverse');
                    $(obj).text(messageTip);
                }
            });
        }

        function readInfos(){
            $('.alert-warning', $('#infoListDiv')).fadeOut(20);
            var sourceLabel=$("span[id^='info_span_'].badge-success").attr('sourceLabel');
            total=parseInt($("#total").attr('value'));
            liLength = $("#infoListDiv").find("li:[class!='viewall']").length;

            $.get("<?php echo $base_url?>/../inbox/getUnReadInboxNumber?sourceLabel="+sourceLabel, function(data) {
                if(parseInt(data.inboxUnreadTotal)<20){
                    var url = "<?php echo $base_url?>/admin/getInfo?&sourceLabel="+sourceLabel;
                    $("#infoListDiv").load(url, function() {
                        doAftermath(total,liLength);
                    });
                }else{
                    var url = "<?php echo $base_url?>/admin/getInfo?sourceLabel="+sourceLabel+"&max="+max;

                    $("#infoListDiv").load(url, function() {
                        doAftermath(total,liLength);
                    });
                }
            });
        }

        function doAftermath(total,liLength){
            if(liLength < max || total<=max){
                var $loadSpan = $(".viewall span");
                $($loadSpan).removeAttr('onclick');
                $($loadSpan).css('cursor','default');
                $($loadSpan).removeClass('badge-inverse');
                $($loadSpan).text("已无更多数据");
            }
        }
		</script><script >
		var active = "desktop";
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

