<?php

$yonghuming=trim($_POST['yonghuming']);
$mima=$_POST['mima'];


if(empty($yonghuming) || empty($mima))
{
	echo "<center><h1>.用户名或密码不能为空.<h1><center>";
	 header("refresh:3;url=/htdocs/kaohe/1/admin/login.html");
    die();
}

include_once "connect.php";
$c=conn();

$sql  = "SELECT * FROM zhuce WHERE yonghuming = '$yonghuming' limit 1";


$a=mysqli_query($c,$sql);

if(mysqli_affected_rows($c)<=0) 
{
	echo "<center><h1>.用户名不存在 .<center><h1>";
	 header("refresh:3;url=/htdocs/kaohe/1/admin/login.html");
	die();
}
$_sql = "SELECT * FROM zhuce WHERE yonghuming = '$yonghuming' and mima = '$mima' limit 1";
mysqli_query($c,$_sql);
if(mysqli_affected_rows($c)<=0) 
{
	echo "<center><h1>.密码错误.<center><h1>";
	 header("refresh:3;url=/htdocs/kaohe/1/admin/login.html");
	die();
}
echo "<center><h1>.登陆成功.<center><h1>";
header("refresh:3;url=/htdocs/kaohe/1/admin/add.html");

?>