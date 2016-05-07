 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
</head>
<body>
<fieldset>
<legend>INDEX</legend>
<form method="get">
<table bgcolor="#FFCCCC" bordercolor="#000000" bordercolordark="#000000">
<tr>
<td>USERNAME</td>
<td><input type="text"name='username'/>
</td>
</tr>
<tr>
<td>PASSWORD</td>
<td>
<input type="password"name='password'/>
</td>
</tr>
<tr>
<td>
<input type="submit" name='submit'value='LOGIN'/>
</td>
</tr>
</table>
</form>
</fieldset>
</body>
</html>
<?php
mysql_connect('localhost','root','');
mysql_select_db('goodisha');
if(isset($_GET['submit']))
{
echo $username=$_GET['username'];
echo $password=$_GET['password'];
echo $query="select * from admin where username='$username' and password='$password'";
$sql=mysql_query($query);
 $data=mysql_fetch_array($sql);
if($data)
{
echo '<script>alert("YOUR USERNAME IS CORRECT!!!!!!!")</script>';
echo"<script>window.location='dashboard.php'</script>";
}
else
{
echo '<script>alert("YOUR USERNAME OR PASSWORD IS INCORRECT!!!!!!!")</script>';
echo"<script>window.location='login.php'</script>";
}
}
?>
