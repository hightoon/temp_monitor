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
    <title>编辑</title>
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
		
        <link rel="stylesheet" href="<?php echo $base_url?>/css/iCheckSkin/skins/square/blue.css" type="text/css"/>
		
	
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
                <i class="fa fa-vimeo-square"></i> <span class="text">administrator</span>
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
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-hdd"></i>
                        </span>
                        <h5>编辑</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="../equipment/update/6" method="post" class="form-horizontal" ><input type="hidden" name="_method" value="PUT" id="_method" />
                            <input type="hidden" name="version" value="24" id="version" />
                            <input type="hidden" name="id" value="6" id="id" />
                            <input type="hidden" name="recipientId" value="" id="recipientId" />
                            <div class="control-group">
                                <label class="control-label">设备序列号<span class="required-indicator">*</span></label>
                                <div class="controls">
                                    <input type="text" name="eSN" maxlength="20" value="CNZ207297" required="" id="eSN" />
                                    <span class="help-inline" ></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">名称</label>
                                <div class="controls">
                                    <input type="text" name="alias" maxlength="18" value="奥特斯空压机" id="alias" />
                                    <span class="help-inline" ></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">采集器序列号</label>
                                <div class="controls">
                                    <input type="text" placeholder="起始采集器序列号" name="sSN" maxlength="18" value="201503120300003494" onkeyup="this.value=this.value.replace(/[^0-9A-Fa-f]/g,&#39;&#39;)" id="sSN" />
                                    <span class="help-inline" ></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">设备型号</label>
                                
                                    <div class="controls" id="one">
                                        <select style="width:200px;" id="6"
                                                name="equipmentModelId" >
                                            <option value="">--请选择--</option>
                                            
                                                
                                                    <option value="1">75A-8</option>
                                                
                                            
                                                
                                                    <option value="2">150A－21/7</option>
                                                
                                            
                                                
                                                    <option value="3">OTIS75A/8</option>
                                                
                                            
                                                
                                                    <option value="4">OTIS150A/7</option>
                                                
                                            
                                                
                                                    <option value="5">OTIS-75A/8</option>
                                                
                                            
                                                
                                                    <option value="6" selected="true">OTIS60A</option>
                                                
                                            
                                                
                                                    <option value="7">OTIS7A</option>
                                                
                                            
                                                
                                                    <option value="8">OTIS10A</option>
                                                
                                            
                                                
                                                    <option value="9">OTIS15A</option>
                                                
                                            
                                                
                                                    <option value="10">OTIS20A</option>
                                                
                                            
                                                
                                                    <option value="11">OTIS25A</option>
                                                
                                            
                                                
                                                    <option value="12">OTIS30A</option>
                                                
                                            
                                                
                                                    <option value="13">OTIS40A</option>
                                                
                                            
                                                
                                                    <option value="14">OTIS50A</option>
                                                
                                            
                                                
                                                    <option value="15">OTIS75A</option>
                                                
                                            
                                                
                                                    <option value="16">OTIS100A</option>
                                                
                                            
                                                
                                                    <option value="17">OTIS120A</option>
                                                
                                            
                                                
                                                    <option value="18">OTIS150A</option>
                                                
                                            
                                                
                                                    <option value="19">OTIS200A</option>
                                                
                                            
                                                
                                                    <option value="20">OTIS250A</option>
                                                
                                            
                                                
                                                    <option value="21">OTIS275A</option>
                                                
                                            
                                                
                                                    <option value="22">OTIS300A</option>
                                                
                                            
                                                
                                                    <option value="23">OTIS350A</option>
                                                
                                            
                                                
                                                    <option value="24">OTIS75AG/8</option>
                                                
                                            
                                                
                                                    <option value="25">TH55PM</option>
                                                
                                            
                                                
                                                    <option value="26">TH7.5</option>
                                                
                                            
                                                
                                                    <option value="27">TH11</option>
                                                
                                            
                                                
                                                    <option value="28">TH15</option>
                                                
                                            
                                                
                                                    <option value="29">TH18.5</option>
                                                
                                            
                                                
                                                    <option value="30">TH22</option>
                                                
                                            
                                                
                                                    <option value="31">TH30</option>
                                                
                                            
                                                
                                                    <option value="32">TH37</option>
                                                
                                            
                                                
                                                    <option value="33">TH45</option>
                                                
                                            
                                                
                                                    <option value="34">TH55</option>
                                                
                                            
                                                
                                                    <option value="35">TH75</option>
                                                
                                            
                                                
                                                    <option value="36">BLX7</option>
                                                
                                            
                                                
                                                    <option value="37">BLX10A</option>
                                                
                                            
                                                
                                                    <option value="38">BLX15A</option>
                                                
                                            
                                                
                                                    <option value="39">BLX20A</option>
                                                
                                            
                                                
                                                    <option value="40">BLX25A</option>
                                                
                                            
                                                
                                                    <option value="41">BLX30A</option>
                                                
                                            
                                                
                                                    <option value="42">BLX40A</option>
                                                
                                            
                                                
                                                    <option value="43">BLX50A</option>
                                                
                                            
                                                
                                                    <option value="44">BLX60A</option>
                                                
                                            
                                                
                                                    <option value="45">BLX70A</option>
                                                
                                            
                                                
                                                    <option value="46">BLX75A</option>
                                                
                                            
                                                
                                                    <option value="47">BLX100A</option>
                                                
                                            
                                        </select>
                                        
                                            <span style="color: #ff0000">如需新增型号请联系厂商！</span>
                                        
                                    </div>
                                
                                <div class="controls" id="two" style="display: none;">

                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">额定功率<span class="required-indicator">*</span></label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="number" placeholder="额定功率" name="power" min="1" required="required" max="10000" value="45.0" id="power" />
                                        <span class="add-on">kW</span>
                                    </div>
                                    <span class="help-inline" ></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">额定电压<span class="required-indicator">*</span></label>
                                <div class="controls">
                                    <div class="input-append">
                                        <input type="number" placeholder="额定电压" name="voltage" min="220" required="required" max="50000" value="380.0" id="voltage" />
                                        <span class="add-on">V</span>
                                    </div>
                                </div>
                            </div>

                            
                                <div class="control-group">
                                    <label class="control-label">空压站</label>

                                    
                                        <div class="controls" id="selectCompressorStation">
                                            <select id="compressorStation" name="compressorStation" style="width:200px;" >
                                                <option value="">--请选择--</option>
                                                
                                                    
                                                        <option value="1号" selected="true">1号</option>
                                                    
                                                
                                            </select>
                                            <a id="newCompressorStation" href="#" title="新增空压站"><i
                                                    class="fa fa-plus-square"></i></a>
                                        </div>
                                    
                                    <div class="controls" id="compressorStationDiv" style="display: none;">

                                    </div>
                                </div>
                            

                            
                            
                                <input type="hidden" name="equipmentBrand.id" id="eqBrand" value="1" />
                                <div class="control-group">
                                    <label class="control-label">控制器<span class="required-indicator">*</span></label>

                                    <div class="controls">
                                        <select name="plcId" id="plcId"  style="width:200px;"></select>
                                        
                                    </div>
                                </div>
                            

                            <div class="control-group">
                                <label class="control-label">变频机</label>

                                <div class="controls">
                                    <input type="hidden" name="_isFrequencyChanger" /><input type="checkbox" name="isFrequencyChanger" id="isFrequencyChanger"  />
                                </div>
                            </div>

                            <div class="form-actions">
                               <fieldset class="buttons">
                                   <button class="btn btn-primary"><i class="icon-plus icon-white"></i>保存</button>
                                   <a class="btn btn-inverse" href="javascript:history.go(-1);"><i class="icon-backward icon-white"></i>返回</a>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alertDialog" title="提示">
        <p></p>
    </div>
    
    <script type="text/javascript">

       $(function(){
            var eqBrandId="1";
            var plcId="1";
            var isSingle="true";
            var brandAndPLCS="\u007b\u0022result\u0022:true\u002c\u0022data\u0022:\u005b\u007b\u0022brandId\u0022:1\u002c\u0022brandName\u0022:\u0022开山\u0022\u002c\u0022plcList\u0022:\u005b\u007b\u0022id\u0022:2\u002c\u0022name\u0022:\u0022奥特斯-高压\u0022\u002c\u0022defaultUse\u0022:false\u007d\u002c\u007b\u0022id\u0022:3\u002c\u0022name\u0022:\u0022奥特斯-汇川-二代\u0022\u002c\u0022defaultUse\u0022:false\u007d\u002c\u007b\u0022id\u0022:1\u002c\u0022name\u0022:\u0022奥特斯-标准\u0022\u002c\u0022defaultUse\u0022:true\u007d\u005d\u007d\u005d\u007d";
            var data=JSON.parse(brandAndPLCS);
            if(isSingle != 'true'){
                if(data.result){
                     for(i=0;i<data.data.length;i++){
                          if(eqBrandId == data.data[i].brandId ){
                             $("#eqBrand").prepend("<option selected='selected' value='"+data.data[i].brandId+"'>"+data.data[i].brandName+"</option>");
                          }else{
                             $("#eqBrand").prepend("<option value='"+data.data[i].brandId+"'>"+data.data[i].brandName+"</option>");
                          }
                     }
                }
            }

            if(eqBrandId){
                getPLCS(eqBrandId,data);
            }

            if(isSingle != 'true'){
                 $("#eqBrand").change(function(){
                     getPLCS($("#eqBrand").val(),data);
                })
            }

            function getPLCS(brandId,data){
                  var plcList = null;
                  if(data.result){
                     $("#plcId").html('');
                     for(i=0;i<data.data.length;i++){
                           plcList=data.data[i].plcList;
                           if(brandId == data.data[i].brandId ){
                               for(j=0;j<plcList.length;j++){
                                 if(plcId == plcList[j].id){
                                    $("#plcId").prepend("<option selected='selected' value='"+plcList[j].id+"'>"+plcList[j].name+"</option>");
                                 }else{
                                     $("#plcId").prepend("<option value='"+plcList[j].id+"'>"+plcList[j].name+"</option>");
                                 }

                              }
                              return
                           }
                     }
                  }
            }
       })
    
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
            var error = "";
            if(error){
                $("#alertDialog").dialog("open")
            }
              var html = "<div id='newDiv'>" +
                        "<input type='text' name='modelName' maxlength='50' value=''/>" +
                        "<a id='selectModel' href='#' title=选择型号><i class='fa fa-reply'></i></a></div>";
            $("#newModel").click(function(){
                $("#one").hide();
                $("#two").show();
                $("#two").append(html);
            });
            $("#selectModel").live("click",function(){
                $("#newDiv").remove();
                $("#two").hide();
                $("#one").show();
            });

            var compressorStationHtml = "<div id='stationDiv'>" +
            "<input type='text' name='compressorStationName' maxlength='50' value=''/>" +
            "<a id='selectStation' href='#' title=选择空压站><i class='fa fa-reply'></i></a></div>";
            $("#newCompressorStation").click(function(){
                $("#selectCompressorStation").hide();
                $("#compressorStationDiv").show();
                $("#compressorStationDiv").append(compressorStationHtml);
            });
            $("#selectStation").live("click",function(){
                $("#stationDiv").remove();
                $("#compressorStationDiv").hide();
                $("#selectCompressorStation").show();
            });

            $("select[name='equipmentModelId'] option").click(function(){
                if($(this).val()!='null' && $(this).val()!=''){
                     $.ajax({
                        url:"../equipment/getEquipmentModel/"+$(this).val(),
                        type: "GET",
                        async:false,
                        success: function(data) {
                            $('#power').val(data.power);
                            $('#voltage').val(data.voltage);
                        }
                    });
                }else{
                    $('#power').val('1');
                    $('#voltage').val('380');
                }
            });

            $(".form-horizontal").validate({
                rules:{
                    eSN:{
                        required:true
                    },
                    power:{
                        required:true,
                        
                        min:1,
                        max:10000
                    },
                    voltage:{
                        required:true,
                        
                        min:220,
                        max:50000
                    }
                },
                 messages:{
                    eSN:{
                        required:"<span class='help-inline'><i class='fa fa-star'></i>设备序列号不能为空</span>"
                    },
                    power:{
                        required:"<span class='help-inline'><i class='fa fa-star'></i>额定功率不能为空</span>",
                        
                        min:"<span class='help-inline'><i class='fa fa-star'></i>额定功率最小值为1</span>",
                        max:"<span class='help-inline'><i class='fa fa-star'></i>额定功率最大值为10000</span>"
                    },
                    voltage:{
                        required:"<span class='help-inline'><i class='fa fa-star'></i>额定电压不能为空</span>",
                        
                        min:"<span class='help-inline'><i class='fa fa-star'></i>额定电压最小值为220</span>",
                        max:"<span class='help-inline'><i class='fa fa-star'></i>额定电压最大值为50000</span>"
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
            $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%'
            });
        })
    </script><script >
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

