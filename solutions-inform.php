<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>解决方案详情</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
       <script src="jquery-easyui-1.5.2/jquery.min.js" type="text/javascript" > </script>    
   <script type="text/javascript" src="jquery-easyui-1.5.2/jquery.easyui.min.js"></script> 
      <script type="text/javascript" src="jquery-easyui-1.5.2/jquery.cookie.js"></script> 
   <link rel="stylesheet" type="text/css" href="jquery-easyui-1.5.2/themes/icon.css" />
   <link href="jquery-easyui-1.5.2/themes/default/easyui.css" rel="stylesheet" type="text/css" /> 
  
  <link rel="alternate icon" type="img/HENGWANG.png" href="img/HENGWANG.png">
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  
       <script type="text/javascript" src="js/loadcookie.js"></script>  
   <script type="text/javascript">


   $(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码
	    
	     if(username!="" && username!=null) { 
		    // alert(username); 
	         //$("#lbl").text("欢迎您：".username);
	         $("#lbl").html("欢迎您："+username);
	     }


	   }
   )
   
     </script> 
  
</head>
<body>
<header class="am-topbar header">
	<div class="am-container-1">
		<div class="left hw-logo">
  		  <img class=" logo" src="img/CAELogo.png"></img>
		  <img class="word" src="img/logo-word.png"></img>
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">
    

    <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
      <ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
      <li class="hw-menu-active"><a href="index.php">首页</a></li>
      <li ><a href="solutions.php">解决方案</a></li>
      <li><a href="product-show.html">产品展示 </a></li>
      <li><a href="customer-case.html">客户案例</a></li>
      <!-- <li><a href="service-center.html">服务中心 </a></li> -->
      <li><a href="news.html">新闻动态 </a></li>
      <!-- <li><a href="about-us.html">关于我们</a></li> -->
      <!-- <li><a href="recruit.html">招贤纳士 </a></li> -->
      
      

	   <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span><label id="lbl">欢迎您访问！ </label> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="login.php"><span class="am-icon-user"></span> 登陆</a></li>
          <li><a href="register.php"><span class="am-icon-cog"></span> 注册</a></li>
          <!-- <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li> -->
        </ul>
      </li>
      
      
    </ul>
    </div>

  </div>
  </div>
</header>
<div class="toppic">
	<div class="am-container-1">
	 <div class="toppic-title left">
			<i class="am-icon-lightbulb-o toppic-title-i"></i>
			<span class="toppic-title-span">方案详情</span>
			<p>Information</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="solutions.php" class="w-white">解决方案</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="solutions-inform.php" class="w-white">方案详情</a></span>
		</div>
	</div>
</div>

<div class="am-container-1">
	<div class="words-title margin-t30">
		<i class="am-icon-file-text file-text"></i><span>优悦解决方案</span>	
	</div>
</div>
		
<div class="solution-inform">
	<div class=" solution-inform-content-all">
		<div class="solution-inform-content">
		    <p class="inform-content-p">华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，</p>
	      <div class="solution-inform-content-img">
	      	<img src="img/inform.png"/>
	      	<div class="clear"></div>
	      </div>
	      <p class="solution-inform-content-words">(一) 业务管理预受理单据
1) 预受理单据用于需要上门取货的客户及货物信息的录入。预受理单据可以由发货客户远程录入，也可以由业务员录入。录入的预受理单据信息主要包括以下内容：
2) 发货人信息；收货人信息；终点站、到站、付款方式是否保险（保价费）及
3) 货物信息：货物名称、货物包装、件数、运费。
4) 预受理单支持多种条件组合查询。


	</p>
	<p class="solution-inform-content-words">
4) 预受理单支持多种条件组合查询。
5) 预受理单状态为新增（客户录入、业务员录入）。
2. 预受理派车
1) 客户提交预受理单后，系统有提醒。业务员收到提醒信息后，可以点击进入进行预受理派车操作（录入车号、默认司机信息（姓名、电话），提交派车）。
2) 也可以通过查询客户名称、可以通过日期、客户名称或单号等条件查询未派车的预受理单进行派车（录入车号、默认司机信息（姓名、电话），提交派车）。华天公路货运管理系统是华天软件为物流货运企业全力打造的一套物流网络信息化的实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，</br>
	</p>
	
	<p class="solution-inform-content-words">
醒信息后，可以点击进入进行预受理派车操作（录入车号、默认司机信息（姓名、电话），提交派车）。
2) 也可以通过查询客户名称、可以通过日期实在营运解决方案，通过６年的不断积累，汲取数十家物流企业的实战经验，以客户为中心，以业务为纽带，为车辆调度，仓库管理，装车发货，分拣中心，卸货提货，</br>
	</p>
  
  
		</div>
	</div>
</div>
  
   
		


<footer class="footer ">
	
<ul>
        
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
            <div class="part-5-title">联系我们</div>
            <div class="part-5-words2">
		        <span>地址:济南市高新开发区新泺大街1768号齐鲁软件大厦B座A207</span>
                <span>电话:0531-66080199</span>
                <span>传真:(123) 456-7890</span>
                <span>邮箱:sdsc@sdas.org</span>
                <span><i class="am-icon-phone"></i><em >0531-66680211</em></span>
            </div>
        </li>
        <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
            <div class="part-5-title">相关链接</div>
            <div class="part-5-words2">
                <ul class="part-5-words2-ul">
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="solutions.php">解决方案</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="product-show.php">产品展示</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="customer-case.php">客户案例</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="service-center.php">服务中心</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="about-us.php">关于我们</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="recruit.php">招贤纳士</a></li>
                    <div class="clear"></div>
                </ul>
            </div>
        </li>
        <div class="clear"></div>
    </ul>
   
</footer>


</body>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="js/jquery.min.js"></script>
<!--<![endif]-->
<script src="js/amazeui.min.js"></script>

</html>
