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
    <title>用户</title>
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
    
    

</head>
<body>
<div id="main">
  <!-- /.navbar-static-side -->
        <?php $current_file = basename(__FILE__); require 'menu_top_left.php' ?>

    <div id="content">
        
<div class="container-fluid">
<div class="row-fluid profile">
    <div class="span12">
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li id="li_userInfo" activeTab="userInfo"><a href="#tab_userInfo" data-toggle="tab">用户信息</a></li>
                <li id="li_records" activeTab="records"><a href="#tab_records" data-toggle="tab">操作记录</a>
                </li>
            </ul>

            <div class="tab-content">
                <div style="text-align: center;background-color: darksalmon" id="promptinfo"></div>

                <div class="tab-pane row-fluid" id="tab_userInfo" style="margin-top: 0px;padding-top: 0px;">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="span3">
                                <ul class="ver-inline-menu tabbable margin-bottom-10">
                                    <li id="li_personalInfo" activeTab="userInfo" childTab="personalInfo">
                                        <a data-toggle="tab" href="#tab_personalInfo">
                                            <i class="fa fa-info-circle fa-lg"></i>
                                            个人资料
                                        </a>
                                        <span class="after"></span>
                                    </li>
                                    <li id="li_changePwd" class="" activeTab="userInfo" childTab="changePwd"><a
                                            data-toggle="tab" href="#tab_changePwd"><i
                                                class="fa fa-lock fa-lg">&nbsp;</i>修改密码</a></li>
                                </ul>
                            </div>

                            <div class="span9">
                                <div class="tab-content">
                                    <div id="tab_personalInfo" class="tab-pane">
                                        <div style="height: auto;" id="accordion1-1" class="accordion collapse">
                                            <form action="../user/update?childActive=myInfo" method="post" class="form-vertical editUser-form" name="editUserForm" id="editUserForm" >
                                                <div class="alert alert-error hide">
                                                    <button class="close" data-dismiss="alert"><i
                                                            class="fa fa-times"></i></button>
                                                    <span></span>
                                                </div>
                                                <input type="hidden" name="userId" value="16" id="userId" />
                                                <div class="control-group">
                                                    <label class="control-label" for="username">用户名</label>

                                                    <div class="controls">
                                                        <input type="text" class="m-wrap span8" placeholder="手机号码" name="username" value="189****1234" maxlength="11" style="cursor:default;" id="username" />
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="nickname">姓名</label>

                                                    <div class="controls">
                                                        <input type="text" class="m-wrap span8" placeholder="姓名" name="nickname" value="Administrator" id="nickname" />
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="companyName">公司名称</label>

                                                    <div class="controls">
                                                        <input type="text" class="m-wrap span8" placeholder="公司名称" name="companyName" value="浙江大学（南浔）物联网产业研究院" maxlength="30" readonly="readonly" id="companyName" />
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="companyAddress">公司地址</label>

                                                    <div class="controls">
                                                        <input type="text" class="m-wrap span8" placeholder="公司地址" name="companyAddress" value="浙江省南浔" maxlength="100" readonly="readonly" id="companyAddress" />
                                                    </div>
                                                </div>

                                                <div class="submit-btn">
                                                    <button id="editUserBtn" class="btn btn-primary">保存</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div id="tab_changePwd" class="tab-pane">
                                        <div style="height: auto;" id="accordion2-2" class="accordion collapse">
                                            <form action="../user/changePwd?childActive=myInfo" method="post" class="form-vertical changePwd-form" name="changePwdForm" id="changePwdForm" >
                                                <div class="alert alert-error hide">
                                                    <button class="close" data-dismiss="alert"><i
                                                            class="fa fa-times"></i></button>
                                                    <span></span>
                                                </div>
                                                <input type="text" class="m-wrap span8" placeholder="姓名" name="nickname" value="Administrator" style="display: none" id="nickname" />
                                                <div class="control-group">
                                                    <label class="control-label" for="originPwd">当前密码</label>

                                                    <div class="controls">
                                                        <input type="password" class="m-wrap span8" placeholder="当前密码" value="" name="originPwd" id="originPwd" />
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="newPwd">新密码</label>

                                                    <div class="controls">
                                                        <input type="password" class="m-wrap span8" placeholder="新密码" value="" name="newPwd" id="newPwd" />
                                                    </div>
                                                </div>

                                                <div class="control-group">
                                                    <label class="control-label" for="affirmPwd">确认密码</label>

                                                    <div class="controls">
                                                        <input type="password" class="m-wrap span8" placeholder="确认密码" value="" name="affirmPwd" id="affirmPwd" />
                                                    </div>
                                                </div>

                                                <div class="submit-btn">
                                                    <button id="changePwdBtn" class="btn btn-primary">保存</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="tab-pane row-fluid" id="tab_records">
                        <div class="row-fluid">
                            <div class="span12">
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
            $('.cenContent').each(function(){
                var content=$(this).find('.enContent').text();
                $(this).attr('title',content);
            });

        }else{
            $('.enContent').hide();
            $('.cnContent').show();
            $('.cenContent').each(function(){
                var content=$(this).find('.cnContent').text();
                $(this).attr('title',content);
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


    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-27 22:47:20</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">设备CNZ207297信息已经被用户Administrator更新。更新内容: 型号 OTIS75A/8 -&gt; OTIS60A。</span>
                        <span class="enContent" style="display: none">the infomation of Equipment CNZ207297 has been changed by Administrator: model OTIS75A/8 -&gt; OTIS60A.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-27 14:08:21</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">用户Administrator的密码已经被修改，操作人：Administrator。</span>
                        <span class="enContent" style="display: none">Administrator password has been changed by Administrator.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-27 14:05:10</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">组织浙江大学信电学院信息已经被用户Administrator更新。更新内容： 组织名称 德邦模具 -&gt; 浙江大学信电学院。</span>
                        <span class="enContent" style="display: none">the infomation of organization 浙江大学信电学院 has been changed by Administrator:  organization name 德邦模具 -&gt; 浙江大学信电学院.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-11 18:11:43</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">设备CNZ207297已经发货给德邦模具，操作员：Administrator。</span>
                        <span class="enContent" style="display: none">equipment CNZ207297 has been delivered to 德邦模具 by Administrator.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-11 18:11:19</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">用户Administrator的密码已经被修改，操作人：Administrator。</span>
                        <span class="enContent" style="display: none">Administrator password has been changed by Administrator.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-10 13:59:47</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">设备CNZ207297的采集器序列号已经被更换为：00003491，原采集器序列号为00003494，操作人：Administrator。</span>
                        <span class="enContent" style="display: none">the sampler serial-number of equipment CNZ207297 has been changed by Administrator from 00003494 to 00003491.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-10 13:33:18</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">设备CNZ207297已经发货给德邦模具，操作员：Administrator。</span>
                        <span class="enContent" style="display: none">equipment CNZ207297 has been delivered to 德邦模具 by Administrator.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-10 13:32:39</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">设备CNZ207297已经发货给浙江大学（南浔）物联网产业研究院，操作员：Administrator。</span>
                        <span class="enContent" style="display: none">equipment CNZ207297 has been delivered to 浙江大学（南浔）物联网产业研究院 by Administrator.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-10 13:32:39</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">Administrator创建了一台新设备， 设备序列号：CNZ207297， 设备名称：奥迪斯空压机， 型号：OTIS75A/8， 控制器：奥迪斯-标准。</span>
                        <span class="enContent" style="display: none">Administrator created a new equipment,  equipment serial-number: CNZ207297， equipment name: 奥迪斯空压机， model: OTIS75A/8， controller: 奥迪斯-标准.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    
        <div class="tiles">
            <div class="tile double selected bg-blue tip-top cenContent" >
                <div class="tile-body">
                    <p>操作时间:2015-04-10 13:13:49</p>
                    <p>
                        <i class="fa fa-quote-left pull-left"></i>
                        <span class="cnContent" style="display: none">组织德邦模具信息已经被用户Administrator更新。更新内容： 电话 13600629788 -&gt; 136****9876。</span>
                        <span class="enContent" style="display: none">the infomation of organization 德邦模具 has been changed by Administrator:  phone 13600629788 -&gt; 136****9876.</span>
                        <i class="fa fa-quote-right"></i>
                    </p>
                </div>
            </div>
        </div>
    


<div class="row-fluid">
    <div class="span12">
        <div class="pagination alternate page-style">
            <ul>
                 
                     <li class="active"><a href="#">1</a></li><li><a href="../user/index/16?activeTab=records&amp;childActive=myInfo&amp;offset=10&amp;max=10">2</a></li><li><a href="../user/index/16?activeTab=records&amp;childActive=myInfo&amp;offset=10&amp;max=10">下一页</a></li>&nbsp;&nbsp;<div class="input-prepend input-append">
    <span class="add-on">跳转到</span>
    <input style="max-width:25px;" id="gopage" onkeypress="if (event.keyCode == 13) gopage(this);" type="text" value="">
    <span class="add-on">页</span>
    </div><input type="hidden" id="maxpage" value="2"/>
                 
            </ul>
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

<div id="freezeConfirmDialog" title="提示">
    <p></p>
</div>

<div id="alertDialog" title="提示">
    <p></p>
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
    $(function () {
        jQuery(document).ready(function () {
            App.init();
        });

        jQuery.validator.addMethod("isMobilePhone", function(value, element) {
                var mobile = /^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(17[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
                return this.optional(element) || (mobile.test(value));
            }, "<span class='help-inline'><i class='fa fa-star'></i>请输入有效的手机号码!</span>");

        jQuery.validator.addMethod("isStrong", function(value, element) {
            var strong = /^((?![^a-zA-Z]+$)(?!\\D+$).{6,})$/;
            return this.optional(element) || (strong.test(value));
        }, "<span class='help-inline'><i class='fa fa-star'></i>密码长度至少6位;密码必须包含小写字母!</span>");



        var activeTab="userInfo";
        var childTab="changePwd";
        $("#li_"+activeTab+",#tab_"+activeTab).addClass("active");
        if(childTab!=''&&childTab!=undefined){
             $("#li_"+childTab+",#tab_"+childTab).addClass("active");
        }

        $("li[id^='li_']").click(function(){
            activeTab=$(this).attr("activeTab");
            var tempChildTab=$(this).attr("childTab");
            if(activeTab=='userInfo'){
                if(tempChildTab!='' && tempChildTab!=undefined){
                    childTab=tempChildTab;
                }else{
                    childTab='personalInfo';
                }
            }
//            window.location.href=contextPath+"/user/index?activeTab="+activeTab+"&childTab="+childTab;

            $("li[id^='li_'],div[id^='tab_']").removeClass("active");
            $("#li_"+activeTab+",#tab_"+activeTab).addClass("active");
            $("#li_"+childTab+",#tab_"+childTab).addClass("active");
        });


        $("#editUserForm").validate({
            rules:{
                username:{
                    required:true,
                    isMobilePhone:true
                },nickname:{
                    required:true
                }
            },
            messages : {
                username:{
                    required : "<span class='help-inline'><i class='fa fa-star'></i>手机号码不能为空</span>",
                    isMobilePhone:"<span class='help-inline'><i class='fa fa-star'></i>请输入有效的手机号码!</span>"
                },nickname:{
                    required :  "<span class='help-inline'><i class='fa fa-star'></i>Nickname can not be empty</span>"
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

        $("#changePwdForm").validate({
            rules:{
                originPwd:{
                    required:true
                },
                newPwd:{
                    required:true,
                    isStrong:true
                },
                affirmPwd:{
                    equalTo: "#newPwd"
                }
            },
            messages : {
                originPwd:{
                    required : "<span class='help-inline'><i class='fa fa-star'></i>原始密码不能为空</span>"
                },
                newPwd:{
                    required : "<span class='help-inline'><i class='fa fa-star'></i>新密码不能为空</span>",
                    isStrong : "<span class='help-inline'><i class='fa fa-star'></i>密码长度至少6位;密码必须包含小写字母!</span>"
                },
                affirmPwd:{
                    equalTo: "两次输入密码不一致"
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

        $("#alertDialog").dialog({
                autoOpen: false,
                width: 300,
                modal: true,
                buttons: {
                    "确定": function () {
                         window.location.href = "../auth/signOut";
                    }
                }
            });

        $('#editUserForm').ajaxForm(function(data) {
            if (data.result=="error"){
                $('.alert-error', $('.editUser-form')).find("span").text(data.message.errors[0].message);
                $('.alert-error', $('.editUser-form')).show();
            }else{
                if(data.signOutFlag){
                    $("#alertDialog").text(data.message);
                    $("#alertDialog").dialog("open");
                }else{
                 $.gritter.add({
                    title: "提示",
                    text: data.message,
                    image: '../img/ok.png',
                    sticky: false,
                    time: '2500'
                });
                }
            }
        });

        $("#editUserForm").keydown(function(e){
            if(e.keyCode==13){
                if ($('.editUser-form').validate().form()) {
                    $('#editUserForm').submit();
                }
                return false;
            }
        });


        $('#changePwdForm').ajaxForm(function(data) {
            if (data.result=="error"){
                $('.alert-error', $('.changePwd-form')).find("span").text(data.message);
                $('.alert-error', $('.changePwd-form')).show();
            }else{
                $("#promptinfo").hide();
                $('.alert-error', $('.changePwd-form')).hide();
                $.gritter.add({
                    title: "提示",
                    text: data.message,
                    image: '../img/ok.png',
                    sticky: false,
                    time: '2500'
                });
            }
        });
        $("#changePwdForm").keydown(function(e){
            if(e.keyCode==13){
               validatePwdForm();
               return false;
            }
        });

        $("#changePwdBtn").click(function(){
           validatePwdForm();
           return false;
        });

        function validatePwdForm(){
            if($("#originPwd").val()==$("#newPwd").val()){
                $('.alert-error', $('.changePwd-form')).find("span").text("新密码不能和原始密码相同。");
                $('.alert-error', $('.changePwd-form')).show();
                return false;
            }
            if ($('.changePwd-form').validate().form()) {
                 $('#changePwdForm').submit();
            }
        }

    })

</script><script >
    var active = "organization";
    $("#"+active).addClass("active");
    if(active=='basicData' ||active=='organization'  ||active=='manage' || active=='statistics' || active=='permissions'){
      $("#"+active).addClass("open");
    }

    $("#myInfo").addClass("active");

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

