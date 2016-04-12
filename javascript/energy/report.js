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
var focus   = new Array();
//var brush   = new Array();
var item;
var admin_dir;
var device_id;
var chart_display;

var compute_step =0;
var computing  =0;
var score = 0;
var energy_summary;
var energy_info;
var energy_msg;
var parseDate = d3.time.format("%Y-%m-%d %H:%M:%S").parse,
    bisectDate = d3.bisector(function(d) { return d.date; }).left;

$("#btn-roboselect").click(function(e){
    if($("#input-roboselect").val() != ""){
        var id = "#robo"+$("#input-roboselect").val();
        if($(id).length > 0){
            window.location.href=$(id).attr("href");
        }
    }
})

$(document).ready(function(){
    
    device_id = $("#device_id").html();
    admin_dir = $("#device_id").attr("admin_dir");
    chart_display = $(".chart-display");
    var dateStart = $("#dateStart").html();
    var dateEnd = $("#dateEnd").html();

var margin = {top: 10, right: 10, bottom: 20, left: 60},
    //margin2 = {top: 120, right: 10, bottom: 20, left: 60},

    
    width = parseInt(d3.select("#"+chart_display[0].id).style('width'),10) - margin.left - margin.right - 30,
    height = parseInt(d3.select("#"+chart_display[0].id).style('height'),10)-margin.bottom-margin.top - 30;
    //height2 = 30;
    //margin2.top = height+30;
    
    for(i=0;i<chart_display.length;i++){

        item = chart_display[i].id;

        x[item]    = d3.time.scale().range([0, width]),
        //x2[item]   = d3.time.scale().range([0, width]),
        y[item]    = d3.scale.linear().range([height, 0]),
        //y2[item]   = d3.scale.linear().range([height2, 0]);
        xAxis[item]    = d3.svg.axis().scale(x[item]).orient("bottom").tickFormat(d3.time.format("%y-%m-%d %H:%M")),
        //xAxis2[item]   = d3.svg.axis().scale(x2[item]).orient("bottom").tickFormat(d3.time.format("%Y-%m-%d"));
        yAxis[item]    = d3.svg.axis().scale(y[item]).orient("left").tickFormat(function(d) { return (d/10).toFixed(1); });

        //brush[item] = d3.svg.brush()
        //.x(x2[item])
        //.on("brush", brushed);

        area[item] = d3.svg.line()
        .interpolate("linear")
        .x(function(d) { return x[item](d.date); })
        .y(function(d) { return y[item](d.price); });

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
            y[item].domain([d3.min(data.map(function(d) { return parseInt(d.price); }))-50, 50+d3.max(data.map(function(d) { return parseInt(d.price); }))]);
            //x2[item].domain(x[item].domain());
            //y2[item].domain(y[item].domain());

            focus[item].append("path")
                .datum(data)
                .attr("class", "line")
                //.attr("id", item+"-area")
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
            
            focus[item].append("rect")                                     // **********
                .attr("width", width)                              // **********
                .attr("height", height)                            // **********
                .attr("id", item+"-detail")                            // **********
                .style("fill", "none")                             // **********
                .style("pointer-events", "all")                    // **********
                .datum(data)
        })
        .header("Content-Type","application/x-www-form-urlencoded")
        .send("POST", "dataId="+chart_display[i].id+"&dateStart="+dateStart+"&dateEnd="+dateEnd+"&device_id="+device_id);
    }

    function brushed() {
        item = this.id.replace(/-brush/g,"");
        //x[item].domain(brush[item].empty() ? x2[item].domain() : brush[item].extent());  
        d3.select("#"+item+"-xaxis").call(xAxis[item]);
    }
})
