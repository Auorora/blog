<?php 
	require_once '../connect.php';
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$sql = "select * from admin where username='$username' and password='$password'";
	$query = mysql_query($sql);
	$num = mysql_num_rows($query);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>MirrorAurora</title>
 	<style type="text/css">
 	*{margin:0;padding: 0;}
 	body{font-family: "microsoft yahei",sans-serif;}
 	.wrap{width: 400px;margin:200px auto;height: 200px;border:1px solid #989898;font-size: 14px;}
 	.wrap p{text-align: center;color:#A2A2A2;margin-top: 80px;}
	.wrap a{margin-top: 10px;display: block;color:#A2A2A2;}
 	</style>
 </head>
 <body>
 	<div class="wrap">
 		<p>
 			<?php
 				if(isset($_POST['authcode'])){
 					session_start();
					if(strtolower($_POST['authcode']) == $_SESSION['authcode']){
						if($num){
							$_SESSION['admin'] = $username;
							echo "<span>登录成功!</span><a href='../index.php'>点击跳转首页</a>";
						}else{
							echo "<span>登录失败!</span><a href='login.php'>点击跳转重新登录</a>";
						}
					}else{
						echo "<span>验证码输入错误!请重新输入!<a href='login.php'>点击跳转重新登录</a></span>";
					}
				}
 			?>
 		</p>
 	</div>
 </body>
 </html>