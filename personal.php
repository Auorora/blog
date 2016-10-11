<?php 
	require_once 'connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人简介</title>
	<link rel="stylesheet" type="text/css" href="style/normalize.css">
	<link rel="stylesheet" type="text/css" href="style/main.css">
</head>
<body>
	<div class="main_wrapper">
		<header>
			<nav>
				<div class="logo"><a href="index.php">MirrorAurora</a></div>
				<ul>
					<?php 
						if(isset($_SESSION['admin'])){
						echo "<li><a href='javascript:void(0)'>欢迎回来管理员</a></li>
							  <li><a href='loginOut.php'>注销</a></li>";
						}
					 ?>
					<li><a href="index.php">首页</a></li>
					<li><a href="personal.php">个人简介</a></li>
					<li><a target="_blank" href="project/index.html">作品列表</a></li>
					<li><a target="_blank" href="http://www.cnblogs.com/skyward/">博客</a></li>
					<li id="menu"><a href="javascript:void(0)">菜单</a></li>
				</ul>
			</nav>
			<div class="banner">
				<div class="inner">
					<h1>MirrorAurora</h1>
					<p>Personal Profile</p>
					<button class="inner_btn">个人简介</button>
				</div>
			</div>
		</header>

		<div class="content">
			<section class="section_green">
				<div class="wrapper">
					<div>
						<h2>Personal Profile</h2>
						<div class="hr"></div>
						<p>姓名：祝志昂</p>
						<p>坐标：武汉</p>
						<p>状态：学生</p>
						<p>专业：计算机网络技术</p>
						<p>毕业学校：武汉交通职业学院</p>
					</div>
					<div class="icon_group">
						<span class="icon"><span>Web前端</span></span>
						<span class="icon"><span>20岁</span></span>
						<span class="icon"><span>实习生</span></span>
					</div>
				</div>
			</section>
			<section class="section_purple">
				<div class="wrapper">
					<div class="wrapper_head">
						<h2>Skill</h2>
						<div class="hr"></div>
						<div class="sub_title">
							Web Skill 
						</div>
					</div>
					<div class="card_group clearfix">
						<div class="card">
							<h3>HTML5 CSS3</h3>
							<p>能够熟练使用DIV+CSS进行布局，快速搭建静态网页，对HTML5+CSS3有一定了解，能够对各大主流浏览器进行兼容。</p>
						</div>
						<div class="card">
							<h3>JavaScript</h3>
						<p>熟悉DOM操作，能进行简易的JavaScript面向对象编程，能用Ajax进行简易的前后端交互。对页面优化有一定经验。能实现网页大部分动态特效。</p>
						</div>
						<div class="card">
							<h3>jQuery</h3>
							<p>熟练掌握HTML元素进行DOM操作。作品网站大多都是使用jQuery来对行为层进行编写。</p>
						</div>
						<div class="card">
							<h3>Bootstrap</h3>
							<p>能使用Bootstrap快速进行页面布局。</p>
						</div>
						<div class="card">
							<h3>PHP</h3>
							<p>使用PHP搭建过图书管理系统，新闻管理系统。对织梦CMS管理系统使用有一定经验。对MySql数据库的存取、删除、修改较熟练。能使用PHP搭建简易的博客。</p>
						</div>
						<div class="card">
							<h3>Vue.js</h3>
							<p>了解数据双向绑定，通过修改data数据来达到改变页面DOM结构，用可复用组件来构建界面。</p>
						</div>
					</div>
					<div class="wrapper_head top40">
						<h2>Character</h2>
						<div class="hr"></div>
						<div class="sub_title">
							Character And Experience
						</div>
					</div>
					<div class="wrapper_head">
						<div class="sub_title">
							<p>Character：热爱编程，对最新的前端知识有求知欲，自主学习能力强，有团队协作精神</p>
							<br>
							<p>Experience：</p>
							<p>2014年底接触前端。</p>
							<p>2015年5月参加学校技能节大赛。</p>
							<p>2015年下半年学习jQuery PHP 开发了一个个人ACG网站，含登录、注册、评论、发帖、删帖、编辑等功能，通过jQuery Ajax来实现网站前后端交互。</p>
							<p>2016年上半年帮朋友制作一个装修整站，<a target="_blank" href="http://ezyjzs.com/" class="jump">点击进入</a>，前端后台SEO独立一人完成。</p>
							<p>2016年暑假学习Vue.js 模仿制作了异乡好居首页。<a class="jump" target="_blank" href="Project/lesson6/Vue/index.html">点击进入</a></p>
							<p>2016.10.2日 接手汇智云项目 完成静态展示网页。<a class="jump" target="_blank" href="http://hzycloud.com/">点金进入</a></p>
							<p>近况：学习微信小程序开发</p>
							<p><a target="_blank" href="project/index.html" class="jump">作品合集</a></p>
						</div>
					</div>
				</div>
			</section>
		</div>

		<footer>
			<ul class="share_group">
				<li><a href="https://github.com/Auorora"><i class="iconfont">&#xe69f;</i>Github</a></li>
				<li><a href="http://weibo.com/u/1911369431?refer_flag=1001030101_"><i class="iconfont">&#xe619;</i>Weibo</a></li>
				<li class="img_hover"><a href="javascript:void(0)"><i class="iconfont">&#x3488;</i>Weixin</a></li>
				<li class="img_pos"><img class="img_img" src="images/weixin.jpg"></li>
			</ul>
			<div class="copy">
				&copy MirrorAurora
			</div>
		</footer>

		<div class="mask"></div>
		<div id="sidebar">
			<ul>
				<li><a href="javascript:void(0)">还在建设...</a></li>
				<li><a href="javascript:void(0)">还在建设...</a></li>
				<li><a href="javascript:void(0)">还在建设...</a></li>
				<li><a href="javascript:void(0)">还在建设...</a></li>
			</ul>
		</div>
	</div>

	<div class="backTop">
	</div>


	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>