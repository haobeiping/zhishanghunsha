<?php

include_once "connect.php";
include_once "hanshu.php";
$c=conn();

$biaoti = $_POST['biaoti'];
$neirong = $_POST['neirong'];



if(empty($biaoti)||empty($neirong))
{
	echo "<center><h1>.标题和内容不能为空！.<center><h1>";
	header("refresh:3;url=/htdocs/kaohe/1/admin/add.html");
	die();
}
$len = strLength($neirong);
$lenbt = strLength($biaoti);
if($lenbt>220)
{
	echo "<center><h1>.标题字数不能大于220个字！.<center><h1>";
	header("refresh:3;url=/htdocs/kaohe/1/admin/add.html");
	die();
}

$sql= "INSERT INTO shuju (id,biaoti,neirong,zuozhe,liulanliang,zishu) VALUES (null,'$biaoti','$neirong',' ','','$len')";
$res=mysqli_query($c,$sql);

if (mysqli_affected_rows($c)<=0)
 {
	echo "<center><h1>.添加文章失败.<center><h1>";
	header("refresh:3;url=/htdocs/kaohe/1/admin/admin.php");
	die();
}
else
{

	echo "<center><h1>.添加文章成功.<center><h1>";
	header("refresh:3;url=/htdocs/kaohe/1/admin/admin.php");
}

?>