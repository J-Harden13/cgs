<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/course.css">
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
    <!-- 发展历程 -->
    <div class="course">
        <h2>发展历程</h2>
        <p>生命不止，奋斗不息</p>
        <div class="time pc">
            <div class="top">
                <p>广东管车所资产管理有限公司成立</p>
                <p>广州、佛山等地总代、分公司成立</p>
                <p>获得梅花天使创投吴世春领投的千万级天使轮融资，另有车卫士信息科技董事长郭文艺、通融天使机构曾素兰、天易GPS科技刘杰等天使投资人战略入股……</p>
                <p>于深圳成立全国运营中心</p>
            </div>
            <div class="img"><img src="images/course_time_03.png" alt=""></div>
            <div class="bottom">
                <p>与广东东莞多家合作商达成战略合作</p>
                <p>全国招商峰会首战告捷，揭阳、惠州、清远分公司相继成立,业务覆盖至200个城市。</p>
                <p>交易额突破1.38亿，约1000台车，月平均销量约120台；珠三角拥有103家合作经销商战略入股……</p>
                <p>多家上市公司资本合股投资</p>
            </div>
        </div>
        <div class="time_mob mobile">
            <div class="img"><img src="images/images/course_03.png" alt=""></div>
            <div class="word">
                <ul>
                    <li>广东管车所资产管理有限公司</li>
                    <li>与广东东莞多家合作商达成战略合作</li>
                    <li>广州、佛山等地总代、分公司成立</li>
                    <li>全国招商峰会首战告捷，揭阳、惠州、清远分公司相继成立,业务覆盖至200个城市。</li>
                    <li>获得梅花天使创投吴世春领投的千万级天使轮融资，另有车卫士信息科技董事长郭文艺、通融天使机构曾素兰、天易GPS科技刘杰等天使投资人战略入股……</li>
                    <li>交易额突破1.38亿，约1000台车，月平均销量约120台；珠三角拥有103家合作经销商战略入股……</li>
                    <li>于深圳成立全国运营中心</li>
                    <li>多家上市公司资本合股投资</li>
                </ul>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>