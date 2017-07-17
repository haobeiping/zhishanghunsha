<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/comm.css">
	<style>
		input{
			margin-bottom: 10px;
		}
		.btn{
			width: 100%;
			margin-top: 20px;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
				后台管理
			</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<!--这里是导航栏,这里的网址需要修改-->
				<li class="active"><a href="admin.php">管理文章</a></li>
				<li><a href="add.html">添加文章</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="col-md-8">

		<form action="php/gengxin.php" method="GET">

			<?php	$cid=$_GET['cid']
			?>

			<input type="text" class="form-control"  placeholder="请输入标题" name="biaoti"/>
			<textarea class="form-control" rows="5"  placeholder="请输入正文"  name="neirong"></textarea>
			<button type="submit" class="btn btn-success">提交修改</button>


			<input hidden="hidden" name="cid" value="<?php echo $cid ?>" />

		</form>
	</div>
	<div class="col-md-4 hidden-xs hidden-sm">
		<ul class="list">
			<li><a href="add.html">添加文章</a></li>
			<li class="active"><a href="admin.html">管理文章</a></li>
		</ul>
	</div>
</div>
<footer>&copy; <a href="e8net.cn">e8net</a></footer>
</body>
</html>
