    
<div id="header">
    <h1><a href="<?php echo $base_url?>/../index.php/Remote_Download/admin">&nbsp;</a></h1>
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
                        <a href="<?php echo $base_url?>/../index.php/Remote_Download/changePwd">
                            <i class="fa fa-lock fa-fw"></i>
                            <span style="padding-left: 5px;">修改密码</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $base_url?>/../index.php/Remote_Download/personalInfo">
                            <i class="fa fa-info-circle fa-fw"></i>
                            <span style="padding-left: 5px;">个人资料</span>
                        </a>
                    </li>
                
                <li>
                    <a href="<?php echo $base_url?>/../index.php/Remote_Download/index">
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
			<a href="<?php echo $base_url?>/../index.php/Remote_Download/admin"><i class="fa fa-home fa-fw"></i><span>首页</span></a>
		</li>
         
        <li id="maintainRecord">
            <a href="<?php echo $base_url?>/../index.php/Remote_Download/maintainRecord"><i
                    class="fa fa-wrench fa-fw"></i><span>保养记录</span></a>
        </li>
		
		<li id="myInfo">
			<a href="<?php echo $base_url?>/../index.php/Remote_Download/personalInfo"><i
				class="fa fa-user goright fa-fw"></i>我的账户</a>
		</li>
                    
		<li id="manageEquipment"><a href="<?php echo $base_url?>/../index.php/Remote_Download/manageEquipment" href=""><i
					class="fa fa-codepen fa-fw"></i>设备管理</a>
		</li>   
		
		<li id="CLIENT"><a href="<?php echo $base_url?>/../index.php/Remote_Download/client" href=""><i
					class="fa fa-file-text-o goright fa-fw"></i>客户管理</a>
		</li>
        
    </ul>
</div>

