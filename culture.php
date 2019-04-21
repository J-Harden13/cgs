<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/culture.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/service.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <?php include 'header.php';?>
    <div class="banner">
        <div class="img pc"><img src="images/about_01.jpg" alt=""></div>
        <div class="img mobile"><img src="images/images/banner_about.jpg" alt=""></div>
    </div>
    <!-- 菜单导航 -->
    <div class="menu_nav pc">
        <div class="container">
            <ul>
                <li class="active"><a href="about.php">企业简介</a></li>
                <li><a href="culture.php">品牌文化</a></li>
                <li><a href="course.php">发展历程</a></li>
                <li><a href="team.php">创始团队</a></li>
                <li><a href="store.php">门店查询</a></li>
                <li><a href="join_we.php">加入我们</a></li>
            </ul>
        </div>
    </div>
    <!-- 品牌文化 -->
    <div class="culture ">
        <div class="container">
            <h2>品牌文化</h2>
            <p>我们致力于实现企业品牌的价值所在</p>
            <ul>
                <li><div class="wrap"><img src="images/culture_03.jpg" alt=""></div><h5>企业定位</h5><p>打造中国汽车O2O领域共享平台</p></li>
                <li><div class="wrap"><img src="images/culture_05.jpg" alt=""></div><h5>企业理念</h5><p>创新、共享、共建、共赢</p></li>
                <li><div class="wrap"><img src="images/culture_07.jpg" alt=""></div><h5>企业目标</h5><p>国际化、品牌化、专业化</p></li>
                <li><div class="wrap"><img src="images/culture_09.jpg" alt=""></div><h5>企业使命</h5><p>成就客户、成就品牌、成就员工</p></li>
            </ul>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>