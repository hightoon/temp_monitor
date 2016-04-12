var meter_info=[{
	"24"	:	 "Supplypress",
	"25"	:	 "Exttemp",
	"26"	:	 "Runningtime",
	"27"	:	 "Loadtime",
	"28"	:	 "MainmotorphaseAcurrent",
	"29"	:	 "Longtimeemptyshutdown",
	"30"	:	 "Supplypresstoohigh",
	"31"	:	 "Fanstatus",
	"32"	:	 "Dryerstatus",
	"33"	:	 "Fancurrentfault",
	"34"	:	 "Oilfilterblock",
	"35"	:	 "Oilsplitterblock",
	"36"	:	 "Airfilterblock",
	"37"	:	 "Mainmotorcurrenterr",
	"38"	:	 "Phaseerr",
	"39"	:	 "Exttemptoohigh",
	"40"	:	 "Runstatus",
	"41"	:	 "Loadstatus",
	"42"	:	 "Airpresssensorerr",
	"43"	:	 "Airtemperr",
	"44"	:	 "Lackofwater",
	"45"	:	 "Heating",
	"46"	:	 "Dryererr",
	"47"	:	 "Exttemptoohighwarning",
	"48"	:	 "Oilfiltertimeout",
	"49"	:	 "Oilsplittertimeout",
	"50"	:	 "Airfiltertimeout",
	"51"	:	 "Lubricatingoiltimeout",
	"52"	:	 "Greasetimeout",
	"53"	:	 "Emergency",
	"54"	:	 "Warning",
	"55"	:	 "Alarm"
},
{
    "24"    :    "PhaseAcurrent",
    "25"    :    "PhaseBcurrent",
    "26"    :    "PhaseCcurrent",
    "27"    :    "Operatingpower",
    "28"    :    "Voltage",
    "29"    :    "Supplypress",
    "30"    :    "Exttemp",
    "31"    :    "Airfilter",
    "32"    :    "Oilfilter",
    "33"    :    "Oilsplitter",
    "34"    :    "Lubricatingoil",
    "35"    :    "Grease",
    "36"    :    "Runningtime",
    "37"    :    "Loadtime",
    "38"    :    "Alarm"
}];
//var base_url="http://www.robosnet.com/cim/";
//var base_url="http://10.13.71.176/";
var base_url="http://www.robosnet.com/";
var line_plot = [];
var updateInterval = 1;
var data_flot=[];
var data_ajax={};
var data_raw=new Array(100);
for(i=0;i<data_raw.length-1;i++){
	data_raw[i] = new Array();
	for(j=0;j<30;j++){
		data_raw[i][j]=0;
	}
}
data_raw["update_time"] = new Array();

var time_temp0=null,time_temp1=null;

$("#shutdown").click(function(){
	
	cv_id = document.getElementById('device_id').innerHTML;
	if(cv_id == " - "){
		//alert(1);
		return;
	}
	
	$.ajax({
		type: "POST",
		url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/shutdown/",
		dataType    : 'json',
		data: {
			cv_id		: document.getElementById('device_id').innerHTML
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
	
	cv_id = document.getElementById('device_id').innerHTML;
	if(cv_id == " - "){
		//alert(1);
		return;
	}
	
	$.ajax({
		type: "POST",
		url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/start/",
		dataType    : 'json',
		data: {
			cv_id		: document.getElementById('device_id').innerHTML
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
	
	cv_id = document.getElementById('device_id').innerHTML;
	if(cv_id == " - "){
		//alert(1);
		return;
	}
	
	$.ajax({
		type: "POST",
		url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/load/",
		dataType    : 'json',
		data: {
			cv_id		: document.getElementById('device_id').innerHTML
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
	
	cv_id = document.getElementById('device_id').innerHTML;
	if(cv_id == " - "){
		//alert(1);
		return;
	}
	
	$.ajax({
		type: "POST",
		url: base_url+"index.php/"+admin_dir+"/ajax_realtimeinfo/unload/",
		dataType    : 'json',
		data: {
			cv_id		: document.getElementById('device_id').innerHTML
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
		for (var item in meter_info[1]){
        
            if(0 == data_flot[item].length){
                continue;
            }
            if(undefined != $("#"+meter_info[1][item]+"_status_value").html()){
                len=data_raw[item].length;
                if($("#"+meter_info[1][item]+"_status_value").attr("class") == "On/Off"){
                    if(data_raw[item][len-1] == 0){
                        $("#"+meter_info[1][item]+"_status_value").html("Off");
                    }else{
                        $("#"+meter_info[1][item]+"_status_value").html("On");
                    }
                }
                else{
                    $("#"+meter_info[1][item]+"_status_value").html(data_raw[item][len-1]);
                }
            } 
			
			if(undefined == line_plot[meter_info[1][item]]){
				continue;
			}
			var len=data_raw[item].length;
		
			var pie_data=[];
			pie_data[1] = 100*(data_flot[item][len-1][1]/(meterlist[meter_info[1][item]][3] - meterlist[meter_info[1][item]][4]));
			pie_data[1] = pie_data[1].toFixed(1);
			pie_data[0] = 100 - pie_data[1];
			
			line_plot[meter_info[1][item]].setData([data_flot[item]]);
			line_plot[meter_info[1][item]].draw();
			if (data_flot[item][len-1][1] == undefined){
				$("#"+meter_info[1][item]).html(" - ");
				$("#"+meter_info[1][item]+"_img").css({width:"50%"});
			}else{
				$("#"+meter_info[1][item]).html(data_flot[item][len-1][1]);
				$("#"+meter_info[1][item]+"_img").css({width:pie_data[1]+"%"});
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
			for(meter in meter_info[1]){
				if(meterlist[meter_info[1][meter]] != undefined){
					if(meterlist[meter_info[1][meter]][6] == 1 && meterlist[meter_info[1][meter]][5] == 1 ){
						options_chart['yaxis']['min'] = meterlist[meter_info[1][meter]][4];
						options_chart['yaxis']['max'] = meterlist[meter_info[1][meter]][3];
						line_plot[meter_info[1][meter]] = $.plot("#"+meter_info[1][meter]+"_flot", [data_flot[meter]], options_chart);
					}
				}
			}
			setTimeout(cycle, updateInterval*1000);
			updateInterval = 5;
		}
	}
	
	cycle();	
})
