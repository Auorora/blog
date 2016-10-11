<?php 
	require_once '../connect.php';
	if(isset($_SESSION['admin'])){
		echo "<script type='text/javascript'>alert('登录成功');window.location.href='../index.php';</script>";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MirrorAurora</title>
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
					<li><a href="personal.php">个人简介</a></li>
					<li><a href="workd.php">作品列表</a></li>
					<li><a href="blog.php">博客</a></li>
					<li id="menu"><a href="javascript:void(0)">菜单</a></li>
				</ul>
			</nav>
			<div class="banner">
				<div class="inner">
					<h1>MirrorAurora</h1>
					<p>若非管理员请尽快离开！</p>
				</div>
			</div>
		</header>

		<div class="content">
			<form action="loginHandle.php" method="post" class="login">
				<div class="loginStyle">
					<label>管理员：</label>
					<input type="text" name="username">
				</div>
				<div class="loginStyle">
					<label>密码：</label>
					<input type="password" name="password">
				</div>
				<div class="loginStyle">
					<label>验证码图片：</label name="check">
					<img id="check" src="authcode.php" width="100" height="30" style="float:left;margin-left:13px;">
				</div>
				<div class="loginStyle">
					<label>验证码</label>
					<input type="text" name="authcode" style="width:60px;float:left;margin-left:13px;">
				</div>
				<div class="loginStyle">
					<label>&nbsp;</label>
					<button>登录</button>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
	$(function(){
		$('#check').on('click',function(){
			$('#check').attr('src','authcode.php?' + Math.random());
		});
	});
	</script>
</body>
</html>