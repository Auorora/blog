<?php 
	require_once '../connect.php';
	if(!isset($_SESSION['admin'])){
		echo "<script type='text/javascript'>alert('请先登录!');window.location.href='login.php';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发表文章</title>
	<link rel="stylesheet" type="text/css" href="../style/normalize.css">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<script type="text/javascript" src="../js/jquery-1.11.3.js"></script>
</head>
<body>
	<div class="wrapper">
		<header>
			<nav>
				<div class="logo"><a href="../index.php">MirrorAurora</a></div>
				<ul>
					<?php 
						if(isset($_SESSION['admin'])){
						echo "<li><a href='javascript:void(0)'>欢迎回来管理员</a></li>
							  <li><a href='loginOut.php'>注销</a></li>";
						}
					 ?>
					<li><a href="personal.php">个人简介</a></li>
					<li><a href="workd.php">作品列表</a></li>
					<li><a href="blog.php">博客</a></li>
					<li id="menu"><a href="javascript:void(0)">菜单</a></li>
				</ul>
			</nav>
			<div class="banner">
				<div class="inner">
					<h1>MirrorAurora</h1>
					<p>后台管理系统</p>
				</div>
			</div>
		</header>

		<div class="content">
			<section class="section_green">
				<div class="section_wrapper">
					<h2>Management System</h2>
					<div class="hr"></div>
					
				</div>
			</section>
		</div>		
	</div>
</body>
</html>