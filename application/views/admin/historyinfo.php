    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation"  style="margin-bottom: 0;background:#000;">
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
						<a href="<?php echo $tmp.'index.php/admin/'.$sysb_encrypt?>"><i class="fa fa-table fa-fw"></i> 所有设备信息</a>
                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 单台设备管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
								<a href="<?php echo $tmp.'index.php/admin/'.$dtsb_encrypt?>"> 单台设备概况</a>
                                </li>
                                <li>
								<a href="<?php echo $tmp.'index.php/admin/'.$ssxx_encrypt?>"> 实时监控</a>
                                </li>
                                <li>
								<a class="active" href="#"> 历史信息</a>
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
				<h1 style="height:74px" class="page-header">历史信息<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/'.$this->session->userdata('path').'/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
				<div class="col-lg-4">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<i class="fa fa-gears fa-fw"></i>设备列表
						</div>
						<div class="panel-body">
							<ul class="chat">							
								<li class="left clearfix">
									<a>
										<button type="submit" class="btn btn-success text-center pull-left" 
										style="width:60px;height:60px;border-radius:30px;padding:0;margin:10px;border-color:#fff;"><i class="fa fa-graduation-cap fa-2x"></i></button>
									</a>
									<div class="chat-body clearfix" style="padding:5px 20px;background-color:#5c5">
										<div class="header">
											<strong class="primary-font">说明</strong> 
											<small class="pull-right text-muted">
												时间：<i class="fa fa-clock-o fa-fw"></i> 2011-12-30
											</small>
										</div>
										<p>点击下列圆形按钮进入相应设备主页！</p>
									</div>
								</li>
								<?php $flag=0; foreach($allEqp as $allEqp_item): ?>
									<?php if (1 == $flag):?>
										<li class="left clearfix">
											<a href="<?php $tmp=base_url();echo $tmp."index.php/admin/".$allEqp_item['href']?>">
												<button type="submit" class="btn btn-warning text-center pull-left" 
												style="width:60px;height:60px;border-radius:30px;padding:0;margin:10px;border-color:#fff;"><?php echo $allEqp_item['num']?></button>
											</a>
											<div class="chat-body clearfix" style="background-color:#5cc;padding:5px 20px">
												<div class="header">
													<strong class="primary-font">空压机</strong> 
													<small class="pull-right text-muted">
														添加时间：<i class="fa fa-clock-o fa-fw"></i> <?php echo $allEqp_item['date'];?>
													</small>
												</div>
												<p>控制器型号：<?php echo $allEqp_item['cv_controller']?></p>
											</div>
										</li>
									<?php $flag=1;?>
									<?php else:?>
										<li class="right clearfix">
											<a href="<?php $tmp=base_url();echo $tmp."index.php/admin/".$allEqp_item['href']?>" id="<?php echo "robo".$allEqp_item['num']?>">
												<button type="submit" class="btn btn-info text-center pull-right" 
												style="width:50px;height:50px;border-radius:25px;padding:0;margin:0px;border-color:#fff;"><?php echo $allEqp_item['num']?></button>
											</a>
											<div class="chat-body clearfix" style="background-color:#5cc;padding:5px 20px">
												<div class="header">
													<strong class="primary-font">螺杆机</strong> 
													<small class="pull-right text-muted">
														添加时间：<i class="fa fa-clock-o fa-fw"></i> <?php echo $allEqp_item['date'];?>
													</small>
												</div>
												<p>控制器型号：<?php echo $allEqp_item['cv_controller']?></p>
											</div>
										</li>
									<?php $flag=0;?>
									<?php endif?>
								<?php endforeach ?>
							</ul>
						</div>
						<!-- /.panel-body -->
						<div class="panel-footer">
							<div class="row">
								<div class="col-xs-6">
									<button type="submit" class="btn btn-primary text-center">上一页</button> 
									<button type="submit" class="btn btn-primary text-center">下一页</button>
								</div>
								<div class="col-xs-6">
									<div class="input-group">
										<input id="input-roboselect" type="text" class="form-control input-sm" placeholder="手动输入设备编号..." />
										<span class="input-group-btn">
											<button class="btn btn-warning btn-sm" id="btn-roboselect">
												确定
											</button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php if(isset($cv_id)):?>
                
				<div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span class="huge" id="SetId">
                                <?php if(isset($cv_id)){echo $cv_id;}else{echo "";}?>
                            </span>
                                <?php if(isset($cv_id)){echo "号";}else{echo "";}?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 col-sm-7 col-xs-7">
                                    <div id="allEqp_map" style="width:100%;height:150px"></div>
                                </div>	
                                <div class="col-lg-5 col-md-6 col-sm-5 col-xs-5">
                                    <div><i class="fa fa-sort-amount-asc" style="padding:5px"></i>设备类型:<strong class="text-danger"><?php if(isset($cv_info['cv_function'])){echo $cv_info['cv_function'];}else{echo "";} ?></strong></div>
                                    <div><i class="fa fa-tag" style="padding:5px"></i>型号:<strong class="text-danger"><?php if(isset($cv_info['cv_model'])){echo $cv_info['cv_model'];}else{echo "";} ?></strong></div>
                                    <div><i class="fa fa-tachometer" style="padding:5px"></i>控制器型号:<strong class="text-danger"><?php if(isset($cv_info['cv_controller'])){echo $cv_info['cv_controller'];}else{echo "";} ?></strong></div>
                                    <div><i class="fa fa-clock-o" style="padding:5px"></i>录入时间:<strong class="text-danger"><?php if(isset($cv_info['record_date'])){echo $cv_info['record_date'];}else{echo "";} ?></strong></div>
                                    <div><i class="fa fa-map-marker" style="padding:5px"></i>经度:<strong class="text-danger" id="gps_long"><?php if(isset($cv_info['GPS_long'])){ $temp=floor($cv_info['GPS_long']/100); $GPS_long=($temp+($cv_info['GPS_long']-100*$temp)/60); echo $GPS_long;}else{echo "";} ?></strong></div>
                                    <div><i class="fa fa-map-marker" style="padding:5px"></i>纬度:<strong class="text-danger" id="gps_lat"><?php if(isset($cv_info['GPS_lat'])){$temp=floor($cv_info['GPS_lat']/100); $GPS_lat=($temp+($cv_info['GPS_lat']-100*$temp)/60); echo $GPS_lat;}else{echo "";} ?></strong></div>
                                </div>
                            </div>	
                        </div>	
                        <!--/div-->
                    </div>
                    <!-- /.panel -->
                </div>
				<div class="col-lg-8">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<i class="fa fa-gears fa-fw"></i>历史故障信息
						</div>
						<div class="panel-body">
                            <?php if($allAlarm != null):?>
							<ul class="chat">
                                <?php foreach($allAlarm as $allAlarm_item):?>
								<li class="left clearfix">
									<div class="row">
										<div class="col-xs-5">
											<div style="padding:5px 10px;float:left">
												<i class="fa fa-clock-o fa-fw"></i>
                                                <?php echo $allAlarm_item['alarm_start']; ?>
											</div>
											<div style="padding:5px 10px;background-color:#e55;float:right">
												开始时间
											</div>
										</div>
										<div class="col-xs-2 text-center">
											<div>
												<p><?php echo $allAlarm_item['alarm_detail']; ?></p>
											</div>
										</div>
										<div class="col-xs-5">
                                            <?php if($allAlarm_item['alarm_end'] != null):?>
											<div style="padding:5px 10px;background-color:#5c5;float:left">
												结束时间
											</div>
											<div style="padding:5px 10px;float:right">
												<i class="fa fa-clock-o fa-fw"></i>
                                                <?php echo $allAlarm_item['alarm_end']; ?>
											</div>
                                            <?php else:?>
											<div style="padding:5px 10px;float:right;background-color:#ee5;">
												<i class="fa fa-clock-o fa-fw"></i>
                                                仍未解决！
											</div>
                                            <?php endif?>
										</div>
									</div>
								</li>
                                <?php endforeach?>
							</ul>
						</div>
						<!-- /.panel-body -->
						<div class="panel-footer">
							<div class="row">
								<div class="col-lg-6">
									<button type="button" class="btn btn-primary " >上一页</button>
									<button type="button" class="btn btn-primary " >下一页</button>
								</div>
							</div>
						</div>
                        <?php else:
                            echo "暂未发生任何故障！";
                        ?>
                        </div>
                        <?php endif?>
					</div>
				</div>
				<?php endif?>
			</div>
            <!-- /.row -->
			<?php if(isset($cv_id)):?>
            <?php foreach($meters as $key=>$meters_item):?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo $meters_item['name']?>：历史工作信息
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="<?php echo $key."-fullrange"?>"><i class="fa fa-arrows-alt"></i></button>
                            <div id="<?php echo $key."-line-chart"?>" style="height:200px"></div>
                            <div id="<?php echo "overview-".$key?>" style="height:60px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <?php endforeach?>
			<?php endif?>
            <script type="text/javascript">
                var meterslist = new Array(
                    new Array(0,0)
                    <?php foreach($meters as $key=>$value):?>
                        ,new Array(<?php echo "\"".$key."\","; echo "\"".$meters[$key]['unit']."\""?>)
                    <?php endforeach?>
                );
                <?php
                foreach($meters as $key=>$value){
                    ?>
                    var <?php echo $key."info"?>=new Array(
                        new Array(
                        <?php
                            echo "0";
                            foreach($historyinfo as $historyinfo_item){
                                if($historyinfo_item['update_time'] != null){
                                    echo ",\"".$historyinfo_item['update_time']."\"";
                                }
                            }
                        ?>
                        ),new Array(
                        <?php
                            echo "0";
                            foreach($historyinfo as $historyinfo_item){
                                if($historyinfo_item[$meter_history[$key]] != null){
                                    echo ",".$historyinfo_item[$meter_history[$key]];
                                }
                            }
                        ?>
                        )
                    );
                    <?php
                }
                ?>
                
            </script>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/modernizr.js'?>'></script>
    <!-- jQuery Version 1.11.0 -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>
	    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

	<!-- select2 -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/select2-3.5.1/select2.js'?>'></script>	

    <!-- Custom Theme JavaScript -->
    <script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>
	
	<!-- slider -->
	<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap-slider.js'?>'></script>
	
    <!-- Flot JavaScript -->
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/excanvas.min.js'?>"></script><![endif]-->
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.js'?>"></script>
    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.time.js'?>"></script>

	<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/history.js'?>"></script>
