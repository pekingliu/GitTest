<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>服务中心</title>
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
     <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;solutions。php;">        
          <span class="am-icon-github am-icon-fw"></span>解决方案 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li  ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span> 设计云</a></li>   <li class="am-divider"></li>
          <li><a href="solutions-data.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 数据云</a></li>     <li class="am-divider"></li>
          <li><a href="solutions-knowledge.php"><span class="am-icon-user am-icon-fw am-primary"></span> 知识云</a></li>      <li class="am-divider"></li>
          <li><a href="solutions-business.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 商务云</a></li> 
            </ul>
      </li>
      
      <li><a href="product-show.php">产品展示 </a></li>
      <li><a href="customer-case.php">客户案例</a></li>
 <!--      <li><a href="service-center.html">服务中心 </a></li> -->
      <li class="am-dropdown"><a href="news.php">新闻动态 </a></li>
<!--       <li><a href="about-us.html">关于我们</a></li>
      <li><a href="recruit.html">招贤纳士 </a></li> -->
	   


	   <li class="am-dropdown  hw-menu-active" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users am-icon-fw"></span><label id="lbl">欢迎您访问！ </label> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li  class="am-active"><a href="service-center.php"> <span class="am-icon-home"></span> 服务中心 </a></li>  <li class="am-divider"></li>
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
			<span class="toppic-title-span">服务中心</span>
			<p>Service Center</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="index.php" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="service-center.php" class="w-white">服务中心</a></span>
		</div>
	</div>
</div>

<div class=" am-container-1">
	<div class="service-center">
	    <ul class="service-ul">
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">Android应用程序开发</h4>
	    			<p>据统计，2013年，Android全球市场份额达到了78.6%，而中国市场也达到了78%。在移动操作市场，Android已经成为不可动摇的王者。
                                针对目前Android平台日益严重的碎片化问题，我们提供了多种解决方案，针对不同的系统版本，设备型号和设备分辨率，我们提供了全面
                                的兼容性测试。同时，我们为客户的App提供了多平台发布服务，包括Google play，亚马逊应用商店，91，应用汇，机锋网等等多个平台，
                                努力让更多的用户可以下载到。</p>
	    		</div>
	    		<div class="am-u-lg-4 am-u-md-4 am-u-sm-12 service-img">
	    		   <img src="img/android.png" />	
	    		</div>
	    	</li>
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">IOS(iPhone、iPad、Mac os)应用程序开发</h4>
	    			<p>虽然Android的市场份额是绝对的王者，但是在高端手机市场领域，IOS同样成为市场的主导者。据统计，2013年，IOS全球市场份额达到
	    				了17.6%。虽然Android市场份额要比IOS要高，在细分领域，比如教育市场、企业市场、高端市场等，IOS是绝对的王者。我们服务的客户
	    				超过30家，他们来自不同的行业，包括房地产，服务，医疗等等。迄今为止已为客户开发了超过30款ios应用程序，其中有10款是iPad应用
	    				程序，目前上架运营的超过20款。我们紧随时代潮流，将最新的设计理念和技术应用到项目中。</p>
	    		</div>
	    		<div class="am-u-lg-4 am-u-md-4 am-u-sm-12 service-img">
	    		   <img src="img/ios.png" />	
	    		</div>
	    	</li>
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">微信公众平台开发</h4>
	    			<p>具腾讯官方统计，目前微信月活跃用户达到了3亿，其中海外用户更是达到了4千万。随着微信用户的不断增加，腾讯对其微信产品：公众平
	    				台帐号的不断投入与推广，对于企业客户来说，拥有一款微信公众平台产品比拥有一个企业官方网站更重要。我们不但致力于高品质App的开
	    				发，而且在微信公众平台二次开发方面拥有优秀开发人才和市场推广经验。迄今为止，我们已经为数十家企业开发了微信公众平台帐号。客户
	    				可以结合微信公众平台，更好得去运营App平台和网站，不但提高了用户的数量，而且更好得拉近了与用户的距离。</p>
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
	    			<h4 class="w-blue">企业网站开发</h4>
	    			<p>作为企业形象的门面，一个好的企业网站为客户的产品。武汉恒望不断致力于移动互联网产品的开发服务，更注重企业网站。
                                  我们不但致力于高品质App的开发，而且在微信公众平台二次开发方面拥有优秀开发人才和市场推广经验。迄今为止，我们已经为数十家企业
                                  开发了微信公众平台帐号。客户可以结合微信公众平台，更好得去运营App平台和网站，不但提高了用户的数量，而且更好得拉近了与用户的距离。</p>
	    		</div>
	    		<div class="am-u-lg-4 am-u-md-4 am-u-sm-12 service-img">
	    		   <img src="img/website.png" />	
	    		</div>
	    	</li>
	    	<li class="am-u-lg-12 am-u-md-12 am-u-sm-12">
	    		<div class="am-u-lg-8 am-u-md-8 am-u-sm-12 service-content">
	    			<h4 class="w-blue">手机移动网站开发</h4>
	    			<p>随着智能手机用户数量的爆发式增长，企业在拥有一个桌面版的网站的同时，更需要拥有一个适配智能手机的移动版网站。事实证明，拥有移
	    				动版的网站，可以让您的网站在移动版百度搜索结果里面拥有更好的排名。我们为客户提供了基于HTML5+CSS3+JQuery Mobile的移动版网站开
	    				发前端技术，使客户的网站在多种平台多种分辨率下拥有统一的显示效果，另外可以实现更炫的动态效果。</p>
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
