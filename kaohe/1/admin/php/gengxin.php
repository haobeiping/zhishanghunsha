<?php
include_once "connect.php";
$c=conn();



$cid = intval($_GET['cid']);
$biaoti = $_GET['biaoti'];
$neirong = $_GET['neirong'];
if(empty($biaoti)||empty($neirong))
{
   echo "<center><h1>.标题和内容不能为空！.<center><h1>";
	header("refresh:3;url=/htdocs/kaohe/1/admin/update.php");
	die();
}
$sql="update shuju set biaoti='$biaoti' , neirong= '$neirong' where id='$cid'";
$a=mysqli_query($c,$sql);
if (mysqli_affected_rows($c)<=0)
 {
	echo "<center><h1>.更新文章失败.<center><h1>";
	header("refresh:3;url=/htdocs/kaohe/1/admin/update.php");
	die();
}
else
{

	echo "<center><h1>.更新文章成功.<center><h1>";
	header("refresh:3;url=/htdocs/kaohe/1/admin/admin.php");

}
?>
