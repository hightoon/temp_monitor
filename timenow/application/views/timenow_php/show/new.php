<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="no-js ie6">
<![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7">
<![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8">
<![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->
<?php $base_url = base_url()."hawkeyes";?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>设备详情</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url?>
/assets/demo/favicon-89045932c816321dc6c9f378e8aa2956.ico"/>
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
<link rel="stylesheet" href="<?php echo $base_url?>
/assets/hawkeyes-77cc040b4de3d47775f57279552f3389.css"/>
<link rel="stylesheet" href="<?php echo $base_url?>
/assets/main/application-45f26b600fb6e62f7c6d9e8d07ac2045.css"/>
<script src="<?php echo $base_url?>/assets/hawkeyes-ff124a59fc282eef7975db5c84a2fcab.js" type="text/javascript" ></script>
<script src="<?php echo $base_url?>/assets/main/application-361bdee6b3094f0e4e0b4f0bd8316245.js" type="text/javascript" ></script>
<script src="<?php echo $base_url?>/assets/equipment/select2-6065cd9972703a7cc4cf248d274f48cd.js" type="text/javascript" ></script>
<script src="<?php echo $base_url?>/assets/equipment/select2_locale_zh_CN-2713ce73989c55b44b940e08895836f8.js" type="text/javascript" ></script>
<meta name="layout" content="main">
<script type="text/javascript">
        var submitLabel="确定";
        var loadLabel="加载";
        var cancelLabel="取消";
        var saveLabel="保存";
        var graphLabel="曲线图";
         var unitLabel="单位";
         var highShutdownLabel="高停机值";
         var highAlarmLabel="高报警值";
         var lowAlarmLabel="低报警值";
         var lowShutdownLabel="低停机值";
        var noDataLabel="没有数据";
        var nameNull="姓名不能为空";
        var phoneNull="手机号码不能为空";
        var phoneValidate="请输入有效的手机号码!";
        var alarmLabel="报警";
</script>
<script type="text/javascript">
        $(function(){
            var tag="设备";
            if(tag=='Equipment'){
                $('.labelContent').css('width','140px');
                $('.runState').css('width','35%');
                $('.tpc').css('font-size','14px');
            }
        })
</script>
<link rel="stylesheet" href="<?php echo $base_url?>
/css/iCheckSkin/skins/square/blue.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $base_url?>
/assets/equipment/equipment-show-5086bfa584b04379726f01bb88eeea57.css"/>
<style>
    .show-left .info-content p:first-child {
        padding-top: 10px;
    }
    .show-left .info-content .info-item {
        padding:0;
    }
    .labelContent{
        width: 100px;
        float: left;
        text-align: right;
        margin-bottom: 0px;
    }
    .help-inline {
        display: block;
    }
</style>
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
			<i class="fa fa-vimeo-square"></i><span class="text">administrator</span>
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
			<a href="<?php echo $base_url?>/../index.php/elevator/maintainRecord"><i class="fa fa-wrench fa-fw"></i><span>保养</span></a>
			</li>
			<li id="needEnergyEquipmentPage">
			<a href="<?php echo $base_url?>/../index.php/elevator/needEnergy">
			<i class="fa fa-line-chart fa-fw"></i><span>节能分析</span>
			</a>
			</li>
			<li id="organization" class="submenu">
			<a href="#"><i class="fa fa-codepen fa-fw"></i><span>组织</span></a>
			<ul>
				<li id="myInfo"><a href="<?php echo $base_url?>/../index.php/elevator/personalInfo"><i class="fa fa-user goright fa-fw"></i>我的账户</a></li>
				<li id="manageMembers"><a href="<?php echo $base_url?>/../index.php/elevator/manageMembers" href=""><i class="fa fa-file-text-o goright fa-fw"></i>人员管理</a></li>
				<li id="CLIENT"><a href="<?php echo $base_url?>/../index.php/elevator/client" href=""><i class="fa fa-file-text-o goright fa-fw"></i>
                                    客户
				</a></li>
			</ul>
			</li>
		</ul>
	</div>
	<div id="content">
		<script src="<?php echo $base_url?>/assets/dygraph/dygraph-dev-4af411506d173004e8ab1ff1ff90e250.js" type="text/javascript" ></script>
		<script src="<?php echo $base_url?>/assets/equipment/monitor-5dcc16f7717785ba8ba12dd1682fec20.js" type="text/javascript" ></script>
		<script src="<?php echo $base_url?>/assets/echarts/echarts-init-a1bacc8e1bc65315693f4c710a557faf.js" type="text/javascript" ></script>
		<div id="breadcrumb">
			<a href="<?php echo $base_url?>/../index.php/elevator/admin" title="返回首页" class="tip-top"><i class="icon-home"></i>首页</a>
			<a href="<?php echo $base_url?>/../index.php/elevator/equipment">设备</a>
			<a href="#" class="current">设备详情 CNZ207297</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box" id="lockModalDiv">
						<div class="widget-title">
							<span class="icon"><i class="fa fa-hdd-o"></i></span>
							<ul class="nav nav-tabs">
								<li class=""><a data-toggle="tab" id="detail" href="#show_detail">设备详情</a></li>
								<li><a data-toggle="tab" id="realTimeData" href="#show_realTimeData">实时数据</a></li>
								<li><a data-toggle="tab" id="historyData" href="#show_historyData">历史数据</a></li>
								<li><a data-toggle="tab" id="energyData" href="#show_energyData">节能分析</a></li>
								<li><a data-toggle="tab" id="reportOperating" href="#show_reportOperating">运行记录</a></li>
								<li><a data-toggle="tab" id="maintainRule" href="#show_maintainRule">保养项</a></li>
							</ul>
							<div class="buttons" style="margin-top: -50px;margin-right:10px">
								<a class="btn btn-mini tip-top" id="getModelMaintainRule" dataid="6" href="#"><i class="icon-edit"></i><span class="text">初始化保养规则</span></a>
							</div>
						</div>
						<div class="widget-content nopadding tab-content">
							<div id="show_detail" class="tab-pane">
								<div class="row-fluid">
									<div class="span12">
										<div class="show-left">
											<div class="info-content form-horizontal" style="margin: 0;border-top: 2px solid #4632AB;font-size: 14px">
												<div style="text-align: center;margin: 10px 0 10px 0">
													<div style="float: left;width: 30%" class="runState">
														运行状态
													</div>
													<div style="float: left;width: 30%">
														报警
													</div>
													<div style="float: left;width: 30%">
														保养
													</div>
													<div style="float: left;width: 30%" class="runState">
														<img id="imgRunStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/disconnect-7893da335c1584ed6a1dbfa6522ff7ee.png">
													</div>
													<div style="float: left;width: 30%">
														<a class="alarmSearch" href="<>" dataid="6" status="alarm">
														<img id="imgAlarmStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/bulb-green-4617a1659f29a5b0909ed0728cf5bf38.png">
														</a>
													</div>
													<div style="float: left;width: 30%">
														<a class="alarmSearch" href="#" dataid="6" status="service">
														<img id="imgMaintainStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/bulb-green-4617a1659f29a5b0909ed0728cf5bf38.png">
														</a>
													</div>
													<div style="clear: both">
													</div>
												</div>
												<div class="alert alert-error hide">
													<button class="close" data-dismiss="alert">
													<i class="fa fa-times"></i>
													</button>
													<span>
													</span>
												</div>
											</div>
											<div class="info-head">
												<span class="info-type">CNZ207297</span>
											</div>
											<div class="info-content form-horizontal">
												<p class="info-item">
													<label class="labelContent">名称：</label><span>奥特斯电梯</span>
												</p>
												<p class="info-item">
													<label class="labelContent">设备型号：</label>BLT60A
												</p>
												<p class="info-item">
													<label class="labelContent">控制器：</label>奥特斯-标准
												</p>
												<p class="info-item">
													<label class="labelContent">使用者：</label>杰威制刷
												</p>
												<p class="info-item">
													<label class="labelContent">所在区域：</label>浙江省-杭州市
												</p>
												<p class="info-item">
													<label class="labelContent">SSN：</label>201503120300003494
												</p>
												<p class="info-item">
													<label class="labelContent">额定功率：</label>45.0 KW
												</p>
												<p class="info-item">
													<label class="labelContent">额定电压：</label>380.0 V
												</p>
												<p class="info-item">
													<label class="labelContent">数据上报时间：</label>
													<span id="latestReportDataTime_6">
                                                2015-11-03 16:40
													</span>
												</p>
											</div>
											<div class="info-head">
												<span class="info-type tpc">总耗电量：</label>92723.90 度</span>
											</div>
											<div class="info-content" style="padding-top:3px ">
												<div id="powerStatisticsDiv" style="height: 210px;">
												</div>
												<script type="text/javascript">
                    $(document).ready(function(){
                        var dateList = [];
                        var itemDescriptionList = [];
itemDescriptionList.push('耗电量');var item0 = [];
                $.ajax({
            url:"/hawkeyes/summary/getEquipmentWeeklySummary?equipmentid=6",
            type: "GET",
            async:false,
            success: function(data) {
                var dataList = data.dataList;
                $.each(dataList,function(i,o){
                    dateList.push(o.date);item0.push(o.powerConsumption.toFixed(2));
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
                    var $echartsStatisticsDiv = document.getElementById('powerStatisticsDiv');
                    var statisticsChart = ec.init($echartsStatisticsDiv,theme);
                var statisticsOption = eChartsInit.initPowerStatisticsOption('过去7天耗电量(度)',itemDescriptionList,item0,dateList);
                    statisticsChart.setOption(statisticsOption);
                }
            );
             }
                  });
                 });</script>
											</div>
											<div style="clear: both">
											</div>
											<div class="info-head">
												<span class="info-type">报警联系人
												<a class="btn-mini tip-top" href="#" id="addAlarmContact"><i class="fa fa-plus-circle fa-2x"></i></a>
												</span>
											</div>
											<div class="info-content" style="padding-top:10px ">
												<div class="empty-panel" style="text-align: center;padding: 0">
													<span>尚未添加报警联系人</span>
												</div>
											</div>
										</div>
										<div class="show-right pull-right">
											<div class="info-head">
												<span class="info-type">设备台账</span>
											</div>
											<div class="test-show">
											</div>
											<div class="info-head-type">
												<div class="row-fluid">
													<div class="span6 offset4">
														<div class="span3">
															<span id="info_span_alarm" class="badge badge-success cursor-point" onclick="showInfo(this);" sourcelabel="alarm">&nbsp;&nbsp;报警&nbsp;&nbsp;</span>
														</div>
														<div class="span3">
															<span id="info_span_maintain" class="badge cursor-point" onclick="showInfo(this);" sourcelabel="maintainRecord">&nbsp;&nbsp;保养记录&nbsp;&nbsp;</span>
														</div>
														<div class="span3">
															<span id="info_span_all" class="badge cursor-point" onclick="showInfo(this);" sourcelabel="all">&nbsp;&nbsp;全部&nbsp;&nbsp;</span>
														</div>
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
            $('.info-cotent').each(function(){
                var content=$(this).find('.enContent').text();
                if(content!=''){
                    $(this).text(content);
                }
            });
        }else{
            $('.info-cotent').each(function(){
                var content=$(this).find('.cnContent').text();
                if(content!=''){
                    $(this).text(content);
                }
            });
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
												<ul class="recent-posts" style="min-height:500px">
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:39:51</span>
														<span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:39:51</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1806"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:39:51</span>
													</div>
													</li>
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:39:41发生排气温度高预警报警,现场值：1℃</span>
														<span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:39:41发生排气温度高预警报警,现场值：1℃</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1806"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:39:41</span>
													</div>
													</li>
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:32:20</span>
														<span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:32:20</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1805"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:32:20</span>
													</div>
													</li>
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:32:10发生排气温度高预警报警,现场值：1℃</span>
														<span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:32:10发生排气温度高预警报警,现场值：1℃</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1805"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:32:10</span>
													</div>
													</li>
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:28:40</span>
														<span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:28:40</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1804"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:28:40</span>
													</div>
													</li>
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:28:30发生排气温度高预警报警,现场值：1℃</span>
														<span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:28:30发生排气温度高预警报警,现场值：1℃</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1804"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:28:30</span>
													</div>
													</li>
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:26:49</span>
														<span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:26:49</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1803"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:26:49</span>
													</div>
													</li>
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:26:39发生排气温度高预警报警,现场值：1℃</span>
														<span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:26:39发生排气温度高预警报警,现场值：1℃</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1803"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:26:39</span>
													</div>
													</li>
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:23:09</span>
														<span class="enContent" style="display: none">设备CNZ207297排气温度高预警报警已经恢复，恢复时间：2015-10-24 04:23:09</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1802"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:23:09</span>
													</div>
													</li>
													<li>
													<div class="info-head info-warning">
														<span><i class="fa fa-exclamation-circle text-warning"></i><span class="info-type">报警</span>
														</span>
													</div>
													<div class="user-thumb-add">
														<img width="60" height="45" alt="报警图片" src="<?php echo $base_url?>/assets/demo/alarm-52d6c5e77bfc5f4c0360a23f82e57ad3.png">
													</div>
													<div class="article-post-add">
														<span class="info-cotent">
														<span class="cnContent" style="display: none">设备CNZ207297于2015-10-24 04:22:59发生排气温度高预警报警,现场值：1℃</span>
														<span class="enContent" style="display: none">设备CNZ207297于2015-10-24 04:22:59发生排气温度高预警报警,现场值：1℃</span>
														<a class="tip-right" href="javascript:;" title="查看当时设备快照" onclick="showSnapshot(this);" sourceid="1802"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-image"></i>报警点快照</span></a>
														<a class="tip-right hidden" href="javascript:;" title="收起设备快照" onclick="hideSnapshot(this);"><span>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-double-up"></i>收起</span></a>
														</span>
														<span class="info-time">2015-10-24 04:22:59</span>
													</div>
													</li>
												</ul>
												<div class="row-fluid">
													<div class="span12">
														<div class="pagination agination-right alternate page-style">
															<ul>
																<li class="active"><a href="#">1</a></li>
																<li><a href="" "<?php echo $base_url?>/../index.php/elevator/detail?sourceLabel=alarm&amp;offset=10&amp;max=10&amp;sort=id&amp;order=desc">2</a></li>
																<li><a href="" "<?php echo $base_url?>/../index.php/elevator/detail?sourceLabel=alarm&amp;offset=20&amp;max=10&amp;sort=id&amp;order=desc">3</a></li>
																<li><a href="" "<?php echo $base_url?>/../index.php/elevator/detail?sourceLabel=alarm&amp;offset=30&amp;max=10&amp;sort=id&amp;order=desc">4</a></li>
																<li><a href="#">..</a></li>
																<li><a href="<?php echo $base_url?>/../index.php/elevator/detail?sourceLabel=alarm&amp;offset=490&amp;max=10&amp;sort=id&amp;order=desc">50</a></li>
																<li><a href="<?php echo $base_url?>/../index.php/elevator/detail?sourceLabel=alarm&amp;offset=10&amp;max=10&amp;sort=id&amp;order=desc">下一页</a></li>
																&nbsp;&nbsp;
																<div class="input-prepend input-append">
																	<span class="add-on">跳转到</span>
																	<input style="max-width:25px;" id="gopage" onkeypress="if (event.keyCode == 13) gopage(this);" type="text" value="">
																	<span class="add-on">页</span>
																</div>
																<input type="hidden" id="maxpage" value="50"/>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="show_flash" class="tab-pane">
							</div>
							<div id="show_realTimeData" class="tab-pane">
							</div>
							<div id="show_historyData" class="tab-pane">
							</div>
							<div id="show_energyData" class="tab-pane">
								<script type="text/javascript">
        var submitLabel="确定";
    var voltageNull="额定电压不能为空";
    var powerNull="额定功率不能为空";
    var powerValidate="额定功率只能为数字";
    var powerMin="额定功率最小值为0.0";
    var voltageMin="额定电压最小值为1";
    var voltageValidate="额定电压只能为整数";
    var elecPriceNull="单位电价不能为空";
    var displacementNull="额定排气量不能为空";
    var displacementValidate="额定排气量只能为数字";
    var elecPriceValidate="单位电价只能为数字";
    var displacementMin="额定排气量最小值为0.0";
    var elecPriceMin="单位电价最小值为0.0";
    $(function(){
        var tag="提示";
        if(tag=='Prompt'){
            $('.paramsSetText').css('width','120px');
        }
    })
								</script>
								<div class="container-fluid">
									<div class="row-fluid go-bottom">
										<div class="span12">
											<div class="portlet">
												<input type="hidden" name="jsonData" id="jsonData" value=""/>
												<div class="portlet-body">
													<div class="row-fluid">
														<div class="span8 offset2">
															<div id="compressorReport">
																<div class="div-radius">
																	<div class="row-fluid" id="analysis-div">
																		<div class="span2 text-center">
																			<img class="img-circle" style="vertical-align: middle;" id="scanImage" src="<?php echo $base_url?>/assets/demo/stopScanning-38d2fbe35942f5d9c5acecd3ff63d088.png"/>
																		</div>
																		<div class="span8 text-center">
																			<div class="row-fluid">
																				<div class="span12">
																					<div style="text-align: center;">
																						<div style="font-size: 18px" id="analysis-result-div">
																							<div id="analysisResult" style="display: none;margin: 0;padding: 0">
																								<span id='sucess' style="display: none;"><span id='score'></span>分</span>
																								<div>
																									<span id="reportMessage" style="display: none;"></span>
																									<span id="description" style="display: none"></span>
																								</div>
																								<div>
																									<span id='fail' style="display: none">本次分析失败！</span>
																								</div>
																							</div>
																							<div id="explanation" style="">
																								<p class="text-left text-info">
																									<span style="margin-left: 22px;">欢迎使用压缩机节能分析功能，该功能可为您的压缩机运行状态及能源利用率进行检测评分，可得到压缩机满空载率、耗能及年度评估，并为您提出相应的节能优化改造方案！
																									</span>
																								</p>
																							</div>
																						</div>
																						<div class="meters" style="width:100%;margin-top: 16px">
																							<span id="progressDiv" style="width:0%" class="metersStyle">0.0%</span>
																						</div>
																						<div style="text-align: center;margin-top:8px">
																							<p class="muted">
																								<span>额定电压
																								<strong><em>
                                                                            380.0V
																								</em></strong>;
																								</span>
																								<span>额定排气量
																								<strong><em>
                                                                            7.0m&sup3;/min
																								</em></strong>;
																								</span>
																								<span>单位电价
																								<strong><em>
                                                                            1.0&#65509;
																								</em></strong>;
																								</span>
																								<span>额定功率
																								<strong><em>
                                                                            45.0kW
																								</em></strong>
																								</span>
																							</p>
																							<div id="energyBeginDiv" class="input-append date datetimepicker" style="width: 190px;">
																								<span class="label label-date">起始:</span>
																								<input class="span5 tip-top" data-original-title="点击输入起始时间" type="text" id="energyBeginDate" readonly style="cursor:pointer;" value="2015-11-19"/>
																								<span class="add-on"><i class="icon-remove"></i></span>
																								<span class="add-on"><i class="icon-time"></i></span>
																							</div>
																							<div id="energyEndDiv" class="input-append date datetimepicker" style="width: 190px;">
																								<span class="label label-date">终止:</span>
																								<input class="span5" data-content="起始和终止时间间隔应该在7天到31天之间。" title="提示" data-placement="top" data-toggle="popover" data-original-title="提示" type="text" id="energyEndDate" readonly style="cursor:pointer;" value="2015-11-26"/>
																								<span class="add-on"><i class="icon-remove"></i></span>
																								<span class="add-on"><i class="icon-time"></i></span>
																							</div>
																							<button class="btn btn-primary" id="diagnoseSetting" style="margin-bottom: 10px;">设置参数</button>
																							<button id='outPut' value="" class="btn btn-primary" style="margin-bottom: 10px;display: none;">输出报告</button>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="span2 text-center">
																			<button id="diagnoseBtn" class="btn btn-primary analysis-btn" style="margin-left: -10px;" data-loading-text="分析中...">开始分析</button>
																		</div>
																	</div>
																</div>
																<div style="margin: 20px auto;font-size: 20px;width: 95%">
																	<ul id="resultsOutput" style="list-style-type:none">
																		<li><span class="name1">电机电压</span><span class="fuhao">------------------------------------------------</span><span class="value1">正常</span></li>
																		<li><span class="name1">电机电流</span><span class="fuhao">------------------------------------------------</span><span class="value1">正常</span></li>
																		<li><span class="name1">排气压力</span><span class="fuhao">------------------------------------------------</span><span class="value1">正常</span></li>
																		<li><span class="name1">排气温度</span><span class="fuhao">------------------------------------------------</span><span class="value1">正常</span></li>
																		<li><span class="name1">加卸载</span><span class="fuhao">------------------------------------------------</span><span class="value1">正常</span></li>
																		<li class="current"><span class="name1">电流最大值</span><span class="fuhao">------------------------------------------------</span><span id='maxCurrent' class="value1"></span></li>
																		<li class="current"><span class="name1">电流最小值</span><span class="fuhao">------------------------------------------------</span><span id='minCurrent' class="value1"></span></li>
																		<li class="current"><span class="name1">电流平均值</span><span class="fuhao">------------------------------------------------</span><span id='avgCurrent' class="value1"></span></li>
																		<li><span class="name1">排气压力最大值</span><span class="fuhao">------------------------------------------------</span><span id='maxDischargePressure' class="value1"></span></li>
																		<li><span class="name1">排气压力最小值</span><span class="fuhao">------------------------------------------------</span><span id='minDischargePressure' class="value1"></span></li>
																		<li><span class="name1">排气压力平均值</span><span class="fuhao">------------------------------------------------</span><span id='avgDischargePressure' class="value1"></span></li>
																		<li><span class="name1">排气温度最大值</span><span class="fuhao">------------------------------------------------</span><span id='maxDischargeTemperature' class="value1"></span></li>
																		<li><span class="name1">排气温度最小值</span><span class="fuhao">------------------------------------------------</span><span id='minDischargeTemperature' class="value1"></span></li>
																		<li><span class="name1">排气温度平均值</span><span class="fuhao">------------------------------------------------</span><span id='avgDischargeTemperature' class="value1"></span></li>
																		<li><span class="name1">总排气量</span><span class="fuhao">------------------------------------------------</span><span id='displacement' class="value1"></span></li>
																	</ul>
																</div>
																<div id="tips" style="display: none;text-align: center;margin: 10px;font-size:15px;color: #ff0000;">
																	该型号设备暂不支持该功能,如有需求请联系我们！
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="paramsSettingDialog" title="参数设置" style="display: none">
									<form action="/hawkeyes/energyAnalysis/setAnalysisParams" method="post" name="setAnalysisParamsForm" id="setAnalysisParamsForm">
										<input type="hidden" name="equipmentId" value="6" id="equipmentId"/>
										<div id="settingContent">
											<div class="row-fluid">
												<div class="span12">
													<div class="widget-box" style="margin:6px;">
														<div class="widget-title">
															<span class="icon"><i class="fa fa-cogs"></i></span>
															<h5>节能分析参数</h5>
														</div>
														<div class="widget-content nopadding">
															<table class="table table-striped table-hover table-condense">
															<tbody>
															<tr>
																<td class="taskStatus">
																	<div class="input-prepend">
																		<div class="control-group">
																			<div class="controls">
																				<span class="add-on">额定电压&nbsp;&nbsp;</span>
																				<input type="text" name="nominalVoltage" value="380.0" id="nominalVoltage" class="paramsSetText" maxlength="5"/>
																				<span class="add-on">V</span>
																			</div>
																		</div>
																	</div>
																</td>
																<td class="taskStatus pull-left">
																	<div class="input-prepend">
																		<div class="control-group">
																			<div class="controls">
																				<span class="add-on">额定载重量</span>
																				<input type="text" name="nominalDisplacement" value="7.0" class="paramsSetText" id="nominalDisplacement" maxlength="5"/>
																				<span class="add-on">m&sup3;/min</span>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="taskStatus">
																	<div class="input-prepend">
																		<div class="control-group">
																			<div class="controls">
																				<span class="add-on">单位电价&nbsp;&nbsp;</span>
																				<input type="text" name="nominalPrice" class="paramsSetText" value="1.0" id="nominalPrice" maxlength="5"/>
																				<span class="add-on">&#65509;</span>
																			</div>
																		</div>
																	</div>
																</td>
																<td class="taskStatus pull-left">
																	<div class="input-prepend">
																		<div class="control-group">
																			<div class="controls">
																				<span class="add-on">额定功率&nbsp;&nbsp;&nbsp;&nbsp;</span>
																				<input type="text" name="nominalPower" value="45.0" id="nominalPower" class="paramsSetText" maxlength="5"/>
																				<span class="add-on">kW</span>
																			</div>
																		</div>
																	</div>
																</td>
															</tr>
															</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div id="show_reportOperating" class="tab-pane">
								<div class="row-fluid">
									<div id="history" class="span12">
										<div class="info-head" style="height: 40px">
											<div style="text-align: right;">
												<div id="begin_Div" class="input-append date datetimepicker">
													<span class="label label-date" style="background-color:#FFFFFF">起始:</span>
													<input class="tip-top" data-original-title="点击输入起始时间" type="text" id="begin_Date" readonly style="cursor:pointer;width: 150px" value="2015-11-26"/>
													<span class="add-on"><i class="icon-remove"></i></span>
													<span class="add-on"><i class="icon-time"></i></span>
												</div>
												<div id="intervalDiv" class="input-append date datetimepicker" style="margin-right: 32px">
													<span class="label label-date" style="background-color:#FFFFFF">间隔:</span>
													<select name="intervalData" style="cursor:pointer;width: 175px" id="intervalData">
														<option value="60">60</option>
														<option value="30">30</option>
														<option value="15">15</option>
														<option value="10">10</option>
														<option value="5">5</option>
													</select>
													<span class="add-on">分钟</span>
												</div>
												<button class="btn btn-success" id="searchOperating" style="margin-bottom: 10px;margin-right: 35px" data-loading-text="查询中...">查询数据</button>
											</div>
										</div>
										<br style="clear: both">
										<div id="operatingCurve" class="">
											<div class="" id="excelButton" style="float:right;margin:-12px 35px 5px 0;display: none">
												<a class="excel btn tip-left" href=""><i class="fa fa-file-excel-o"></i><span>导出运行记录</span></a>
											</div>
											<div style="clear: both">
											</div>
											<div id="operatingDiv" style="margin-bottom: 20px">
											</div>
										</div>
									</div>
									<div id="interval_Date_Wrong" title="提示">
        时间间隔在1~60之间!
									</div>
									<div id="time_Blank" title="提示">
        请选择起始时间！
									</div>
									<div id="time_Wrong" title="提示">
        请选择正确起始时间！
									</div>
								</div>
							</div>
							<div id="show_maintainRule" class="tab-pane" style="min-height: 400px">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="templete snapshot hidden">
				<div class="row-fluid">
				</div>
			</div>
			<div id="alertDialog" title="提示">
				<p>
				</p>
			</div>
			<div id="deleteConfirmDialog" title="提示">
				<p>
				</p>
			</div>
			<div id="deleteAdjuvantConfirmDialog" title="提示" style="display: none">
				<p>
					你确定要删除这台附属设备吗？
				</p>
			</div>
			<script type="text/javascript">
/*var language='zh_CN';
                if (typeof(intervalId) != "undefined") {
                    clearInterval(intervalId);
                }
                   if(typeof(eventBus) == "undefined"){
eventBus = new vertx.EventBus('http://119.148.161.17:3180/eventbus');
                    eventBus.onopen = function() {
                        console.log('Connectioned server!');
                        //eventBus.registerHandler('out.status.address', function(message){
                            //jsonpState_callback(JSON.stringify(message));
                       // });
                         eventBus.send("request.pulling.equipment.data",{"action":"getEquipmentLatestData",data:[{"equipmentId":6,"sId":"00003494","eId":"00003494"}]});
                                var timer_00003494=1;
                                eventBus.registerHandler('out.status.00003494.00003494.address', function(message){
                                equipmentsStatus(JSON.stringify(message));
                                window.clearTimeout(timer_00003494);
                                timer_00003494 = window.setTimeout(function(timer_00003494){
                                     $("#imgRunStatus_00003494_00003494").attr("src",imgContextPath+"/assets/state/disconnect.png");
                                },60000);
                            });
                            eventBus.registerHandler('out.realtime.data.00003494.00003494.address', function(message){
                                allDataCallback(JSON.stringify(message));
                            });
                        var alarmAddress = "out.alarmData.00003494.00003494.address";
                        eventBus.registerHandler(alarmAddress, function(message){
                            alarmCallback(JSON.stringify(message));
                        });
                            eventBus.send("request.pulling.equipment.data",{"action":"getEquipmentStatus",data:[{"equipmentId":6,"sId":"00003494","eId":"00003494"}]});
                    };
                    eventBus.onclose = function(){
                        console.log("The connection to the server has been lost!");
                        if (typeof(intervalId) != "undefined") {
                            clearInterval(intervalId);
                        }
                    };
                }else{
                         eventBus.send("request.pulling.equipment.data",{"action":"getEquipmentLatestData",data:[{"equipmentId":6,"sId":"00003494","eId":"00003494"}]});
                                var timer_00003494=1;
                                eventBus.registerHandler('out.status.00003494.00003494.address', function(message){
                                equipmentsStatus(JSON.stringify(message));
                                window.clearTimeout(timer_00003494);
                                timer_00003494 = window.setTimeout(function(timer_00003494){
                                     $("#imgRunStatus_00003494_00003494").attr("src",imgContextPath+"/assets/state/disconnect.png");
                                },60000);
                            });
                            eventBus.registerHandler('out.realtime.data.00003494.00003494.address', function(message){
                                allDataCallback(JSON.stringify(message));
                            });
                        var alarmAddress = "out.alarmData.00003494.00003494.address";
                        eventBus.registerHandler(alarmAddress, function(message){
                            alarmCallback(JSON.stringify(message));
                        });
                            eventBus.send("request.pulling.equipment.data",{"action":"getEquipmentStatus",data:[{"equipmentId":6,"sId":"00003494","eId":"00003494"}]});
                      }
					  */
                   </script>
			<script type="text/javascript">
        var eqId =6;
        var serial = 0;
        var num = 0;
        var lastNum  = 0;
        $('#collapse_0').collapse('show');
       $("div[id^='accordion_']").click(function(){
           var i = $(this).attr('serial')
           if($('#collapse_0').hasClass('in') && i!=0){
               $('#collapse_0').collapse('hide')
           }
           if(num > lastNum){
               $('#collapse_'+serial).collapse('hide')
           }
           serial = i
           lastNum = num
           num++;
       });
        $("#showLocationHistory").click(function(){
            if($(this).attr("flag")=="hidden"){
                $(this).attr("flag","show");
                $(this).text("收起");
                $("#location").show();
            }else{
                $(this).attr("flag","hidden");
                $(this).text("查看位置历史");
                $("#location").hide();
            }
        });
        $("#"+"detail").parent('li').addClass('active');
        $("#show_"+"detail").addClass('active');
        $('.span12 .show-right').width($(".container-fluid .row-fluid .span12 #show_"+"detail").width()-350);
        if("detail" == "realTimeData"){
            App.blockUI($("#lockModalDiv"));
            setTimeout(function(){App.unblockUI($("#lockModalDiv"));}, 2500);
            $("#show_realTimeData").load("/hawkeyes/equipment/getEquipmentShowItems?eqId="+eqId+"&tab=realTimeData");
        }
       var isFlash = false;
        $(function(){
           var sourceLabel = "alarm";
            $("span[id^='info_span_']").removeClass('badge-success');
            $("#info_span_"+sourceLabel).addClass('badge-success');
            $(".alarmSearch").click(function(){
                  $.get("/hawkeyes/equipment/getNowAlarm?id="+$(this).attr("dataid")+"&status="+$(this).attr("status"),function(data){
                       $('.alert-error').hide();
                       $('.alert-error').find("span").html("");
                       if(data.result == true){
                       var model='';
                       $.each(data.alarmList,function(i,o){
                            var alarmContent = o.alarmContent;
                            var alarmDate = o.lastUpdated;
                            if(o.alarmType=='alarm'){
                                 model += "<p style='margin: 0;padding: 0'><span>"+alarmContent+"</span> 报警，</p>"+
                                        "<p style='margin: 0;padding: 0'>最新报警时间:<span>"+alarmDate+"</span>。</p>"
                            } else{
                                 model += "<p style='margin: 0;padding: 0'><span>"+alarmContent+"</span>，</p>"+
                                        "<p style='margin: 0;padding: 0'>最新报警时间:<span>"+alarmDate+"</span>。</p>"
                            }
                        });
                        $('.alert-error').find("span").append(model);
                        $('.alert-error').show();
                       }
                  });
            });
            var windowWidth = window.screen.width;
            $(window).resize(function(){
                if(windowWidth!=window.screen.width){
                    history.go(0);
                    windowWidth = window.screen.width;
                }
            });
            $('#realTimeData').click(function(){
                App.blockUI($("#lockModalDiv"));
                setTimeout(function(){App.unblockUI($("#lockModalDiv"));}, 2500);
            });
            $("#addAlarmContact").live('click',function(){
                showAjaxDialog("/hawkeyes/equipment/alarmContact?eqId="+eqId
                                 , "alarmContactsForm"
                                 , "添加报警联系人"
                                 , 550
                                 , 500);
             });
             $("a[id^='deleteAlarmUser_']").live('click',function(){
                  if(confirm('您确定删除该数据吗？')){
                        deleteFunc("/hawkeyes/equipment/deleteAlarmContact?id="+$(this).attr("dataid")+"&eqId="+eqId);
                    }
             });
            $("#getModelMaintainRule").live('click',function(){
                if(confirm('您确定要初始化保养规则吗?')){
                    deleteFunc("/hawkeyes/equipment/getModelMaintainRule?id="+$(this).attr("dataid"));
                }
            });
            $("a[id^='deleteAdjuvantEquipment_']").live('click',function(){
                $("a[id^='deleteAdjuvantEquipment_']").removeClass("active");
                $(this).addClass("active");
                $("#deleteAdjuvantConfirmDialog").dialog("open");
            })
            $("#flash").click(function(){
                isFlash = true;
                $("#show_flash").load("/hawkeyes/equipment/getImageContent?eqId="+eqId);
            });
            $("#realTimeData").click(function(){
                $("#show_realTimeData").load("/hawkeyes/equipment/getEquipmentShowItems?eqId="+eqId+"&tab=realTimeData");
            });
            $("#historyData").click(function(){
                $("#show_historyData").load("/hawkeyes/equipment/getEquipmentShowItems?eqId="+eqId+"&tab=historyData");
            });
            $("#maintainRule").click(function(){
                $("#show_maintainRule").load("/hawkeyes/equipment/getEquipmentMaintainRules?eqId="+eqId);
            });
            $("#configRemote").click(function(){
                App.blockUI($("#lockModalDiv"));
                setTimeout(function(){App.unblockUI($("#lockModalDiv"));}, 3000);
                $("#show_configRemote").load("/hawkeyes/equipment/getControlCommand?eqId="+eqId);
            });
            $("a[id!='flash'][data-toggle='tab']").live('click',function(){
                isFlash = false;
            });
//            $("a[id^='checkBoxDate_']").click(function(){
//                $("span[id^='span_data_']").removeClass("active");
//                getRealtimeGraphData(eqId,$(this).attr("iId"),$('#dataDiv').css('width'),currentTime,null);
//                $("#span_data_"+$(this).attr("iId")).addClass("active");
//            });
            validateTheContactForm();
            jQuery.validator.addMethod("isMobilePhone", function(value, element) {
                var length = value.length;
                var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
                return this.optional(element) || (mobile.test(value));
            }, "<span class='help-inline'><i class='fa fa-star'></i>请输入正确的手机号码</span>");
             $("#alertDialog").dialog({
                autoOpen: false,
                width: 300,
                modal: true,
                buttons: {
                    "确定": function () {
                        $(this).dialog("close");
                    }
                }
            });
            $("#adjuvantEquipment").click(function(){
                $("#addAdjuvantPLCDialog").dialog("open");
                return false;
            });
            $("#deleteConfirmDialog").dialog({
                autoOpen: false,
                width: 380,
                modal: true,
                buttons: {
                    "确定": function () {
                        $(this).dialog("close");
                        var id="6";
                        $.post("/hawkeyes/equipment/deleteEquipment?id="+id,function(data){
                            if(data.result == 'success'){
                                window.location.href="/hawkeyes/equipment/index"
                            }else{
                                $("#downloadClientAlertDialog").text(data.message);
                                $("#downloadClientAlertDialog").dialog("open");
                                return false;
                            }
                        });
                    },
                    "取消": function () {
                        $(this).dialog("close");
                    }
                }
            });
            $("#deleteAdjuvantConfirmDialog").dialog({
                autoOpen: false,
                width: 380,
                modal: true,
                buttons: {
                    "确定": function () {
                        var obj = $("a[id^='deleteAdjuvantEquipment_'].active");
                        var id = $(obj).attr('dataid');
                        var equipmentId = $(obj).attr('equipmentId');
                        $.post("/hawkeyes/equipment/deleteAdjuvantEquipment?id="+id,function(data){
                            if(data.result =='success'){
                                $("#deleteAdjuvantConfirmDialog").dialog("close");
                                location.reload(true);
                                return false;
                            }else{
                                $("#downloadClientAlertDialog").text(data.message);
                                $("#downloadClientAlertDialog").dialog("open");
                                return false;
                            }
                        });
                    },
                    "取消": function () {
                        $(this).dialog("close");
                    }
                }
            });
            $("#addAdjuvantPLCForm").keydown(function(e){
                if(e.keyCode==13){
                    return false;
                }
            });
            $("#addAdjuvantPLCDialog").dialog({
                autoOpen: false,
                height:300,
                width: 574,
                resizable:false,
                modal: false,
                buttons: {
                    "确定": function () {
                        var $contentDiv = $("#addAdjuvantPLCDialog div:first");
                        if($contentDiv.attr('class')=='empty-panel'){
                            $('#addAdjuvantPLCDialog').dialog("close");
                            return false;
                        }
                        validateAddAdjuvantPLCForm();
                        if($("#addAdjuvantPLCForm").valid()){
                            $.getJSON("/hawkeyes/equipment/validateSSN", {sSN:$("#adjuvantPLCEquipmentSSN").val()}, function(json){
                                if(json.result=='error'){
                                    $("#downloadClientAlertDialog").text(json.message);
                                    $("#downloadClientAlertDialog").dialog("open");
                                    return false;
                                }else{
                                    var equipmentId="6";
                                    var adjuvantPLCId=$("#adjuvantPLCId").val();
                                    var sSN=$("#adjuvantPLCEquipmentSSN").val();
                                    $.post("/hawkeyes/equipment/addAdjuvantPLC?equipmentId="+equipmentId+"&plcid="+adjuvantPLCId+"&sSN="+sSN,function(data){
                                        if(data.result == 'success'){
                                            $('#addAdjuvantPLCDialog').dialog("close");
                                            location.reload(true);
                                            return false;
                                        }else{
                                            $("#downloadClientAlertDialog").text(data.message);
                                            $("#downloadClientAlertDialog").dialog("open");
                                            return false;
                                        }
                                    });
                                }
                            });
                        }
                    },
                    "取消": function () {
                        $(this).dialog("close");
                        return false;
                    }
                }
            });
            $("input:checkbox[id^='adjuvantPLC_']").on('ifChanged', function(event){
                var id=$(this).attr("plcid");
                if($(this).attr("checked")){
                    $("#inputPrepend_"+id).removeClass('hidden');
                }else{
                    $("#inputPrepend_"+id).addClass('hidden');
                }
            });
            var error = "";
            if(error){
                $("#alertDialog").dialog("open")
            }
            $("a[id^='deleteEquipment']").click(function(){
                $("#deleteConfirmDialog").text("你确定要删除这台设备吗？");
                $("#deleteConfirmDialog").dialog("open");
            });
            $("a[id^='updateCheckPoint_']").live('click',function(){
                showAjaxDialog("/hawkeyes/equipment/editEqMaintainRuleRunTime?id="+$(this).attr('dataid')
                        , "editEqMaintainRuleRunTime"
                        , "修改上次保养运行小时数"
                        , 550
                        , 500);
            });
            $("a[id^='addMaintainRecord_']").live('click',function(){
                showAjaxDialog("/hawkeyes/maintainRecord/create?eqMaRuId="+$(this).attr('dataid')
                        , "addMaintainRecordForm"
                        , "记录保养"
                        , 550
                        , 500);
            });
            $("a[id^='snapshot_']").live('click',function(){
                var maintainRuleId = $(this).attr('sourceid');
                var url = "/hawkeyes/equipmentModel/getMaintainRule?id="+maintainRuleId+"&view=equipment";
                $("#maintainRuleContentTr_"+maintainRuleId).removeClass('hidden');
                $(this).nextAll('a').removeClass('hidden');
                $(this).addClass('hidden');
                $("#maintainRuleContentTd_"+maintainRuleId).load(url)
            });
            $("a[id^='closeSnapshot_']").live('click',function(){
                var maintainRuleId = $(this).attr('sourceid');
                $(this).addClass('hidden');
                $('#maintainRuleContentTr_'+maintainRuleId).addClass('hidden');
                $('#snapshot_'+maintainRuleId).removeClass('hidden')
            });
            $("a[id^='deleteEqMaintainRule_']").live('click',function(){
                if(confirm('您确定清除该保养的历史数据？')){
                    deleteFunc("/hawkeyes/equipment/deleteEqMaintainRule/"+$(this).attr("dataid"));
                }
            })
        });
        function showSnapshot(obj) {
            var alarmId = $(obj).attr('sourceid');
            var url = "/hawkeyes/alarm/getAlarmSnapshot?alarmId="+alarmId;
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
        function showInfo(obj){
            var max=parseInt("10");
            var id="6";
            var sourceLabel=$(obj).attr("sourceLabel");
            $("span[id^='info_span_']").removeClass('badge-success');
            $(obj).addClass('badge-success');
            var url = "/hawkeyes/equipment/getInfo?id="+id+"&sourceLabel="+sourceLabel+"&max="+max;
            $("#infoListDiv").load(url);
        }
        function validateAddAdjuvantPLCForm(){
            $("#addAdjuvantPLCForm").validate({
                rules : {
                    sSN: {
                        required : true,
                        maxlength: 18,
                        minlength: 18
                    }
                },
                messages : {
                    sSN:{
                        required : "<span class='help-inline'><i class='fa fa-star'></i>采集器序列号不能为空</span>",
                        maxlength: "<span class='help-inline'><i class='fa fa-star'></i>采集器序列号必须为18位！</span>",
                        minlength: "<span class='help-inline'><i class='fa fa-star'></i>采集器序列号必须为18位！</span>"
                    }
                },
                errorClass: "help-inline",
                highlight:function(element, errorClass, validClass) {
                    $(element).parents('.control-group').addClass('error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').removeClass('error');
                    $(element).parents('.control-group').addClass('success');
                }
            });
        }
    </script>
			<div class="row-fluid">
				<div id="footer" class="span12">
				</div>
			</div>
		</div>
	</div>
	<div id="downloadClientAlertDialog" title="提示">
		<p>
			<strong><em>手机客户端将于近期提供~<i class="fa fa-smile-o fa-lg"></i></em></strong>
		</p>
	</div>
</div>
<script>
        $(function(){
            $("#energyBeginDiv").datetimepicker({
                format: "yyyy-mm-dd",
                autoclose: true,
                todayBtn: true,
                pickTime: false,
                minView:2,
                pickerPosition: "bottom-left"
            });
            $("#energyEndDiv").datetimepicker({
                format: "yyyy-mm-dd",
                autoclose: true,
                todayBtn: true,
                pickTime: false,
                minView:2,
                pickerPosition: "bottom-left"
            });
            $('#energyEndDate').popover({
                trigger : 'hover',
                animation: true
            });
            $("#paramsSettingDialog").dialog({
                autoOpen: false,
                width: 750,
                modal: true,
                buttons: {
                    "保存": function () {
                        var equipmentId=$("#equipmentId").val();
                        var ratedDisplacement=$('#nominalDisplacement').val();
                        var power=$('#nominalPower').val();
                        var price=$('#nominalPrice').val();
                        var voltage=$('#nominalVoltage').val();
                        validateSetAnalysisParamsForm();
                        if($("#setAnalysisParamsForm").valid()){
                            $.post("/hawkeyes/energyAnalysis/setAnalysisParams?equipmentId="+equipmentId
                            +"&ratedDisplacement="+ratedDisplacement+"&power="+power+"&price="+price+"&voltage="+voltage,function(data){
                                if(data.result == 'success'){
                                    $("#paramsSettingDialog").dialog("close");
                                    $(".muted").html(data.spanContent);
                                }else{
                                    $("#paramsSettingDialog").dialog("close");
                                    $("#downloadClientAlertDialog").text(data.message);
                                    $("#downloadClientAlertDialog").dialog("open");
                                    return false;
                                }
                            });
                        }
                    },
                    "取消": function () {
                        $(this).dialog("close");
                    }
                }
            });
            $("#diagnoseSetting").click(function () {
                $("#paramsSettingDialog").dialog("open");
            });
            $("#diagnoseBtn").click(function () {
                if($("#energyBeginDate").val()=="" ||$("#energyEndDate").val()==""){
                    $("#downloadClientAlertDialog").text("请选择起始和终止时间！");
                    $("#downloadClientAlertDialog").dialog("open");
                    return false;
                }
                if(($("#energyBeginDate").val()>$("#energyEndDate").val()) || ($("#energyBeginDate").val()>(new Date().pattern("yyyy-MM-dd HH:mm")))){
                    $("#downloadClientAlertDialog").text("起始时间必须小于终止时间和当前系统时间!");
                    $("#downloadClientAlertDialog").dialog("open");
                    return false;
                }
                if($("#energyEndDate").val()>(new Date().pattern("yyyy-MM-dd HH:mm"))){
                    $("#downloadClientAlertDialog").text("终止时间不能大于当前系统时间!");
                    $("#downloadClientAlertDialog").dialog("open");
                    return false;
                }
                var day=getDifferentDaysNumber($("#energyEndDate").val(),$("#energyBeginDate").val());
                if(day<32){
                    var ratedDisplacement=$('#nominalDisplacement').val();
                    var power=$('#nominalPower').val();
                    var price=$('#nominalPrice').val();
                    var voltage=$('#nominalVoltage').val();
                    if(ratedDisplacement=='' ||power=='' || price=='' || voltage==''){
                        $("#downloadClientAlertDialog").text("请先设定节能分析所需参数。");
                        $("#downloadClientAlertDialog").dialog("open");
                        return false;
                    }else{
                        $(this).button('loading');
                        $("#analysis-result-div").css("font-size","15px");
                        $("#scanImage").css("padding-bottom","16px");
                        $("#progressDiv").addClass('metersStyle');
                        $("#scanImage").attr("src",imgContextPath+"/assets/demo/moveScanning.gif");
                        $("#explanation").hide();
                        $("#analysisResult").hide();
                        $("#reportMessage").html('');
                        $("#description").hide();
                        $("#progressDiv").width('15%');
//                        $("#analysis").show();
                        $("#outPut").hide();
                        $("#resultsOutput li").each(function(){
                                $(this).hide()
                        });
                        $("#analysisResult").hide();
                        var time = day*2000;
                        progressBarOne(time*0.15);
                        $.getJSON("/hawkeyes/energyAnalysis/getAnalysisReport", {
                             equipmentId: $("#equipmentId").val(),
                             dateBegin: $("#energyBeginDate").val(),
                             dateEnd: $("#energyEndDate").val()
                        }, function (data) {
                             $('#jsonData').val(JSON.stringify(data));
                             if (data.message != null) {
                                $("#reportResult").hide();
                                $("#reportMessage").html(data.message);
                                $("#analysisResult").show();
                                $("#fail").show();
                                $("#sucess").hide();
//                                $("#analysis").hide();
                                $("#reportMessage").show();
                                $("#diagnoseBtn").button('reset');
                                $("#scanImage").attr("src",imgContextPath+"/assets/demo/stopScanning.png");
                                $(".meters > span").stop();
                                $("#progressDiv").removeClass('metersStyle');
                                return;
                            }else{
                                if(data.maxCurrent<0){
                                    $(".current").remove();
                                }
                                if(data.maxCurrent!=null){
                                    $("#maxCurrent").html(changeTwoDecimal_f(data.maxCurrent)+'A');
                                }
                                if(data.minCurrent!=null){
                                  $("#minCurrent").html(changeTwoDecimal_f(data.minCurrent)+'A');
                                }
                                if(data.avgCurrent!=null){
                                   $("#avgCurrent").html(changeTwoDecimal_f(data.avgCurrent)+'A');
                                }
                                if(data.minDischargeTemperature!=null){
                                    $("#minDischargeTemperature").html(changeTwoDecimal_f(data.minDischargeTemperature)+'℃');
                                }
                                if(data.maxDischargeTemperature!=null){
                                  $("#maxDischargeTemperature").html(changeTwoDecimal_f(data.maxDischargeTemperature)+'℃');
                                }
                                if(data.avgDischargeTemperature!=null){
                                   $("#avgDischargeTemperature").html(changeTwoDecimal_f(data.avgDischargeTemperature)+'℃');
                                }
                                if(data.maxDischargePressure!=null){
                                  $("#maxDischargePressure").html(changeTwoDecimal_f(data.maxDischargePressure)+'MPa');
                                }
                                if(data.minDischargePressure!=null){
                                   $("#minDischargePressure").html(changeTwoDecimal_f(data.minDischargePressure)+'MPa');
                                }
                                if(data.avgDischargePressure!=null){
                                  $("#avgDischargePressure").html(changeTwoDecimal_f(data.avgDischargePressure)+'MPa');
                                }
                                if(data.displacement!=null){
                                 $("#displacement").html(Math.floor(data.displacement)+'m3');
                                }
                                 var score = Math.floor(data.loadRatio * 1.1);
                                 if(score>100){
                                    score = 100;
                                 }
                                 $("#score").html(score);
                                 if( 0 < score && score<=30){
                                   $("#description").html("糟透了！该设备空载率过高，浪费电能严重，建议更换小排气量机或立刻进行节能优化改造！");
                                 }else if( 30 < score && score<=60){
                                    $("#description").html("还凑合吧！该设备运行状态正常，但空载耗能太大，加卸载太频繁，急需进行节能优化改造！");
                                 }else if(60 < score && score<=90){
                                     $("#description").html("还不错噢！该设备运行状态良好，但空载耗能较大，加卸载较频繁，需要进行节能优化改造！");
                                 }else if(90 < score && score<=100){
                                       $("#description").html("太棒了！该设备运行状态很好，能源利用率很充分，不需要节能优化改造！");
                                 }
                                 $("#progressDiv").width('100%');
                                 progressBarTwo(time*0.85);
                                 if($("#reportMessage")){
                                     liebiao(time*0.85);
                                }
                            }
                        })
                    }
                }else{
                    $("#downloadClientAlertDialog").text("时间间隔不能超过31天!");
                    $("#downloadClientAlertDialog").dialog("open");
                    return false;
                }
            });
            $("#outPut").click(function(){
                 window.open( "/hawkeyes/energyAnalysis/energyReportCard?equipmentId="+$("#equipmentId").val(),'progressDiv',"height="+pageHeight()+",   width="+pageWidth()+",   toolbar=no,   menubar=yes,   scrollbars=yes,   resizable=yes,   location=no,  status=yes,left=0,top=0 ")
            });
            $("#progressDiv").resize(function(){
                var fate=$(this).width()*100/$(this).parent().width()
                if(fate>99.9){
                    fate=100;
                }
                $(this).text(fate.toFixed(2)+'%');
                if(fate==100){
                    return false;
                }
            })
        })
        function progressBarOne(time){
            $(".meters > span").each(function() {
            $(this)
                .data("origWidth", $(this).width())
                .width(0)
                .animate({
                        width: $(this).data("origWidth")
                    }, time);
            });
         }
        function progressBarTwo(time){
              $(".meters > span").each(function() {
              $(this)
                .data("origWidth", $(this).width())
                .width('15%')
                .animate({
                    width: $(this).data("origWidth")
                }, time,function(){
//                $("#analysis").hide();
                $("#fail").hide();
                $("#analysisResult").show();
                $("#description").show();
                $("#diagnoseBtn").html("重新分析");
                $("#progressDiv").removeClass('metersStyle');
                $("#diagnoseBtn").button('reset');
                $("#scanImage").attr("src",imgContextPath+"/assets/demo/stopScanning.png");
                if($("#reportMessage").html()==""){
                      $("#sucess").show();
                      $("#outPut").show();
                }else{
                    $("#flas").show();
                    $("#reportMessage").show()
                }
                });
            });
        }
        function changeTwoDecimal_f(x)
        {
           var f_x = parseFloat(x);
           if (isNaN(f_x))
           {
              alert('function:changeTwoDecimal->parameter error');
              return false;
           }
           var f_x = Math.round(x*100)/100;
           var s_x = f_x.toString();
           var pos_decimal = s_x.indexOf('.');
           if (pos_decimal < 0)
           {
              pos_decimal = s_x.length;
              s_x += '.';
           }
           while (s_x.length <= pos_decimal + 2)
           {
              s_x += '0';
           }
           return s_x;
        }
        function liebiao(time){
           $('#resultsOutput li').each(function(index,e){
              window.setTimeout(function() {
                $(e).fadeIn('slow');
                $(this).show();
              }, (time/18)*index);
           });
        }
    </script>
<script>
    $(function(){
        if($(window).width()<1024){
            $('#historyCurve').removeClass("show-right");
            $('#historyCurve').removeClass("pull-right");
            $('#historyCurve').addClass("show-left");
            $('#historyCurve').css('width','90%');
        }
        $("#searchOperating").removeAttr("disabled")
        $('#begin_Div').datetimepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayBtn: true,
            startView:2,
            minView:2,
            pickerPosition: "bottom-left"
        });
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        $("#searchOperating").live("click",function(){
            if($("#begin_Date").val()=="" ||$("#end_Date").val()==""){
                $("#time_Blank").dialog("open");
                return false;
            }
            if($("#begin_Date").val()>(new Date().pattern("yyyy-MM-dd HH:mm"))){
                $("#time_Wrong").dialog("open");
                return false;
            }
            $(this).button('loading');
            $('#lockModal').modal('show');
            var path = "/hawkeyes/equipment/reportEquipment?equipmentId=6&plcId=1&interval="+$("#intervalData").val()+"&startTime="+$("#begin_Date").val()+"&format=excel&extension=xls";
            $("#operatingDiv").load("/hawkeyes/equipment/reportEquipment?equipmentId=6&plcId=1"
                                    ,{interval:$("#intervalData").val(),startTime:$("#begin_Date").val()},function(data){
                                        $("#searchOperating").button('reset');
                                        if(data.indexOf("没有设置需要打印的检测项")<0){
                                            $("#excelButton").show();
                                            $(".excel").attr("href",path);
                                        }
                                        $(".report thead tr:first-child").remove();
                                        $(".report thead tr:first-child").remove();
                                    });
        });
        $("#time_Blank").dialog({
            autoOpen: false,
            modal: true,
            buttons: {
                "确定": function () {
                    $(this).dialog("close");
                }
            }
        });
        $("#time_Wrong").dialog({
            autoOpen: false,
            modal: true,
            buttons: {
                "确定": function () {
                    $(this).dialog("close");
                }
            }
        });
        $("#interval_Date_Wrong").dialog({
            autoOpen: false,
            modal: true,
            buttons: {
                "确定": function () {
                    $(this).dialog("close");
                }
            }
        });
    });
</script>
<script>
    var active = "equipment";
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