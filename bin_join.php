<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/bin_join.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/service.js"></script>
    <script src="js/common.js"></script>
</head>
<body>
    <?php include 'header.php';?>
    <div class="banner">
        <div class="img pc"><img src="images/banner_bin_01.jpg" alt=""></div>
        <div class="img mobile"><img src="images/images/banner_bin.jpg" alt=""></div>
    </div>
    <!-- 菜单导航 -->
    <div class="menu_nav pc">
        <div class="container">
            <ul>
                <li><a href="business.php">一键购车</a></li>
                <li><a href="bin_service.php">一键服务</a></li>
                <li><a href="bin_share.php">一键共享</a></li>
                <li><a href="bin_join.php">申请加盟</a></li>
            </ul>
        </div>
    </div>
    <!-- 注册 -->
    <div class="register">
        <div class="container">
            <div class="wrap">
            <div class="name"><span>姓名：</span><input type="text"><i>*</i></div>
            <div class="tel"><span>手机号：</span><input type="text"><i>*</i></div>
            <div class="area"><span>地区：</span><input type="text"><span class="top"></span><i>*</i></div>
            <a href="">提交</a>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php';?>
</body>
</html>