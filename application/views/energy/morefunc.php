    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'menu_top.php' ?>
        
        <!-- /.navbar-static-side -->
        <?php $current_file = basename(__FILE__); require 'menu_left.php' ?>
        
        <div id="page-wrapper">
			<div class="row">
                <div class="col-lg-12">
                <div id="sysinfo" admin_dir="<?php echo $admin_dir?>"></div>
				<h1 style="height:74px" class="page-header">能效分析<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/'.$this->session->userdata('path').'/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
            <div class="row">                
                <div class="col-lg-3">
                    <p>分析起始时间</p>
                    <input id="date_start" class="Wdate" type="text" onFocus="WdatePicker({maxDate:'#F{$dp.$D(\'date_end\',{d:-1})||\'2099-10-01\'}'})"/> 
                    <p>分析结束时间</p>
                    <input id="date_end" class="Wdate" type="text" onFocus="WdatePicker({minDate:'#F{$dp.$D(\'date_start\',{d:1})}',maxDate:'2099-10-01'})"/>
                </div>                
                <!--div class="col-lg-4">
                    <p>峰电时间</p>
                    <input type="text" id="top_time1" onfocus="WdatePicker({dateFmt:'HH:mm:00'})" class="Wdate"/>-<input type="text" id="top_time2" onfocus="WdatePicker({dateFmt:'HH:mm:00'})" class="Wdate"/>
                    <p>谷电时间</p>
                </div>              
                <div class="col-lg-2">
                    <p>峰电价格</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="top_price" placeholder="峰电价格">
                        <div class="input-group-addon">元/度</div>
                    </div>
                    <p>谷电价格</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="bottom_price" placeholder="谷电价格">
                        <div class="input-group-addon">元/度</div>
                    </div>
                </div-->
                <div class="col-lg-3">   
                    <p>额定功率</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="rated_power" placeholder="额定功率" value="50">
                        <div class="input-group-addon">kW</div>
                    </div>
                    <p>额定产气量</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="rated_out" placeholder="额定产气量" value="20">
                        <div class="input-group-addon">m³/h</div>
                    </div>        
                </div>
                <div class="col-lg-3">
                    <p>电费</p>
                    <div class="input-group">
                        <input type="text" class="form-control" id="energy_price" placeholder="峰电价格" value="1.0">
                        <div class="input-group-addon">元/度</div>
                    </div>
                </div> 
                <div class="col-lg-3">
                    设备编号：<span id="device_id"><?php echo $device_id?></span>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary text-center" id="compute_energy">开始计算</button> 
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
            </div>
            
            <div class="row"> 
                <div class="alert alert-danger" role="danger" style="display:none" id="analysisRet">
                    所选时间段内无有效数据，请重新选择时间段！
                </div>
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <td>
                                选择时间长度
                            </td>
                            <td>
                                <span id="totalTime">-</span>小时
                            </td>
                            <td>
                                设备工作时间
                            </td>
                            <td>
                                <span id="workTime">-</span>小时
                            </td>
                            <td>
                                设备停机时间
                            </td>
                            <td>
                               <span id="stopTime">-</span>小时
                            </td>
                        </tr>
                        <tr>
                            <td>
                                设备平均比功率
                            </td>
                            <td>
                                <span id="specificPower">-</span>kW/(m³/min)
                            </td>
                            <td>
                                设备满载时间
                            </td>
                            <td>
                                <span id="loadTime">-</span>小时
                            </td>
                            <td>
                                设备空载时间
                            </td>
                            <td>
                               <span id="unloadTime">-</span>小时
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                设备满载率
                            </td>
                            <td>
                                <span id="loadPercent">-</span>%
                            </td>
                            <td>
                                设备空载率
                            </td>
                            <td>
                               <span id="unloadPercent">-</span>%
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <br>
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <td>
                                设备总产气量
                            </td>
                            <td>
                                <span id="totalGas">-</span>m³
                            </td>
                            <td>
                                设备加载次数
                            </td>
                            <td>
                                <span id="loadCnt">-</span>次
                            </td>
                            <td>
                                设备卸载次数
                            </td>
                            <td>
                               <span id="unloadCnt">-</span>次
                            </td>
                        </tr>
                        <tr>
                            <td>
                                设备总耗电
                            </td>
                            <td>
                                <span id="totalPower">-</span>度（kWh）
                            </td>
                            <td>
                                设备满载耗电
                            </td>
                            <td>
                                <span id="loadPower">-</span>度（kWh）
                            </td>
                            <td>
                                设备空载耗电
                            </td>
                            <td>
                               <span id="unloadPower">-</span>度（kWh）
                            </td>
                        </tr>
                        <tr>
                            <td>
                                电费总额
                            </td>
                            <td>
                                <span id="totalPrice">-</span>元
                            </td>
                            <td>
                                设备满载耗电占比
                            </td>
                            <td>
                                <span id="loadPowerPercent">-</span>%
                            </td>
                            <td>
                                设备空载耗电占比
                            </td>
                            <td>
                               <span id="unloadPowerPercent">-</span>%
                            </td>
                        </tr>
                        <tr>
                            <td>
                                每立方米气体成本
                            </td>
                            <td>
                                <span id="gasPrice">-</span>元/m³
                            </td>
                            <td>
                                设备满载电费
                            </td>
                            <td>
                                <span id="loadPrice">-</span>元
                            </td>
                            <td>
                                设备空载电费
                            </td>
                            <td>
                                <span id="unloadPrice">-</span>元
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <br>
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <td>
                                排气压力最大值
                            </td>
                            <td>
                                <span id="pressMax">-</span>bar
                            </td>
                            <td>
                                排气压力最小值
                            </td>
                            <td>
                                <span id="pressMin">-</span>bar
                            </td>
                            <td>
                                排气压力平均值
                            </td>
                            <td>
                               <span id="pressAve">-</span>bar
                            </td>
                        </tr>
                        <tr>
                            <td>
                                电流最大值
                            </td>
                            <td>
                                <span id="currentMax">-</span>A
                            </td>
                            <td>
                                电流最小值
                            </td>
                            <td>
                                <span id="currentMin">-</span>A
                            </td>
                            <td>
                                电流平均值
                            </td>
                            <td>
                               <span id="currentAve">-</span>A
                            </td>
                        </tr>
                        <tr>
                            <td>
                                温度最大值
                            </td>
                            <td>
                               <span id="tempMax">-</span>℃
                            </td>
                            <td>
                                温度最小值
                            </td>
                            <td>
                                <span id="tempMin">-</span>℃
                            </td>
                            <td>
                                温度平均值
                            </td>
                            <td>
                               <span id="tempAve">-</span>℃
                            </td>
                        </tr>
                        <tr>
                            <td>
                                功率最大值
                            </td>
                            <td>
                               <span id="powerMax">-</span>kW
                            </td>
                            <td>
                                功率最小值
                            </td>
                            <td>
                                <span id="powerMin">-</span>kW
                            </td>
                            <td>
                                功率平均值
                            </td>
                            <td>
                               <span id="powerAve">-</span>kW
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <button type="submit" id="exportPdf" value=<?php echo "http://www.robosnet.com/index.php/".$admin_dir.'/admin/index/'.$bgdc_encrypt?> disabled="true" class="btn btn-primary text-center">导出分析报告</button>
            </div>
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
    
    <script src="<?php $tmp=base_url(); echo $tmp.'javascript/datepicker/WdatePicker.js'?>"></script> 
	<script src="<?php $tmp=base_url(); echo $tmp.'javascript/'.$admin_dir.'/morefunc.js'?>"></script>
