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
    <title>所有设备信息</title>
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
    
    
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="layout" content="main">
    
    
    
    <style type="text/css">
    .dropdown-menu a {
        text-align: left;
    }

    .word {
        margin-top: 12px;
        margin-left: 28%;
        position: absolute;
        font-size: 15px;
        text-align: center;
    }

    .rightBox {
        position: relative;
    }

    .select2-container .select2-choice {
        height: 34px;
        line-height: 34px;
    }
    .rightBox img{
        width:100%;
        height: 50px
    }
    </style>
    <script type="text/javascript">

        var submitLabel="确定";
        var cancelLabel="取消";
        var alarmLabel="报警";
    
</script>

    <script src="<?php echo $base_url?>/assets/equipment/monitor-5dcc16f7717785ba8ba12dd1682fec20.js" type="text/javascript" ></script>

</head>
<body>
<div id="main">
        <!-- /.navbar-static-side -->
        <?php $current_file = basename(__FILE__); require 'menu_top_left.php' ?>

    <div id="content">
        

<div class="container-fluid">
		<div class="row-fluid">
				<div class="span9">
					<div class="widget-box box" style="border-bottom: 1px solid #cdcdcd;" id="">
						<div id="equipmentTemplate">
							
		<div class="widget-title box-header"class="info-content form-horizontal" style="margin: 0;border-top: 1px solid #4632AB;font-size: 14px" >
			<div class="box-name">
				<span class="icon">
					<i class="fa fa-hdd-o"></i>
				</span>
				<h5>所有设备信息</h5>
			</div>
			<div class="box-icons">
				<a class="expand-link">
					<i class="fa fa-expand"></i>
				</a>
			</div>
			<div class="no-move"></div>
		</div>

		<div class="widget-content box-content" id="showContent" style="border-bottom: none;min-height: 300px;">
			<div id="createEqBut" style="border-bottom:1px solid #C3C3C3;display: none">
				
					
						<a href="<?php echo $base_url?>/../index.php/Remote_Download/createEquipment" title="新增" class="btn tip-left" href="" style="margin:10px"><i class="icon-plus"></i><span>新增</span></a>
			</div>
			
		<div>     
<!-- table head ---------------------------------------------------------------------------------------- -->
					<table class="table table-striped table-hover">
						<thead>
						<tr>
						
						<th>名称</th>
						<th>省份</th>
						<th>型号</th>
						<th>设备序列号</th>
						<th>运行状态</th>
						<th>绑定状态</th>
						<th>波特率/bps</th>
						<th>通讯格式</th>
						<th>PC端选择</th>
						<th>保存</th>
						<th>开始通信</th>
						
						</tr>
						</thead>
<!-- table start ---------------------------------------------------------------------------------------- -->						
						<tbody>
						
							<tr>
								
									<td>PLC0</td>
									
										<td>浙江</td>
									
								
								<td>XXXXXX</td>
								<td>
									<a id="show_6" dataid="6" href="<?php echo $base_url?>/../index.php/Remote_Download/detail">
										PLC0000
									</a>
								</td>
								<td>
									<img id="imgRunStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/run.png">
								</td>
								<td>     
									
									<img id="imgAlarmStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/unbound.png">
								</td>
							   
								<td>
									<select  class="span10" id="baudrate_PLC0">
									<option value="0">1200</option>
									<option value="1">2400</option>
									<option value="2">4800</option>
									<option value="3">9600</option>
									<option value="4">19200</option>
									<option value="5">38400</option>
									<option value="6">57600</option>
									<option value="7">115200</option>
								  </select>
								</td>
								
								
								<td>
									<select class="span10" id="commformat_PLC0">
										<option value="0">7,1,E</option>
										<option value="1">7,1,O</option>
										<option value="2">7,2,E</option>
										<option value="3">7,2,O</option>
										<option value="4">8,1,E</option>
										<option value="5">8,1,O</option>
										<option value="6">8,1,N</option>
										<option value="7">8,2,N</option>
									</select>
								</td>
								
								<td>
									<select class="span10" id="PC_PLC0">
										<option value="0">PC0</option>
										<option value="1">PC1</option>
										<option value="2">PC2</option>
									</select>
								</td>
								
								<td>
                   <button data-toggle="dropdown" class="btn dropdown-toggle"  id="save_PLC0" > 保存</button>
								</td>
								
								<td>
                   <button data-toggle="dropdown" class="btn dropdown-toggle"  id="bind_PLC0" > 立即绑定bind</button>
								</td>
								
							</tr>
						
						</tbody>
<!-- line break ---------------------------------------------------------------------------------------- -->							
						<tbody>
						
							<tr>
								
								<td>PLC1</td>
									
								<td>北京</td>
									
								<td>XXXXXX</td>
								
								<td>
									<a id="show_6" dataid="6" href="<?php echo $base_url?>/../index.php/Remote_Download/detail">
										PLC0001
									</a>
								</td>
								
								<td>
									<img id="imgRunStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/run.png">
								</td>
								
								<td>     
									<img id="imgAlarmStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/bulb-green-4617a1659f29a5b0909ed0728cf5bf38.png">
								</td>
							   
								<td>
									<select class="span10">
									<option value="0">1200</option>
									<option value="1">2400</option>
									<option value="2">4800</option>
									<option value="3">9600</option>
									<option value="4">19200</option>
									<option value="5">38400</option>
									<option value="6">57600</option>
									<option value="7">115200</option>
								  </select>
								</td>
								
								
								<td>
									<select class="span10">
										<option value="0">7,1,E</option>
										<option value="1">7,1,O</option>
										<option value="2">7,2,E</option>
										<option value="3">7,2,O</option>
										<option value="4">8,1,E</option>
										<option value="5">8,1,O</option>
										<option value="6">8,1,N</option>
										<option value="7">8,2,N</option>
									</select>
								</td>
							</tr>
						
						</tbody>
<!-- line break ---------------------------------------------------------------------------------------- -->						
						<tbody>
					
							<tr>
								
								<td>PLC2</td>
									
								<td>四川</td>
								
								<td>XXXXXX</td>

								<td>
									<a id="show_6" dataid="6" href="<?php echo $base_url?>/../index.php/Remote_Download/detail">
										PLC0002
									</a>
								</td>

								<td>
									<img id="imgRunStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/disconnect.png">
								</td>

								<td>     
									
									<img id="imgAlarmStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/unbound.png">
								</td>
							   
								<td>
									<select   class="span10">
									<option value="0">1200</option>
									<option value="1">2400</option>
									<option value="2">4800</option>
									<option value="3">9600</option>
									<option value="4">19200</option>
									<option value="5">38400</option>
									<option value="6">57600</option>
									<option value="7">115200</option>
								  </select>
								</td>
								
								
								<td>
									<select class="span10">
										<option value="0">7,1,E</option>
										<option value="1">7,1,O</option>
										<option value="2">7,2,E</option>
										<option value="3">7,2,O</option>
										<option value="4">8,1,E</option>
										<option value="5">8,1,O</option>
										<option value="6">8,1,N</option>
										<option value="7">8,2,N</option>
									</select>
								</td>
							</tr>
						
						</tbody>
						
						
					</table>
<!-- table end ---------------------------------------------------------------------------------------- -->				
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
		
		</div>


						</div>
					</div>
				</div>
			
				<div class="span3">
				<div class="widget-box box" style="border-bottom: 1px solid #cdcdcd;" id="1deviceInfo">
					
					<div class="widget-title box-header"class="info-content form-horizontal" style="margin: 0;border-top: 1px solid #4632AB;font-size: 14px" >
								<div class="box-name">
									<span class="icon">
										<i class="fa fa-hdd-o"></i>
									</span>
								<h5>单台设备信息</h5>
								</div>
								
								<div class="no-move"></div>
							</div>
							
					<div class="info-content form-horizontal" >
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
								</a>
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
					<div class="info-content form-horizontal" style="margin: 0;border-top: 1px solid #FEA800;font-size: 14px">
						<div class="info-head">
							<span class="info-type">PLC0000</span>
						</div>
					</div>
					<div class="info-content form-horizontal" style="text-align: center;>
						<p class="info-item">
							名称：<span>PLC0</span>
						</p>
						<p class="info-item">
							设备型号：<span>XXXXXX</span>
						</p>
						<p class="info-item">
							波特率：<span>4800bps</span>
						</p>
						<p class="info-item">
							使用者：<span>NO.1</span>
						</p>
						<p class="info-item">
							具体地址：<span>浙江杭州</span>
						</p>
						<p class="info-item">
							数据上报时间：
							<span id="latestReportDataTime_6">
						2016-01-25 16:40
							</span>
						</p>
					</div>
				</div>
		</div>
									
    </div>

<div id="returnConfirmDialog" title="提示">
    <p>你确认要退货吗？</p>
</div>

<div id="recallConfirmDialog" title="提示">
    <p>你确认要解除绑定这台设备吗？</p>
</div>
<script type="text/javascript">
    var eqList=[];
    $(function () {
        $(".customerDiv p:first").css('color', '#FFFFFF');
        $(".customerDiv").slimscroll({
            height: '540px',
            alwaysVisible: true,
            size: '10px'
        });
        $("#dealerCustomerInput").select2({
            placeholder: "经销商客户",
            width: 'resolve'
        });
        $("#returnConfirmDialog").dialog({
            autoOpen: false,
            modal: true,
            buttons: {
                "退货": function () {
                    var id = $("a[id^='return_'].active").attr("dataid");
                    $.post("../equipment/returnEquipment?id=" + id, function (data) {
                        if (data.result == 'success') {
                            $("#returnConfirmDialog").dialog("close");
                            gritterAlarm(data.message);
                            setTimeout(function () {
                                location.reload();
                            }, 1500);
                            return false;
                        } else {
                            $("#returnConfirmDialog").dialog("close");
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
        $("#recallConfirmDialog").dialog({
            autoOpen: false,
            modal: true,
            buttons: {
                "解除绑定": function () {
                    var id = $("a[id^='recall_'].active").attr("dataid");
                    $.post("../equipment/recallEquipment?id=" + id, function (data) {
                        if (data.result == 'success') {
                            $("#recallConfirmDialog").dialog("close");
                            gritterAlarm(data.message);
                            setTimeout(function () {
                                location.reload();
                            }, 1500);
                            return false;
                        } else {
                            $("#recallConfirmDialog").dialog("close");
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

        $(".pagination a").live("click", function () {
            var url = $(this).attr("data");
            if (url) {
                    $("#equipmentTemplate").load(url);
            }
        });

        $("#dealerCustomerInput").change(function () {
            $('.tip-top').tooltip()
            changeStyle($('#dealerCustomer'));
            $("#equipmentTemplate").load("../equipment/getOrgEquipmentList?orgId=" + $(this).val());
        })
        $("a[id^='edit_']").live('click', function () {
            location.href = "../equipment/edit/" + $(this).attr('dataid')
        });
        $("a[id^='show_']").live('click', function () {
            location.href = "../equipment/show/" + $(this).attr('dataid')
        });

        $("a[id^='energyAnalysis_']").live('click', function () {
            location.href = "../equipment/show?id=" + $(this).attr('dataid') + "&tab=energyData"
        });

        $("a[id^='editSSN_']").live('click', function () {
            showAjaxDialog("../equipment/editSSN?eqId=" + $(this).attr('dataid')
                    , "editSSN"
                    , "修改采集器序列号"
                    , 550
                    , 500);
        });
        $("a[id^='return_']").live('click', function () {
            $("a[id^='return_']").removeClass("active");
            $(this).addClass("active");
            $("#returnConfirmDialog").dialog('open');
        });

        $("a[id^='recall_']").live('click', function () {
            $("a[id^='recall_']").removeClass("active");
            $(this).addClass("active");
            $("#recallConfirmDialog").dialog('open');
        });

        $("a[id^='delivery_']").live('click', function () {
            showAjaxDialog("../equipment/singleDeliveryPage?eqId=" + $(this).attr('dataid')
                    , "deliveryForm"
                    , "绑定"
                    , 450
                    , 500);
        });
        $("a[id^='addAlarmContact_']").live('click', function () {
            showAjaxDialog("../equipment/alarmContact?eqId=" + $(this).attr('dataid')
                    , "alarmContactsForm"
                    , "添加报警联系人"
                    , 550
                    , 500);
        });
        $("a[id^='delete_']").live('click', function () {
            if (confirm('您确定删除该数据吗？')) {
                deleteFunc("../equipment/deleteEquipment/" + $(this).attr("dataid"));
            }
        })
    });

    function changeStyle(focus) {
        $(".rightBox img").each(function () {
            $(this).attr("src", imgContextPath + '/assets/bg/tag_white.png');
        });
        $(".rightBox p").each(function () {
            $(this).css('color', '#0089CF');
        });
        focus.find("p").css('color', '#FFFFFF');
        focus.find("img").attr('src', imgContextPath + "/assets/bg/tag_blue.png");
    }
    function deleteEquipmentGroup(obj) {
        var id = $(obj).attr("equipemtGroup_id");
        if (id) {
            $.post(contextPath + "/equipmentGroup/delete?id=" + id, function (data) {
                if (data.result == 'success') {
                    window.location.href = "/hawkeyes" + data.uri;
                } else {
                    $("#downloadClientAlertDialog").text(data.message);
                    $("#downloadClientAlertDialog").dialog("open");
                    return false;
                }
            });
        } else {
            $("#downloadClientAlertDialog").text("数据错误!");
            $("#downloadClientAlertDialog").dialog("open");
            return false;
        }
    }

    function getFilterEquip(obj, controller, action) {
        changeStyle($(obj));
        if(action=='getLongTimeOfflineEquipmentList'){
            $("#equipmentTemplate").load("../"+ controller + "/" + action +"?eqIdList="+eqList);
        }else{
            $("#equipmentTemplate").load("../" + controller + "/" + action);
        }
    }
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
    $('#baudrate').click(function(){
    		console.log($('#baudrate').val());
    	});
</script>
</body>
</html>

