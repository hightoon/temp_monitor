	
<style>

svg {
  font: 10px sans-serif;
}

.area {
  fill: steelblue;
  clip-path: url(#clip);
}

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.brush .extent {
  stroke: #666;
  fill-opacity: .125;
  shape-rendering: crispEdges;
}

.line {
  fill: none;
  stroke: steelblue;
  stroke-width: 1.5px;
  clip-path: url(#clip);
}

.focus circle {
    fill: green;
    stroke: steelblue;
}

</style>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'menu_top.php' ?>
        
        <!-- /.navbar-static-side -->
        <?php $current_file = basename(__FILE__); require 'menu_left.php' ?>
        
        <div id="page-wrapper">
			<div class="row">
                <div class="col-lg-12">
                <div id="sysinfo" admin_dir="<?php echo $admin_dir?>"></div>
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
                                <?php if (isset($allDevice)):?>
								<?php $flag=0; foreach($allDevice as $device): ?>
									<?php if (1 == $flag):?>
										<li class="left clearfix">
											<a >
												<button type="submit" class="btn btn-warning text-center pull-left" 
												style="width:60px;height:60px;border-radius:30px;padding:0;margin:10px;border-color:#fff;"><?php echo $device['num']?></button>
											</a>
											<div class="chat-body clearfix" style="background-color:#5cc;padding:5px 20px">
												<div class="header">
													<strong class="primary-font">空压机</strong> 
													<small class="pull-right text-muted">
														添加时间：<i class="fa fa-clock-o fa-fw"></i> <?php echo $device['date'];?>
													</small>
												</div>
												<p>控制器型号：<?php echo $device['cv_controller']?></p>
											</div>
										</li>
									<?php $flag=1;?>
									<?php else:?>
										<li class="right clearfix">
											<a  id="<?php echo "robo".$device['device_id']?>" href="<?php $tmp=base_url();echo $tmp."index.php/".$admin_dir."/admin/index/".$device['href']?>">
												<button type="submit" class="btn btn-info text-center pull-right" 
												style="width:60px;height:60px;border-radius:30px;padding:0;margin:0px;border-color:#fff;"><?php echo $device['device_id']?></button>
											</a>
											<div class="chat-body clearfix" style="background-color:#5cc;padding:5px 20px">
												<div class="header">
													<strong class="primary-font"><?php echo $device['machine_type']?></strong> 
													<small class="pull-right text-muted">
														添加时间：<i class="fa fa-clock-o fa-fw"></i> <?php echo $device['create_time'];?>
													</small>
												</div>
												<p>控制器型号：<?php echo $device['machine_controller']?></p>
											</div>
										</li>
									<?php $flag=0;?>
									<?php endif?>
								<?php endforeach ?>
                                <?php endif?>
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
                    <?php if(isset($device_id)):?>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
                                <div>当前设备</div>
                                <div style="height:69px"><i class="fa fa-truck fa-5x"></i></div>
                                <div><?php if(isset($device_id)){echo "<span id='device_id'>".$device_id."</span>";}else{echo "<span id='device_id'> - </span>";}?></div>
                            </button>
                        </div>
                        <div class="col-lg-6" id="more_function">
                            <a href="<?php echo $tmp.'index.php/'.$admin_dir.'/admin/index/'.$kzgn_encrypt?>">
                            <button type="button" class="btn btn-primary" <?php if(!isset($device_id)){echo "disabled='true'";}?> style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
                                <br/>
                                <div style="height:69px"><i class="fa fa-magic fa-5x"></i></div>
                                <div>扩展功能</div>
                            </button>
                            </a>
                        </div>
                        
                    </div>
                    <?php endif?>
				</div>
                
				<?php if(isset($device_id)):?>				
				<div class="col-lg-8">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<i class="fa fa-gears fa-fw"></i>历史故障信息
						</div>
						<div class="panel-body">
                            <?php if(isset($allAlarm)):?>
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
			<?php if(isset($device_id)):?>
            <?php foreach($deviceSet as $meter):?>
			<?php if (1 == $meter['is_display']):?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo $meter['set_name']?>：历史工作信息
                            <div class="pull-right" style="color:#666">
                                <input style="width:180px" id="<?php echo $meter['item_name']."_history_start" ?>" class="Wdate" type="text" onFocus="WdatePicker({onpicked:function(){<?php echo $meter['item_name']."_history_end" ?>.focus();},dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:'#F{$dp.$D(\'<?php echo $meter['item_name']."_history_end" ?>\')||\'2099-10-01\'}'})"/> 
                                到
                                <input style="width:180px" id="<?php echo $meter['item_name']."_history_end" ?>" class="Wdate" type="text" onFocus="WdatePicker({onpicked:refreshHistory,dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:'#F{$dp.$D(\'<?php echo $meter['item_name']."_history_start" ?>\')}',maxDate:'2099-10-01'})"/>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body chart-display" id="<?php echo $meter['item_name'] ?>" name="<?php echo $meter['set_name'] ?>" unit="<?php echo $meter['set_unit'] ?>" style="height:300px"></div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
			<?php endif?>
            <?php endforeach?>
			<?php endif?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <div class="modal fade" id="analysis_modal" tabindex="-1" role="dialog" 
       aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header">
                    <button type="button" class="close" 
                   data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title">
                        更多功能
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <p>分析起始时间点</p>
                            <input id="date_start" class="Wdate" type="text" onFocus="WdatePicker({maxDate:'#F{$dp.$D(\'date_end\',{d:-1})||\'2099-10-01\'}'})"/> 
                            <p>分析结束时间点</p>
                            <input id="date_end" class="Wdate" type="text" onFocus="WdatePicker({minDate:'#F{$dp.$D(\'date_start\',{d:1})}',maxDate:'2099-10-01'})"/>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div>比功率（m³/Kwh）：</div>
                            <div style="width:120px;height:120px;border-radius:60px;background-color:#428bca;line-height:120px;color:#fff;font-size:32px;margin:auto" id="energy_score"> - </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center">
                                <div style="width:120px;height:40px;background-color:#5C5;margin:50px 0;line-height:40px;float:right;cursor:pointer;" id="compute_energy"> 开始计算 </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <br/>
                        状态：<span id="compute_energy_status"></span>
                        <div class="progress progress-striped active">
                           <div id="energy_alalysis_img" class="progress-bar " role="progressbar" 
                              aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                           </div>
                        </div>
                        <div class="list-group">
                            <div class="list-group-item active">
                                <h4 class="list-group-item-heading">设备能效状况数据<a style="float:right;cursor:pointer;text-decoration:none;" id="dataExport"><img src="http://www.robosnet.com/web/images/txt.png"/>数据导出</a></h4>
                            </div>
                            <a class="list-group-item">
                                <p class="list-group-item-text"><span id="energy_summary"></span></p>
                            </a>
                        </div>
                    </div>
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
    
    <script src="<?php $tmp=base_url(); echo $tmp.'javascript/datepicker/WdatePicker.js'?>"></script> 

    <script src="<?php $tmp=base_url(); echo $tmp.'javascript/d3.v3.min.js'?>"></script>
	<script src="<?php $tmp=base_url(); echo $tmp.'javascript/'.$admin_dir.'/history.js'?>"></script>