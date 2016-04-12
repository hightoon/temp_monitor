<style type="text/css">
#check_fail_log {
	margin: 50px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}
</style>
<div id="check_fail_log">
	<h1 style="border-bottom: 1px solid #D0D0D0;margin: 0 0 14px 0;padding: 14px 15px 10px 15px;">访问失败</h1>
	<p style="margin: 12px 15px 12px 15px;">
		<span id="js_check_fail">对不起，您的浏览器没有开启JavaScript脚本支持！</span>
		<span id="cookie_check_fail" style="display:none">对不起，您的浏览器没有开启Cookie支持！</span>
	</p>	
</div>
<script language="javascript" type="text/javascript">
window.onload=function()
{
	if(document.cookie || navigator.cookieEnabled)
	{
		document.getElementById('check_fail').style.display='none';
		document.getElementById('normal_content').style.display='';
	}else{
		document.getElementById('js_check_fail').style.display='none';
		document.getElementById('cookie_check_fail').style.display='';
	}
};
</script>