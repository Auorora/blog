<?php 
	require_once 'connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="style/normalize.css">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<meta name="keywords" content="MirrorAurora，前端简历，web前端"/>
	<meta name="description" content="MirrorAurora的个人博客与个人介绍。" />
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
					<li><a target="_blank" href="personal.php">个人简介</a></li>
					<li><a target="_blank" href="project/index.html">作品列表</a></li>
					<li><a target="_blank" href="http://www.cnblogs.com/skyward/">博客</a></li>
					<li><a target="_blank" href="">Github</a></li>
					<li id="menu"><a href="javascript:void(0)">菜单</a></li>
				</ul>
			</nav>
			<div class="banner">
				<div class="inner">
					<h1>MirrorAurora</h1>
					<p>I figure life is a gift and I don't intend on wasting it.</p>
					<button class="inner_btn"><a href="personal.php">了解我</a></button>
					<div class="inner_more">
						更多
					</div>
				</div>
			</div>
		</header>	
		<!--header结束-->

		<div class="content">
			<section class="section_green">
				<div class="wrapper">
					<div>
						<h2>Skill</h2>
						<div class="hr"></div>
						<p>HTML5  CSS3  Bootstrap  JavaScript  jQuery  PHP  Vue.js  CMS</p>
					</div>
					<div class="icon_group">
						<span class="icon"><span>JavaScript</span></span>
						<span class="icon"><span>jQuery</span></span>
						<span class="icon"><span>PHP</span></span>
					</div>
				</div>
			</section>
			<section class="section_grey">
				<div class="article_pre">
					<div class="img_section">
						<img src="images/pic01.jpg">
					</div>
					<div class="content_section">
						<h2><a target="_blank" href='fontColor'>[PHP]分页条函数封装</a></h2>
						<h4 class="sub_title">
							PHP
						</h4>
						<p class="article_desc"><a target="_blank" href="http://www.cnblogs.com/skyward/p/5100171.html" class="fontColor">这两天在学习PHP想做一个前端后台都包含的网站看了一些视频发现大牛们都是将封装起来实现代码的重用性本人技拙也写了个分页条函数的封装分页条在用PHP网站开发中十分常用通过封装代码来提高网站开发效率</a></p>
					</div>
				</div>

				<div class="article_pre">
					<div class="content_section">
						<h2><a href="http://www.cnblogs.com/skyward/p/5911856.html" target="_blank">[JavaScript]如何隐藏DOM元素</a></h2>
						<h4 class="sub_title">
							JavaScript CSS
						</h4>
						<p class="article_desc"><a target="_blank" href="http://www.cnblogs.com/skyward/p/5911856.html">在CSS中，要隐藏DOM元素常见的方法有：设置元素的opacity值为0,设置元素的visibility值为hidden,设置元素的display值为none,设置元素的position值为absolute，并且将其移到不可见区域,设置元素clip（在新的CSS中使用clip-path来替代clip）</a></p>
					</div>
					<div class="img_section">
						<img src="images/pic02.jpg">
					</div>
					
				</div>

				<div class="article_pre">
					<div class="img_section">
						<img src="images/pic03.jpg">
					</div>
					<div class="content_section">
						<h2><a target="_blank" href="http://www.cnblogs.com/skyward/p/5911847.html">[JavaScript]JavaScript中的作用域</a></h2>
						<h4 class="sub_title">
							JavaScript
						</h4>
						<p class="article_desc"><a target="_blank" href="http://www.cnblogs.com/skyward/p/5911847.html">很多(JavaScript)开发者都在讨论"作用域"，但它是什么？它们在JavaScript中的任何地方！我发现很多年轻的开发者不知道作用域是什么。他们中大多数人可以用jQuery做一些很酷的东西。但只是停留在从网上复制一些代码片段，修改一下他们懂的地方并且粘贴到一个JavaScript文件中的程度</a></p>
					</div>
				</div>
			</section>
			<section class="section_purple">
				<div class="wrapper">

					<div class="wrapper_head">
						<h2>Web Skill</h2>
						<div class="hr"></div>
						<div class="sub_title">
							I figure life is a gift and I don't intend on wasting it.
						</div>
					</div>
					<div class="card_group clearfix">
						<div class="card">
							<h3>HTML5 CSS3</h3>
							<p>能够熟练使用DIV+CSS进行布局，快速搭建静态网页，对HTML5+CSS3有一定了解，能够对各大主流浏览器进行兼容。</p>
						</div>
						<div class="card">
							<h3>JavaScript</h3>
						<p>熟悉DOM操作，能进行简易的JavaScript面向对象编程，能用Ajax进行简易的前后端交互。对页面优化有一定经验。</p>
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
					</div>
				</div>
				
			</section>
		</div>
		<!--content结束-->

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
		<!--footer结束-->

		<div class="mask"></div>
		<div id="sidebar">
			<ul>
				<li><a href="javascript:void(0)">还在建设...</a></li>
				<li><a href="javascript:void(0)">还在建设...</a></li>
				<li><a href="javascript:void(0)">还在建设...</a></li>
				<li><a href="javascript:void(0)">还在建设...</a></li>
			</ul>
		</div>
		<!--sidebar结束-->
	</div>

	<div class="backTop">
	</div>

	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>