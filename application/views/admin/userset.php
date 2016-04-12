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
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
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
				<h1 style="height:74px" class="page-header">账户管理<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/'.$this->session->userdata('path').'/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            密码更改
                        </div>
                        <div class="panel-body">
							<form role="form">
								<div class="form-group">
									<label>请输入当前密码</label>
									<input class="form-control" placeholder="当前密码">
								</div>
								<br>
								<div class="form-group">
									<label>请输入新密码</label>
									<input class="form-control" placeholder="新密码">
								</div>
								<div class="form-group">
									<label>请再输入一遍输入新密码</label>
									<input class="form-control" placeholder="新密码">
								</div>
								<button type="submit" class="btn btn-primary">提交修改</button>
								<button type="cancel" class="btn btn-primary">取消</button>
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
				
				<?php if($this->session->userdata('admin_level') == 1):?>
						<div class="col-lg-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									添加账户
								</div>
								<div class="panel-body">
									<form role="form">
										<div class="form-group">
											<label>请输入当前密码</label>
											<input class="form-control" placeholder="当前密码">
										</div>
										<br>
										<div class="form-group">
											<label>请输入新密码</label>
											<input class="form-control" placeholder="新密码">
										</div>
										<div class="form-group">
											<label>请再输入一遍输入新密码</label>
											<input class="form-control" placeholder="新密码">
										</div>
										<button type="submit" class="btn btn-primary">提交修改</button>
										<button type="cancel" class="btn btn-primary">取消</button>
									</form>
								</div>
								<!-- /.panel-body -->
							</div>
							<!-- /.panel -->
					<?php endif?>
					<!-- /.col-lg-6 -->
				</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>
