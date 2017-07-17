<?php

$yonghuming=$_POST['yonghuming'];
$mima=($_POST['mima']);
$_mima=($_POST['_mima']);

if(empty($yonghuming) || empty($mima))
{
	echo "<center><h1>.用户名或密码不能为空.<h1><center>";
	 header("refresh:3;url=/htdocs/kaohe/1/admin/reg.html");
      die();
}



if ($yonghuming==$mima)
 {
	echo '<h1><center>.密码和用户名不能相同，请重新注册.<center><h1>';
	header("refresh:3;url=/htdocs/kaohe/1/admin/reg.html");
	die;
}



include_once "connect.php";
$a=conn();

$sql="SELECT * FROM zhuce WHERE yonghuming='$yonghuming'";
$reg=mysqli_query($a,$sql);

if(mysqli_affected_rows($a)>0)
{
	echo '<center><h1>.已经存在此用户,请登陆.<center><h1>';
	header("refresh:3;url=/htdocs/kaohe/1/admin/login.html");
	die;
}
if ($mima!=$_mima)
 {
	echo '<center><h1>.两次密码不一致，请重新注册.<center><h1>';
	header("refresh:3;url=/htdocs/kaohe/1/admin/reg.html");
	die;
}
$sql = "insert into zhuce (id,yonghuming,mima)values(null,'$yonghuming','$mima')";
mysqli_query($a,$sql);
if(mysqli_affected_rows($a)<=0)
{
	echo'<center><h1>.创建账号失败.<center><h1>';
	header("refresh:3;url=/htdocs/kaohe/1/admin/reg.html");
	die;
}
else
{
	echo "<center><h1>.创建账号成功，请登陆.<center><h1>";
	header("refresh:3;url=/htdocs/kaohe/1/admin/login.html");

}
?>
