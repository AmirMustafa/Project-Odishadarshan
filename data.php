<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body> <table>
<form method="get">
<tr><td>select option</td><td><select name="option"><option>homepage</option>
<option>destinatons</option><option>lifestyle</option><option>education</option><option>sports</option><option>maps</option><option>business</option><option>photos</option><option>contact us</option><option>hotels</option><option>temples</option><option>tourist</option><option>transportation</option><option>institution</option><option>hospitals</option><option>shopping malls</option><option>restaurants</option><option>sports</option><option>police</option><option>ambulance</option><option>rail</option><option>atm</option><option>medical</option><option>jewellery</option><option>bars and pub</option><option>multiplex</option></select></td></tr>
<tr><td>enter data</td><td><textarea name="enter_data"></textarea></td></tr><tr><td><input type="submit" name="submit" value="Insert" /></td><td></td></tr>
</form>
</table>
</body>
</php>
<?php
if(isset($_GET['submit']))
{
	@$option=$_GET['option'];
	@$data=$_GET['enter_data'];
	mysql_connect('localhost','root','');
	mysql_select_db('goodisha');
	$query="insert into content values('','$option','$data',now())";
	$sql=mysql_query($query);
	
	if($sql)
	{
		echo '<script>alert("Your data is submitted!!!")</script>';
	
	}
	else
	{
		echo '<script>alert("Error!!! Your data is not submitted!!!")</script>';
		echo '<script>window.location="data.php"</script>';
	}
}
?>
</body>
</html>
