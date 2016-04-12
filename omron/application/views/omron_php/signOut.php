<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
<?php $base_url = base_url()."hawkeyes";?>
<head>
	<meta charset="utf-8"/>
	<title>用户登录</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta content="登录页面" name="description"/>
    <link rel="stylesheet" href="<?php echo $base_url?>/css/iCheckSkin/skins/square/blue.css" type="text/css"/>
    <script type="text/javascript">

        var usernameNull="用户名不能为空";
        var pwdNull="密码不能为空";
        var phoneNull="手机号码不能为空";
        var smsNull="短信验证码不能为空";
        var nickNameNull="昵称不能为空";
        var usernameValid="用户名必须是有效的手机号码!";
        var phoneValid="请输入有效的手机号码!";
        var smsValid="短信验证码只能是纯数字!";
        var pwdValid="密码长度至少6位;密码必须包含小写字母!";
        var repwdequalTo="两次输入密码不一致";
    
</script>

    <link rel="shortcut icon" type="image/x-icon" href="../assets/demo/favicon-89045932c816321dc6c9f378e8aa2956.ico"/>
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/hawkeyes-77cc040b4de3d47775f57279552f3389.css"/>
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/login/login-6892ee892055e462d68a43583d592044.css"/>
    <link rel="stylesheet" href="<?php echo $base_url?>/assets/login/app-e3532f052ad8ab41cf0763f41b67e297.css"/>
    <script src="<?php echo $base_url?>/assets/hawkeyes-ff124a59fc282eef7975db5c84a2fcab.js" type="text/javascript" ></script>
    
    <!--script src="<?php echo $base_url?>/assets/login/login-soft-c61c020b4f789c87b93e5cfc388531ea.js" type="text/javascript" ></script-->
    

</head>
<body class="login">
    
    <div id="floatPanel">
        <div class="ctrolPanel" style="right:20px;">
            <a class="qrcode" href="#"><img src="<?php echo $base_url?>/assets/app/qrcode-icon-9cd461d2bf367543ec52918230052784.png" style=" height: 45px;width: 45px;margin-left:-7px"/></a>
        </div>

        <div class="popPanel" style="right:66px;">
            <div class="popPanel-inner">
                <div class="qrcodePanel"><img src="<?php echo $base_url?>/assets/app/qrcode-c48a0605c8bca1bde52807ea1da664e3.png" /><p>扫描二维码，下载app</p></div>
                <div class="arrowPanel">
                    <div class="arrow01" style="border-width:11px"></div>
                    <div class="arrow02"></div>
                </div>
            </div>
        </div>
    </div>
	<div class="logo">
        <img src="<?php echo $base_url?>/assets/logoArea-de8c13c16c482ad4aa42b25b642f210e.png" />
    </div>
	<div class="content">
        <form action="<?php echo $base_url?>/../index.php/Remote_Download/admin" method="post" class="form-vertical login-form" name="loginForm" autocomplete="off" id="loginForm" >
            <div class="row-fluid">
                <div class="span12">
                    <div class="empty-panel"></div>
                    <div class="alert alert-error hide">
                        <button class="close" data-dismiss="alert"></button>
                        <span>登录信息有误！</span>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="span5">
                        <div class="control-group">
                            <label class="control-label visible-ie8 visible-ie9">用户名</label>
                            <div class="controls">
                                <div class="input-icon left">
                                    <i class="fa fa-user"></i>
                                    <input type="text" class="m-wrap placeholder-no-fix" placeholder="手机号码" name="username" maxlength="11" style="max-width:180px;" value="" id="username" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span5">
                        <div class="control-group">
                            <label class="control-label visible-ie8 visible-ie9">密码</label>
                            <div class="controls">
                                <div class="input-icon left">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" class="m-wrap placeholder-no-fix" placeholder="密码" name="password" style="max-width:180px;" value="" id="password" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span2">
                        <div class="login-action">
                            <button id="loginBtn" class="btn blue btn-large btn-block">登录</button>
                        </div>
                    </div>
                    <div class="login-action">
                        <div class="pull-right" id="testDiv">
                            
                                <a href="http://117.34.92.46/downloads/bolaite_setup.exe" class="" id="clientDownloadAddress" style="margin-right: 12px;">下载客户端</a>
                            
                            <a href="javascript:;" class="" id="forget-password" style="margin: 0px">忘记密码?</a>
                        </div>
                        <label class="checkbox" for="rememberMe" style="max-width:140px;"><input type="hidden" name="_rememberMe" /><input type="checkbox" name="rememberMe" type="checkbox" id="rememberMe"  />&nbsp;记住我</label>
                    </div>
                </div>
            </div>
		</form>

        <form action="../user/findPwd" method="post" class="form-vertical forget-form" name="forgetPwdForm" autocomplete="off" id="forgetPwdForm" >
            <p>输入注册手机号码，通过短信验证码修改密码。</p>
            <div class="alert alert-error hide">
                <button class="close" data-dismiss="alert"></button>
                <span>用户不存在!</span>
            </div>
			<div class="control-group">
				<div class="controls">
					<div class="input-icon left">
						<i class="fa fa-user"></i>
                        <input type="text" class="m-wrap" placeholder="手机号码" style="width:135px;" name="username" maxlength="11" value="" id="username" />
                        <a id="findPwdSimCodeBtn" class="btn blue pull-right" onclick="sendCode(this,'forgetPwdForm','forget-form');">获取验证码</a>
					</div>
				</div>
			</div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">短信验证码</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="fa fa-sort-numeric-asc"></i>
                        <input type="text" class="m-wrap placeholder-no-fix" placeholder="短信验证码" name="simValidateCode" maxlength="6" value="" id="simValidateCode" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">"密码"</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="fa fa-lock"></i>
                        <input type="password" class="m-wrap placeholder-no-fix" id="forget_password" placeholder="新密码" name="password" value="" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label visible-ie8 visible-ie9">再次输入密码</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="fa fa-check"></i>
                        <input type="password" class="m-wrap placeholder-no-fix" placeholder="再次输入密码" name="rpassword" value="" id="rpassword" />
                    </div>
                </div>
            </div>
			<div class="form-actions">
				<button type="button" id="back-btn" class="btn"><i class="m-icon-swapleft"></i>返回</button>
				<button type="submit" class="btn blue pull-right">确认提交<i class="m-icon-swapright m-icon-white"></i></button>
			</div>
		</form>

	</div>
	<div class="copyright">
        <div class="ftConw">
            <p class="lh">
                
                    <span>地址:杭州市西湖区浙大路38号&nbsp;&nbsp;</span>
                
                
                    <span>服务热线:00000000</span>
                
            </p>
            <p class="cp">
                
            </p>
        </div>
	</div>

    <script type="text/javascript">
	</script>
</body>
</html>