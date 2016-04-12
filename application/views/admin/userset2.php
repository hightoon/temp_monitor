    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background:#000;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
			<a class="navbar-brand" href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/index'?>">后台管理 v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i><span id="username"><?php echo $this->session->userdata('username')?></span><i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					<li><a href="<?php echo $tmp.'index.php/admin/'.$zhsz_encrypt?>"><i class="fa fa-gear fa-fw"></i> 账户管理</a>
                        </li>
                        <li class="divider"></li>
					<li><a href="<?php $tmp=base_url(); echo $tmp.'index.php/index/logout'?>"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </nav>

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					<li class="sidebar-search">
						<div class="input-group custom-search-form">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="fa fa-search"></i>
							</button>
						</span>
						</div>
						<!-- /input-group -->
					</li>
					<li>
						<a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin'?>"><i class="fa fa-dashboard fa-fw"></i> 管理首页</a>
					</li>
					<li>
					<a href="<?php echo $tmp.'index.php/admin/'.$sysb_encrypt?>"><i class="fa fa-table fa-fw"></i> 所有设备信息</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 单台设备管理<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
							<a href="<?php echo $tmp.'index.php/admin/'.$dtsb_encrypt?>"> 单台设备概况</a>
							</li>
							<li>
							<a href="<?php echo $tmp.'index.php/admin/'.$ssxx_encrypt?>"> 实时监控</a>
							</li>
							<li>
							<a href="<?php echo $tmp.'index.php/admin/'.$lsxx_encrypt?>"> 历史信息</a>
							</li>
						</ul>
						<!-- /.nav-second-level -->
					</li>
					<li>
						<a href="<?php echo $tmp.'index.php/admin/'.$sbzw_encrypt?>"><i class="fa fa-group fa-fw"></i> 组网设置</a>
					</li>
					<li class="active">
						<a href="#"><i class="fa fa-wrench fa-fw"></i> 后台设置<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
							<li>
							<a href="<?php echo $tmp.'index.php/admin/'.$cssz_encrypt?>"> 参数设置</a>
							</li>
							<li>
								<a class="active" class="active" href="#"> 账户管理</a>
							</li>
							</ul>
						<!-- /.nav-second-level -->
					</li>
				</ul>
			</div>
			<!-- /.sidebar-collapse -->
		</div>
		<!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
				<h1 style="height:74px" class="page-header">账户管理<img style="float:right;height:74px" id="logo" src="<?php $tmp=base_url(); echo $tmp.'img/'.$this->session->userdata('path').'/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            密码更改
                        </div>
                        <div class="panel-body">
							<div class="form-group">
								<label>请输入当前密码</label>
								<input class="form-control" id="passwd_old" placeholder="当前密码" type="password" value="<?php echo set_value('username'); ?>" autofocus/>
							</div>
							<div class="form-group">
								<label>请输入新密码</label>
								<input class="form-control" id="passwd_new0" placeholder="新密码" type="password" value="<?php echo set_value('password'); ?>"/>
							</div>
							<div class="form-group">
								<label>请再输入一遍新密码</label>
								<input class="form-control" id="passwd_new1" placeholder="新密码" type="password" value="<?php echo set_value('password'); ?>"/>
							</div>
							<button type="submit" class="btn btn-primary" onclick="userset0_submit()" id="passwd_ch_button" value="<?php echo $passwd_ch?>">提交修改</button>
							<!--button type="cancel" class="btn btn-primary">取消</button-->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
			</div>

		</div>
		<!-- /#wrapper -->
	</div>
	
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
	   aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" style="width:280px;margin:0 auto;">
				<div class="modal-header" id="myModal_type">
					<button type="button" class="close" 
				   data-dismiss="modal" aria-hidden="true">
					  &times;
					</button>
					<h4 class="modal-title" id="myModal_Label">
						提示
					</h4>
				</div>
				<div class="modal-body" id="myModal_content" >
				</div>
			</div>
		</div><!-- /.modal -->
	</div>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

    <!-- ajaxfileupload -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/ajaxfileupload.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>

	<!-- Chart JavaScript -->
	<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/userset0.js'?>" charset="utf-8"></script>
