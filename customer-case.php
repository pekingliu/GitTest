<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>客户案例</title>
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
  
  <link rel="alternate icon" type="img/HENGWANG.png" href="img/HENGWANG.png">
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
     <link rel="stylesheet" href="css/app.css"/>
  
  <script type="text/javascript" src="js/loadcookie.js"></script>  
  
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
<!--        <li class="hw-menu-active"><a href="solutions.php">解决方案</a></li> -->
      
     <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;solutions。php;">        
          <span class="am-icon-github am-icon-fw"></span>解决方案 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li   ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span> 设计云</a></li>   <li class="am-divider"></li>
           <li><a href="solutions-data.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 数据云</a></li>     <li class="am-divider"></li>
          <li><a href="solutions-knowledge.php"><span class="am-icon-user am-icon-fw am-primary"></span> 知识云</a></li>      <li class="am-divider"></li>
          <li><a href="solutions-business.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 商务云</a></li> 
            </ul>
      </li>
      
      <li><a href="product-show.php">产品展示 </a></li>
      <li  class=" hw-menu-active"><a href="customer-case.php">客户案例</a></li>
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
			<i class="am-icon-briefcase toppic-title-i"></i>
			<span class="toppic-title-span">客户案例</span>
			<p>Customer Case</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="index.php" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="customer-case.php" class="w-white">客户案例</a></span>
		</div>
	</div>
</div>

<div class="am-container-1">
	 <ul data-am-widget="gallery" class="am-gallery am-avg-sm-1
  am-avg-md-3 am-avg-lg-4 am-gallery-bordered customer-case-ul" data-am-gallery="{  }" >
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app2.jpg" />
             </div>
                <h3 class="am-gallery-title">柴油机缸内喷雾燃烧过程分析</h3>
                <div class="am-gallery-desc gallery-words">20世纪60年代末以来，随着计算机技术的飞速发展及计算流体力学、计算传热学、化学动力学等基础理论研究的深入，内燃机燃烧过程的模拟分析成为燃烧研究的重要手段。对某型柴油机缸内喷雾及燃烧过程进行三维模拟计算，对其喷雾流场及燃烧室内燃烧过程进行了分析，为柴油机燃烧过程的完善提供了有价值的参考依据</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app1.jpg"  />
             </div>
                <h3 class="am-gallery-title">白车身节点刚度分析</h3>
                <div class="am-gallery-desc gallery-words">对白车身的各个接头刚度进行分析，评价接头刚度是否满足设计要求。对不满足要求的接头结构，进一步修改车身结构设计，直至接头刚度达到设计要求</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app3.jpg" />
             </div>
                <h3 class="am-gallery-title">汽车多体动力学分析</h3>
                <div class="am-gallery-desc gallery-words">随着汽车工业的发展，人们对汽车安全性、行驶平顺性、操纵稳定性、乘坐舒适性的要求越来越高。传统的设计方法，需经过多轮样车试制，反复的道路模拟试验和整车性能试验，花费巨大，设计周期长。数字化虚拟样机技术是缩短车辆研发周期、降低开发成本、提高产品质量的重要途径。目前，利用系统仿真的概念，基于多体动力学分析程序，使得汽车设计中的主要问题利用数字化样机技术在设计初期就得以解决</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app4.jpg"/>
             </div>
                <h3 class="am-gallery-title">城市高层建筑风场分析</h3>
                <div class="am-gallery-desc gallery-words">针对高层建筑物风场和风压力的问题，采用计算流体动力学（CFD）软件对高层建筑物进行模拟，得出了建筑物在不同风向下的风场和风压力分布    </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app5.jpg" />
              
             </div>
                <h3 class="am-gallery-title">发动机缸盖强度分析</h3>
                <div class="am-gallery-desc gallery-words">发动机缸盖是个结构复杂的零件，在发动机工作中承受缸盖螺栓预紧力、气门座圈的装配应力、温度载荷和交替的燃气压力等作用。缸盖的强度和疲劳安全因数是缸盖设计中的重要参数，模拟计算结果可以给缸盖设计提供参考和修改依据</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app6.jpg"  />
             </div>
                <h3 class="am-gallery-title">发动机水套内流场分析</h3>
                <div class="am-gallery-desc gallery-words">发动机冷却水套的CFD分析是目前发动机开发过程中必不可少的计算分析手段，其计算准确性高、速度快，利用该计算分析技术可保证在发动机热负荷较高的燃烧室及排气道周围有良好的冷却液流动，而压力损失相对较低。利用CFD分析发动机冷却水道的过程，成功分析并优化了发动机缸体、缸盖及机油冷却器箱的水套结构，确定出了流动性较好且压降低的水套，确保了发动机有良好的机内冷却</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app9.jpg" />
             </div>
                <h3 class="am-gallery-title">高性能计算机房环境分析</h3>
                <div class="am-gallery-desc gallery-words">构建高性能计算机房的CFD仿真分析模型，并进行仿真模拟，从而为机房的设计和改造提供依据。在设备安装前模拟设备的热负荷和对环境的影响，确保机房改造时，设备布局科学合理。通过模拟，可以优化地板高度、空间压力分布、送风口的气流速度及位置、机房内机架分布等</div>
            </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app10.jpg"/>
             </div>
                <h3 class="am-gallery-title">某型商用车后桥主减速器强度分析及优化</h3>
                <div class="am-gallery-desc gallery-words">针对某型商用车后桥主减速器，对其真实工作状况进行了仿真模拟，得到了主减速器主要零部件在工作状态下的应力、应变分布。在满足刚度要求的约束下，开展主减速器壳体的拓扑优化，以降低其重量。通过拓扑优化，主减速器壳体最终减重5kg，壳体材料分布更合理，经济效益显著     </div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app11.jpg"/>
             </div>
                <h3 class="am-gallery-title">列车隧道内交会过程分析</h3>
                <div class="am-gallery-desc gallery-words">近年来，高速列车得到了迅猛发展，随着列车运行速度的提高，空气动力学问题已成为制约列车提速的重要因素，引起了广泛关注。为真实模拟高速列车在隧道内的交会，建立了简化的某动车组模型，利用CFD软件对列车隧道内交会过程进行了仿真，研究了交会过程中列车表面压力的分布规律以及气动载荷的变化规律，为高速铁路设计及列车运行稳定性、乘坐舒适性评估提供参考</div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app12.jpg"/>
             </div>
                <h3 class="am-gallery-title">汽车发动机舱温度场分析</h3>
                <div class="am-gallery-desc gallery-words">发动机舱内空间小，多个高热源布置在一个狭小的空间内，导致散热比较困难。因此合理组织流场，保证气流充分带走发动机及其它散热部件的热量是设计师面临的挑战。运用CFD技术分析发动机舱温度场，时间短、费用低。随着CFD技术的不断发展，近年来出现了对汽车发动机舱的流场与散热性能进行预测、分析和优化的全三维模拟</div>
      </li>
      <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app14.jpg"/>
             </div>
                <h3 class="am-gallery-title">汽车外流场分析</h3>
                <div class="am-gallery-desc gallery-words">随着计算机技术和湍流理论的发展，CFD技术被运用到汽车空气动力学研究中。汽车外流场数值模拟就是利用数值模拟的方法对汽车行驶中的外流场进行分析，与传统的研究方法结合，有效地改善汽车性能、节约研究资金、提高研究效率</div>
      </li>
            <li>
        <div class="am-gallery-item">
            <a href="#" class="">
            	<div class="customer-case-img">
              <img src="img/customcase/app15.jpg"/>
             </div>
                <h3 class="am-gallery-title">修井机强度分析</h3>
                <div class="am-gallery-desc gallery-words">针对修井机起升工况，首先进行井架起升过程的多体动力学分析，得出井架受载荷最大的起升角度。针对该角度，建立修井机强度分析的有限元模型，得出修井机起升过程中应力、应变分布。修井机起升到位后，考虑二层台的载荷、风载，对修井机开展工作状态下的强度分析，得出修井机工作状态下的应力、应变分布</div>
      </li>
  </ul>
	
</div>
<div class="part-all gray-li">
<div class="customer  am-container-1">
		<div class="part-title">
			<i class="am-icon-users part-title-i"></i>
			<span class="part-title-span">服务客户</span>
			<p>Serve Customers</p>
		</div>
		
		<div class="am-slider am-slider-default am-slider-carousel part-all" data-am-flexslider="{itemWidth:150, itemMargin: 5, slideshow: false}" style="  background-color: #f0eeed; box-shadow:none;">
		  <ul class="am-slides">
		    <li><img src="img/ptn4.png"/></li>
		    <li><img src="img/ptn5.png"/></li>
		    <li><img src="img/ptn6.png"/></li>
		    <li><img src="img/ptn7.png"/></li>
		    <li><img src="img/ptn8.png"/></li>
		    <li><img src="img/ptn4.png"/></li>
		    <li><img src="img/ptn5.png"/></li>
		    <li><img src="img/ptn6.png"/></li>
		    <li><img src="img/ptn7.png"/></li>
		    <li><img src="img/ptn8.png"/></li>
		  </ul>
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
<script src="js/amazeui.min.js"></script>

</html>
