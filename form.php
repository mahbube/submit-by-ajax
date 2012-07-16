<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-1.6.2.js"></script>
<script type="text/javascript" >
function dontRef(){
	var id_msg = $('#id_msg').val();
     $.post({
		 url: "target.php" , 
		 type: "POST",
		 data: "id_msg: " + id_msg,
		 /*success: function(){
			document.form.reset();
		 }*/
	});  
	alert(11); 
      return false;
}
</script>
</head>

<body>
<form action='' method='post' onsubmit='dontRef()'>
	<input type='text'  id='id_msg'  name='id_msg'/>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<input type='submit' name='msg_read'  value='sss' />
</form>
</body>
</html>