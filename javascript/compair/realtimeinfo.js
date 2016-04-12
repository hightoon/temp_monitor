var meter_info={
	"24"	:	"GetErrorDisplayValue",
	"25"	:	"GetControlMode",
	"26"	:	"GetDeliveryAirTemp",
	"27"	:	"GetDeliveryPressure",
	"28"	:	"GetInternalPressure",
	"29"	:	"GetDifferentialPressure",
	"30"	:	"GetOilAirSepFilterDp",
	"31"	:	"GetMotorCurrent",
	"32"	:	"GetFanMotorCurrent",
	"33"	:	"GetDaylightSaving",
	"34"	:	"GetTotalHrs",
	"35"	:	"GetRunningHours",
	"36"	:	"GetOnloadHours",
	"37"	:	"GetOffLoadHours",
	"38"	:	"GetStandbyHours",
	"39"	:	"GetServiceHours1",
	"40"	:	"GetServiceHours2",
	"41"	:	"GetServiceHours3",
	"42"	:	"GetServiceHours4",
	"43"	:	"GetServiceHours5",
	"44"	:	"GetWeeklyServiceDifference",
	"45"	:	"GetAnnualServiceDifference",
	"46"	:	"GetBiAnnualServiceDifference",
	"47"	:	"GetMotorStartsLastHour",
	"48"	:	"GetMotorStartsLast24h",
	"49"	:	"GetLoadFreq",
	"50"	:	"GetLoadTimeLastHour",
	"51"	:	"GetLoadTimeLast24h",
	"52"	:	"GetLoadPercLastHour",
	"53"	:	"GetLoadPercLast24h",
	"54"	:	"GetVsdAvgRpm",
	"55"	:	"GetAllowForceLoad",
	"56"	:	"GetLoadPressure",
	"57"	:	"GetUnloadPressure",
	"58"	:	"GetRunningPeriod",
	"59"	:	"GetUnloadPeriod",
	"60"	:	"GetCoolingDp",
	"61"	:	"GetSelectedStartEnable",
	"62"	:	"GetSelectedLoadEnable",
	"63"	:	"GetLanguageSetting",
	"64"	:	"GetTimeFormat",
	"65"	:	"GetPressureUnits",
	"66"	:	"GetDateFormat",
	"67"	:	"GetTemperatureUnits",
	"68"	:	"GetStarDeltaTime",
	"69"	:	"GetLoadDelayTime",
	"70"	:	"GetReloadDelayTime",
	"71"	:	"GetStandbyRunOnTime",
	"72"	:	"GetStopRunOnTime",
	"73"	:	"GetBlowdownTime",
	"74"	:	"GetAutoRestartDelayTime",
	"75"	:	"GetDrainOpenTime",
	"76"	:	"GetDrainIntervalTime",
	"77"	:	"GetStartsPerHour",
	"78"	:	"GetDiffPressureFltDelay",
	"79"	:	"GetStatusDisplayValue",
	"80"	:	"GetServiceHours6",
	"81"	:	"GetServiceHours7",
	"82"	:	"GetServiceHours8"
};
//var base_url="http://10.13.71.176/";
var base_url="http://www.robosnet.com/";
var line_plot = [];
var updateInterval = 1;
var data_flot=[];
var data_ajax={};
var data_raw=new Array(100);
var otherControl="";
for(i=0;i<data_raw.length;i++){
	data_raw[i] = new Array();
	for(j=0;j<30;j++){
		data_raw[i][j]=0;
	}
}
data_raw["update_time"] = new Array();

var time_temp0=null,time_temp1=null;

$("#otherControl").click(function(){
	
	device_id = document.getElementById('device_id').innerHTML;
	if(device_id == " - "){
		//alert(1);
		return;
	}
	
	$("#control_modal").modal('show');
})

$("#otherControl_select").on("select2-selecting",function(e){
    otherControl = e.choice.id;
})

$("#otherContorl_confirm").click(function(e){
    param = $("#otherControlParam").val();
    if("" == param || "" == otherControl){
        //$("#control_modal").modal('hide');
        $("#myModal_type").attr({style:"color:#fff;background:#c32"});
        $("#myModal_Label").html("错误");
        $("#myModal_content").attr({style:"color:#c32;text-align:center"});
        $("#myModal_content").html("请选择操作项目并输入参数");
        $('#myModal').modal('show');
        return;
    }
	
	$.ajax({
		type: "POST",
		url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/ioctl/",
		data: {
			0		: document.getElementById('device_id').innerHTML,
            1       : otherControl,
            2       : param
		},
		success: function(msg){
			$("#myModal_type").attr({style:"color:#fff;background:#3c2"});
			$("#myModal_Label").html("成功");
			$("#myModal_content").attr({style:"color:#3c2;text-align:center"});
			$("#myModal_content").html("命令发送成功");
			$("#myModal").modal('show');
            $("#control_modal").modal('hide');
		}
	});
    
})

$("#shutdown").click(function(){
	
	device_id = document.getElementById('device_id').innerHTML;
	if(device_id == " - "){
		//alert(1);
		return;
	}
	
	$.ajax({
		type: "POST",
		url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/shutdown/",
		dataType    : 'json',
		data: {
			device_id		: document.getElementById('device_id').innerHTML
		},
		success: function(msg){
			$("#myModal_type").attr({style:"color:#fff;background:#3c2"});
			$("#myModal_Label").html("成功");
			$("#myModal_content").attr({style:"color:#3c2;text-align:center"});
			$("#myModal_content").html("远程关机成功");
			$("#myModal").modal('show');
		}
	});
})

$("#start").click(function(){
	
	device_id = document.getElementById('device_id').innerHTML;
	if(device_id == " - "){
		//alert(1);
		return;
	}
	
	$.ajax({
		type: "POST",
		url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/start/",
		dataType    : 'json',
		data: {
			device_id		: document.getElementById('device_id').innerHTML
		},
		success: function(msg){
			$("#myModal_type").attr({style:"color:#fff;background:#3c2"});
			$("#myModal_Label").html("成功");
			$("#myModal_content").attr({style:"color:#3c2;text-align:center"});
			$("#myModal_content").html("远程开机成功");
			$("#myModal").modal('show');
		}
	});
})

$("#load").click(function(){
	
	device_id = document.getElementById('device_id').innerHTML;
	if(device_id == " - "){
		//alert(1);
		return;
	}
	
	$.ajax({
		type: "POST",
		url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/load/",
		dataType    : 'json',
		data: {
			device_id		: document.getElementById('device_id').innerHTML
		},
		success: function(msg){
			$("#myModal_type").attr({style:"color:#fff;background:#3c2"});
			$("#myModal_Label").html("成功");
			$("#myModal_content").attr({style:"color:#3c2;text-align:center"});
			$("#myModal_content").html("远程加载成功");
			$("#myModal").modal('show');
		}
	});
})

$("#unload").click(function(){
	
	device_id = document.getElementById('device_id').innerHTML;
	if(device_id == " - "){
		//alert(1);
		return;
	}
	
	$.ajax({
		type: "POST",
		url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/unload/",
		dataType    : 'json',
		data: {
			device_id		: document.getElementById('device_id').innerHTML
		},
		success: function(msg){
			$("#myModal_type").attr({style:"color:#fff;background:#3c2"});
			$("#myModal_Label").html("成功");
			$("#myModal_content").attr({style:"color:#3c2;text-align:center"});
			$("#myModal_content").html("远程卸载成功");
			$("#myModal").modal('show');
		}
	});
})

$(document).ready(function(){
    
    $("#otherControl_select").select2();

	/*for (var key in meterlist){
		if($("#"+key).is(":hidden")){
			meterlist[key] = 0;
		}else{
			meterlist[key] = 1;
		}
	}*/
	
	$("#eqp_select").click(function(){
		$("#onlineeqp_modal").modal('show');
	})

	$("#meter_select").click(function(){
        if(" - " == $("#device_id").html()){
            return;
        }
		var i = 0,j = 0;
		for(var key in meterlist){
			if(0 == j){
				j = 1;
				continue;
			}
			if(meterlist[key][6] == 0){
				$(".meter")[i].innerHTML = meterlist[key][1]+"（×）";
				$(".meter")[i].className = "btn btn-danger btn-sm meter";
			}else{
				$(".meter")[i].innerHTML = meterlist[key][1]+"（√）";
				$(".meter")[i].className = "btn btn-success btn-sm meter active";
			}
			i++;
		}
		
		$("#meter_modal").modal('show');
	})

	$(".meter").click(function(e){
		str = e.target.innerHTML;
		item_name = this.nextElementSibling.textContent;
		name = str.replace(/（.\）/g,"");
		meterid = "";
		if(e.target.className == "btn btn-danger btn-sm meter"){
			e.target.className = "btn btn-success btn-sm meter active";
			str = str.replace(/×/g,"√");
			e.target.innerHTML = str;
			meterlist[item_name][6] = 1;
            if(undefined != $("#"+item_name+"_meter").html()){
                $("#"+item_name+"_meter").fadeIn(1000);
            }else if(undefined != $("#"+item_name+"_status").html()){
                $("#"+item_name+"_status").fadeIn(1000);
            }
		}else{
			e.target.className = "btn btn-danger btn-sm meter";
			str = str.replace(/√/g,"×");
			e.target.innerHTML = str;
			meterlist[item_name][6] = 0;
            if(undefined != $("#"+item_name+"_meter").html()){
                $("#"+item_name+"_meter").fadeOut(1000);
            }else if(undefined != $("#"+item_name+"_status").html()){
                $("#"+item_name+"_status").fadeOut(1000);
            }
		}
	})
	
	$(".status-close").click(function(e){
		name = e.currentTarget.id;
		name = name.replace(/_status_close/g,"");
		meterlist[name][6] = 0;
		meterid = "#"+name+"_status";
		$(meterid).fadeOut(300);
		return;
	})
	
	$(".meter-close").click(function(e){
		name = e.currentTarget.id;
		name = name.replace(/_meter_close/g,"");
		meterlist[name][6] = 0;
		meterid = "#"+name+"_meter";
		$(meterid).fadeOut(300);
		return;
	})
	
	$(".flot-close").click(function(e){
		name = e.currentTarget.id;
		name = name.replace(/_flot_close/g,"");
		if($("#"+name+"_flot").parent().is(":hidden")){
			$("#"+name+"_flot").parent().show();
			e.currentTarget.parentNode.parentNode.parentNode.className="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right";
			$("#"+name+"_meter").attr("class","col-lg-4 col-md-6 col-sm-12 col-xs-12");
			e.currentTarget.innerHTML="<i class='fa fa-chevron-left'></i>";
		}else{
			$("#"+name+"_flot").parent().hide();
			e.currentTarget.parentNode.parentNode.parentNode.className="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right";
			$("#"+name+"_meter").attr("class","col-lg-2 col-md-3 col-sm-6 col-xs-6");
			e.currentTarget.innerHTML="<i class='fa fa-chevron-right'></i>";
		}
	})
	
	$("#meter_modal_confirm").click(function(){
		$.ajax({
			type		: "POST",
			url			: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/setmeter/",
			data		: meterlist,
			success: function(msg){
				$("#meter_modal").modal('hide');
			}
		});
	})
	
	function getRealtimeData(realtime) {
		
		var data0,data1,key,value,new_info = true;
		
		if(realtime){
		
			$.ajax({
				type: "POST",
				url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/readinfo/",
				data: "sid="+Math.random()+"&device_id="+document.getElementById('device_id').innerHTML,
				success: function(msg){
                    //alert(msg);
					//var y;
					data0 = msg.split(';');
					for(var i=0;i<data0.length && data0[i]!="";i++){
						data1 = data0[i].split(':');
                        key = data1[0];
                        var value=data1[1];
                        for(var j=2;j<data1.length;j++){
                            value += ":"+data1[j];
                        }
						data_ajax[key] = value;
					}
				}
			});
			
			time_temp0 = data_ajax['update_time'];
			
			if (null == time_temp1){
				time_temp1 = data_ajax['update_time'];
			}else{
				if(time_temp1 == time_temp0){
					new_info = false;
				}else{
					new_info = true;
				}
				time_temp1 = time_temp0;
			}
			
			//new_info = true;//demo
			var data_tmp=new Array(100);
			for(i=0;i<data_tmp.length-1;i++){
				data_tmp[i] = new Array();
			}
			
			if(true == new_info){
				for(var item in data_ajax){
					if (data_raw[item].length > 0){
						data_raw[item].shift();
					}
					data_raw[item].push(data_ajax[item]);
				}
			}
			
			for(var item in data_ajax){
				if (item == "update_time"){
					continue;
				}
				for(i=0; i< data_raw[item].length;i++){
					data_tmp[item].push([i,data_raw[item][i]]);
				}
			}
		}
		return data_tmp;
	}

	var options_chart = {
		series: {
			shadowSize: 0,	// Drawing is faster without shadows
			lines: {
				fill: 0.3
			},
			color: "#FFF"
		},
		yaxis: {
			min: 0,
			max: 1000,
			show:false
		},
		xaxis: {
			show: false
		},
		grid: {               
			backgroundColor: "#666",
			//tickColor: "#e4f4f4"             
			show:false
		},
		legend: {
			show:false
		}
	}

	function update() {	
		data_flot = getRealtimeData(true);
		var meters="";
		for (var item in meter_info){
        
            if(undefined != $("#"+meter_info[item]+"_status_value").html()){
                len=data_raw[item].length;
                $("#"+meter_info[item]+"_status_value").html(data_raw[item][len-1]);
            }
			
			if(undefined == line_plot[meter_info[item]]){
				continue;
			}
			var len=data_raw[item].length;
		
			var pie_data=[];
			pie_data[1] = 100*(data_flot[item][len-1][1]/(meterlist[meter_info[item]][3] - meterlist[meter_info[item]][4]));
			pie_data[1] = pie_data[1].toFixed(1);
			pie_data[0] = 100 - pie_data[1];
			
			line_plot[meter_info[item]].setData([data_flot[item]]);
			line_plot[meter_info[item]].draw();
			if (data_flot[item][len-1][1] == undefined){
				$("#"+meter_info[item]).html(" - ");
				$("#"+meter_info[item]+"_img").css({width:"50%"});
			}else{
				$("#"+meter_info[item]).html(data_flot[item][len-1][1]);
				$("#"+meter_info[item]+"_img").css({width:pie_data[1]+"%"});
			}
			
			$("div.update_time").each(function(){
				
				if(time_temp0 == ""){
					this.innerHTML = "-";
				}else{
					this.innerHTML = time_temp0;
				}
			})
		}
	}

	function cycle(){
		if(document.getElementById('device_id').innerHTML != " - "){
			update();
			for(meter in meter_info){
				if(meterlist[meter_info[meter]] != undefined){
					if(meterlist[meter_info[meter]][6] == 1 && meterlist[meter_info[meter]][5] == 1 ){
						options_chart['yaxis']['min'] = meterlist[meter_info[meter]][4];
						options_chart['yaxis']['max'] = meterlist[meter_info[meter]][3];
						line_plot[meter_info[meter]] = $.plot("#"+meter_info[meter]+"_flot", [data_flot[meter]], options_chart);
					}
				}
			}
			setTimeout(cycle, updateInterval*1000);
			updateInterval = 5;
		}
	}
	
	cycle();	
})
