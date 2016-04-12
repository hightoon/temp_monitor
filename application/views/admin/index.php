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
			<a class="navbar-brand" href="#">后台管理 v1.0</a>
		</div>
		<!-- /.navbar-header -->

		<ul class="nav navbar-top-links navbar-right">
			<!-- /.dropdown -->
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-user fa-fw"></i><?php echo $this->session->userdata('username')?><i class="fa fa-caret-down"></i>
				</a>
				<ul class="dropdown-menu dropdown-user">
					<li><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$zhsz_encrypt?>"><i class="fa fa-gear fa-fw"></i> 账户管理</a>
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
	<div class="navbar-default sidebar" role="navigation" >
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
					<a class="active" href="#"><i class="fa fa-dashboard fa-fw"></i> 管理首页</a>
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
				<h1 style="height:74px" class="page-header">管理首页<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/'.$this->session->userdata('path').'/logo.png'?>"></h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<div class="panel panel-green">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-list-alt fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo $alleqpNum?>台</div>
								<div>所有设备概况</div>
							</div>
						</div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#totalEqp">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="totalEqp" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											所有设备概况
										</h4>
									</div>
									<div class="modal-body">
										<div class="table-responsive" style="overflow:auto;height:300px">
											<table class="table table-condensed table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>设备编号</th>
														<th>设备类型</th>
														<th>机型</th>
														<th>设备添加时间</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($allEqp as $allEqp_item): ?>
													<tr>
														<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allEqp_item['href']?>"><?php echo $allEqp_item['cv_id'] ?></a></td>
														<td><?php echo $allEqp_item['cv_type'] ?></td>
														<td><?php echo $allEqp_item['cv_function'] ?></td>
														<td class="chart_robosnum"><?php echo $allEqp_item['record_date'] ?></td>
													</tr>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<div class="panel panel-navy">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-tasks fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo $onlineeqpNum?>台</div>
								<div>在线设备概况</div>
							</div>
						</div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#onlineEqp">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="onlineEqp" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											在线设备概况
										</h4>
									</div>
									<div class="modal-body">
										<div class="table-responsive" style="overflow:auto;height:300px">
											<table class="table table-condensed table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>设备编号</th>
														<th>设备类型</th>
														<th>机型</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($allEqp as $allEqp_item): ?>
													<?php if (1 == $allEqp_item['isOnline']):?>
														<tr>
															<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allEqp_item['href']?>"><?php echo $allEqp_item['cv_id'] ?></a></td>
															<td><?php echo $allEqp_item['cv_type'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
														</tr>
													<?php endif?>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<div class="panel panel-yellow">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-warning fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo $alarmNum?>条</div>
								<div>在线报警信息</div>
							</div>
						</div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#warningEqp">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="warningEqp" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											在线报警信息
										</h4>
									</div>
									<div class="modal-body">
										<div class="table-responsive" style="overflow:auto;height:300px">
											<table class="table table-condensed table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>设备编号</th>
														<th>类型</th>
														<th>机型</th>
														<th>报警时间</th>
														<th>报警内容</th>
													</tr>
												</thead>
												
												<tbody>
													<?php foreach ($allAlarm as $allAlarm_item): ?>
													<tr>
														<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allAlarm_item['href'] ?>"><?php echo $allAlarm_item['cv_id'] ?></a></td>
														<td><?php echo $allAlarm_item['cv_type'] ?></td>
														<td><?php echo $allAlarm_item['cv_function'] ?></td>
														<td class="chart_alarmnum"><?php echo $allAlarm_item['alarm_start'] ?></td>
														<td><?php echo $allAlarm_item['alarm_detail'] ?></td>
													</tr>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<div class="panel panel-red">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-comments fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge" id="remarknum"><?php echo $remarkNum?>条</div>
								<div>今日备注信息</div>
							</div>
						</div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#errorEqp">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="errorEqp" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											今日备注信息
										</h4>
									</div>
									<div class="modal-body">
										<div class="table-responsive" style="overflow:auto;height:300px">
											<table class="table table-condensed table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th style="width:30%">备注时间</th>
														<th style="width:15%">备注人</th>
														<th style="width:55%">备注内容</th>
													</tr>
												</thead>
												
												<tbody id="remarkDetail">
													<?php foreach($allRemark as $allRemarkItem): ?>
													<tr>
														<td><?php echo $allRemarkItem['date'];?></td>
														<td><?php echo $allRemarkItem['name'];?></td>
														<td>
															<div class="pull-left">
																<?php echo $allRemarkItem['remark'];?>
															</div>
															<button class=" btn btn-default btn-xs pull-right" onclick="delRemark(this)">删除</button>
														</td>
													</tr>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-default" class="pull-right" onclick="addRemark(this)">
											添加备注
										</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<i class="fa fa-bar-chart-o fa-fw"></i>设备状态信息
						<!--div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
									Actions
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li><a href="#">Action</a>
									</li>
									<li><a href="#">Another action</a>
									</li>
									<li><a href="#">Something else here</a>
									</li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a>
									</li>
								</ul>
							</div>
						</div-->
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div id="set-status-chart" style="height:230px"></div>
					</div>
					<!-- /.panel-body -->
				</div>
			</div>
			<!-- /.col-lg-7 -->
			<div class="col-lg-5">
				
				<div class="panel panel-primary" style="border:0">
					<div class="panel-heading" >
						<i class="fa fa-globe fa-fw"></i>地图信息
					</div>
					<div class="panel-body" style="padding:0;">
						<div id="allEqp_map" style="width:100%;height:260px"></div>
					</div>
                    <script type="text/javascript">
                        var robos_position = new Array(
                            new Array(-1,-1)
                        <?php
                        foreach($allEqp as $allEqp_item){
                            if($allEqp_item['GPS_lat'] != null && $allEqp_item['GPS_long'] != null){
                                ?>
                                ,new Array(<?php echo $allEqp_item['GPS_lat']?>,<?php echo $allEqp_item['GPS_long']?>)
                                <?php
                            }
                        }
                        ?>
                        );
                    </script>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<!-- /.col-lg-5 -->
		</div>
		<!-- /.row -->
		<!-- /.row -->
		<style type="text/css">
        .self-title-sjl{
            background: none repeat scroll 0% 0% rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.9);
            width: 100%;
            height: 28px;
            padding: 5px 0px;
            position: absolute;
            top: 0px;
        }
		</style>
		<div class="row">
		<!--div class="col-lg-1"></div-->
			<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 maintain_info">
				<div class="panel panel-primary">
						<!--div class="self-title-sjl">空滤器保养情况</div-->
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>空滤器保养情况</p>
                        </div>
                        <div class="row dynamic">
                            <div class="col-lg-5  col-md-5 col-sm-4 col-xs-6">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut1" style="height:100px"></div>
                                </div>
                            </div>
                            <div class="col-lg-7  col-md-7 col-sm-8 col-xs-6 text-center klq_maintain">
                                <br>
                                <div>鼠标移动至饼图区域</div>
								<div>可查看概况，</div>
								<div>或点击饼图区域</div>
								<div>以查看详情</div>
                            </div>
                        </div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#maintain_modal">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="kl_maintain_modal" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											在线设备概况
										</h4>
									</div>
									<div class="modal-body">
										<div class="table-responsive" style="overflow:auto;height:300px">
											<table class="table table-condensed table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>设备编号</th>
														<th>设备类型</th>
														<th>机型</th>
														<th>保养项目</th>
														<th>剩余时间</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($allEqp as $allEqp_item): ?>
													<?php if (1 == $allEqp_item['isOnline']):?>
														<tr>
															<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allEqp_item['href']?>"><?php echo $allEqp_item['cv_id'] ?></a></td>
															<td><?php echo $allEqp_item['cv_type'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td>空滤器保养</td>
															<td>800</td>
														</tr>
													<?php endif?>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
					</a>
				</div>
            </div>
            <!-- /.col-lg-4 -->
            
			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 maintain_info">
				<div class="panel panel-primary">
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>油滤器保养情况</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-5 col-sm-4 col-xs-6">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut2" style="height:100px"></div>
                                </div>
                            </div>
                        </div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#maintain_modal">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="yl_maintain_modal" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											在线设备概况
										</h4>
									</div>
									<div class="modal-body">
										<div class="table-responsive" style="overflow:auto;height:300px">
											<table class="table table-condensed table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>设备编号</th>
														<th>设备类型</th>
														<th>机型</th>
														<th>保养项目</th>
														<th>剩余时间</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($allEqp as $allEqp_item): ?>
													<?php if (1 == $allEqp_item['isOnline']):?>
														<tr>
															<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allEqp_item['href']?>"><?php echo $allEqp_item['cv_id'] ?></a></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
														</tr>
													<?php endif?>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
            </div>
			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 maintain_info">
				<div class="panel panel-primary">
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>油分器保养情况</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-5 col-sm-4 col-xs-6">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut3" style="height:100px"></div>
                                </div>
                            </div>
                        </div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#maintain_modal">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="yf_maintain_modal" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											在线设备概况
										</h4>
									</div>
									<div class="modal-body">
										<div class="table-responsive" style="overflow:auto;height:300px">
											<table class="table table-condensed table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>设备编号</th>
														<th>设备类型</th>
														<th>机型</th>
														<th>保养项目</th>
														<th>剩余时间</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($allEqp as $allEqp_item): ?>
													<?php if (1 == $allEqp_item['isOnline']):?>
														<tr>
															<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allEqp_item['href']?>"><?php echo $allEqp_item['cv_id'] ?></a></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
														</tr>
													<?php endif?>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
            </div>
			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 maintain_info">
				<div class="panel panel-primary">
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>润滑油保养情况</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-5 col-sm-4 col-xs-6">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut4" style="height:100px"></div>
                                </div>
                            </div>
                        </div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#maintain_modal">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="ry_maintain_modal" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											在线设备概况
										</h4>
									</div>
									<div class="modal-body">
										<div class="table-responsive" style="overflow:auto;height:300px">
											<table class="table table-condensed table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>设备编号</th>
														<th>设备类型</th>
														<th>机型</th>
														<th>保养项目</th>
														<th>剩余时间</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($allEqp as $allEqp_item): ?>
													<?php if (1 == $allEqp_item['isOnline']):?>
														<tr>
															<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allEqp_item['href']?>"><?php echo $allEqp_item['cv_id'] ?></a></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
															<td><?php echo $allEqp_item['cv_function'] ?></td>
														</tr>
													<?php endif?>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
            </div>
                        
			<div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 maintain_info">
				<div class="panel panel-primary">
					<div class="panel-heading" >
                        <div class="row text-center">
                            <p>润滑脂保养情况</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-5 col-sm-4 col-xs-6">
                                <div class="row">
                                    <div class="dount-holder" id="maintain-donut5" style="height:100px"></div>
                                </div>
                            </div>
                        </div>
					</div>
					<a>
						<div class="panel-footer" style="cursor:pointer" data-toggle="modal" data-target="#maintain_modal">
							<span class="pull-left">查看详情</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
						<div class="modal fade" id="maintain_modal" tabindex="-1" role="dialog" 
							   aria-labelledby="myModalLabel" aria-hidden="true">
						   <div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" 
									   data-dismiss="modal" aria-hidden="true">
										  &times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											在线设备概况
										</h4>
									</div>
									<div class="modal-body">
										<div class="table-responsive" style="overflow:auto;height:300px">
											<table class="table table-condensed table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>设备编号</th>
														<th>设备类型</th>
														<th>机型</th>
														<th>保养项目</th>
														<th>剩余时间</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ($allMaintain as $allMaintain_item): ?>
														<tr>
															<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id'] ?></a></td>
															<td><?php echo $allMaintain_item['cv_type'] ?></td>
															<td><?php echo $allMaintain_item['cv_function'] ?></td>
															<td><?php echo $allMaintain_item['name'] ?></td>
															<td><?php echo $allMaintain_item['left_time'] ?></td>
														</tr>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<!-- /.col-lg-4 -->

		</div>
        <!-- /.row -->
		
	</div>
	<!-- /#page-wrapper -->

</div>


<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_kl0">
	<div>
		<h4>空滤器保养信息<span id="kl_0"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期已过
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_kl0').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_kl1">
	<div>
		<h4>空滤器保养信息<span id="kl_1"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余24小时以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_kl1').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_kl2">
	<div>
		<h4>空滤器保养信息<span id="kl_2"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余7天以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_kl2').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_kl3">
	<div>
		<h4>空滤器保养信息<span id="kl_3"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余1个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_kl3').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_kl4">
	<div>
		<h4>空滤器保养信息<span id="kl_4"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_kl4').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_kl5">
	<div>
		<h4>空滤器保养信息<span id="kl_5"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] > 1440){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以上
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_kl5').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'kongqi_m' && $allMaintain_item['left_time'] > 1440):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>

<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yl0">
	<div>
		<h4>油滤器保养信息<span id="yl_0"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期已过
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yl0').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yl1">
	<div>
		<h4>油滤器保养信息<span id="yl_1"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余24小时以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yl1').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yl2">
	<div>
		<h4>油滤器保养信息<span id="yl_2"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余7天以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yl2').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yl3">
	<div>
		<h4>油滤器保养信息<span id="yl_3"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余1个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yl3').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yl4">
	<div>
		<h4>油滤器保养信息<span id="yl_4"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yl4').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yl5">
	<div>
		<h4>油滤器保养信息<span id="yl_5"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] > 1440){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以上
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yl5').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youguo_m' && $allMaintain_item['left_time'] > 1440):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>


<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yf0">
	<div>
		<h4>油分器保养信息<span id="yf_0"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期已过
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yf0').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yf1">
	<div>
		<h4>油分器保养信息<span id="yf_1"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余24小时以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yf1').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yf2">
	<div>
		<h4>油分器保养信息<span id="yf_2"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余7天以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yf2').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yf3">
	<div>
		<h4>油分器保养信息<span id="yf_3"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余1个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yf3').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yf4">
	<div>
		<h4>油分器保养信息<span id="yf_4"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yf4').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_yf5">
	<div>
		<h4>油分器保养信息<span id="yf_5"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] > 1440){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以上
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_yf5').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youfen_m' && $allMaintain_item['left_time'] > 1440):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>


<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_ry0">
	<div>
		<h4>润滑油保养信息<span id="ry_0"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期已过
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_ry0').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_ry1">
	<div>
		<h4>润滑油保养信息<span id="ry_1"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余24小时以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_ry1').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_ry2">
	<div>
		<h4>润滑油保养信息<span id="ry_2"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余7天以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_ry2').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_ry3">
	<div>
		<h4>润滑油保养信息<span id="ry_3"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余1个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_ry3').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_ry4">
	<div>
		<h4>润滑油保养信息<span id="ry_4"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_ry4').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_ry5">
	<div>
		<h4>润滑油保养信息<span id="ry_5"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] > 1440){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以上
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_ry5').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'dianji_m' && $allMaintain_item['left_time'] > 1440):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>


<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_rz0">
	<div>
		<h4>润滑脂保养信息<span id="rz_0"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期已过
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_rz0').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_rz1">
	<div>
		<h4>润滑脂保养信息<span id="rz_1"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余24小时以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_rz1').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 24 && $allMaintain_item['left_time'] > 0):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_rz2">
	<div>
		<h4>润滑脂保养信息<span id="rz_2"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余7天以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_rz2').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 168 && $allMaintain_item['left_time'] > 24):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_rz3">
	<div>
		<h4>润滑脂保养信息<span id="rz_3"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余1个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_rz3').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 720 && $allMaintain_item['left_time'] > 168):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_rz4">
	<div>
		<h4>润滑脂保养信息<span id="rz_4"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以内
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_rz4').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] <= 1440 && $allMaintain_item['left_time'] > 720):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
</div>
<div style="color:#fff;background:rgba(0,0,0,0.85);height:300px;width:500px;display:none;position: absolute;z-index:1;padding:10px;" id="detail_rz5">
	<div>
		<h4>润滑脂保养信息<span id="rz_5"><?php 
			$num=0;
			foreach ($allMaintain as $allMaintain_item){
				if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] > 1440){
					$num++;
				}
			}
			echo $num;
		?></span>条：保养期剩余2个月以上
			<button aria-hidden="true" style="float:right;border:0;background:0" type="button" onclick="$('#detail_rz5').hide()">X
			</button>
		</h4>
	</div>
	<div style="height:240px;overflow:auto">
		<table class="table  table-condensed table-bordered">
			<thead>
				<tr>
					<th>设备编号</th>
					<th>类型</th>
					<th>机型</th>
					<th>保养期剩余时间</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($allMaintain as $allMaintain_item):?>
				<?php if($allMaintain_item['maintain_type'] == 'youzhi_m' && $allMaintain_item['left_time'] > 1440):?>
				<tr>
					<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_item['href']?>"><?php echo $allMaintain_item['cv_id']?></a></td>
					<td><?php echo $allMaintain_item['cv_type']?></td>
					<td><?php echo $allMaintain_item['cv_function']?></td>
					<td><?php echo $allMaintain_item['left_time']?>小时</td>
				</tr>
				<?php endif?>
				<?php endforeach?>
			</tbody>
		</table>
	</div>
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
<!-- /#wrapper -->

<!-- jQuery Version 1.11.0 -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>

<!-- Flot JavaScript -->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/excanvas.min.js'?>"></script><![endif]-->
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.crosshair.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.pie.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.time.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.crosshair.js'?>"></script>

<!-- Chart JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/admin.js'?>" charset="utf-8"></script>
