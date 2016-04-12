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
                        <i class="fa fa-user fa-fw"></i><?php echo $this->session->userdata('username')?><i class="fa fa-caret-down"></i>
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
						<a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$sysb_encrypt?>"><i class="fa fa-table fa-fw"></i> 所有设备信息</a>
					</li>
					<li class="active">
						<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 单台设备管理<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
							<a href="<?php echo $tmp.'index.php/admin/'.$dtsb_encrypt?>"> 单台设备概况</a>
							</li>
							<li>
								<a class="active" href="#"> 实时监控</a>
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
					<li>
						<a href="#"><i class="fa fa-wrench fa-fw"></i> 后台设置<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
							<a href="<?php echo $tmp.'index.php/admin/'.$cssz_encrypt?>"> 参数设置</a>
						</li>
						<li>
							<a href="<?php echo $tmp.'index.php/admin/'.$zhsz_encrypt?>"> 账户管理</a>
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
				<h1 style="height:74px" class="page-header">实时监控<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/'.$this->session->userdata('path').'/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<!--div class="row">
				<div class="col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading" style="padding:10px">
							<div class="row">
								<div class="col-lg-2">
									<br>
									<i class="fa fa-dashboard fa-5x"></i>
									<p>仪表选择</p>
								</div>
								<div class="col-lg-10">
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">发动机转速</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">燃油位置</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">电压值</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">运行功率</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">运行速率</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">机油压力</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">排气压力</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">冷却水温度</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">液压油温度</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">排气温度</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">A相电流</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">B相电流</button>
									<button type="submit" class="btn btn-warning btn-sm meter" style="width:100px">C相电流</button>
								</div>
							</div>
						</div>
						<a>
							<div class="panel-footer">
								<div style="background-color:#080">
									<span class="pull-left"><i class="fa fa-save"></i></span>
									<span class="pull-left" style="cursor:pointer">保存设置</span>
								</div>
								<div>
									<span class="pull-right" style="cursor:pointer">恢复默认设置</span>
									<span class="pull-right"><i class="fa fa-database"></i></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel panel-primary">
						<div class="panel-heading" style="padding:10px;overflow:auto">
							<div class="row">
								<div class="col-lg-5">
								选择其他设备：
									<div class="input-group">
										<input type="text" class="form-control" placeholder="输入设备编号">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button">确定</button>
										</span>
									</div>
								</div>
								<div class="col-lg-7 text-center">
									<p><span class="huge"><?php echo date("Y-m-d");?></span> <?php echo date("h:m:s");?></p>
									
								</div>
							</div>
								<p><i class="fa fa-cog fa-spin"></i>在线设备列表：</p>
							<div class="row text-center">
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5003</button>
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5004</button>
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5005</button>
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5006</button>
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5007</button>
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5007</button>
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5007</button>
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5007</button>
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5007</button>
								<button type="submit" class="btn btn-warning btn-xs" style="width:85px">5007</button>
							</div>
							<div class="row">
								<button type="submit" class="btn btn-default btn-xs" style="width:85px"><<上一页</button>
								<button type="submit" class="btn btn-default btn-xs pull-right" style="width:85px">下一页>></button>
							</div>
						</div>
					</div>
				</div>
			</div-->
			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="eqp_select">
					<button type="button" class="btn btn-primary" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
						<div>设备选择</div>
						<div style="height:69px"><i class="fa fa-truck fa-5x"></i></div>
						<!--div id="SetId"><?php if(isset($cv_id)){echo "当前设备编号：".$cv_id;}else{echo "-";}?></div-->
						<div><?php if(isset($cv_id)){echo "当前设备编号：<span id='SetId'>".$cv_id."</span>";}else{echo "<span id='SetId'> - </span>";}?></div>
					</button>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="meter_select">
					<button type="button" class="btn btn-primary" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
						<div>仪表选择</div>
						<div style="height:89px"><i class="fa fa-dashboard fa-5x"></i></div>
					</button>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="load">
					<button type="button" class="btn btn-yellow" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
						<div>远程控制</div>
						<div style="height:69px"><i class="fa  fa-toggle-on fa-5x"></i></div>
						<div>加载</div>
					</button>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="unload">
					<button type="button" class="btn btn-yellow" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
						<div>远程控制</div>
						<div style="height:69px"><i class="fa  fa-toggle-off fa-5x"></i></div>
						<div>卸载</div>
					</button>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="start">
					<button type="button" class="btn btn-green" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
						<div>远程控制</div>
						<div style="height:69px"><i class="fa fa-play fa-5x"></i></div>
						<div>开机</div>
					</button>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="shutdown">
					<button type="button" class="btn btn-danger" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
						<div>远程控制</div>
						<div style="height:69px"><i class="fa fa-power-off fa-5x"></i></div>
						<div>关机</div>
					</button>
				</div>
				<?php if(isset($meters['speed'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="speed_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="speed_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-warning btn-xs meter-close" id="speed_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-warning btn-xs flot-close" id="speed_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-warning btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>转速</div>
									<div><span class="huge" id="speed"> - </span>rpm</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="speed_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="speed_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['fuellevel'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="fuellevel_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="fuellevel_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-warning btn-xs meter-close" id="fuellevel_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-warning btn-xs flot-close" id="fuellevel_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-warning btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>燃油位置</div>
									<div><span class="huge" id="fuellevel"> - </span>%</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="fuellevel_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="fuellevel_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['voltage'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="voltage_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="voltage_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-info btn-xs meter-close" id="voltage_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-info btn-xs flot-close" id="voltage_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-info btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>电压值</div>
									<div><span class="huge" id="voltage"> - </span>V</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="voltage_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="voltage_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['runpower'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="runpower_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="runpower_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-info btn-xs meter-close" id="runpower_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-info btn-xs flot-close" id="runpower_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-info btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>运行功率</div>
									<div><span class="huge" id="runpower"> - </span>W</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="runpower_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="runpower_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['runrate'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="runrate_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="runrate_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-green btn-xs meter-close" id="runrate_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs flot-close" id="runrate_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>运行速率</div>
									<div><span class="huge" id="runrate"> - </span></div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="runrate_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="runrate_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['oilpress'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="oilpress_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="oilpress_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-green btn-xs meter-close" id="oilpress_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs flot-close" id="oilpress_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>机油压力</div>
									<div><span class="huge" id="oilpress"> - </span>Bar</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="oilpress_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="oilpress_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['gaspress'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="gaspress_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="gaspress_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-warning btn-xs meter-close" id="gaspress_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-warning btn-xs flot-close" id="gaspress_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-warning btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>排气压力</div>
									<div><span class="huge" id="gaspress"> - </span>Bar</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="gaspress_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="gaspress_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['watertemp'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="watertemp_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="watertemp_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-yellow">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-warning btn-xs meter-close" id="watertemp_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-warning btn-xs flot-close" id="watertemp_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-warning btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>水温度</div>
									<div><span class="huge" id="watertemp"> - </span>℃</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="watertemp_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="watertemp_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['oiltemp'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="oiltemp_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="oiltemp_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-info btn-xs meter-close" id="oiltemp_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-info btn-xs flot-close" id="oiltemp_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-info btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>液压油温度</div>
									<div><span class="huge" id="oiltemp"> - </span>℃</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="oiltemp_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="oiltemp_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['gastemp'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="gastemp_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="gastemp_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-info btn-xs meter-close" id="gastemp_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-info btn-xs flot-close" id="gastemp_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-info btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>排气温度</div>
									<div><span class="huge" id="gastemp"> - </span>℃</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="gastemp_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="gastemp_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['acur'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="acur_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="acur_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-green btn-xs meter-close" id="acur_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs flot-close" id="acur_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>A相电流</div>
									<div><span class="huge" id="acur"> - </span>A</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="acur_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="acur_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['bcur'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="bcur_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="bcur_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-green btn-xs meter-close" id="bcur_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs flot-close" id="bcur_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>B相电流</div>
									<div><span class="huge" id="bcur"> - </span>A</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="bcur_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="bcur_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php if(isset($meters['ccur'])):?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="ccur_meter">
				<?php else:?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="ccur_meter" style="display:none">
				<?php endif?>
					<div class="panel panel-green">
						<div class="panel-heading">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
									<div class="pull-left">
										<div class="btn-group">
											<button type="button" class="btn btn-green btn-xs meter-close" id="ccur_meter_close">
												<i class="fa fa-close"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs flot-close" id="ccur_flot_close">
												<i class="fa fa-chevron-left"></i>
											</button>
											<button type="button" class="btn btn-green btn-xs">
												<i class="fa fa-cog"></i>
											</button>
										</div>
									</div>
									<div>C相电流</div>
									<div><span class="huge" id="ccur"> - </span>A</div>
									<div>采集时间</div>
									<div class="update_time"> - </div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
									<div id="ccur_flot" style="height:90px;margin-bottom:10px" ></div>
									<div class="progress progress-striped active" style="margin-bottom:0">
									   <div id="ccur_img" class="progress-bar " role="progressbar" 
										  aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
									   </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	<div class="modal fade" id="eqpStatus" tabindex="-1" role="dialog" 
	   aria-labelledby="myModalLabel" aria-hidden="true">
	   <div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" 
				   data-dismiss="modal" aria-hidden="true">
					  &times;
					</button>
					<h4 class="modal-title" id="myModalLabel">
						提示
					</h4>
				</div>
				<div class="modal-body">
					<p>该设备当前不在线！</p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>
	
	<div class="modal fade" id="onlineeqp_modal" tabindex="-1" role="dialog" 
	   aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="width:400px">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" 
				   data-dismiss="modal" aria-hidden="true">
					  &times;
					</button>
					<h4 class="modal-title" id="myModalLabel">
						所有在线设备
					</h4>
				</div>
				<div class="modal-body">
					<?php if(isset($onlineEqp)):?>
					<ul class="chat">							
					<?php $flag=0; foreach($onlineEqp as $onlineEqp_item): ?>
						<?php if (1 == $flag):?>
							<li class="left clearfix">
						<a href="<?php $tmp=base_url();echo $tmp."index.php/admin/".$onlineEqp_item['href']?>">
									<button type="submit" class="btn btn-warning text-center pull-left" 
							style="width:60px;height:60px;border-radius:30px;padding:0;margin:10px;border-color:#fff;"><?php echo $onlineEqp_item['num']?></button>
								</a>
								<div class="chat-body clearfix" style="background-color:#5cc;padding:5px 20px">
									<div class="header">
										<strong class="primary-font">空压机</strong> 
										<small class="pull-right text-muted">
											添加时间：<i class="fa fa-clock-o fa-fw"></i> 2011-12-30
										</small>
									</div>
									<p>控制器型号：；当前在线</p>
								</div>
							</li>
						<?php $flag=1;?>
						<?php else:?>
							<li class="right clearfix">
						<a href="<?php $tmp=base_url();echo $tmp."index.php/admin/".$onlineEqp_item['href']?>">
									<button type="submit" class="btn btn-info text-center pull-right" 
							style="width:50px;height:50px;border-radius:25px;padding:0;margin:0px;border-color:#fff;"><?php echo $onlineEqp_item['num']?></button>
								</a>
								<div class="chat-body clearfix" style="background-color:#5cc;padding:5px 20px">
									<div class="header">
										<strong class="primary-font">螺杆机</strong> 
										<small class="pull-right text-muted">
											添加时间：<i class="fa fa-clock-o fa-fw"></i> 2012-01-12
										</small>
									</div>
									<p>控制器型号：；当前在线</p>
								</div>
							</li>
						<?php $flag=0;?>
						<?php endif?>
					<?php endforeach ?>
					</ul>
					<?php else:?>
					当前没有设备在线！
					<?php endif?>
				</div>
				<div class="modal-footer">
					<?php if(isset($onlineEqp)):?>
					<div class="row">
						<div class="col-xs-6">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="输入设备编号">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">确定</button>
								</span>
							</div>
						</div>
						<div class="col-xs-6">
							<button type="button" class="btn btn-primary " >上一页</button>
							<button type="button" class="btn btn-primary " >下一页</button>
						</div>
					</div>
					<?php else:?>
					<button class="btn btn-default" type="button" data-dismiss="modal">确定</button>
					<?php endif?>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
	</div>
	
	<div class="modal fade" id="meter_modal" tabindex="-1" role="dialog" 
	   aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" style="width:400px">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" 
				   data-dismiss="modal" aria-hidden="true">
					  &times;
					</button>
					<h4 class="modal-title" id="myModalLabel">
						仪表选择
					</h4>
				</div>
				<div class="modal-body">
					<div class="row text-center">
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">发动机转速（√）</button>
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">燃油位置（√）</button>
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">电压（√）</button>
					</div>
					<br>
					<div class="row text-center">
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">运行功率（√）</button>
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">运行速率（√）</button>
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">机油压力（√）</button>
					</div>
					<br>
					<div class="row text-center">
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">排气压力（√）</button>
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">冷却水温度（√）</button>
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">液压油温度（√）</button>
					</div>
					<br>
					<div class="row text-center">
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">排气温度（√）</button>
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">A相电流（√）</button>
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">B相电流（√）</button>
					</div>
					<br>
					<div class="row text-center">
						<button type="submit" class="btn btn-success btn-sm meter active" style="width:100px">C相电流（√）</button>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
					<button type="button" class="btn btn-primary" id="meter_modal_confirm">保存设置</button>
					<!--button type="button" class="btn btn-primary" id="meter_modal_restore">恢复默认设置</button-->
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal -->
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
	
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/modernizr.js'?>'></script>
	
    <!-- jQuery Version 1.11.0 -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>
	
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>
	
	<!-- slider -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap-slider.js'?>'></script>

	<!-- select2 -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/select2-3.5.1/select2.js'?>'></script>	
	
    <!-- Flot JavaScript -->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/excanvas.min.js'?>"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.js'?>"></script>
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.pie.js'?>"></script>

    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/realtimeinfo_demo.js'?>"></script>
	
 <script>
	function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
	var menu=document.getElementById(name+i);
	var con=document.getElementById("con_"+name+"_"+i);
	menu.className=i==cursel?"active":"";
	con.style.display=i==cursel?"block":"none";
	}
	}
 </script>

<!--script type="text/javascript">
function addEventSimple(obj,evt,fn){
	var eventHandler = fn;
    if(obj)
    {
        eventHander = function(e)
        {
            fn.call(obj, e);
        }
    }
	if(obj.addEventListener){
		obj.addEventListener(evt,fn);
	}else if(obj.attachEvent){
		obj.attachEvent('on'+evt,fn);
	}
}
var content = document.getElementsByClassName("btn-round");

function LinkClick(e)
{
	var a = this.children[0].className;
	if (a =="glyphicon glyphicon-chevron-up"){
		this.children[0].className = "glyphicon glyphicon-chevron-down";
	}else{
		this.children[0].className = "glyphicon glyphicon-chevron-up";
	}
}

for(var i=0; i<content.length;i++){
	addEventSimple(content[i],'click',LinkClick);
}
</script-->
<script type="text/javascript">
$(document).ready(function() {
$('#updateInterval').slider({
				tooltip: 'always'
	        });
});
</script>
<script type="text/javascript">
function setPromot(){
	//alert(11);
}
</script>
