<?php
	

	include_once "connect.php";
	$link = conn();


    $cid = intval($_GET['cid']);
	
	$sql = "delete from shuju where id='$cid' ";
	$res = mysqli_query($link , $sql);
	if(mysqli_affected_rows($link) <=0){
		echo '没有找到该文章！';
		header("Refresh:3;url=/htdocs/kaohe/1/admin/admin.php");
		die;
	}
	echo '文章删除成功！';
	header("Refresh:3;url=/htdocs/kaohe/1/admin/admin.php");

?>