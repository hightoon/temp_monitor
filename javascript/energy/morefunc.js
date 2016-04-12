//var base_url="http://10.13.71.176/";
var base_url="http://www.robosnet.com/";

var admin_dir;
var device_id;

var compute_step =0;
var computing  =0;
var score = 0;
var energy_summary;
var energy_info;
var energy_msg;

function updateStatus(){
    
    switch(compute_step){
        case 0:
            $("#exportPdf").attr("disabled",true);
            $("#energy_alalysis_img").css({width:"20%"});
            $("#compute_energy_status").html("采集数据");
            compute_step++;
            setTimeout(updateStatus,500);
            return;
        case 1:
            $("#energy_alalysis_img").css({width:"28%"});
            $("#compute_energy_status").html("数据预处理");
            compute_step++;
            setTimeout(updateStatus,1000);
            return;
        case 2:
            $("#energy_alalysis_img").css({width:"35%"});
            $("#compute_energy_status").html("数据统计");
            compute_step++;
            setTimeout(updateStatus,1000);
            return;
        case 3:
            $("#energy_alalysis_img").css({width:"50%"});
            $("#compute_energy_status").html("数据分析");
            compute_step++;
            setTimeout(updateStatus,1000);
            return;
        case 4:
            $("#energy_alalysis_img").css({width:"60%"});
            $("#compute_energy_status").html("数据分析");
            compute_step++;
            setTimeout(updateStatus,1000);
            return;
        case 5:
            $("#energy_alalysis_img").css({width:"70%"});
            $("#compute_energy_status").html("数据分析");
            compute_step++;
            //setTimeout(updateStatus,1000);
            return;
        case 6:
            $("#energy_alalysis_img").css({width:"90%"});
            $("#compute_energy_status").html("能效计算");
            compute_step++;
            setTimeout(updateStatus,100);
            return;
        case 7:
            $("#energy_alalysis_img").css({width:"100%"});
            $("#compute_energy_status").html("计算完成");
            if(score == 1){
                $("#exportPdf").attr("disabled",false);
                $("#analysisRet").css("display","none");
            }else{
                $("#exportPdf").attr("disabled",true);
                $("#analysisRet").css("display","block");
            }
            computing = 4;
            return;
    }
}
$("#exportPdf").click(function(){
    var a = $("<a href="+$("#exportPdf").val()+" target='_blank'>Apple</a>").get(0);
    
    var e = document.createEvent('MouseEvents');
    e.initEvent( 'click', true, true );
    a.dispatchEvent(e);
});

$("#compute_energy").click(function(){

    if("" == $("#date_start").val() || "" == $("#date_end").val() || "" == document.getElementById('device_id').innerHTML){
        return;
    }
    admin_dir = $("#sysinfo").attr("admin_dir");

    compute_step = 0;
    computing = 0;

    $.ajax({
        timeout:300000,
        type:"POST",
        url:base_url+"index.php/"+admin_dir+"/ajax_historyinfo/energyAnalysis/",
        data: {
			device_id       : document.getElementById('device_id').innerHTML,
            date_start		: $("#date_start").val(),
            date_end		: $("#date_end").val(),
            top_time1		: $("#top_time1").val(),
            top_time2		: $("#top_time2").val(),
            energy_price    : $("#energy_price").val(),
            rated_power		: $("#rated_power").val(),
            rated_out		: $("#rated_out").val()
		},
		success: function(msg){
            
            energy_info = eval(msg); 
            if("" == energy_info || 1 == energy_info[0].ret){
                score = 0;
            }else{
                score = 1;
                //energy_info = eval(msg); 
                energy_msg = msg;
                
                $("#totalTime").html((energy_info[0].time).toFixed(2));
                $("#workTime").html((energy_info[0].totalTime).toFixed(2));
                $("#stopTime").html(((energy_info[0].time) - (energy_info[0].totalTime)).toFixed(2));

                if(undefined == energy_info[0].specificPower){
                    $("#specificPower").html("--");                
                }else{
                    $("#specificPower").html((energy_info[0].specificPower).toFixed(2));
                }
                $("#loadTime").html((energy_info[0].loadTime).toFixed(2));
                $("#unloadTime").html((energy_info[0].unloadTime).toFixed(2));

                if(0 != energy_info[0].totalTime){
                    $("#loadPercent").html((100*(energy_info[0].loadTime/energy_info[0].totalTime)).toFixed(2));
                    $("#unloadPercent").html((100*(energy_info[0].unloadTime/energy_info[0].totalTime)).toFixed(2));
                }else{}
                
                $("#totalGas").html((energy_info[0].totalGas).toFixed(2));
                $("#loadCnt").html((energy_info[0].loadCount).toFixed(2));
                $("#unloadCnt").html((energy_info[0].unloadCount).toFixed(2));
                
                $("#totalPower").html((energy_info[0].totalPower).toFixed(2));
                $("#loadPower").html((energy_info[0].loadPower).toFixed(2));
                $("#unloadPower").html((energy_info[0].unloadPower).toFixed(2));
                
                $("#totalPrice").html((energy_info[0].totalPrice).toFixed(2));
                $("#loadPrice").html((energy_info[0].loadPrice).toFixed(2));
                $("#unloadPrice").html((energy_info[0].unloadPrice).toFixed(2));
                $("#gasPrice").html((energy_info[0].gasPrice).toFixed(2));
                
                if(0 != energy_info[0].totalPower){
                    $("#loadPowerPercent").html((100*(energy_info[0].loadPower/energy_info[0].totalPower)).toFixed(2));
                    $("#unloadPowerPercent").html((100*(energy_info[0].unloadPower/energy_info[0].totalPower)).toFixed(2));
                }else{
                }
                
                $("#pressMax").html((energy_info[0].pressMax).toFixed(2));
                $("#pressMin").html((energy_info[0].pressMin).toFixed(2));
                $("#pressAve").html((energy_info[0].pressAve).toFixed(2));
                
                $("#currentMax").html((energy_info[0].currentMax).toFixed(2));
                $("#currentMin").html((energy_info[0].currentMin).toFixed(2));
                $("#currentAve").html((energy_info[0].currentAve).toFixed(2));
                
                $("#tempMax").html((energy_info[0].tempMax).toFixed(2));
                $("#tempMin").html((energy_info[0].tempMin).toFixed(2));
                $("#tempAve").html((energy_info[0].tempAve).toFixed(2));
                
                $("#powerMax").html((energy_info[0].powerMax).toFixed(2));
                $("#powerMin").html((energy_info[0].powerMin).toFixed(2));
                $("#powerAve").html((energy_info[0].powerAve).toFixed(2));
                
            }
            setTimeout(updateStatus,1000);
		}
    });
    
    setTimeout(updateStatus,100);
});