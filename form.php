<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" >
$(function(){
$("#send").click(function(){
	var id_msg = $('#id_msg').val();
	$.ajax({
		url: "target.php" , 
		type: "GET",
		data: "harChiMikhayBenvis=" + id_msg,
		success : function(data){
			$("#res").html(data);
		}
	});

});
});	
</script>
</head>

<body>
<form action="javascript:void(0)">
	<input type='text'  id='id_msg'  name='id_msg'/>
	<input type='submit' name='msg_read'  value='SEND' id="send"/>
</form>
<div id="res"></div>
</body>
</html>