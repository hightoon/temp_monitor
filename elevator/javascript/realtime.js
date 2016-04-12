
window.onload = function(){
	
	var chartArea = new Array();
	var xScale = new Array();
	var yScale = new Array();
	var dataRealtime = new Array(4);
	var xAxis = new Array();
	var yAxis = new Array();
	var path = new Array();
	var line = new Array();
	var m;
	
	for(var i=0,m=0;i<4;i++,m++){
		var margin = {top: 20, right: 50, bottom: 30, left: 50};
		var width =  615- margin.left - margin.right;//800-document.body.clientWidth
		var height = 175 - margin.top - margin.bottom;

		chartArea[i] = d3.select('#a_line'+i)
					.append('svg')
					.attr('width', width + margin.left + margin.right)
					.attr('height', height + margin.top + margin.bottom)
					.append('g')
					.attr('class', 'content')
					.attr('transform', 'translate(' + margin.left + ',' + margin.top + ')');
		var j;
		var data = [];

		xScale[i] = d3.time.scale()
				.domain([1,18])
				.range([0, width]);

		yScale[i] = d3.scale.linear()
				.domain([0, 300])
				.range([height, 0])
		//////////////

		xAxis[i] = d3.svg.axis()
					.scale(xScale[i])
					.ticks(18)
					.orient('bottom');

		yAxis[i] = d3.svg.axis()
					.scale(yScale[i])
					.orient('left')
					.ticks(5);


		chartArea[i].append('g')
			.attr('class', 'x axis')
			.attr('transform', 'translate(0,' + height + ')')
			.attr("id","xAxisx"+i)
			.call(xAxis[i])
			.append('text')
			.text('时间')
			.attr('transform', 'translate(' + width + ', 0)');

		chartArea[i].append('g')
			.attr('class', 'y axis')
			.attr("id","yAxisy"+i)
			.call(yAxis[i])
			.append('text')
			.text('单位');


		line[i] = d3.svg.line()
					.x(function(d) { 
						return xScale[m](d.time); 
					})
					.y(function(d) { 
						return yScale[m](d.value); 
					})
					.interpolate('linear');

		path[i]=chartArea[i].append('path')
				//.datum(data)
				.attr("fill","white")
				.attr("stroke","steelblue")
				.attr("stroke-width",1)
				.attr('class', 'line')
				.attr('id', 'path'+i)
				.attr('d', line[i](data));
				//.attr("d", line);
				
		var dataNum = 30;

		for(var j=0;j<4;j++){
			dataRealtime[j] = new Array(dataNum);
			for(var k=0;k<dataNum;k++){
				temp = new Object();
				temp.time = new Date();
				temp.time.setTime(0);
				temp.value = 0;
				dataRealtime[j][k] = temp;
			}
		}
	}
	var parseDate = d3.time.format("%Y-%m-%d %H:%M:%S").parse;

	function drawLine(dataIn) {
		
		var j;
		
		for(m=0;m<4;m++){
			data = dataIn.map(function(d) {
				return {time: parseDate(d.update_time), value: eval("d.Analog"+m)}
			});
			if((dataRealtime[m][dataNum-1].time.getTime() == 0)){
				dataRealtime[m].shift();
				dataRealtime[m].push(data[0]);
				var timeTmp = data[0].time.getTime();
				for(j=dataNum-2;j>=0;j--){
					timeTmp -= 1000;
					dataRealtime[m][j].time.setTime(timeTmp);
				}
			}
			if((dataRealtime[m][dataNum-1].time.getTime() != 0) && (dataRealtime[m][dataNum-1].time.getTime() != data[0].time.getTime())){
				dataRealtime[m].shift();
				dataRealtime[m].push(data[0]);
				$("#itemspan_realtime"+m).text(data[0].value);
			}
			xScale[m].domain(d3.extent(dataRealtime[m].map(function(d) { return d.time; })));
			yScale[m].domain(d3.extent(dataRealtime[m].map(function(d) { return d.value; })));

			d3.select("#xAxisx"+m).call(xAxis[m]);
			d3.select("#yAxisy"+m).call(yAxis[m]);
			d3.select("#path"+m)
			.attr('d', line[m](dataRealtime[m])); 
		}

	}

	setInterval(function() {
			if(flag_line==1){

			d3.json("http://115.29.193.236/utopia/index.php/realtime_ajax/getRealtimeData1",drawLine)
			.header("Content-Type","application/x-www-form-urlencoded")
			.send("POST", "dataId=1");
		}
		else{

			d3.json("http://115.29.193.236/utopia/index.php/realtime_ajax/getRealtimeData2",drawLine)
			.header("Content-Type","application/x-www-form-urlencoded")
			.send("POST", "dataId=1");
		}
	}, 500);
}