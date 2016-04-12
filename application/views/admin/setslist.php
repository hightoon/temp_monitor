<!--script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=09a12fee552d5ad4aa2de5c0626c9c10"></script>
<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/changeMore.js"></script-->  
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
                            <a href="#"  class="active"><i class="fa fa-table fa-fw"></i> 所有设备信息</a>
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
								<a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$cssz_encrypt?>"> 参数设置</a>
							</li>
							<li>
								<a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$zhsz_encrypt?>"> 账户管理</a>
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
				<h1 style="height:74px" class="page-header">所有设备信息<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/'.$this->session->userdata('path').'/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            所有设备信息
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-condensed" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>设备编号</th>
											<th>设备类型</th>
                                            <th>机型</th>
                                            <th>控制器型号</th>
											<th>当前状态</th>
											<th>经销商</th>
											<th style="display:none">用户</th>
											<th>车间</th>
											<th>设备添加时间</th>
											<?php if ($this->session->userdata("admin_level") == 1):?>
												<th>操作</th>
											<?php endif?>
                                        </tr>
                                    </thead>
									<tbody id="listTable">
										
										<?php foreach ($allEqp as $allEqp_item):?>
										<tr>
                                            <td><a style="text-decoration:underline" href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allEqp_item['href']?>"><?php echo $allEqp_item['cv_id']?></a></td>
											<td><?php echo $allEqp_item['cv_type']?></td>
                                            <td><?php echo $allEqp_item['cv_function']?></td>
                                            <td><?php echo $allEqp_item['cv_controller']?></td>
											<td><?php if(1 == $allEqp_item['isOnLine']){echo "在线";}else{echo "离线";} ?></td>
											<td><?php echo $allEqp_item['cv_dealer']?></td>
											<td style="display:none"><?php echo $allEqp_item['cv_user']?></td>
											<td><?php echo $allEqp_item['cv_factory']?></td>
											<td><?php echo $allEqp_item['record_date']?></td>
											<?php if ($this->session->userdata("admin_level") == 1):?>
												<td><a href="javascript:void(0)"  onclick="modalShowDel(this);">删除</a> | <a href="javascript:void(0)"  onclick="modalShowEdit(this);">编辑</a></td>
											<?php endif?>
                                        </tr>
										<?php endforeach?>
									</tbody>
								</table>
								<?php if ($this->session->userdata("admin_level") == 1):?>
									<button class="btn btn-default pull-right" data-toggle="modal" data-target="#addItem">添加设备</button>
                                    <div class="modal fade" id="addItem" tabindex="-1" role="dialog" 
                                                               aria-labelledby="myModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" 
                                                   data-dismiss="modal" aria-hidden="true">
                                                      &times;
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel">
                                                        添加设备
                                                    </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="input-group" style="width:300px">
                                                        <span class="input-group-addon">设备编号</span>
                                                        <input type="text" class="form-control" id="add_id">
                                                    </div>
                                                    <br/>
                                                    <div class="input-group" style="width:300px">
                                                        <span class="input-group-addon">设备类型</span>
                                                        <input type="text" class="form-control" id="add_type">
                                                    </div>
                                                    <br/>
                                                    <div class="input-group" style="width:300px">
                                                        <span class="input-group-addon">使用厂家</span>
                                                        <input type="text" class="form-control" id="add_factory">
                                                    </div>
                                                    <ul class="list-inline" style="text-align:right;">
                                                        <li><button type="button" class="btn btn-primary" onclick="addEqp()" id="modalAddYes">确定</button></li>
                                                        <li><button type="button" class="btn btn-primary" onclick="$('#addItem').modal('hide');">取消</button></li>
                                                    </ul>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal -->
                                    </div><!-- /.modal -->
								<?php endif?>
								<div class="modal fade" id="delItem" tabindex="-1" role="dialog" 
														   aria-labelledby="myModalLabel" aria-hidden="true">
								   <div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" 
											   data-dismiss="modal" aria-hidden="true">
												  &times;
												</button>
												<h4 class="modal-title" id="myModalLabel">
													警告
												</h4>
											</div>
											<div class="modal-body">
												<p>你确定要删除编号为<span id="del_cv_id" style="font-weight:bold;color:red"></span>的设备吗?</p>
												<ul class="list-inline" style="text-align:right;">
													<li><button type="button" class="btn btn-primary" id="modalDelYes">确定</button></li>
													<li><button type="button" class="btn btn-primary" onclick="$('#delItem').modal('hide');">取消</button></li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal -->
								</div><!-- /.modal -->
								<div class="modal fade" id="editItem" tabindex="-1" role="dialog" 
														   aria-labelledby="myModalLabel" aria-hidden="true">
								   <div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" 
											   data-dismiss="modal" aria-hidden="true">
												  &times;
												</button>
												<h4 class="modal-title" id="myModalLabel">
													编辑
												</h4>
											</div>
											<div class="modal-body">
												<p>设备编号：<span id="edit_cv_id" style="font-weight:bold;color:red"></span></p>
												<br/>
												<div class="input-group" style="width:300px">
													<span class="input-group-addon">设备类型</span>
													<input type="text" class="form-control" id="edit_type">
												</div>
												<br/>
												<div class="input-group" style="width:300px">
													<span class="input-group-addon">机型</span>
													<input type="text" class="form-control" id="edit_function">
												</div>
												<br/>
												<div class="input-group" style="width:300px">
													<span class="input-group-addon">控制器型号</span>
													<input type="text" class="form-control" id="edit_controller">
												</div>
												<br/>
												<div class="input-group" style="width:300px">
													<span class="input-group-addon">经销商</span>
													<input type="text" class="form-control" id="edit_dealer">
												</div>
												<br/>
												<div class="input-group" style="width:300px">
													<span class="input-group-addon">车间</span>
													<input type="text" class="form-control" id="edit_factory">
												</div>
												<ul class="list-inline" style="text-align:right;">
													<li><button type="button" class="btn btn-primary" id="editmodalDelYes">确定</button></li>
													<li><button type="button" class="btn btn-primary" onclick="$('#editItem').modal('hide');">取消</button></li>
												</ul>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal -->
								</div><!-- /.modal -->
								<script>
								</script>
								
							</div>
                            <!-- /.table-responsive -->
							
							
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-warning"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseWarning" aria-expanded="true" style="color:#fff" aria-controls="collapseWarning">
                                报警信息（所有设备）
                            </a>
                        </div>
                        <!-- /.panel-heading -->
						<div id="collapseWarning" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<div class="table-responsive">
									<table style="width:100%" class="table table-bordered table-condensed" id="dataTables-alarm">
										<thead>
											<tr>
												<th style="width:10%">设备编号</th>
                                                <th style="width:50%">报警原因</th>
												<th style="width:20%">报警开始时间</th>
												<th style="width:20%">报警结束时间</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($allWarning as $allWarning_list):?>
												<tr>
													<td><a href="<?php $tmp = base_url(); echo $tmp.'index.php/admin/'.$allWarning_list['href']?>"><?php echo $allWarning_list['cv_id']?></a></td>
                                                    <td><?php echo $allWarning_list['alarm_detail']?></td>
													<td><?php echo $allWarning_list['alarm_start']?></td>
                                                    <td><?php 
													$alarm_end = ($allWarning_list['alarm_end'])?($allWarning_list['alarm_end']):("报警仍未结束！");
													echo $alarm_end;
													?></td>
												</tr>
											<?php endforeach?>
										</tbody>
									</table>
								</div>
								<!-- /.table-responsive -->
							</div>
							<!-- /.panel-body -->
						</div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-ambulance"></i>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseError" aria-expanded="true" style="color:#fff" aria-controls="collapseError">
                                保养信息（所有设备）
                            </a>
                        </div>
                        <!-- /.panel-heading -->
						<div id="collapseError" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered table-condensed" id="dataTables-maintain">
										<thead>
											<tr>
												<th style="width:10%">设备编号</th>
												<th style="width:15%">具体部件</th>
												<th style="width:10%">保养周期</th>
												<th style="width:10%">保养剩余时间</th>
												<th style="width:15%">上次保养时间</th>
												<th style="width:30%">备注信息</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($allMaintain as $allMaintain_list):?>
												<tr>
													<td><a href="<?php $tmp=base_url(); echo $tmp.'index.php/admin/'.$allMaintain_list['href']?>"><?php echo $allMaintain_list['cv_id']?></a></td>
													<td><?php echo $allMaintain_list['name']?></td>
													<td><?php echo $allMaintain_list['period1']?>小时</td>
													<td
													<?php
														if($allMaintain_list['left_time'] < 24){
															echo "style=\"background-color:#f00;color:#FFF\"";
														}
													?>
													><?php echo $allMaintain_list['left_time']?>小时</td>
													<td>
														<?php
															$item = ($allMaintain_list['last_maintain_date'])?($allMaintain_list['last_maintain_date']):("暂未保养过");
															echo $item;
														?>
													</td>
													<td>
														<div class="pull-left">
														<?php
															$item = ($allMaintain_list['remark'])?($allMaintain_list['remark']):("无");
															echo $item;
														?>
														</div>
														<button class="maintain-remark btn btn-default btn-xs pull-right">修改</button>
													</td>
												</tr>
											<?php endforeach?>
										</tbody>
									</table>
								</div>
								<!-- /.table-responsive -->
							</div>
							<!-- /.panel-body -->
						</div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            运行效率统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="effect-fullrange"><i class="fa fa-arrows-alt"></i></button>
                            <div id="effect-bar-chart" style="height:200px"></div>
                            <div id="overview-effect" style="height:60px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            故障次数统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="error-pie-chart" style="height:120px;width:120px;position: absolute;left:230px;top:40px;z-index:1;"></div>
                            <div id="error-bar-chart" style="height:200px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            故障率统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="rate-pie-chart" style="height:120px;width:260px;position: absolute;left:230px;top:40px;z-index:1;"></div>
                            <div id="rate-line-chart" style="height:200px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            设备故障率统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="eqp-bar-chart" style="height:200px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            保养信息统计
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <button type="button" class="btn btn-default" disabled="true" style="position: absolute;right:50px;top:50px;z-index:1;" id="maintain-fullrange"><i class="fa fa-arrows-alt"></i></button>
                            <div id="maintain-stack-chart" style="height:200px"></div>
                            <div id="overview-maintain" style="height:60px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary" style="border:0">
                        <div class="panel-heading">
                            详细地图信息
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="padding:0;">
                            <div id="allEqp_map" style="width:100%;height:560px"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
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

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!-- jQuery Version 1.11.0 -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/jquery-1.11.0.js'?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/metisMenu/metisMenu.min.js'?>"></script>

<!-- DataTables JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/dataTables/jquery.dataTables.js'?>"></script>
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/plugins/dataTables/dataTables.bootstrap.js'?>"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php $tmp=base_url(); echo $tmp.'bootstrap/js/sb-admin-2.js'?>"></script>

<!-- Flot JavaScript -->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/excanvas.min.js'?>"></script><![endif]-->
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.pie.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.time.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.orderBars.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.stack.min.js'?>"></script>
<script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/flot/jquery.flot.selection.js'?>"></script>

<script type="text/javascript" src='<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/setslist.js'?>'></script>