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
    <title>监控</title>
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
    
<div id="header">
    <h1><a href="<?php echo $base_url?>/../index.php/elevator/admin">&nbsp;</a></h1>
</div>

    
        <div id="search" class="input-append">
            <input type="text" placeholder="搜索" onkeypress="if (event.keyCode == 13) search(this);" value="" sControllerName="equipment" activeController="equipment"/>
            <button type="submit" class="tip-left" id="searchButton" data-original-title="搜索" onclick="search(this);" sControllerName="equipment" activeController="equipment">
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
        <div class="span10">
            <div class="widget-box box" style="border-bottom: 1px solid #cdcdcd;" id="">
                <div id="equipmentTemplate">
                    
<div class="widget-title box-header"class="info-content form-horizontal" style="margin: 0;border-top: 1px solid #4632AB;font-size: 14px" >
    <div class="box-name">
        <span class="icon">
            <i class="fa fa-hdd-o"></i>
        </span>
        <h5>设备基本信息</h5>
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
        
            
                <a href="<?php echo $base_url?>/../index.php/elevator/createEquipment" title="新增" class="btn tip-left" href="" style="margin:10px"><i class="icon-plus"></i><span>新增</span></a>
    </div>
	
<div>     
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                
                    <th>客户</th>
                    
                        <th>省份</th>
                    
                
                <th>型号</th>
                <th>设备序列号</th>
                <th>运行状态</th>
                <th>故障状态</th>
                <th>保养状态</th>
                <th>管理员</th>
                
                
                <th>操作</th>
                </tr>
                </thead>
                <tbody>
                
                    <tr>
                        
                            <td>浙江大学信电学院</td>
                            
                                <td>浙江省</td>
                            
                        
                        <td>OTIS60A</td>
                        <td>
                            <a id="show_6" dataid="6" href="<?php echo $base_url?>/../index.php/elevator/detail">
                                CNZ207297
                            </a>
                        </td>
                        <td>
                            <img id="imgRunStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/stop.png">
                        </td>
                        <td>
                            
                                
                            
                            
                                
                            
                            
                                
                            
                            <img id="imgAlarmStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/bulb-green-4617a1659f29a5b0909ed0728cf5bf38.png">
                        </td>
                        <td>
                            
                                <img id="imgMaintainStatus_00003494_00003494" src="<?php echo $base_url?>/assets/state/bulb-red-c6426860734fc2a546a610da444f9192.png">
                            
                            
                        </td>
                        <td>1号</td>
                        
                        
                        <td>
                            
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn dropdown-toggle">操作 <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        
                                            
                                                <li><a href="<?php echo $base_url?>/../index.php/elevator/edit" id="edit_6"
                                                       >编辑</a></li>
                                            
                                        
                                        
                                            
                                                <li>
                                                    
                                                        <a href="#" id="delivery_6"
                                                           dataid="6">重新安装</a>
                                                    
                                                </li>
                                                
                                                    
                                                        <li>
                                                            <a href="#" id="recall_6" dataid="6">召回</a>
                                                        </li>
                                                    
                                                
                                            
                                        
                                        
                                        
                                            <li>
                                                <a href="#" id="addAlarmContact_6" dataid="6">添加报警联系人</a>
                                            </li>
                                        
                                        
                                            <li><a href="#" id="editSSN_6"
                                                   dataid="6">修改采集器序列号</a></li>
                                        
                                        
                                            
                                                <li><a href="#" id="energyAnalysis_6"
                                                       dataid="6">节能分析</a></li>
                                            
                                        
                                        
                                            
                                        
                                    </ul>
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
</div>

<div class="widget-title box-header" class="info-content form-horizontal" style="margin: 0;border-top: 1px solid #4632AB;font-size: 14px" >
    <div class="box-name">
        <span class="icon">
            <i class="fa fa-hdd-o"></i>
        </span>
        <h5>设备当前地理位置</h5>
    </div>
    <div class="box-icons">
        <a class="expand-link">
            <i class="fa fa-expand"></i>
        </a>
    </div>
    <div class="no-move"></div>
</div>

<div class="widget-content box-content" id="mapContent" style="border-bottom: none;min-height: 254px;">

	<script type="text/javascript"> 
		var map = new BMap.Map("mapContent");          // 创建地图实例  
		var point = new BMap.Point(121.561, 29.876);  // 创建点坐标  
		map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别 
		var marker = new BMap.Marker(point);
		map.addOverlay(marker);
	</script> 

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

                        
                        
                                var timer_00003494=1;
                                eventBus.registerHandler('out.status.00003494.00003494.address', function(message){
                                equipmentsStatus(JSON.stringify(message));
                                window.clearTimeout(timer_00003494);
                                timer_00003494 = window.setTimeout(function(timer_00003494){
                                     $("#imgRunStatus_00003494_00003494").attr("src",imgContextPath+"/assets/state/disconnect.png");
                                },60000);
                            });

                            
                        
                        
                        var alarmAddress = "out.alarmData.00003494.00003494.address";
                        eventBus.registerHandler(alarmAddress, function(message){
                            alarmCallback(JSON.stringify(message));
                        });

                        
                            eventBus.send("request.pulling.equipment.data",{"action":"getEquipmentStatus",data:[{"equipmentId":6,"sId":"00003494","eId":"00003494"}]});
                            
                        
                        eventBus.send("request.pulling.equipment.data",{"action":"getAllEquipmentOfflineLongtime",data:[6]},function(it){
                            eqList=it
                        })
                    
                    };

                    eventBus.onclose = function(){
                        console.log("The connection to the server has been lost!");
                        if (typeof(intervalId) != "undefined") {
                            clearInterval(intervalId);
                        }
                    };
                }else{
                        
                         
                         
                                var timer_00003494=1;
                                eventBus.registerHandler('out.status.00003494.00003494.address', function(message){
                                equipmentsStatus(JSON.stringify(message));
                                window.clearTimeout(timer_00003494);
                                timer_00003494 = window.setTimeout(function(timer_00003494){
                                     $("#imgRunStatus_00003494_00003494").attr("src",imgContextPath+"/assets/state/disconnect.png");
                                },60000);
                            });

                            
                        
                        
                        var alarmAddress = "out.alarmData.00003494.00003494.address";
                        eventBus.registerHandler(alarmAddress, function(message){
                            alarmCallback(JSON.stringify(message));
                        });

                        
                            eventBus.send("request.pulling.equipment.data",{"action":"getEquipmentStatus",data:[{"equipmentId":6,"sId":"00003494","eId":"00003494"}]});
                            
                        
                        eventBus.send("request.pulling.equipment.data",{"action":"getAllEquipmentOfflineLongtime",data:[6]},function(it){
                            eqList=it
                        })
                    
                      }
					  */
                   </script>
				   
		
		<script type="text/javascript">
			var labela = $("#label").val();
			if (labela == '' || labela ==undefined) {
				$("#createEqBut").show();
			}
			if(labela=='ownEq'){
				$("#eqShowMessage").text("没有您关注的设备(没有设备设置您为报警联系人)");
			}
			if(labela=='noAlarmContactEq'){
				$("#eqShowMessage").text("没有未设置报警联系人的设备");
			}
		</script>


                </div>
            </div>
        </div>

        <div class="span2">
            <div class="widget-box widget-chat " style="border-bottom: 1px solid #cdcdcd;">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-th-list"></i>
                    </span>
                    <h5>分类</h5>
                </div>
                
                    
                        <div class="widget-title tip-top" style="text-align:center;"
                             title="选择经销商或客户">
                            <select id="dealerCustomerInput" name="dealerCustomerInput" style="width: 100%">
                                <option></option>
                                
                                    <option value="26">浙江大学信电学院</option>
                                
                            </select>
                        </div>
                    
                
                <div class="widget-content customerDiv" style="border-bottom: none;min-height: 450px;">
                    
                        <div class="rightBox" style="text-align: center">
                            <a href="#" class="tip-top" title="全部"
                               onclick="getFilterEquip(this, 'equipment', 'getOrgEquipmentList');">
                                <p class="word" >全部</p>
                                <img src="<?php echo $base_url?>/assets/bg/tag_blue-1136d369aeb1d4e6ea23260a215d1cb7.png" />
                            </a>
                        </div>
                    
                    
                        
                            <div class="rightBox" style="text-align: center">
                                <a href="#" class="tip-top" title="我的设备"
                                   onclick="getFilterEquip(this, 'equipment', 'getMyEquipmentList');">
                                    <p class="word">我的设备</p>
                                    <img src="<?php echo $base_url?>/assets/bg/tag_white-b73822553cf03ac0bb16744f85a65889.png" />
                                </a>
                            </div>
                        
                    
                    
                        <div class="rightBox" style="text-align: center">
                            <a href="#" class="tip-top"
                               title="待分配"
                               onclick="getFilterEquip(this, 'equipment', 'getNoAlarmContactEquipmentList');">
                                <p class="word">待分配</p>
                                <img src="<?php echo $base_url?>/assets/bg/tag_white-b73822553cf03ac0bb16744f85a65889.png" />
                            </a>
                        </div>
                    

                    
                        <div class="rightBox" style="text-align: center">
                            <a href="#" class="tip-top"
                               title="长期离线"
                               onclick="getFilterEquip(this, 'equipment', 'getLongTimeOfflineEquipmentList');">
                                <p class="word">长期离线</p>
                                <img src="<?php echo $base_url?>/assets/bg/tag_white-b73822553cf03ac0bb16744f85a65889.png" />
                            </a>
                        </div>
                    

                    
                        <div class="rightBox" style="text-align: center">
                            <a href="#" class="tip-top"
                               title="待节能"
                               onclick="getFilterEquip(this, 'equipment', 'getLowEnergySavingEquipmentList');">
                                <p class="word">待节能</p>
                                <img src="<?php echo $base_url?>/assets/bg/tag_white-b73822553cf03ac0bb16744f85a65889.png" />
                            </a>
                        </div>
                    

                    
                        
                            <div class="rightBox" style="text-align: center">
                                <a href="#" class="tip-top"
                                   title="未发货"
                                   controller="equipment" action="getNotdeliveryEquipments"
                                   onclick="getFilterEquip(this, 'equipment', 'getNotdeliveryEquipments');">

                                    <p class="word" >
                                        
                                            未安装
                                        
                                    </p>
                                    <img src="<?php echo $base_url?>/assets/bg/tag_white-b73822553cf03ac0bb16744f85a65889.png"/>
                                </a>
                            </div>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div id="returnConfirmDialog" title="提示">
    <p>你确认要退货吗？</p>
</div>

<div id="recallConfirmDialog" title="提示">
    <p>你确认要召回这台设备吗？</p>
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
                "召回": function () {
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
                    , "安装"
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
</script>
</body>
</html>

