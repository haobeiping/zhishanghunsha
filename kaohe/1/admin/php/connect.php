<?php

function conn()
{
	
	$dbinfo = [
		'host' =>'localhost',
		'username' =>'root',
		'userpass' =>'',
		'dbname' =>'kaohe'

	];

	
	$link = mysqli_connect($dbinfo['host'],$dbinfo['username'],$dbinfo['userpass'],$dbinfo['dbname']);
	if(!$link)
	{
		die('连接失败，错误信息：'.mysqli_connect_error());
	}

	mysqli_query($link,"set names utf8");
    return $link;

}  
?>