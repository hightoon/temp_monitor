var xmlHttp;
var base_url="http://10.13.71.176/";
//var base_url="http://www.robosnet.com/cim";
var initflag = 1;

$(document).ready(function(){

	$(".saveinfo").click(function(e){
		//alert(this.parentNode.parentNode.children[0].innerHTML);
		item = this.parentNode.parentNode.children;
		var info={};
		for (i=0;i<4;i++){
			info[i] = item[i].innerHTML;
		}
		for (i=4;i<8;i++){
			info[i] = item[i].childNodes[1].value;
		}
		//alert(info);
		$.ajax({
			type		: "POST",
			url			: base_url+"index.php/"+admin_dir+"/ajax_infoset/setInfo/",
			data		: info,
			success: function(msg){
				alert(msg);
				//$("#meter_modal").modal('hide');
			}
		});
	})
})
