<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<meta name="keywords" content="关键词">
	<meta name="description" content="网站描述">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="renderer" content="webkit">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/common.js"></script>
</head>
<body>
	<?php include 'header.php';?>
	<!-- 轮播 -->
	<div class="banner pc">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">  
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/banner.jpg" alt="">
				</div>
				<div class="item">
					<img src="images/banner.jpg" alt="">      
				</div>
				<div class="item">
					<img src="images/banner.jpg" alt="">
				</div>
				<div class="item">
					<img src="images/banner.jpg" alt="">     
				</div>
			</div>
		</div>
	</div>
	<div class="banner mobile">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">  
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/images/banner.jpg" alt="">
				</div>
				<div class="item">
					<img src="images/images/banner.jpg" alt="">     
				</div>
				<div class="item">
					<img src="images/images/banner.jpg" alt="">
				</div>
				<div class="item">
					<img src="images/images/banner.jpg" alt="">  
				</div>
			</div>
		</div>
	</div>
	<!-- 业务 -->
	<div class="business">
		<div class="container">
			<h2>管车所业务板块</h2>
			<p>中国汽车领域O2O综合服务平台</p>
			<ul>
				<li><a href=""><div><img src="images/business_03.png" alt=""></div><h5>一键购车</h5><p>以租代购的汽车电商</p></a></li>
				<li><a href=""><div><img src="images/business_05.png" alt=""></div><h5>一键服务</h5><p>一站式汽车后市场服务</p></a></li>
				<li><a href=""><div><img src="images/business_07.png" alt=""></div><h5>一键共享</h5><p>车主之间的汽车共享</p></a></li>
			</ul>
		</div>
	</div>
	<!-- 优势 -->
	<div class="advantage">
		<div class="container">
			<h2>产品优势</h2>
			<div><img src="images/advantage_03.png" alt=""></div>
		</div>
	</div>
	<!-- 合作伙伴 -->
	<div class="Partner">
		<div class="container">
			<h2>合作伙伴</h2>
			<div><img src="images/Partner_03.jpg" alt=""></div>
		</div>
	</div>
	<!-- 页脚 -->
	<?php include 'footer.php';?>
</body>
</html>