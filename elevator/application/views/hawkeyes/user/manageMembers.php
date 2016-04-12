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
    <title>用户列表</title>
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
                    <a href=".<?php echo $base_url?>/../index.php/elevator/index">
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
            <div class="widget-box box" style="border-bottom: 1px solid #cdcdcd;">
                <div class="widget-title">
                <div class="box-name">
                    <span class="icon">
                        <i class="icon-th-list"></i>
                    </span>
                    <h5>人员管理</h5>
                    </div>

                    <div class="box-icons">
                        <a class="expand-link">
                            <i class="fa fa-expand"></i>
                        </a>
                    </div>
                    <div class="no-move"></div>
                </div>

                <div class="widget-content box-content" id="showContent" style="border-bottom: none;min-height: 450px;">
                    <div class="buttons" style="border-bottom:1px solid #C3C3C3;">
                        
                            <a href="<?php echo $base_url?>/../index.php/elevator/createClient" title="新增" class="btn btn-mini tip-left" href="" style="margin:10px"><i
                                    class="icon-plus"></i><span>新增</span></a>
                        
                    </div>

                    <div>
                        
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>名称</th>
                                    <th>角色</th>
                                    <th>电话号码</th>
                                    <th>账号状态</th>
                                    <th>注册时间</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                    <tr class="user_state_enable">
                                        <td>Administrator</td>
                                        <td>
                                            管理员
                                        </td>
                                        <td>189****1234</td>
                                        <td>
                                            
                                                <span>正常</span>
                                            
                                        </td>
                                        <td><span>2015-04-01</span></td>
                                        <td>
                                            
                                                <div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn dropdown-toggle">操作 <span
                                                            class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        
                                                        
                                                            <li>
                                                                <a href="../user/edit/16?childActive=manageMembers&amp;max=10&amp;offset=0" href="#">编辑</a>
                                                            </li>
                                                        

                                                        

                                                        
                                                            
                                                                <li>
                                                                    <a id="resetPassword_189****1234"
                                                                       nickname="Administrator"
                                                                       username="189****1234">重置密码</a>
                                                                </li>
                                                            
                                                        
                                                        
                                                            <li>
                                                                <a href="../user/recordList/16?childActive=manageMembers"><span>操作记录</span></a>
                                                            </li>
                                                        
                                                        
                                                            <li>
                                                                <a id="attentionEquipments_16" dataid="16"
                                                                   href="#">关注的设备</a>
                                                            </li>
                                                        
                                                    </ul>
                                                </div>
                                            
                                        </td>
                                    </tr>
                                
                                    </tbody>
                                </table>
                        
                    </div>
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

                <div class="widget-content" style="border-bottom: none;min-height: 450px;">
                    <div class="rightBox" style="text-align: center;">
                        <a id="allUser" href="#">
                            <p class="word" style="">全部</p>
                            <img src="<?php echo $base_url?>/assets/bg/tag_blue-1136d369aeb1d4e6ea23260a215d1cb7.png" style="width:85%;height: 45px;"/>
                        </a>
                    </div>

                    <div class="rightBox" style="text-align: center;">
                        <a id="enableUser" href="#">
                            <p class="word" style="">可用</p>
                            <img src="<?php echo $base_url?>/assets/bg/tag_white-b73822553cf03ac0bb16744f85a65889.png" style="width:85%;height: 45px;"/>
                        </a>
                    </div>

                    <div class="rightBox" style="text-align: center;">
                        <a id="disableUser" href="#">
                            <p class="word" style="">冻结</p>
                            <img src="<?php echo $base_url?>/assets/bg/tag_white-b73822553cf03ac0bb16744f85a65889.png" style="width:85%;height: 45px;"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="changeStatusConfirmDialog" title="提示">
    <p></p>
</div>

<div id="deleteUserConfirmDialog" title="提示">
    <p></p>
</div>

<div id="resetPasswordConfirmDialog" title="提示">
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
    $(function(){
            var createMessage = decodeURI("");
            if(createMessage){
                $.gritter.add({
                    title: "提示",
                    text: createMessage,
                    image: '../img/ok.png',
                    sticky: false,
                    time: '3000'
                });
            }

           $("a[id^='attentionEquipments_']").live('click',function(){
            SimpleDialog("../user/attentionEquipments/"+$(this).attr("dataid")
                             , "alarmContactsForm"
                             , "关注的设备"
                             , 750
                             , 500);
             });
             $("#allUser p").css('color','#FFFFFF');
             $("#userableUser p").css('color','#0089CF');
             $("#disableUser p").css('color','#0089CF');
            $('.gallery-masonry').masonry({
              itemSelector: '.item',
                isAnimated: true,
                isFitWidth: true
            });
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

            $("#changeStatusConfirmDialog").dialog({
            autoOpen: false,
            width: 380,
            modal: true,
            buttons: {
                "确定": function () {
                    $(this).dialog("close");
                    var id=$(".bigicn-only.active").attr("userid");
                    var url="../user/changeStatus?id="+id;
                    $.post(url,function(data){
                        if(data.result == 'success'){
                             window.location.href = "../user/getUserList?orgId=23&childActive=manageMembers";
                             $.gritter.add({
                                title: "提示",
                                text: data.message,
                                image: '../img/ok.png',
                                sticky: false,
                                time: '3000'
                            });
                        }else{
                            $("#alertDialog").text(data.message);
                            $("#alertDialog").dialog("open");
                            return false;
                        }
                    });
                },
                "取消": function () {
                    $(this).dialog("close");
                }
            }
        });

           $("#deleteUserConfirmDialog").dialog({
            autoOpen: false,
            width: 380,
            modal: true,
            buttons: {
                "确定": function () {
                    $(this).dialog("close");
                    var userId=$("a[id^='deleteUser_'].active").attr("userid");
                    $.post(contextPath+"/user/delete?userId="+userId,function(data){
                        if(data.result == 'success'){
                             window.location.href = '../user/getUserList?orgId=23&childActive=manageMembers';
                        }else{
                            $("#alertDialog").text(data.message);
                            $("#alertDialog").dialog("open");
                            return false;
                        }
                    });
                },
                "取消": function () {
                    $(this).dialog("close");
                }
            }
        });

            $("#resetPasswordConfirmDialog").dialog({
                autoOpen: false,
                width: 400,
                modal: true,
                buttons: {
                    "确定": function () {
                        var username=$("a[id^='resetPassword_'].active").attr("username");
                        $.post("../user/resetPassword?username="+username,function(data){
                            if(data.result == 'success'){
                                $("#resetPasswordConfirmDialog").dialog("close");
                                $.gritter.add({
                                    title: "提示",
                                    text: data.message,
                                    image: '../img/ok.png',
                                    sticky: true
                                });
                            }else{
                                  $("#alertDialog").text(data.message);
                                   $("#alertDialog").dialog("open");
                                return false;
                            }
                        });
                    },
                    "取消": function () {
                        $(this).dialog("close");
                    }
                }
            });

            $("a[id^='resetPassword_']").click(function(){
                var nickname=$(this).attr('nickname');
                $("a[id^='resetPassword_']").removeClass("active");
                $(this).addClass("active");
                $("#resetPasswordConfirmDialog").text("你确定要重置 "+ nickname +"的密码吗？");
                $("#resetPasswordConfirmDialog").dialog("open");
            });

        })

        function deleteUser(obj){
            var userId=$(obj).attr("userid");
            var userName=$(obj).attr('username');
            $("#deleteUserConfirmDialog").text("你确定要删除"+' '+userName+'?');
            $("a[id^='deleteUser_']").removeClass("active");
            $(obj).addClass("active");
            $("#deleteUserConfirmDialog").dialog("open");
            return false;
        }


        function changeStatus(obj){
            var username=$(obj).attr('user_name');
            var operates=$(obj).text().trim();
            $("#changeStatusConfirmDialog").text("你确定要"+operates+' '+username+'?');
            $("a[id^='changeStatus_']").removeClass("active");
            $(obj).addClass("active");
            $("#changeStatusConfirmDialog").dialog("open");
            return false;
        }

     function changeStyle(focus){
             $(".rightBox img").each(function(){
                    $(this).attr("src",imgContextPath+'/assets/bg/tag_white.png');
             });
            $(".rightBox p").each(function(){
                $(this).css('color','#0089CF');
            });
            focus.find("p").css('color','#FFFFFF');
            focus.find("img").attr('src',imgContextPath+'/assets/bg/tag_blue.png');
     }

      $("#allUser").click(function(){
               changeStyle($(this));
               $("tr").show();
             });
      $("#enableUser").click(function(){
                    changeStyle($(this));
                    $(".user_state_enable").show();
                    $(".user_state_init").show();
                    $(".user_state_disable").hide();
             });
      $("#disableUser").click(function(){
                    changeStyle($(this));
                    $(".user_state_disable").show();
                    $(".user_state_enable").hide();
                    $(".user_state_init").hide();

             });
</script><script >
    var active = "organization";
    $("#"+active).addClass("active");
    if(active=='basicData' ||active=='organization'  ||active=='manage' || active=='statistics' || active=='permissions'){
      $("#"+active).addClass("open");
    }

    $("#manageMembers").addClass("active");

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

