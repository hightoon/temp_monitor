
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
    <title>新增</title>
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
    
    <link rel="stylesheet" href="/hawkeyes/css/iCheckSkin/skins/square/blue.css" type="text/css"/>
    

</head>
<body>
<div id="main">
   <!-- /.navbar-static-side -->
        <?php $current_file = basename(__FILE__); require 'menu_top_left.php' ?>

    <div id="content">
        
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-hdd"></i>
                    </span>
                    <h5>新增</h5>
                </div>

                <div class="widget-content nopadding">
                    <form action="/hawkeyes/equipment/save" method="post" class="form-horizontal" >
                        <div class="control-group">
                            <input type="hidden" name="id" value="" id="id" />
                            <label class="control-label">设备序列号<span class="required-indicator">*</span></label>

                            <div class="controls">
                                <input type="text" name="eSN" maxlength="20" value="" id="eSN" />
                                <span class="help-inline"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">名称</label>

                            <div class="controls">
                                <input type="text" name="alias" maxlength="18" value="" id="alias" />
                                <span class="help-inline"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">采集器序列号</label>

                            <div class="controls">
                                <input type="text" placeholder="起始采集器序列号" name="sSN" maxlength="18" value="" onkeyup="this.value=this.value.replace(/[^0-9A-Fa-f]/g,&#39;&#39;)" id="sSN" />
                                <span class="help-inline"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">设备型号</label>
                            
                                <div class="controls" id="one">
                                    <select style="width:200px;" id=""
                                            name="equipmentModelId" >
                                        <option value="">--请选择--</option>
                                        
                                            
                                                <option value="1">75A-8</option>
                                            
                                        
                                            
                                                <option value="2">150A－21/7</option>
                                            
                                        
                                            
                                                <option value="3">OTIS75A/8</option>
                                            
                                        
                                            
                                                <option value="4">OTIS150A/7</option>
                                            
                                        
                                            
                                                <option value="5">OTIS-75A/8</option>
                                            
                                        
                                            
                                                <option value="6">OTIS60A</option>
                                            
                                        
                                            
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

                                    <input type="number" placeholder="额定功率" name="power" min="1" max="10000" required="required" value="1.0" id="power" />
                                    <span class="add-on">kW</span>
                                </div>
                                <span class="help-inline"></span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">额定电压<span class="required-indicator">*</span></label>

                            <div class="controls">
                                <div class="input-append">
                                    <input type="number" placeholder="额定电压" name="voltage" min="220" max="50000" required="required" value="380.0" id="voltage" />
                                    <span class="add-on">V</span>
                                </div>
                                <span class="help-inline"></span>
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
                                    <button class="btn btn-primary"><i
                                            class="icon-plus icon-white"></i>保存
                                    </button>
                                <a class="btn btn-inverse" href="javascript:history.go(-1);"><i
                                        class="icon-backward icon-white"></i>返回</a>
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
              var isSingle="true";
              var brandAndPLCS="\u007b\u0022result\u0022:true\u002c\u0022data\u0022:\u005b\u007b\u0022brandId\u0022:1\u002c\u0022brandName\u0022:\u0022开山\u0022\u002c\u0022plcList\u0022:\u005b\u007b\u0022id\u0022:2\u002c\u0022name\u0022:\u0022三菱-标准\u0022\u002c\u0022defaultUse\u0022:false\u007d\u002c\u007b\u0022id\u0022:3\u002c\u0022name\u0022:\u0022日立-标准\u0022\u002c\u0022defaultUse\u0022:false\u007d\u002c\u007b\u0022id\u0022:1\u002c\u0022name\u0022:\u0022奥迪斯-标准\u0022\u002c\u0022defaultUse\u0022:true\u007d\u005d\u007d\u005d\u007d";
              var data=JSON.parse(brandAndPLCS);
              if(isSingle != 'true'){
                  if(data.result){
                     for(i=0;i<data.data.length;i++){
                          $("#eqBrand").prepend("<option value='"+data.data[i].brandId+"'>"+data.data[i].brandName+"</option>");
                     }
                  }
              }

            if($("#eqBrand").val()){
                getPLCS($("#eqBrand").val(),data)
            }
            if(isSingle != 'true'){
                $("#eqBrand").change(function(){
                     getPLCS($("#eqBrand").val(),data)
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
                                  if(plcList[j].defaultUse){
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

            $("select[name='equipmentModelId'] option").click(function(){
                if($(this).val()!='null' && $(this).val()!=''){
                     $.ajax({
                        url:"/hawkeyes/equipment/getEquipmentModel/"+$(this).val(),
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

    $("#CLIENT").addClass("active");

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

