<div id="wrapper">

        <!-- Navigation -->
        <?php include 'menu_top.php' ?>
        
        <!-- /.navbar-static-side -->
        <?php $current_file = basename(__FILE__); require 'menu_left.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <h1 style="height:74px" class="page-header">实时监控<img style="float:right;height:74px" src="<?php $tmp=base_url(); echo $tmp.'img/'.$this->session->userdata('path').'/logo.png'?>"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="eqp_select">
                    <button type="button" class="btn btn-primary" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
                        <div>设备选择</div>
                        <div style="height:69px"><i class="fa fa-truck fa-5x"></i></div>
                        <div><?php if(isset($device_id)){echo "当前设备编号：<span id='device_id'>".$device_id."</span>";}else{echo "<span id='device_id'> - </span>";}?></div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="meter_select">
                    <button type="button" class="btn btn-primary" <?php if(!isset($device_id)){echo "disabled='true'";}?> style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
                        <div>仪表选择</div>
                        <div style="height:89px"><i class="fa fa-dashboard fa-5x"></i></div>
                    </button>
                </div>
                <div class="col-lg-1 col-md-3 col-sm-6 col-xs-6" id="load">
                    <button type="button" class="btn btn-yellow" disabled="true" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
                        <div>远程控制</div>
                        <div style="height:69px"><i class="fa  fa-toggle-on fa-5x"></i></div>
                        <div>加载</div>
                    </button>
                </div>
                <div class="col-lg-1 col-md-3 col-sm-6 col-xs-6" id="unload">
                    <button type="button" class="btn btn-yellow" disabled="true" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
                        <div>远程控制</div>
                        <div style="height:69px"><i class="fa  fa-toggle-off fa-5x"></i></div>
                        <div>卸载</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="start">
                    <button type="button" class="btn btn-green" disabled="true" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
                        <div>远程控制</div>
                        <div style="height:69px"><i class="fa fa-play fa-5x"></i></div>
                        <div>开机</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="shutdown">
                    <button type="button" class="btn btn-danger" disabled="true" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
                        <div>远程控制</div>
                        <div style="height:69px"><i class="fa fa-power-off fa-5x"></i></div>
                        <div>关机</div>
                    </button>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6" id="otherControl">
                    <button type="button" class="btn btn-primary" style="padding:2px 12px;margin-bottom:10px;width:100%;box-shadow: 0 0px 3px #999;">
                        <div>远程控制</div>
                        <div style="height:69px"><i class="fa fa-cog fa-5x"></i></div>
                        <div>其他操作</div>
                    </button>
                </div>
                
            </div>
            
            <div class="row">
                
                <?php if(isset($deviceSet)):?>
                <?php $i=0;foreach($deviceSet as $meter):$i++;?>
                <?php if (2 == $meter['set_form']):?>
                <?php if (0 == $meter['is_display']):?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" id="<?php echo $meter['item_name']?>_status" style="display:none">
                <?php else:?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" id="<?php echo $meter['item_name']?>_status">
                <?php endif?>
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="height:27px">
                            
                            <div class="pull-left">
                                <div class="btn-group">
                                <button type="button" class="btn btn-info btn-xs status-close" id="<?php echo $meter['item_name']?>_status_close">
                                    <i class="fa fa-close"></i>
                                </button>
                                <button type="button" class="btn btn-info btn-xs status-close" id="<?php echo $meter['item_name']?>_status_set">
                                    <i class="fa fa-cog"></i>
                                </button>
                                </div>
                            </div>
                            <div style="margin-left:50px">
                                <div><?php echo $meter['set_name']." : "?><span id="<?php echo $meter['item_name']."_status_value"?>"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif?>
                <?php endforeach?>
                <?php endif?>
                
            </div>
            
            <div class="row">
                <?php if(isset($deviceSet)):?>                
                <?php $i=0;foreach($deviceSet as $meter):$i++;?>
                <?php if (1 == $meter['set_form']):?>
                <?php if (0 == $meter['is_display']):?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="<?php echo $meter['item_name']?>_meter" style="display:none">
                <?php else:?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" id="<?php echo $meter['item_name']?>_meter">
                <?php endif?>
                    <?php if(1 >= $i%6):?>
                        <div class="panel panel-yellow">
                    <?php elseif(3 >= $i%6):?>
                        <div class="panel panel-primary">
                    <?php else:?>
                        <div class="panel panel-green">
                    <?php endif?>
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right" style="height:110px">
                                        <div class="pull-left">
                                            <div class="btn-group">
                                                <?php if(1 >= $i%6):?>
                                                    <button type="button" class="btn btn-warning btn-xs meter-close" id="<?php echo $meter['item_name']?>_meter_close">
                                                <?php elseif(3 >= $i%6):?>
                                                    <button type="button" class="btn btn-info btn-xs meter-close" id="<?php echo $meter['item_name']?>_meter_close">
                                                <?php else:?>
                                                    <button type="button" class="btn btn-green btn-xs meter-close" id="<?php echo $meter['item_name']?>_meter_close">
                                                <?php endif?>
                                                    <i class="fa fa-close"></i>
                                                </button>
                                                <?php if(1 >= $i%6):?>
                                                    <button type="button" class="btn btn-warning btn-xs flot-close" id="<?php echo $meter['item_name']?>_flot_close">
                                                <?php elseif(3 >= $i%6):?>
                                                    <button type="button" class="btn btn-info btn-xs flot-close" id="<?php echo $meter['item_name']?>_flot_close">
                                                <?php else:?>
                                                    <button type="button" class="btn btn-green btn-xs flot-close" id="<?php echo $meter['item_name']?>_flot_close">
                                                <?php endif?>
                                                    <i class="fa fa-chevron-left"></i>
                                                </button>
                                                <?php if(1 >= $i%6):?>
                                                    <button type="button" class="btn btn-warning btn-xs">
                                                <?php elseif(3 >= $i%6):?>
                                                    <button type="button" class="btn btn-info btn-xs">
                                                <?php else:?>
                                                    <button type="button" class="btn btn-green btn-xs">
                                                <?php endif?>
                                                    <i class="fa fa-cog"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div><?php echo $meter['set_name']?></div>
                                        <div><span class="huge" id="<?php echo $meter['item_name']?>"> - </span><?php echo $meter['set_unit']?></div>
                                        <div>采集时间</div>
                                        <div class="update_time"> - </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div id="<?php echo $meter['item_name']?>_flot" style="height:90px;margin-bottom:10px" ></div>
                                        <div class="progress progress-striped active" style="margin-bottom:0">
                                           <div id="<?php echo $meter['item_name']?>_img" class="progress-bar " role="progressbar" 
                                              aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif?>
                <?php endforeach?>
                <?php endif?>
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
                    <?php if(isset($allOnlineDevice)):?>
                    <ul class="chat">                            
                    <?php $flag=0; foreach($allOnlineDevice as $onlineDevice): ?>
                        <?php if (1 == $flag):?>
                            <li class="left clearfix">
                        <a href="<?php $tmp=base_url();echo $tmp."index.php/".$admin_dir."/admin/index/".$onlineDevice['href']?>">
                                    <button type="submit" class="btn btn-warning text-center pull-left" 
                            style="width:60px;height:60px;border-radius:30px;padding:0;margin:10px;border-color:#fff;"><?php echo $onlineDevice['num']?></button>
                                </a>
                                <div class="chat-body clearfix" style="background-color:#5cc;padding:5px 20px">
                                    <div class="header">
                                        <strong class="primary-font">空压机</strong> 
                                        <small class="pull-right text-muted">
                                            添加时间：<i class="fa fa-clock-o fa-fw"></i> 2011-12-30
                                        </small>
                                    </div>
                                    <p>控制器型号：<?php echo $onlineDevice['cv_controller']?></p>
                                </div>
                            </li>
                        <?php $flag=1;?>
                        <?php else:?>
                            <li class="right clearfix">
                        <a href="<?php $tmp=base_url();echo $tmp."index.php/".$admin_dir."/admin/index/".$onlineDevice['href']?>">
                                    <button type="submit" class="btn btn-info text-center pull-right" 
                            style="width:60px;height:60px;border-radius:30px;padding:0;margin:0px;border-color:#fff;"><?php echo $onlineDevice['device_id']?></button>
                                </a>
                                <div class="chat-body clearfix" style="background-color:#5cc;padding:5px 20px">
                                    <div class="header">
                                        <strong class="primary-font">螺杆机</strong> 
                                        <small class="pull-right text-muted">
                                            添加时间：<i class="fa fa-clock-o fa-fw"></i> 2012-01-12
                                        </small>
                                    </div>
                                    <p>控制器型号：<?php echo $onlineDevice['device_id']?></p>
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
    
    <div class="modal fade" id="control_modal" tabindex="-1" role="dialog" 
       aria-labelledby="otherContorl" aria-hidden="true">
        <div class="modal-dialog" style="width:550px">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" 
                   data-dismiss="modal" aria-hidden="true">
                      &times;
                    </button>
                    <h4 class="modal-title" id="otherContorl">
                        其他操作
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-6">
                            <p>请选择具体操作</p>
                            <div class="btn-group">
                                <select id="otherControl_select" style="width:200px;margin-top:5px">
                                    <option value=""></option>
                                    <?php if(isset($allContorl) && count($allContorl)>0):?>
                                    <?php foreach($allContorl as $control):?>
                                    <option value="<?php echo $control['item_param'] ?>"><?php echo $control['item_name'] ?></option>
                                    <?php endforeach?>
                                    <?php else:?>
                                    <option value="无任何远程操作">无任何远程操作</option>
                                    <?php endif?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <p>请输入参数</p>
                            <input type="text" class="form-control" id="otherControlParam" placeholder="参数" value="">
                        </div>
                    </div><!-- /.modal-content -->
                    <br/>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="otherContorl_confirm">确定</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">取消</button>
                    </div>
                </div><!-- /.modal -->
            </div><!-- /.modal -->
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
    
    <div class="modal fade" id="meter_modal" tabindex="-1" role="dialog" 
       aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width:550px">
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
                    <?php for($i=0;$i<count($deviceSet);$i++):?>
                        <?php if($i%3 == 0):?>
                        <div class="row text-center">
                        <?php endif?>
                            <button type="submit" class="btn btn-success btn-sm meter active" style="width:150px"><?php echo $deviceSet[$i]['set_name']?>（√）</button>
                            <button style="display:none"><?php echo $deviceSet[$i]['item_name']?></button>
                        <?php if($i%3 == 2):?>
                        </div>
                        <br>
                        <?php endif?>
                    <?php endfor?>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">确定</button>
                        <button type="button" class="btn btn-primary" id="meter_modal_confirm">保存设置</button>
                        <!--button type="button" class="btn btn-primary" id="meter_modal_restore">恢复默认设置</button-->
                    </div>
                
                <script type="text/javascript">
                    var admin_dir = "<?php echo $admin_dir?>";
                    var meterlist = {
                        "device_id":new Array(<?php echo $device_id?>,<?php echo $user_id?>,<?php echo $device_type?>,0,0,0,0)
                        <?php foreach($deviceSet as $meter):?>
                            ,<?php echo "\"".$meter['item_name']."\""?>:new Array(<?php echo "\"".$meter['item_name']."\",\"".$meter['set_name']."\",\"".$meter['set_unit']."\",\"".$meter['set_max']."\",\"".$meter['set_min']."\",\"".$meter['set_form']."\",\"".$meter['is_display']."\""?>)
                        <?php endforeach?>
                    };
                </script>
                </div><!-- /.modal-content -->
            </div><!-- /.modal -->
        </div>
    </div>
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

    <script language="javascript" type="text/javascript" src="<?php $tmp=base_url(); echo $tmp.'javascript/'.$admin_dir.'/realtimeinfo.js'?>"></script>
    
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
