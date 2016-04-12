
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
    <title>设备列表</title>
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
		
		
        <script src="<?php echo $base_url?>/assets/equipment/monitor-5dcc16f7717785ba8ba12dd1682fec20.js" type="text/javascript" ></script>
	
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
                <div class="widget-box box">
                    <div class="widget-title box-header">
                        <div class="box-name">
                            <span class="icon">
                                <i class="fa fa-hdd-o"></i>
                            </span>
                            <h5>需要节能的设备</h5>
                        </div>
                        <div class="box-icons">
                            <a class="expand-link">
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                        <div class="no-move"></div>
                    </div>
                    <div class="widget-content box-content">
                        
                        <div class="empty-panel">
                            <i class="fa fa-smile-o fa-spin"></i>
                            <br>
                            <span>目前没有需要节能的设备～</span>
                        </div>
                        
                </div>
            </div>
            <div class="pagination pagination-right alternate page-style">
                <ul>
                    
                </ul>
            </div>
        </div>
    </div>
    <div id="editEquipmentModle"  class="modal hide" style="width:400px;z-index: 1050; !important;">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h3>导入型号表</h3>
        </div>
        <form action="../equipmentModel/importExcel" method="post" enctype="multipart/form-data" >
            <fieldset class="from">
                <div class="modal-body">
                    <div class="controls">
                        型号表 <input type="file" name="file" id="template"/>
                    </div>
                    <div class="controls">
                        标有*的字段为必填内容！
                        提示:在导入excel时,请注意数据格式以及不要在无数据的行中输入空格!
                    </div>
                </div>
            </fieldset>
            <div class="modal-footer">
                <input type="submit" name="importExcel" value="确定" class="btn btn-primary" id="importExcel" />
                <a data-dismiss="modal" class="btn" href="#">取消</a>
            </div>
        </form>
    </div>
    
        
    
    <div id="returnConfirmDialog" title="提示">
        <p>你确认要退货吗？</p>
    </div>
    <div id="recallConfirmDialog" title="提示">
        <p>你确认要召回这台设备吗？</p>
    </div>
    <script type="text/javascript">
var language='zh_CN';

                if (typeof(intervalId) != "undefined") {
                    clearInterval(intervalId);
                }
                   if(typeof(eventBus) == "undefined"){
eventBus = new vertx.EventBus('http://119.148.161.17:3180/eventbus');
                    eventBus.onopen = function() {
                        console.log('Connectioned server!');
                        /*eventBus.registerHandler('out.status.address', function(message){
                            jsonpState_callback(JSON.stringify(message));
                        });*/

                        
                        
                        
                        
                        
                        
                    };

                    eventBus.onclose = function(){
                        console.log("The connection to the server has been lost!");
                        if (typeof(intervalId) != "undefined") {
                            clearInterval(intervalId);
                        }
                    };
                }else{
                        
                         
                         
                        
                        
                        
                        
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
        $(function(){
             $("a[id^='edit_']").live('click',function(){
                      location.href="../equipment/edit/"+$(this).attr('dataid')
             });
             $("a[id^='show_']").live('click',function(){
                      location.href="../equipment/show?id="+$(this).attr('dataid')+"&tab=energyData"
             });

             $("a[id^='energyAnalysis_']").live('click',function(){
                location.href="../equipment/show?id="+$(this).attr('dataid')+"&tab=energyData"
            });

             $("a[id^='editSSN_']").live('click',function(){
                showAjaxDialog("../equipment/editSSN?eqId="+$(this).attr('dataid')
                                 , "editSSN"
                                 , "修改采集器序列号"
                                 , 550
                                 , 500);
             });
             $("a[id^='return_']").live('click',function(){
                $("a[id^='return_']").removeClass("active");
                $(this).addClass("active");
                $("#returnConfirmDialog").dialog('open');
             });

             $("a[id^='recall_']").live('click',function(){
                $("a[id^='recall_']").removeClass("active");
                $(this).addClass("active");
                $("#recallConfirmDialog").dialog('open');
             });

             $("a[id^='delivery_']").live('click',function(){
                var operate,orgtype="DEALER";
                if(orgType=='DEALER'){
                    operate="安装";
                }else{
                    operate="发货";
                }
                showAjaxDialog("../equipment/singleDeliveryPage?eqId="+$(this).attr('dataid')
                                 , "deliveryForm"
                                 , operate
                                 , 450
                                 , 500);
             });
             $("a[id^='addAlarmContact_']").live('click',function(){
                showAjaxDialog("../equipment/alarmContact?eqId="+$(this).attr('dataid')
                                 , "alarmContactsForm"
                                 , "添加报警联系人"
                                 , 550
                                 , 500);
             });
             $("a[id^='delete_']").live('click',function(){
                  if(confirm('您确定删除该数据吗？')){
                        deleteFunc("../equipment/deleteEquipment/"+$(this).attr("dataid"));
                    }
             })

             $("#returnConfirmDialog").dialog({
                autoOpen: false,
                modal: true,
                buttons: {
                    "退货": function () {
                        var id=$("a[id^='return_'].active").attr("dataid");
                        $.post("../equipment/returnEquipment?id="+id,function(data){
                            if(data.result == 'success'){
                                $("#returnConfirmDialog").dialog("close");
                                gritterAlarm(data.message);
                                setTimeout(function(){location.reload();}, 1500);
                                return false;
                            }else{
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
                        var id=$("a[id^='recall_'].active").attr("dataid");
                        $.post("../equipment/recallEquipment?id="+id,function(data){
                            if(data.result == 'success'){
                                $("#recallConfirmDialog").dialog("close");
                                gritterAlarm(data.message);
                                setTimeout(function(){location.reload();}, 1500);
                                return false;
                            }else{
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
        })
    </script><script >
    var active = "needEnergyEquipmentPage";
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

