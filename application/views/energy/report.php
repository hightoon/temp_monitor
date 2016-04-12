<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<!--title>Mechine Compound</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/bootstrap.min.css'?>" rel="stylesheet"-->
	<script src='<?php $tmp=base_url(); echo $tmp.'bootstrap/javascript/jquery-1.11.1.min.js'?>'></script>
	<!--script src='<?php $tmp=base_url(); echo $tmp.'bootstrap/js/bootstrap.min.js'?>'></script-->
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>能效分析报告</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/plugins/metisMenu/metisMenu.min.css'?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/plugins/timeline.css'?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/sb-admin-2.css'?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/plugins/morris.css'?>" rel="stylesheet">

	<!-- Slider CSS -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/css/slider.css'?>" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/font-awesome-4.2.0/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    <link href="<?php $tmp=base_url(); echo $tmp.'bootstrap/select2-3.5.1/select2.css'?>" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
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

@media print{
    h3{
        background-color: #DDD !important;
        -webkit-print-color-adjust: exact; 
    }
}
</style>
<body style="padding-top: 10px">
<div style="width:98%;margin: auto">
    <div>
        <div>
            <img style="float:left;height:74px"  src="<?php $tmp=base_url(); echo $tmp.'img/'.$this->session->userdata('path').'/logo.png'?>"/>
        </div>
        <div style="float: right;">
            <button id='print' class="btn btn-success" style="margin: 15%">导出PDF</button>
        </div>
        <div style="clear:both;"></div>
    </div>
    <div style="margin: auto;">

        <div style="line-height: 20px">&nbsp;</div>
        <div style="text-align: center;font-size:40px ">设备能效分析报告
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div>
        <div id="device_id" admin_dir="<?php echo $admin_dir;?>" style="display:none"><?php echo $device_id;?></div>
        <div><span style="font-weight:bold">客户名称：</span><span></span></div>
        <div class="heading"><span style="font-weight:bold">设备类型</span><span></span></div>
        <div class="heading"><span style="font-weight:bold">设备编号：</span><span></span></div>
        <div class="heading"><span style="font-weight:bold">检测日期：</span><span id="dateStart"><?php echo $Analysisdata[0]['Startdate']?></span>—<span id="dateEnd"><?php echo $Analysisdata[0]['Enddate']?></span></div>
        <div class="heading"><span style="font-weight:bold">打印日期：</span><span>2015-10-29</span></div>
    </div>
        <h3 style="background-color:#DDD;border-bottom:2px solid #888;padding:3px;margin-top:80px">设备参数</h3>
        <table class="table table-condensed">
            <tbody>
                <tr>
                    <td style="font-weight:bold">
                        电价
                    </td>
                    <td>
                        <span><?php echo $Analysisdata[0]['Energyprice']?></span>元/度
                    </td>
                    <td style="font-weight:bold">
                        额定功率
                    </td>
                    <td>
                        <span><?php echo $Analysisdata[0]['Ratedpower']?></span>Kw
                    </td>
                    <td style="font-weight:bold">
                        额定排气量
                    </td>
                    <td>
                       <span><?php echo $Analysisdata[0]['Ratedout']?></span>m³/min
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <h3 style="background-color:#DDD;border-bottom:2px solid #888;padding:3px">分析结果</h3>
        <table class="table table-condensed">
            <tbody>
                <tr>
                    <td style="font-weight:bold">
                        检测时间长度
                    </td>
                    <td>
                        <span><?php echo $Analysisdata[0]['Totaltime']?></span>小时
                    </td>
                    <td style="font-weight:bold">
                        设备工作时间
                    </td>
                    <td>
                        <span><?php echo $Analysisdata[0]['Worktime']?></span>小时
                    </td>
                    <td style="font-weight:bold">
                        设备停机时间
                    </td>
                    <td>
                       <span><?php echo $Analysisdata[0]['Stoptime']?></span>小时
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold">
                        设备平均比功率
                    </td>
                    <td>
                        <span id="specificPower"><?php echo $Analysisdata[0]['Specificpower']?></span>kW/(m³/min)
                    </td>
                    <td style="font-weight:bold">
                        设备满载时间
                    </td>
                    <td>
                        <span id="loadTime"><?php echo $Analysisdata[0]['Loadtime']?></span>小时
                    </td>
                    <td style="font-weight:bold">
                        设备空载时间
                    </td>
                    <td>
                       <span id="unloadTime"><?php echo $Analysisdata[0]['Unloadtime']?></span>小时
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td style="font-weight:bold">
                        设备满载率
                    </td>
                    <td>
                        <span id="loadPercent"><?php echo $Analysisdata[0]['Loadpercent']?></span>%
                    </td>
                    <td style="font-weight:bold">
                        设备空载率
                    </td>
                    <td>
                       <span id="unloadPercent"><?php echo $Analysisdata[0]['Unloadpercent']?></span>%
                    </td>
                </tr>
            </tbody>
        </table>
        
        <br>
        <table class="table table-condensed">
            <tbody>
                <tr>
                    <td style="font-weight:bold">
                        设备总产气量
                    </td>
                    <td>
                        <span id="totalGas"><?php echo $Analysisdata[0]['Totalgas']?></span>m³
                    </td>
                    <td style="font-weight:bold">
                        设备加载次数
                    </td>
                    <td>
                        <span id="loadCnt"><?php echo $Analysisdata[0]['Loadcnt']?></span>次
                    </td>
                    <td style="font-weight:bold">
                        设备卸载次数
                    </td>
                    <td>
                       <span id="unloadCnt"><?php echo $Analysisdata[0]['Unloadcnt']?></span>次
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold">
                        设备总耗电
                    </td>
                    <td>
                        <span id="totalPower"><?php echo $Analysisdata[0]['Totalpower']?></span>度（kWh）
                    </td>
                    <td style="font-weight:bold">
                        设备满载耗电
                    </td>
                    <td>
                        <span id="loadPower"><?php echo $Analysisdata[0]['Loadpower']?></span>度（kWh）
                    </td>
                    <td style="font-weight:bold">
                        设备空载耗电
                    </td>
                    <td>
                       <span id="unloadPower"><?php echo $Analysisdata[0]['Unloadpower']?></span>度（kWh）
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold">
                        电费总额
                    </td>
                    <td>
                        <span id="totalPrice"><?php echo $Analysisdata[0]['Totalprice']?></span>元
                    </td>
                    <td style="font-weight:bold">
                        设备满载耗电占比
                    </td>
                    <td>
                        <span id="loadPowerPercent"><?php echo $Analysisdata[0]['Loadpowerpercent']?></span>%
                    </td>
                    <td style="font-weight:bold">
                        设备空载耗电占比
                    </td>
                    <td>
                       <span id="unloadPowerPercent"><?php echo $Analysisdata[0]['Unloadpowerpercent']?></span>%
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold">
                        每立方米气体成本
                    </td>
                    <td>
                        <span id="gasPrice"><?php echo $Analysisdata[0]['Gasprice']?></span>元/m³
                    </td>
                    <td style="font-weight:bold">
                        设备满载电费
                    </td>
                    <td>
                        <span id="loadPrice"><?php echo $Analysisdata[0]['Loadprice']?></span>元
                    </td>
                    <td style="font-weight:bold">
                        设备空载电费
                    </td>
                    <td>
                        <span id="unloadPrice"><?php echo $Analysisdata[0]['Unloadprice']?></span>元
                    </td>
                </tr>
            </tbody>
        </table>
        
        <br>
        <table class="table table-condensed">
            <tbody>
                <tr>
                    <td style="font-weight:bold">
                        排气压力最大值
                    </td>
                    <td>
                        <span id="pressMax"><?php echo $Analysisdata[0]['Pressmax']?></span>bar
                    </td>
                    <td style="font-weight:bold">
                        排气压力最小值
                    </td>
                    <td>
                        <span id="pressMin"><?php echo $Analysisdata[0]['Pressmin']?></span>bar
                    </td>
                    <td style="font-weight:bold">
                        排气压力平均值
                    </td>
                    <td>
                       <span id="pressAve"><?php echo $Analysisdata[0]['Pressave']?></span>bar
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold">
                        电流最大值
                    </td>
                    <td>
                        <span id="currentMax"><?php echo $Analysisdata[0]['Currentmax']?></span>A
                    </td>
                    <td style="font-weight:bold">
                        电流最小值
                    </td>
                    <td>
                        <span id="currentMin"><?php echo $Analysisdata[0]['Currentmin']?></span>A
                    </td>
                    <td style="font-weight:bold">
                        电流平均值
                    </td>
                    <td>
                       <span id="currentAve"><?php echo $Analysisdata[0]['Currentave']?></span>A
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold">
                        温度最大值
                    </td>
                    <td>
                       <span id="tempMax"><?php echo $Analysisdata[0]['Tempmax']?></span>℃
                    </td>
                    <td style="font-weight:bold">
                        温度最小值
                    </td>
                    <td>
                        <span id="tempMin"><?php echo $Analysisdata[0]['Tempmin']?></span>℃
                    </td>
                    <td style="font-weight:bold">
                        温度平均值
                    </td>
                    <td>
                       <span id="tempAve"><?php echo $Analysisdata[0]['Tempave']?></span>℃
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold">
                        功率最大值
                    </td>
                    <td>
                       <span id="powerMax"><?php echo $Analysisdata[0]['Powermax']?></span>kW
                    </td>
                    <td style="font-weight:bold">
                        功率最小值
                    </td>
                    <td>
                        <span id="powerMin"><?php echo $Analysisdata[0]['Powermin']?></span>kW
                    </td>
                    <td style="font-weight:bold">
                        功率平均值
                    </td>
                    <td>
                       <span id="powerAve"><?php echo $Analysisdata[0]['Powerave']?></span>kW
                    </td>
                </tr>
            </tbody>
        </table>
        
        <h3 style="background-color:#DDD;border-bottom:2px solid #888;padding:3px">年度预估</h3>
        <table class="table table-condensed">
            <tbody>
                <tr>
                    <td style="font-weight:bold">
                        一年总时间
                    </td>
                    <td>
                        <span id="pressMax">8760小时（365天）</span>
                    </td>
                    <td style="font-weight:bold">
                        一年预计工作时间
                    </td>
                    <td>
                        <span id="pressMin"><?php echo round(8760*$Analysisdata[0]['Worktime'] / $Analysisdata[0]['Totaltime'],2).'小时';?></span>
                    </td>
                    <td style="font-weight:bold">
                        一年预计总耗电
                    </td>
                    <td>
                       <span id="pressAve"><?php echo round(8760*$Analysisdata[0]['Totalpower'] / $Analysisdata[0]['Totaltime'],2).'kWh';?></span>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold">
                        一年预期总产气量
                    </td>
                    <td>
                        <span id="currentMax"><?php echo round(8760*$Analysisdata[0]['Totalgas'] / $Analysisdata[0]['Totaltime'],2).'kWh';?></span>
                    </td>
                    <td style="font-weight:bold">
                        一年预计满载功耗
                    </td>
                    <td>
                        <span id="currentMin"><?php echo round(8760*$Analysisdata[0]['Loadpower'] / $Analysisdata[0]['Totaltime'],2).'kWh';?></span>
                    </td>
                    <td style="font-weight:bold">
                        一年预计空载功耗
                    </td>
                    <td>
                       <span id="currentAve"><?php echo round(8760*$Analysisdata[0]['Unloadpower'] / $Analysisdata[0]['Totaltime'],2).'kWh';?></span>
                    </td>
                </tr>
                <tr>
                    <td style="font-weight:bold">
                        一年预期总电费
                    </td>
                    <td>
                       <span id="tempMax"><?php echo round(8760*$Analysisdata[0]['Totalprice'] / $Analysisdata[0]['Totaltime'],2).'kWh';?></span>
                    </td>
                    <td style="font-weight:bold">
                        一年预计满载电费
                    </td>
                    <td>
                        <span id="tempMin"><?php echo round(8760*$Analysisdata[0]['Loadprice'] / $Analysisdata[0]['Totaltime'],2).'kWh';?></span>
                    </td>
                    <td style="font-weight:bold">
                        一年预计空载电费
                    </td>
                    <td>
                       <span id="tempAve"><?php echo round(8760*$Analysisdata[0]['Unloadprice'] / $Analysisdata[0]['Totaltime'],2).'kWh';?></span>
                    </td>
                </tr>
            </tbody>
        </table>
    <!-- /.row -->
    <h3 style="background-color:#DDD;border-bottom:2px solid #888;padding:3px;margin-top:140px">历史数据</h3>
    <?php if(isset($device_id)):?>
    <?php foreach($deviceSet as $meter):?>
    <?php if (1 == $meter['is_display']):?>
    <div class="row">
        <div class="col-lg-12">
            <?php echo $meter['set_name']?>历史信息
            <!-- /.panel-heading -->
            <div class="panel-body chart-display" id="<?php echo $meter['item_name'] ?>" name="<?php echo $meter['set_name'] ?>" unit="<?php echo $meter['set_unit'] ?>" style="height:285px"></div>
            <!-- /.panel-body -->
        </div>
    </div>
    <?php endif?>
    <?php endforeach?>
    <?php endif?>
    
    <h3 style="background-color:#DDD;border-bottom:2px solid #888;padding:3px">其他</h3>
    <p>本报告结果仅供参考，欲获取更加准确的评估结果，请采集较长时间的数据进行分析。</p>
    
</div>
<div style="width:99%;text-align:right;font-size:15px;margin-top: 100px">
    <span>公司名称：福州固力工业成套设备有限公司</span>
</div>

<script>
    $(function(){

        var data;
        $("#print").click(function(){
            print();
        });
        function print(){
            window.print();
        }
    })
</script>

</body>
<script src="<?php $tmp=base_url(); echo $tmp.'javascript/d3.v3.min.js'?>"></script>
<script src="<?php $tmp=base_url(); echo $tmp.'javascript/'.$admin_dir.'/report.js'?>"></script>

</html>