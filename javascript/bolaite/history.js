//var base_url="http://10.13.71.176/";
var base_url="http://www.robosnet.com/";
var x   = new Array();
var y   = new Array();
var x2  = new Array();
var y2  = new Array();
var xAxis   = new Array();
var yAxis   = new Array();
var xAxis2  = new Array();
var area    = new Array();
var area2   = new Array();
var focus   = new Array();
var tooltip = new Array();
var context = new Array();
var brush   = new Array();
var item;
var admin_dir;
var device_id;
var chart_display;
var curPageSetList = 0;
var listNum = 0;
var totalPageSetList = 1;

var compute_step =0;
var computing  =0;
var score = 0;
var energy_summary;

var parseDate = d3.time.format("%Y-%m-%d %H:%M:%S").parse,
    bisectDate = d3.bisector(function(d) { return d.date; }).left;

    
var tooltipDate = d3.time.format("%m-%d %H:%M:%S");


$("#more_function").click(function(){
    //alert("energy_analysis");
    $("#analysis_modal").modal('show');
    /*$.ajax({
        type:"POST",
        url:base_url+"index.php/"+admin_dir+"/ajax_historyinfo/energyAnalysis/",
        data: {
			device_id		: document.getElementById('device_id').innerHTML
		},
		success: function(msg){
			alert(msg);
		}
    });*/
});

$("#prevPage").click(function(){
    
    var i = 0;
    curPageSetList--;
    if(curPageSetList<0){
        curPageSetList = 0;
    }
    
    for(;i<listNum; i++){
       $($(".setList")[i]).css("display","none");
    }
    
    for(i=curPageSetList*3;i<curPageSetList*3+3; i++){
       $($(".setList")[i]).css("display","true");
    }
});

$("#nextPage").click(function(){
    
    var i = 0;
    curPageSetList++;
    if(curPageSetList>totalPageSetList){
        curPageSetList = totalPageSetList;
    }
    
    for(;i<listNum; i++){
       $($(".setList")[i]).css("display","none");
    }
    
    for(i=curPageSetList*3;i<curPageSetList*3+3; i++){
       $($(".setList")[i]).css("display","true");
    }
});
function updateStatusDot(){
    
    switch(computing){
        case 0:
            computing++;
            $("#energy_score").html(".");
            setTimeout(updateStatusDot,500);
            return;
        case 1:
            computing++;
            $("#energy_score").html("..");
            setTimeout(updateStatusDot,500);
            return;
        case 2:
            computing = 0;
            $("#energy_score").html("...");
            setTimeout(updateStatusDot,500);
            return;
    }
    
    $("#energy_score").html(score);
    $("#energy_summary").html(energy_summary);
}
function updateStatus(){
    
    switch(compute_step){
        case 0:
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
            computing = 4;
            return;
    }
}

$("#compute_energy").click(function(){

    if("" == $("#date_start").val() || "" == $("#date_end").val() || "" == document.getElementById('device_id').innerHTML){
        return;
    }

    compute_step = 0;
    computing = 0;

    $.ajax({
        timeout:300000,
        type:"POST",
        url:base_url+"index.php/"+admin_dir+"/ajax_historyinfo/energyAnalysis/",
        data: {
			device_id       : document.getElementById('device_id').innerHTML,
            date_start		: $("#date_start").val(),
            date_end		: $("#date_end").val()
		},
		success: function(msg){
            if(-1 == msg || "" == msg){
                score = "无";
                energy_summary = "该时间段内无有效数据，请重新选择时间段进行分析";
            }else{
                var info = eval(msg); 
                score = parseFloat(info[0].score);
                score = score*100;
                score = score.toFixed(2);
                
                energy_summary ="选择时间长度："+parseFloat(info[0].time).toFixed(1)+"天<br/>";
                
                energy_summary +="<br/>";
                energy_summary +="该时间段内<br/>";
                energy_summary +="\ \ 1)设备工作时间："+parseFloat(info[0].totalTime).toFixed(2)+"小时<br/>";
                energy_summary +="\ \ 2)排气压力最高值："+parseFloat(info[0].pressHigh).toFixed(2)+"bar<br/>";
                energy_summary +="\ \ 3)排气压高位平均值："+parseFloat(info[0].pressHighAve).toFixed(2)+"bar<br/>";
                energy_summary +="\ \ 4)排气压力最低值："+parseFloat(info[0].pressLow).toFixed(2)+"bar<br/>";
                energy_summary +="\ \ 5)排气压力低位平均值："+parseFloat(info[0].pressLowAve).toFixed(2)+"bar<br/>";
                energy_summary +="\ \ 6)设备消耗总电量："+parseFloat(info[0].totalWork).toFixed(2)+"度<br/>";
                energy_summary +="\ \ 7)若采用变频设备可节约总电量："+parseFloat(info[0].saveWork).toFixed(2)+"度<br/>";
                
                energy_summary +="<br/>";
                
            }
            setTimeout(updateStatus,1000);
		}
    });
    
    setTimeout(updateStatus,100);
    setTimeout(updateStatusDot,500);
});

$("#btn-roboselect").click(function(e){
    if($("#input-roboselect").val() != ""){
        var id = "#robo"+$("#input-roboselect").val();
        if($(id).length > 0){
            window.location.href=$(id).attr("href");
        }
    }
})

function refreshHistory(){

    updateHistory(this.id.replace(/_history_end/g,""),this.previousElementSibling.value,this.value);
}

function updateHistory(name,dateStart,dateEnd){

    url=base_url+"index.php/"+admin_dir+"/ajax_historyinfo/getHistoryData/";

    d3.json(url, function(error, dataRet) {
      
      keys = d3.keys(dataRet[0][0]); 
      
      if(0 == keys.length){
        return;
      }
      
      if(keys[0] == "update_time"){
        name = keys[1];
        order = 1;
      }else{
        name = keys[0];
        order = 0;
      }
      
      data = dataRet[0].map(function(d){
        return{
             date: parseDate(d.update_time),
             price: d3.values(d)[order]
        };
      });
            
        // Sort the data or bisect() won't work right
        data.sort(function(a, b) {return a.date - b.date;});
        
       name_name=d3.select("#"+name).attr("name");
       name_unit=d3.select("#"+name).attr("unit");
        
      x[name].domain(d3.extent(data.map(function(d) { return d.date; })));
      //y[name].domain(d3.extent(data.map(function(d) { return d.price; })));
      y[name].domain([d3.min(data.map(function(d) { return parseInt(d.price); }))-1, 1+d3.max(data.map(function(d) { return parseInt(d.price); }))]);
      x2[name].domain(x[name].domain());
      //y2[name].domain(y[name].domain());

      focus[name].select("path")
          .datum(data)
          .attr("d", area[name]);

      focus[name].select("#"+name+"-xaxis")
          .call(xAxis[name]);
          
      focus[name].select("#"+name+"-yaxis")
          .call(yAxis[name]);
          
        focus[name].select("#"+name+"-detail")
            .datum(data);

      context[name].select("path")
          .datum(data)
          .attr("d", area2[name]);

      context[name].select("g")
          .call(xAxis2[name]);

    })
    .header("Content-Type","application/x-www-form-urlencoded")
    .send("POST", "dataId="+name+"&dateStart="+dateStart+"&dateEnd="+dateEnd+"&device_id="+device_id);
}

$(document).ready(function(){

    var i = 3;
    listNum = $(".setList").length;
    totalPageSetList = Math.floor(listNum/3);
    for(;i<listNum; i++){
       $($(".setList")[i]).css("display","none");
    }
    
    device_id = $("#device_id").html();
    admin_dir = $("#sysinfo").attr("admin_dir");
    chart_display = $(".chart-display");

var margin = {top: 10, right: 10, bottom: 90, left: 60},
    margin2 = {top: 120, right: 10, bottom: 20, left: 60},

    
    width = parseInt(d3.select("#"+chart_display[0].id).style('width'),10) - margin.left - margin.right - 30,
    height = parseInt(d3.select("#"+chart_display[0].id).style('height'),10)-margin.bottom-margin.top - 30,
    height2 = 30;
    margin2.top = height+30;
    
    for(i=0;i<chart_display.length;i++){

        item = chart_display[i].id;

        x[item]    = d3.time.scale().range([0, width]),
        x2[item]   = d3.time.scale().range([0, width]),
        y[item]    = d3.scale.linear().range([height, 0]),
        y2[item]   = d3.scale.linear().range([height2, 0]);
        xAxis[item]    = d3.svg.axis().scale(x[item]).orient("bottom").tickFormat(d3.time.format("%H:%M:%S")),
        xAxis2[item]   = d3.svg.axis().scale(x2[item]).orient("bottom").tickFormat(d3.time.format("%Y-%m-%d")),
        yAxis[item]    = d3.svg.axis().scale(y[item]).orient("left");

        brush[item] = d3.svg.brush()
        .x(x2[item])
        .on("brush", brushed);

        area[item] = d3.svg.line()
        .interpolate("linear")
        .x(function(d) { return x[item](d.date); })
        .y(function(d) { return y[item](d.price); });
        //.y0(height)
        //.y1(function(d) { return y[item](d.price); });

        area2[item] = d3.svg.area()
        .interpolate("linear")
        .x(function(d) { return x2[item](d.date); })
        .y0(height2)
        .y1(function(d) { return y2[item](d.price); });

        svg = d3.select("#"+item).append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom);

        svg.append("defs").append("clipPath")
            .attr("id", "clip")
          .append("rect")
            .attr("width", width)
            .attr("height", height);

        focus[item] = svg.append("g")
            .attr("class", "focus")
            .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

        context[item] = svg.append("g")
            .attr("class", "context")
            .attr("transform", "translate(" + margin2.left + "," + margin2.top + ")");
    }

    for(i=0;i<chart_display.length;i++){

        url=base_url+"index.php/"+admin_dir+"/ajax_historyinfo/getHistoryData/";

        d3.json(url, function(error, dataRet) {
          
            keys = d3.keys(dataRet[0][0]); 

            if(keys[0] == "update_time"){
                item = keys[1];
                order = 1;
            }else{
                item = keys[0];
                order = 0;
            }

            data = dataRet[0].map(function(d){
                return{
                    date: parseDate(d.update_time),
                    price: d3.values(d)[order]
                };
            });
                
            // Sort the data or bisect() won't work right
            data.sort(function(a, b) {return a.date - b.date;});

            item_name=d3.select("#"+item).attr("name");
            item_unit=d3.select("#"+item).attr("unit");
            
            x[item].domain(d3.extent(data.map(function(d) { return d.date; })));
            //y[item].domain([0, 1+d3.max(data.map(function(d) { return parseInt(d.price); }))]);
            y[item].domain([d3.min(data.map(function(d) { return parseInt(d.price); }))-1, 1+d3.max(data.map(function(d) { return parseInt(d.price); }))]);
            x2[item].domain(x[item].domain());
            y2[item].domain(y[item].domain());

            focus[item].append("path")
                .datum(data)
                .attr("class", "line")
                .attr("id", item+"-area")
                .attr("d", area[item]);

            focus[item].append("g")
                .attr("class", "x axis")
                .attr("id", item+"-xaxis")
                .attr("transform", "translate(0," + height + ")")
                .call(xAxis[item]);

            focus[item].append("g")
                .attr("class", "y axis")
                .attr("id", item+"-yaxis")
                .call(yAxis[item]);

            focus[item].append("text")
                .attr("transform", "rotate(-90)")
                .attr("y", 0-margin.left)
                .attr("x",0-(height / 2))
                .attr("dy", "1em")
                .style("text-anchor", "middle")
                .text(item_name+("(单位："+item_unit+")"));
            
            tooltip[item] = focus[item].append("g")
                .attr("class", "focus")
                .style("display", "none");
                
            tooltip[item].append("rect")
                .style("opacity", .8) 
                .style("fill", "white")
                .style("stroke", "gray")
                .attr("width", "150px")
                .attr("height", "30px")
                .attr("x", 7)
                .attr("y", "-1.5em");
                
            tooltip[item].append("circle")
                .attr("r", 4.5);

            tooltip[item].append("text")
                .attr("id", "dataDetail")
                .attr("x", 9)
                .attr("dy", "-.2em");

            tooltip[item].append("text")
                .attr("id", "dateDetail")
                .attr("x", 9)
                .attr("dy", "1em");
            
            
            focus[item].append("rect")                                     // **********
                .attr("width", width)                              // **********
                .attr("height", height)                            // **********
                .attr("id", item+"-detail")                            // **********
                .style("fill", "none")                             // **********
                .style("pointer-events", "all")                    // **********
                .on("mouseover", function() { item = this.id.replace(/-detail/g,"");tooltip[item].style("display", null); })
                //.on("mouseout", function() { tooltip[item].style("display", "none"); })
                .datum(data)
                .on("mousemove", mouseMove);                       // **********

            context[item].append("path")
                .datum(data)
                .attr("class", "area")
                .attr("d", area2[item]);

            context[item].append("g")
                .attr("class", "x axis")
                .attr("transform", "translate(0," + height2 + ")")
                .call(xAxis2[item]);

            context[item].append("text")      // text label for the x axis
                .attr("x", width/2 )
                .attr("y",  60 )
                .style("text-anchor", "middle")
                .text("数据采集时间（年-月-日 时：分：秒）");

            context[item].append("g")
                .attr("class", "x brush")
                .attr("id", item+"-brush")
                .call(brush[item])
                .selectAll("rect")
                .attr("y", -6)
                .attr("height", height2 + 7);
        })
        .header("Content-Type","application/x-www-form-urlencoded")
        .send("POST", "dataId="+chart_display[i].id+"&device_id="+device_id);
    }

    function brushed() {
        item = this.id.replace(/-brush/g,"");
        tooltip[item].style("display", "none");
        x[item].domain(brush[item].empty() ? x2[item].domain() : brush[item].extent());  
        d3.select("#"+item+"-area").attr("d", area[item]);
        d3.select("#"+item+"-xaxis").call(xAxis[item]);
    }

    function mouseMove(d){
        var x0 = x[item].invert(d3.mouse(this)[0]);
        i = bisectDate(d,x0,1);
        d0 = d[i-1];
        d1 = d[i];
        dd = i - d0.date > d1.date - i ? d1:d0;
        tooltip[item].attr("transform", "translate(" + x[item](dd.date) + "," + y[item](dd.price) + ")");
        tooltip[item].select("#dataDetail").text('采集数值：' + dd.price);
        tooltip[item].select("#dateDetail").text('采集时间：' + tooltipDate(dd.date));
    }
})
