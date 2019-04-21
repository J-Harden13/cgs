<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/yun.css">
	<script src="js/rem.js"></script>
	<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/yun.js"></script>
    <script src="js/service.js"></script>
    <script src="js/common.js"></script>
</head>
<body>  
    <?php include 'header.php';?>
    
    <div class="banner">
        <div class="img pc"><img src="images/banner_yun.jpg" alt=""></div>
        <div class="img mobile"><img src="images/images/banner_yun.jpg" alt=""></div>
        <canvas class="pc" id="J_dotLine" width="100%"></canvas>
    </div>
    
    <!-- 关于我们 -->
    <div class="abt_we">
        <div class="container">
            <h2 class="pc">关于我们</h2>
            <h2 class="mobile">关于管云</h2>
            <ul>
                <li class="abt_we_left"><div class="img pc"><img src="images/we_04.png" alt=""></div><div class="img mobile"><img src="images/images/we_04.png" alt=""></div></li>
                <li class="abt_we_right"><p>管云基于大数据分析和人工智能技术搭建了一个共享的信用体系和金融服务平台。在为管车所提供技术支撑和系统解决方案的同时，两大核心产品：金眼风控、管银钱包，已经开始涉足泛金融行业的其他业务场景并逐步商用化。为商家提供反欺诈，风险评估服务，提高运营效率，优化业务决策，为消费者提供便捷的金融服务。</p></li>
            </ul>
        </div>
    </div>
    <!-- 风控体系 -->
    <div class="risk">
        <div class="container">
            <h2>金眼风控体系</h2>
            <ul>
                <li class="risk_left"><h5>金眼风控体系</h5><p>面向所有需要金融领域风控能力的客户，提供帮助企业洞察风险业务员统计分析功能。</p><h5>服务对象</h5><p>消费金融、垂直金融、消费贷、小额贷款、P2P等平台</p></li>
                <li class="risk_right"><div class="img"><img src="images/risk_04.png" alt=""></div></li>
            </ul>
        </div>
    </div>
    <!-- 钱包体系 -->
    <div class="wallet">
        <div class="container">
            <h2>管银钱包体系</h2>
            <ul>
                <li class="wallet_left"><h5>管银钱包</h5><p>面向所有需要线上金融服务的商家，并为实际用户提供辩解的金融方案。</p><h5>服务对象</h5><p>TO B：融资租赁、垂直金融、消费贷、小额贷款、P2P等平台 TO C：互联网消费用户。</p></li>
                <li class="wallet_right"><div class="img"><img src="images/risk_08.png" alt=""></div></li>
        </div>
        </div>
    </div>
    <!-- 我们的优势 -->
    <div class="adv_yun">
        <div class="container">
            <h2>我们的优势</h2>
            <ul>
                <li><div class="img"><img src="images/adv_yun_07.png" alt=""></div><h5>技术能力</h5><p>通过管云强大的技术能力，洞察潜在的信贷欺诈风险。</p></li>
                <li><div class="img"><img src="images/adv_yun_04.png" alt=""></div><h5>数据能力</h5><p>通过将申请主体的数据与技术挖掘的海量全网数据分析对比，分析潜在的信贷欺诈风险。</p></li>
                <li><div class="img"><img src="images/adv_yun_10.png" alt=""></div><h5>建模能力</h5><p>可根据用户需求实现定制化的服务，满足用户业务需求。</p></li>
            </ul>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>