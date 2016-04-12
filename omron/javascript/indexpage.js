var base_url = "http://www.robosnet.com/omron";
var demo_dir = "demo";

$("#bind_PLC0").click(function () {

    $.ajax({
        type: "POST",
        url: base_url + "index.php/" + demo_dir + "/ajax_buttonprocess/bind/",
        dataType: 'json',
        data: {
            cv_id: document.getElementById('device_id').innerHTML
        },
        success: function (msg) {
            $("#myModal_type").attr({ style: "color:#fff;background:#3c2" });
            $("#myModal_Label").html("成功");
            $("#myModal_content").attr({ style: "color:#3c2;text-align:center" });
            $("#myModal_content").html("远程开机成功");
            $("#myModal").modal('show');
        }
    });
})