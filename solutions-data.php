<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>工业大数据</title>
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
   
  <script src="js/alertify.js-0.3.11/lib/alertify.min.js"></script>
  <link rel="stylesheet" href="js/alertify.js-0.3.11/themes/alertify.core.css" />
  <link rel="stylesheet" href="js/alertify.js-0.3.11/themes/alertify.default.css" />
  <script type="text/javascript" src="js/loadcookie.js"></script> 
  
  <link rel="alternate icon" type="img/CAELogo.png" href="img/CAELogo.png">
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  
  <script type="text/javascript">


   $(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码
	    
	     usercheck();
	   }
   )
   
   function usercheck(){
	       // alert("登陆检测！");
		     if(username!="" && username!=null) { 
			     //alert(username); 
		         //$("#lbl").text("欢迎您：".username);
		         $("#lbl").html("欢迎您："+username);
		         alertify.success("欢迎您：："+username);
		     }			 //alertify.alert("请登录！");			 
			 var currenturl = window.location.href;
			 //alert(currenturl);
			 Cookies.set('cookie_forweb_url',currenturl, {  path: '' });
			// window.location.href="login.php";				
	   }
   
   function exitsys(){
   	// confirm dialog
   	   alertify.confirm("退出登录？", function (e) {
   	    if (e) {   	    
   	        //alertify。success("ok quit");
   	        if(username!="" && username!=null) { 
   	    		Cookies.remove('cookie_name',{ path: '' });
   	    		Cookies.remove('cookie_softname',{ path: '' });
   	    		Cookies.remove('cookie_apptype',{ path: '' });
   	    		Cookies.remove('cookie_apptime',{ path: '' }); 
   	    		
   	    		username = ""; 
   	    		softname="";
   	    		applytype="";
   	    		applytime="";
   	    		//Cookies.remove('cookie_forweb_url',{  path: '' });	
   	    		 $("#lbl").html("欢迎您访问！");
	         		alertify.success("谢谢你！您已经退出！"); 	 
	         		usercheck();
	         		//location.reload()
	 			}
   	    } else {
   	        // user clicked "cancel"
   	    }
      });
	 			//alertify.alert("退出登录！");	 				
	 }
   
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
     <li ><a href="index.php">首页</a></li>      
     <li class="am-dropdown hw-menu-active" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;solutions。php;">        
          <span class="am-icon-github am-icon-fw"></span>解决方案 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li   ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span> 设计云</a></li>   <li class="am-divider"></li>
          <li  class="am-active"><a href="solutions-data.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 数据云</a></li>     <li class="am-divider"></li>
          <li><a href="solutions-knowledge.php"><span class="am-icon-user am-icon-fw am-primary"></span> 知识云</a></li>      <li class="am-divider"></li>
          <li><a href="solutions-business.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 商务云</a></li> 
            </ul>
      </li>
      
      <li><a href="product-show.php">产品展示 </a></li>
      <li><a href="customer-case.php">客户案例</a></li>
      <!-- <li><a href="service-center.html">服务中心 </a></li> -->
      <li><a href="news.php">新闻动态 </a></li>
      <!-- <li><a href="about-us.html">关于我们</a></li> -->
      <!-- <li><a href="recruit.html">招贤纳士 </a></li> -->
	   


	   <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users am-icon-fw"></span><label id="lbl">欢迎您访问！ </label> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="service-center.php"> <span class="am-icon-home"></span> 服务中心 </a></li>  <li class="am-divider"></li>
          <li><a href="about-us.php"><span class="am-icon-qq"></span> 关于我们</a></li>  <li class="am-divider"></li>
          <li><a href="recruit.php"><span class="am-icon-user"></span> 招贤纳士 </a></li>  <li class="am-divider"></li>
          <li><a href="login.php"><span class="am-icon-user"></span> 登陆</a></li> <li class="am-divider"></li>
          <li><a href="register.php"><span class="am-icon-cog"></span> 注册</a></li> <li class="am-divider"></li>
          <li><a href="javascript:void(0)" onclick="exitsys()"> <span class="am-icon-power-off"></span> 退出</a></li>
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
			<i class="am-icon-hand-paper-o toppic-title-i"></i>
			<span class="toppic-title-span">数据云</span>
			<p>Solutions data cloud</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="solutions.php" class="w-white">解决方案</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="solutions-data.php" class="w-white">数据云</a></span>
		</div>
	</div>
</div>

<div class=" am-container-1">
	<div class="service-center">
	    <ul class="service-ul">
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">工业大数据价值实现的场景</h4>
	    			<p>工业大数据应用场景主要可以归纳为两个场景，一个是围绕制造全生命周期的业务创新即先进制造，通过大数据驱动的创新产品设计、智能制造、智能服务，实现“提质、增效、降耗、控险”，达到提升企业在行业内竞争力的目的；另一个是产业互联网新业务创新（制造+互联网）：以智能联网的工业产品为载体承载服务产品周边生态系统的产业互联网业务，达到开创新兴市场和业务模式的目的。</p>
	    		</div>
	    		<div class="am-u-lg-4 am-u-md-4 am-u-sm-12 service-img">
	    		   <img src="img/android.png" />	
	    		</div>
	    	</li>
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">工业大数据在工程机械领域应用案例</h4>
	    			<p>工程机械设备大都在野外作业，作业环境恶劣，作业工况复杂。基于工程机械大数据解决方案实时监测设备状况，实现对设备的预防性维修及服务，在设备发送故障前，主动预警并触发维保方案， 基于设备运行状况大数据分析，为企业带来新的决策创新-助力企业准确判断市场热度、实现产品精准营销、产品改进和企业风险管控。</p>
	    		</div>
	    		<div class="am-u-lg-4 am-u-md-4 am-u-sm-12 service-img">
	    		   <img src="img/ios.png" />	
	    		</div>
	    	</li>
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">工业大数据在风电领域应用</h4>
	    			<p>基于工业大数据分析平台，从故障预警、运营优化等方面着手挖掘大数据价值，取得明显成效。风机的设计/仿真数据、运维档案、风机状态监测数据、测风塔观测数据、气象数据、地理信息等风电数据资源池统一整合到工业大数据分析平台，通过装备智能化、供应链协同、跨生态整合三条路径，逐步实践风电装备制造的数字化升级。在既有业务提质增效的基础上，进一步驱动产业互联新业务。</p>
	    		</div>
	    		<div class="am-u-lg-4 am-u-md-4 am-u-sm-12 service-img">
	    		   <img src="img/wechat.png" />
	    		</div>
	    	</li>
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">服务器接口开发</h4>
	    			<p>无论ios平台、android平台、windows phone平台还是微信公众帐号平台，要想保持程序运行的稳定性、即时性，必须要有一个优良的服
	    				务器平台作为支撑。我们为客户提供了全球领先的服务器开发语言PHP和JAVA。根据客户的不同需求选择不同的开发语言，我们的服务器接
	    				口性能优良，支持十万百万级的用户并发量。</p>
	    		</div>
	    		<div class="am-u-lg-4 am-u-md-4 am-u-sm-12 service-img">
	    		   <img src="img/webservice.png" />	
	    		</div>
	    	</li>
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">工业大数据的业务落地</h4>
	    			<p>通常来讲，在与企业规划工业大数据业务落地可以从两个维度与企业一同进行思考。一方面是从业务驱动角度来看，要思考企业的整体业务目标是什么，为了实现这个业务目标要做什么样的转型以及哪方面的能力提升，具体的业务提升和转型方向是什么；为了实现业务目标，理想的业务流程是什么，如何让这个流程跟数据流进行相应的结合和映射。这是一个由上而下的思考过程，是企业的高层管理者、战略管理者进行思考并牵引，通过中间管理层完善与丰富，最后落地实施的过程。很多时候大数据应用确实可以解决业务问题，但也可能解决不了所有的业务问题。大数据应用真正帮助企业的不仅仅是在于具体业务问题的解决层面，它是要让企业构建对数据驾驭的能力，当企业具备了这种能力后，才能够真正让企业在内部的生产管理、对外的经营模式上产生变化，真正形成持续的创新与应用的能力。</p>
	    		</div>
	    		<div class="am-u-lg-4 am-u-md-4 am-u-sm-12 service-img">
	    		   <img src="img/website.png" />	
	    		</div>
	    	</li>
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">工业大数据面临的挑战</h4>
	    			<p>企业应用工业大数据面临的技术挑战。企业普遍面临数据基础薄弱的境况，企业收集的数据不够，甚至没有数据。企业真的要在数据转型有战略上的调整，它才会有较大的投入，如果它没有这种战略规划的时候，很难负担得起专业数据人才的成本。市场上也缺乏工业大数据所需的复合型人才。另外每个工业领域里都有独特的知识领域和机理形成的行业门槛，没有一个普适性的解决方案可以在工业领域里通用。行业解决方案，只会对某一个行业才能发挥相应的价值。</p>
	    		</div>
	    		<div class="am-u-lg-4 am-u-md-4 am-u-sm-12 service-img">
	    		   <img src="img/mwebsite.png" />
	    		</div>
	    	</li>
	    </ul>
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
<script src="js/jquery.min.js"></script>
<script src="js/amazeui.min.js"></script>
<!--[if (gte IE 9)|!(IE)]><!-->

</html>
