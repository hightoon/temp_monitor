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
    
    
    <link rel="stylesheet" href="<?php echo $base_url?>/css/iCheckSkin/skins/square/blue.css" type="text/css"/>

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
                        <i class="fa fa-user"></i>
                    </span>
                    <h5>新增
                    
                        客户
                    
                    </h5>
                </div>

                <div class="widget-content nopadding">
                    <form action="../organization/save" method="post" class="form-horizontal" name="createOrgForm" id="createOrgForm" >
                        <div class="alert alert-error hide">
                            <button class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                            <span></span>
                        </div>
                        <input type="hidden" name="type" value="CLIENT" id="type" />
                        <input type="hidden" name="parent" value="23" id="parent" />
                        <input type="hidden" name="regional" id="regional" value="" />
                        <div class="control-group">
                            <label class="control-label">公司名称<span class="required-indicator">*</span></label>

                            <div class="controls">
                                <input type="text" name="name" maxlength="20" value="" placeholder="公司名称" id="name" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">联系人<span class="required-indicator">*</span></label>

                            <div class="controls">
                                <input type="text" name="nameOfContact" maxlength="11" placeholder="联系人" value="" id="nameOfContact" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">联系电话<span class="required-indicator">*</span></label>

                            <div class="controls">
                                <input type="text" name="phoneOfContact" maxlength="11" value="" placeholder="联系人手机号码" id="phoneOfContact" />
                            </div>
                        </div>
                        <div class="control-group select">
                            <label class="control-label">
                                省 <span class="required-indicator">*</span>
                            </label>
                            <div class="controls">
                                
                                    <select id="province" name="province"></select>
                                
                            </div>
                        </div>
                        <div class="control-group select">
                            <label class="control-label">
                                市<span class="required-indicator">*</span>
                            </label>
                            <div class="controls">
                                
                                    <select id="city" name="city"></select>
                                

                            </div>
                        </div>
                        <div class="control-group">

                            <label class="control-label">邮箱</label>

                            <div class="controls">
                                <input type="text" name="email" maxlength="30" value="" placeholder="邮箱" id="email" />
                            </div>
                        </div>

                        <div class="control-group">

                            <label class="control-label">详细地址</label>

                            <div class="controls">
                                <input type="text" name="address" maxlength="50" value="" placeholder="详细地址" id="address" />
                            </div>
                        </div>

                        
                        
                            <div class="control-group">
                                <label class="control-label tip-right" title="添加负责人后，该组织下设备的报警联系人就是所选择的负责人">
                                    负责人
                                </label>

                                <div class="controls">
                                    
                                        <div class="empty-panel" style="text-align: center;padding: 0">
                                            <span>请先添加服务人员！</span>
                                        </div>
                                    
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
            jQuery.validator.addMethod("isMobilePhone", function(value, element) {
                var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
                return this.optional(element) || (mobile.test(value));
            }, "<span class='help-inline'><i class='fa fa-star'></i>请输入有效的手机号码!</span>");

            $(".form-horizontal").validate({
                rules:{
                    name:{
                        required:true
                    },
                     province:{
                        required : true
                    },
                     city:{
                        required : true
                    },
                    phoneOfContact:{
                        required:true,
                        isMobilePhone : true
                    },
                    nameOfContact:{
                        required : true
                    }
                },
                messages:{
                    name:{
                        required :"名称不能为空"
                    },
                    phoneOfContact:{
                        required:"联系电话不能为空",
                        isMobilePhone : "请输入有效的手机号码!"
                    },
                    nameOfContact:{
                        required :"联系人不能为空"
                    },
                    province:{
                        required : "省不能为空"
                    },
                     city:{
                        required : "市不能为空"
                    }

                },
                errorClass: "help-inline",
                errorElement: "span",
                highlight:function(element, errorClass, validClass) {
                    $(element).parents('.control-group').addClass('error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').removeClass('error');
                    $(element).parents('.control-group').addClass('success');
                }
            });

           $('#createOrgForm').ajaxForm(function(data) {
                if (data.result=="success"){
                    window.location.href=encodeURI("../organization/getOrgByParentAndType?type=CLIENT&parentId=23&childActive=CLIENT&createMessage="+data.message);
                }else{
                    if(data.message.errors){
                        $('.alert-error', $('.form-horizontal')).find("span").text(data.message.errors[0].message);
                        $('.alert-error', $('.form-horizontal')).show();
                    }
                    return false
                }
            });

          $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%'
          });


          $.address({"province":$("#province"),
               "city":$("#city"),
               "regional":$("#regional"),
               "init":{
                  "province":"",
                  "city":""
               }});
        })
</script><script >
    var active = "organization";
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

