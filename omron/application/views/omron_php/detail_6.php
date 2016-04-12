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
<meta charset="UTF-8">
<title>设备详情</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $base_url?>/assets/demo/favicon-89045932c816321dc6c9f378e8aa2956.ico"/>
<link rel="stylesheet" href="<?php echo $base_url?>/assets/hawkeyes-77cc040b4de3d47775f57279552f3389.css"/>
<link rel="stylesheet" href="<?php echo $base_url?>/assets/main/application-45f26b600fb6e62f7c6d9e8d07ac2045.css"/>
<meta name="layout" content="main">
<link rel="stylesheet" href="<?php echo $base_url?>/css/iCheckSkin/skins/square/blue.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $base_url?>/assets/equipment/equipment-show-5086bfa584b04379726f01bb88eeea57.css"/>
<script src="<?php echo $base_url?>/jquery2.1.4.min.js" type="text/javascript" ></script>
<script src="<?php echo $base_url?>/assets/canvas/Chart.js"></script>


  <script src="<?php echo $base_url?>/assets/hawkeyes-ff124a59fc282eef7975db5c84a2fcab.js" type="text/javascript" ></script>
  <script src="<?php echo $base_url?>/assets/main/application-361bdee6b3094f0e4e0b4f0bd8316245.js" type="text/javascript" ></script>
  <script src="<?php echo $base_url?>/assets/equipment/select2-6065cd9972703a7cc4cf248d274f48cd.js" type="text/javascript" ></script>
    
        <script src="<?php echo $base_url?>/assets/equipment/select2_locale_zh_CN-2713ce73989c55b44b940e08895836f8.js" type="text/javascript" ></script>
<!--link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script--> 
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=3de8Nlpw48Flkn8YNmGPRcyt"></script>
<script src="<?php echo $base_url?>/d3.min.js" type="text/javascript" charset="utf-8" ></script>
<script src="<?php echo $base_url?>/../javascript/realtime.js"></script>
 
    <style>
    path{
        stroke: steelblue;
        stroke-width: 1;
        fill: none;
    }
    .axis path,
    .axis line{
        fill: none;
        stroke: grey;
        stroke-width: 1;
        shape-rendering: crispEdges;
    }
	 
	.axis text {
		font-family: sans-serif;
		font-size: 11px;
	}
	
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
<script>
var flag_line=1;
</script>
<div id="main">
 <!-- /.navbar-static-side -->
        <?php $current_file = basename(__FILE__); require 'menu_top_left.php' ?>

	
	<div id="content">
		<script src="<?php echo $base_url?>/assets/dygraph/dygraph-dev-4af411506d173004e8ab1ff1ff90e250.js" type="text/javascript" ></script>
		<script src="<?php echo $base_url?>/assets/equipment/monitor-5dcc16f7717785ba8ba12dd1682fec20.js" type="text/javascript" ></script>
		<script src="<?php echo $base_url?>/assets/echarts/echarts-init-a1bacc8e1bc65315693f4c710a557faf.js" type="text/javascript" ></script>
		<div id="breadcrumb">
			<a href="<?php echo $base_url?>/../index.php/Remote_Download/admin" title="返回首页" class="tip-top"><i class="icon-home"></i>首页</a>
			<a href="#" class="current">设备详情 CNZ207297</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box" id="lockModalDiv">
						<div class="widget-title">
							<span class="icon"><i class="fa fa-hdd-o"></i></span>
							<ul class="nav nav-tabs" >
								<li class=""><a data-toggle="tab" id="detail" href="#show_detail">设备详情</a></li>
							</ul>
						</div>
						<div class="widget-content nopadding tab-content">
							<div id="show_detail" class="tab-pane">
								<div class="row-fluid">
									<div class="span12">
										<div class="show-left">
											<div class="info-content form-horizontal" style="margin: 0;border-top: 2px solid #FEA800;font-size: 14px">
												<div style="text-align: center;margin: 10px 0 10px 0">
													<div style="float: left;width: 30%" class="runState">
														运行状态
													</div>
													<div style="float: left;width: 30%">
														绑定状态
													</div>
													<div style="float: left;width: 30%">
														保养情况
													</div>
													<div style="float: left;width: 30%" class="runState">
														<img id="imgRunStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/disconnect.png">
													</div>
													<div style="float: left;width: 30%">
														
														<img id="imgAlarmStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/bulb-green-4617a1659f29a5b0909ed0728cf5bf38.png">
														
													</div>
													<div style="float: left;width: 30%">
														<a class="alarmSearch" href="#" dataid="6" status="service">
														<img id="imgMaintainStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/bulb-green.png">
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
													<label class="labelContent">数据上报时间：</label>
													<span id="latestReportDataTime_6">
                                                2016-01-25 16:40
													</span>
												</p>
											</div>
											<div class="info-head">
												<span class="info-type tpc">该设备的</label>实时地理位置</span>
											</div>
											<div class="info-content" style="padding-top:3px ">
												<div id="powerStatisticsDiv" style="height: 300px;">
													<div class="widget-content box-content" id="detailmapContent" style="border-bottom: none;min-height: 254px;">

														<script type="text/javascript"> 
															var map = new BMap.Map("detailmapContent");          // 创建地图实例  
															var point = new BMap.Point(121.561, 29.876);  // 创建点坐标  
															map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别 
															var marker = new BMap.Marker(point);
															map.addOverlay(marker);
														</script> 

													</div>
												</div>
											</div>
											<div style="clear: both">
											</div>
											<div class="info-head">
												<span class="info-type">管理员
												<a class="btn-mini tip-top" href="#" id="addAlarmContact"><i class="fa fa-plus-circle fa-2x"></i></a>
												</span>
											</div>
											<div class="info-content" style="padding-top:10px ">
												<div class="empty-panel" style="text-align: center;padding: 0">
													<span>尚未添加管理员</span>
												</div>
											</div>
										</div>
										<div class="show-right pull-right">
											<div class="info-head">
												<span class="info-type">设备记录</span>
											</div>
											<div class="test-show">
											</div>
											<div id="infoListDiv">
											
											<div>     
												<table class="table table-striped table-hover">
													<thead>
													<tr>
													
														<th>PC序列号</th>
														
															<th>省份</th>
														
													
													<th>管理员</th>
													<th>联系电话</th>
													<th>运行状态</th>
													<th>绑定状态</th>
													<th>操作</th>
													</tr>
													</thead>
													<tbody>
													
														<tr>
															
															<td>PC0</td>
															<td>浙江</td>
															<td>XXXXXX</td>
															<td>0000</td>
															<td>
																<img id="imgRunStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/run.png">
															</td>
															<td> 
																<img id="imgAlarmStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/unbound.png">
															</td>
															<td>
															<!--<div class="btn-group">
																<button data-toggle="dropdown" class="btn dropdown-toggle">操作 <span
																		class="caret"></span></button>
																<ul class="dropdown-menu">
																	<li>
																		<a href="#" id="tie" dataid="6">立即绑定</a>
																	</li>
																	<li>
																		<a href="#" id="untie" dataid="6">立即解除</a>
																	</li>
																</ul>
															</div>-->
																<div class="btn-group">
																	<button data-toggle="dropdown" class="btn dropdown-toggle"  id="bind" > <span>立即绑定bind</span></button>
																</div>
															</td>
																						
														</tr>
													
													</tbody>
													
																	<tbody>
													
														<tr>
															
															<td>PC1</td>
															<td>北京</td>
															<td>XXXXXX</td>
															<td>0001</td>
															<td>
																<img id="imgRunStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/run.png">
															</td>
															<td> 
																<img id="imgAlarmStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/bulb-green-4617a1659f29a5b0909ed0728cf5bf38.png">
															</td>
														   
															<td>
																<div class="btn-group">
																	<button data-toggle="dropdown" class="btn dropdown-toggle" > <span id="" >立即解除</span></button>
																</div>
															</td>
														</tr>
													
													</tbody>
													
																	<tbody>
													
														<tr>
															
															<td>PC2</td>
															<td>四川</td>
															<td>XXXXXX</td>
															<td>0002</td>
															<td>
																<img id="imgRunStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/disconnect.png">
															</td>
															<td>
																<img id="imgAlarmStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/unbound.png">
															</td>
															<td>
																<div class="btn-group">
																	<button data-toggle="dropdown" class="btn dropdown-toggle" > <span id="" >立即绑定</span></button>
																</div>
															</td>
														</tr>
													
													</tbody>
													
													
												</table>
											
											<div class="row-fluid" style="margin-top: -20px;">
												<div class="span12">
													<div class="pagination agination-right alternate page-style" style="margin-right: 0">
														<ul>
															
																<input type="hidden" id="maxpage" value="1"/>
															

														</ul>
													</div>
												</div>
											</div>
										</div>
									
																		
											<div class="row-fluid">
													<div class="span12">
														<div class="pagination agination-right alternate page-style">
															<ul>
																<li class="active"><a href="#">1</a></li>
																<li><a href="" "<?php echo $base_url?>/../index.php/Remote_Download/detail?sourceLabel=alarm&amp;offset=10&amp;max=10&amp;sort=id&amp;order=desc">2</a></li>
																<li><a href="" "<?php echo $base_url?>/../index.php/Remote_Download/detail?sourceLabel=alarm&amp;offset=20&amp;max=10&amp;sort=id&amp;order=desc">3</a></li>
																<li><a href="" "<?php echo $base_url?>/../index.php/Remote_Download/detail?sourceLabel=alarm&amp;offset=30&amp;max=10&amp;sort=id&amp;order=desc">4</a></li>
																<li><a href="#">..</a></li>
																<li><a href="<?php echo $base_url?>/../index.php/Remote_Download/detail?sourceLabel=alarm&amp;offset=490&amp;max=10&amp;sort=id&amp;order=desc">50</a></li>
																<li><a href="<?php echo $base_url?>/../index.php/Remote_Download/detail?sourceLabel=alarm&amp;offset=10&amp;max=10&amp;sort=id&amp;order=desc">下一页</a></li>
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
								<div class="row-fluid">
									<div class="span12">
										<div class="show-left">
											<div class="info-head">
												<h4><span id="test1" class="info-type">实时监测量</span></h4>
											</div>
											<div class="accordion" id="accordion2">
											</div>
											<div class="info-content form-horizontal" style="margin-top: -15px">
												<table>
												<tbody id="itemTable">
												<tr id="itemTemplate" style="display:none">
													<td width="150px">
														<div class="chat-content">
															<div class="eqitem" style="width: 130px;margin-top: -5px;">
																<div class="widget-box">
																	<input type="hidden" name="equiItem_0" value="1807" eqitemid="1807" iid="1" id="equiItem">
																	<a id="checkBoxDate" value="1807" eqitemid="1807" iid="1" iscustomitem="false">
																	<span id="itemname" class="badge badge-add pull-left active" style="cursor: pointer;margin-bottom:6px">name</span>
																	</a>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="pull-right">
															<span id="itemspan_realtime" style="color: blue;margin-right:6px"></span>
															<span id="itemunit" class="realdataSpan" style="color: red;">unit</span>
														</div>
													</td>
												</tr>
												</tbody>
												</table>
											</div>
											<div style="clear: both">
											</div>
											<div class="info-head">
												<h4><span class="info-type">评价指标计算值</span></h4>
											</div>
											<div >
												<h6><span >&nbsp;&nbsp;</span>系统平衡系数 :</h6>
											</div>
											<div >
												<h6><span>&nbsp;&nbsp;</span>系统损耗系数 :</h6>
											</div>
											<div class="info-content form-horizontal">
												<table>
												<tbody>
												<tr id="timeTemplate" style="display:none">
													<td width="150px">
														<div class="chat-content">
															<div class="eqitem" style="width: 130px;margin-top: -5px;">
																<div class="widget-box">
																	<span id="timespan_data" class="badge badge-add pull-left" style="margin-bottom:6px">油滤器使用时间</span>
																</div>
															</div>
														</div>
													</td>
													<td>
														<div class="pull-right">
															<span id="timespan_realtime" class="realdataSpan" style="color: red;">N/A</span>
															<span id="timeunit" style="color: blue;margin-right: 6px"></span>
														</div>
													</td>
												</tr>
												</tbody>
												</table>
												<br>
											</div>
										</div>
										<div id="dataNow" class="show-right pull-right" style="width: 651px;">
											<div class="info-head">
												<h4><span class="info-type">实时曲线</span></h4>
											</div>
											<div>
												<ul class="recent-posts">
												<div id="dataDiv" class="info-head info-info" style="height: 700px;border-top: 2px solid #ffffff">
													<div id="graphdiv" class="chart" style="width: 600px; height: 550px;">
														<div id="a_line0" style="width: 615px; height:175px; position: relative;">
														</div>
														
														<div id="a_line1" style="width: 615px; height:175px; position: relative;">
														</div>
														
														<div id="a_line2" style="width: 615px; height:175px; position: relative;">
														</div>
														
														<div id="a_line3" style="width: 615px; height:175px; position: relative;">
														</div>
												
													 </div>
												     </div>
											</ul>	
											</div>
										</div>
									</div>
								</div>
							</div>
<div id="show_historyData" class="tab-pane">
						
						<div id="show_historyData" class="tab-pane active"><div class="row-fluid">
	<div id="history" class="span12" style="height: 700px" >
	<div class="show-left">
		<div class="info-head">
			<h4><span class="info-type">监测量</span></h4>
		</div>
		<div class="accordion" id="accordion3">
			
		</div>
		<div class="info-content form-horizontal" style="margin-top: -15px">
			
				<div class="chat-content">
					<div class="eqitem">
						<div class="widget-box">
							<label class="pull-left" for="checkBoxHis_1"><input type="hidden" name="_itemHisGroup"><div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" name="itemHisGroup" id="checkBoxHis_1" itemid="1" itemname="加速度" iscustomitem="false" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
								<span class="badge badge-add" style="font-size: 13.5px;width: 122px">加速度</span></label>
						</div>
					</div>
				</div>
			
				<div class="chat-content">
					<div class="eqitem">
						<div class="widget-box">
							<label class="pull-left" for="checkBoxHis_2"><input type="hidden" name="_itemHisGroup"><div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" name="itemHisGroup" id="checkBoxHis_2" itemid="2" itemname="速度" iscustomitem="false" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
								<span class="badge badge-add" style="font-size: 13.5px;width: 122px">速度</span></label>
						</div>
					</div>
				</div>
			
				<div class="chat-content">
					<div class="eqitem">
						<div class="widget-box">
							<label class="pull-left" for="checkBoxHis_3"><input type="hidden" name="_itemHisGroup"><div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" name="itemHisGroup" id="checkBoxHis_3" itemid="3" itemname="振动频率" iscustomitem="false" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
								<span class="badge badge-add" style="font-size: 13.5px;width: 122px">振动频率</span></label>
						</div>
					</div>
				</div>
			
				<div class="chat-content">
					<div class="eqitem">
						<div class="widget-box">
							<label class="pull-left" for="checkBoxHis_4"><input type="hidden" name="_itemHisGroup"><div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" name="itemHisGroup" id="checkBoxHis_4" itemid="4" itemname="平衡系数" iscustomitem="false" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
								<span class="badge badge-add" style="font-size: 13.5px;width: 122px">平衡系数</span></label>
						</div>
					</div>
				</div>
			
				<div class="chat-content">
					<div class="eqitem">
						<div class="widget-box">
							<label class="pull-left" for="checkBoxHis_5"><input type="hidden" name="_itemHisGroup"><div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" name="itemHisGroup" id="checkBoxHis_5" itemid="5" itemname="传动损耗系数" iscustomitem="false" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
								<span class="badge badge-add" style="font-size: 13.5px;width: 122px">传动损耗系数</span></label>
						</div>
					</div>
				</div>
			
		</div>
		<div style="clear: both"><br></div>
	</div>
	<div id="historyCurve" class="show-right pull-right" style="width: 668px;">
		<div class="info-head">
			<h4>
				<span class="info-type">历史曲线</span>
				<div class="row-fluid pull-right" style="margin-top: -35px">
					<div style="text-align: right;">
						<div id="beginDiv" class="input-append date datetimepicker">
							<input class="tip-top" data-original-title="点击输入起始时间" type="text" id="startDate" readonly="" style="cursor:pointer;width: 100px" value="2015-11-27 00:00">
						</div>
						<i class="icon-resize-horizontal"></i>
						<div id="endDiv" class="input-append date datetimepicker">
							<input data-content="起始和终止时间间隔不宜过大,建议控制在两个小时之内。" title="" data-placement="top" data-toggle="popover" data-original-title="提示" type="text" id="endDate" readonly="" style="cursor:pointer;width: 100px" value="2015-11-27 20:39">
							
						</div>
						<button class="btn btn-success tip-top" id="searchHistory" style="margin-bottom: 10px;margin-right: 9px" title="查询数据" data-loading-text="查询中..."><i class="icon-search"></i></button>
					</div>
				</div>
			</h4>
		</div>
		<div id="historyDiv" class="chart" >
		<div style="width: 615px; height:250px; position: relative;">
			<canvas id="history_curve" width="615" height="200"></canvas>
			<div style="text-align:center;clear:both;">
			</div>
			<script>
				var lineChartData = {
					labels : ["时间1","时间2","时间3","时间4","时间5","时间…","时间n"],
					datasets : [
						{
							fillColor : "rgba(255,255,255,0.05)",
							strokeColor : "rgba(120,120,120,1)",
							pointColor : "rgba(120,120,120,1)",
							pointStrokeColor : "#fff",
							data : [65,59,90,81,56,55,40]
						},
						{
							fillColor : "rgba(255,255,255,0.05)",
							strokeColor : "rgba(151,187,205,1)",
							pointColor : "rgba(151,187,205,1)",
							pointStrokeColor : "#fff",
							data : [28,48,40,19,96,27,100]
						}
					]
				}
				var myLine = new Chart(document.getElementById("history_curve").getContext("2d")).Line(lineChartData);
				
			</script>
		 </div>
		
		 <div style="width: 615px; height: 205px; position: relative;" >
		  <canvas id="history_bar" width="615" height="200" "></canvas>
			<div style="text-align:center;clear:both;">
			</div>
			<script>
				var barChartData = {
					labels : ["0%载荷","20%载荷","40%载荷","60%载荷","80%载荷","100%载荷","120%载荷"],
					datasets : [
						{
							fillColor : "rgba(220,220,220,0.8)",
							strokeColor : "rgba(220,220,220,1)",
							data : [65,59,90,81,56,55,40]
						},
						{
							fillColor : "rgba(151,187,205,0.8)",
							strokeColor : "rgba(151,187,205,1)",
							data : [28,48,40,19,96,27,100]
						}
					]
					
				}

		 var myLine = new Chart(document.getElementById("history_bar").getContext("2d")).Bar(barChartData);
		
			</script>
	     </div>
		</div>
	</div>
</div>  
</div>

</div>
							
							</div>
							<div id="show_energyData" class="tab-pane">
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
																									<span style="margin-left: 22px;">欢迎使用电梯能耗分析功能，该功能可为您的电梯运行状态及能源利用率进行检测评分，可得到压缩机满空载率、耗能及年度评估，并为您提出相应的节能优化改造方案！
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
																								<span>额定载重量
																								<strong><em>
                                                                            1500kg
																								</em></strong>;
																								</span>
																								<span>单位电价
																								<strong><em>
                                                                            0.6&#65509;
																								</em></strong>;
																								</span>
																								<span>额定功率
																								<strong><em>
                                                                            45.0kW
																								</em></strong>
																								</span>
																							</p>
																							<div id="energyBeginDiv" class="input-append date datetimepicker" style="width: 190px;">
																								<span id="energeyStart" class="label label-date">起始:</span>
																								<input class="span5 tip-top" data-original-title="点击输入起始时间" type="text" id="energyBeginDate" readonly style="cursor:pointer;" value="2015-11-19"/>
																								
																							</div>
																							<div id="energyEndDiv" class="input-append date datetimepicker" style="width: 190px;">
																								<span id="energeyEnd" class="label label-date">终止:</span>
																								<input class="span5" data-content="起始和终止时间间隔应该在7天到31天之间。" title="提示" data-placement="top" data-toggle="popover" data-original-title="提示" type="text" id="energyEndDate" readonly style="cursor:pointer;" value="2015-11-26"/>
																								
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
																		<li><span class="name1">电梯载重</span><span class="fuhao">------------------------------------------------</span><span class="value1">正常</span></li>
																		<li><span class="name1">电梯温度</span><span class="fuhao">------------------------------------------------</span><span class="value1">正常</span></li>
																		<li><span class="name1">加卸载</span><span class="fuhao">------------------------------------------------</span><span class="value1">正常</span></li>
																		<li class="current"><span class="name1">电流最大值</span><span class="fuhao">------------------------------------------------</span><span id='maxCurrent' class="value1"></span></li>
																		<li class="current"><span class="name1">电流最小值</span><span class="fuhao">------------------------------------------------</span><span id='minCurrent' class="value1"></span></li>
																		<li class="current"><span class="name1">电流平均值</span><span class="fuhao">------------------------------------------------</span><span id='avgCurrent' class="value1"></span></li>
																		<li><span class="name1">电梯载重最大值</span><span class="fuhao">------------------------------------------------</span><span id='maxDischargePressure' class="value1"></span></li>
																		<li><span class="name1">电梯载重最小值</span><span class="fuhao">------------------------------------------------</span><span id='minDischargePressure' class="value1"></span></li>
																		<li><span class="name1">电梯载重平均值</span><span class="fuhao">------------------------------------------------</span><span id='avgDischargePressure' class="value1"></span></li>
																		<li><span class="name1">电梯温度最大值</span><span class="fuhao">------------------------------------------------</span><span id='maxDischargeTemperature' class="value1"></span></li>
																		<li><span class="name1">电梯温度最小值</span><span class="fuhao">------------------------------------------------</span><span id='minDischargeTemperature' class="value1"></span></li>
																		<li><span class="name1">电梯温度平均值</span><span class="fuhao">------------------------------------------------</span><span id='avgDischargeTemperature' class="value1"></span></li>
																		<li><span class="name1">总电梯量</span><span class="fuhao">------------------------------------------------</span><span id='displacement' class="value1"></span></li>
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
															<h5>能耗分析参数</h5>
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
																				<input type="text" name="nominalDisplacement" value="1500" class="paramsSetText" id="nominalDisplacement" maxlength="5"/>
																				<span class="add-on">kg</span>
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
									<div id="historyreport" class="span12">
										<div class="info-head" style="height: 40px">
											<div style="text-align: right;">
												<div id="begin_Div" class="input-append date datetimepicker">
													<span class="label label-date" id="recordStart" style="background-color:#FFFFFF">起始:</span>
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
				$("#"+"detail").parent('li').addClass('active');
				$("#show_"+"detail").addClass('active');
				$('.span12 .show-right').width($(".container-fluid .row-fluid .span12 #show_"+"detail").width()-350);
			</script>
			<script type="text/javascript" charset="UTF-8">
			    var flag=1;
				function removeactive(){
					$("#"+"detail").parent('li').removeClass('active');
					$("#show_"+"detail").removeClass('active');
					$("#"+"realTimeData").parent('li').removeClass('active');
					$("#show_"+"realTimeData").removeClass('active');
					$("#"+"historyData").parent('li').removeClass('active');
					$("#show_"+"historyData").removeClass('active');
					$("#"+"energyData").parent('li').removeClass('active');
					$("#show_"+"energyData").removeClass('active');
					$("#"+"reportOperating").parent('li').removeClass('active');
					$("#show_"+"reportOperating").removeClass('active');
					$("#"+"maintainRule").parent('li').removeClass('active');
					$("#show_"+"maintainRule").removeClass('active');
				};
				$("#detail").click(function(){
					removeactive();
					$("#"+"detail").parent('li').addClass('active');
					$("#show_"+"detail").addClass('active');
				});

				$("#realTimeData").click(function(){
					removeactive();
					$("#"+"realTimeData").parent('li').addClass('active');
					$("#show_"+"realTimeData").addClass('active');
					if(1==flag){
						 $.ajax({
						   url: "http://115.29.193.236/utopia/index.php/realtime_ajax/getItem",
						   processData: false,
						   contentType: "application/x-www-form-urlencoded; charset=utf-8",
						   success: function(msg){
							   var i=0,data=eval(msg);
							   var nodeTmp;
							   for(i=0;i<data[0].length;i++){							   
								   nodeTmp = $("#itemTemplate").clone(true);
								   $("#equiItem").attr("id","equiItem"+i);
								   $("#checkBoxDate").attr("id","checkBoxDate"+i);
								   $("#itemname").attr("id","itemname"+i);
								   $("#itemname"+i).text(data[0][i].name);
								   $("#itemspan_realtime").attr("id","itemspan_realtime"+i);
								   $("#itemunit").attr("id","itemunit"+i);
								   $("#itemunit"+i).text(data[0][i].unit);
								   $("#itemTemplate").css('display','block');
								   $("#itemTemplate").attr("id","itemTemplate"+i);
								   nodeTmp.appendTo($("#itemTable"));
							   } 
							   flag=0;
						   }
						});
					}
				});

				$("#test1").click(function(){
					flag_line=2;
					alert("flag_line 222")

				});
				
				$("#historyData").click(function(){
					removeactive();
					$("#"+"historyData").parent('li').addClass('active');
					$("#show_"+"historyData").addClass('active');
				});
				
				$("#energyData").click(function(){
					removeactive();
					$("#"+"energyData").parent('li').addClass('active');
					$("#show_"+"energyData").addClass('active');
				});
				$("#reportOperating").click(function(){
					removeactive();
					$("#"+"reportOperating").parent('li').addClass('active');
					$("#show_"+"reportOperating").addClass('active');
				});
				
				$("#maintainRule").click(function(){
					removeactive();
					$("#"+"maintainRule").parent('li').addClass('active');
					$("#show_"+"maintainRule").addClass('active');
				});
				
				
				
				
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
</body>
</html>