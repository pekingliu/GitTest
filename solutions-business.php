<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>解决方案-商务云</title>
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
     <li class="am-dropdown hw-menu-active" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;solutions。php;">        
          <span class="am-icon-github am-icon-fw"></span>解决方案 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li  ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span> 设计云</a></li>   <li class="am-divider"></li>
          <li><a href="solutions-data.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 数据云</a></li>     <li class="am-divider"></li>
          <li  ><a href="solutions-knowledge.php"><span class="am-icon-user am-icon-fw am-primary"></span> 知识云</a></li>      <li class="am-divider"></li>
          <li class="am-active"><a href="solutions-business.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 商务云</a></li> 
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
				<i class="am-icon-lightbulb-o toppic-title-i"></i> <span
					class="toppic-title-span">商务云</span>
				<p>Business Cloud</p>
			</div>
			<div class="right toppic-progress">
				<span><a href="solutions.php" class="w-white">解决方案</a></span> <i
					class=" am-icon-arrow-circle-right w-white"></i> <span><a
					href="solutions-business.php" class="w-white">商务云</a></span>
			</div>
		</div>
	</div>
	
	<div class="mysection" style="background: #f3f4f4;">
		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 " style="background: #f3f4f4;">
			<h2 class="mysection--title">商务云</h2>
			<p class="mysection--description">服务于产品销售，汇聚企业采购需求信息与配套企业销售信息，借助大数据分析，对两者进行智能、精准和及时匹配。
			</p>
			<br>
		</div>
	</div>


	<div data-am-widget="tabs"class="am-tabs am-tabs-d2 ">

      <ul class="am-tabs-nav am-cf solutions-tabs-ul ">
         <li class="am-active solutions-tabs-ul-li1"><a href="[data-tab-panel-0]" ><i class=" am-primary am-icon-shield "></i><span>CAD</span></a></li>
          <li class="solutions-tabs-ul-li2"><a href="[data-tab-panel-1]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>CAE前处理</span></a></li>
          <li class="solutions-tabs-ul-li3"><a href="[data-tab-panel-2]" ><i class=" am-icon-desktop"></i><span>CAE大规模作业</span></a></li>
          <li class="solutions-tabs-ul-li4"><a href="[data-tab-panel-3]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>CAE后处理</span></a></li>
      </ul>

      <div class="am-tabs-bd solutions-tabs-content ">
          <div data-tab-panel-0 class="am-tab-panel am-active">
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/Grab.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>TH-PDM面向产品全生命周期管理的产品数据管理系统</h5>
            			<p>TH-PDM系统就是在上述的理念基础上开发出来的新一代的国产PDM系统，TH-PDM不仅在传统的 “VPSCII”标准上有丰富的功能和解决方案，更为重要的是，它有更为全面的业务建模能力，支持应用得到持续拓展和优化；有丰富的远程协同解决方案，支持管理业务范围的持续扩大；有强大的全文检索引擎，支持对智力资产的不断挖掘和复用。</p>
            		</div>
            		</a> 
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/Grab.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>TH-PDM面向产品全生命周期管理的产品数据管理系统</h5>
            			<p>TH-PDM系统就是在上述的理念基础上开发出来的新一代的国产PDM系统，TH-PDM不仅在传统的 “VPSCII”标准上有丰富的功能和解决方案，更为重要的是，它有更为全面的业务建模能力，支持应用得到持续拓展和优化；有丰富的远程协同解决方案，支持管理业务范围的持续扩大；有强大的全文检索引擎，支持对智力资产的不断挖掘和复用。</p>
            		</div>
            		</a> 
            	</li>

            	<div class="clear"></div>
            </ul>
            
          </div>
          <div data-tab-panel-1 class="am-tab-panel ">
             <ul class="am-container-1 solutions-content-ul">
				            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/Disk Tracker.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>天河 TH-MCAD2011 个人版</h5>
            			<p>随着国家对知识产权保护的加强，“免费”使用正版软件成为每个使用者的梦想。广大设计工程师是天河软件发展的见证者，为了感谢您多年的陪伴与信任，天河公司推出这款个人版TH-MCAD，免费下载，免费注册使用，愿TH-MCAD成为您工程绘图的好伴侣。</p>
            		</div>
            		</a>
            	</li>
            	</a>
            </ul>
          </div>
          <div data-tab-panel-2 class="am-tab-panel ">
            <ul class="am-container-1 solutions-content-ul">
            	
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/Address Book.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>Fluent (14.0)</h5>
            			<p>Fluent是目前国际上比较流行的商用CFD软件包，在美国的市场占有率为60%，凡是和流体、热传递和化学反应等有关的工业均可使用。它具有丰富的物理模型、先进的数值方法和强大的前后处理功能，在航空航天、汽车设计、石油天然气和涡轮机设计等方面都有着广泛的应用。</p>
            		</div>
            		</a>
            	</li>
            	            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/Earth.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>ANSYS (14.0)</h5>
            			<p>ANSYS软件是融结构、流体、电场、磁场、声场分析于一体的大型通用有限元分析软件。由世界上最大的有限元分析软件公司之一的美国ANSYS开发，它能与多数CAD软件接口，实现数据的共享和交换，如Creo, NASTRAN, Alogor, I－DEAS, AutoCAD等， 是现代产品设计中高级CAE工具之一。</p>
            		</div>
            		</a>
            	</li>
            </ul>
          </div>
          <div data-tab-panel-3 class="am-tab-panel ">
            <ul class="am-container-1 solutions-content-ul">
            	<a href="#">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/PPOE Connection.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>TH-CAPP集成化智能工艺设计管理平台系统</h5>
            			<p>TH-CAPP集成化智能工艺设计管理平台系统完全基于网络、数据库，实用、智能、开放、安全、满足各专业设计要求及系统集成的要求。具有以下特点：所见所得，高效实用；实时支持企业卡片标准的更新；满足任何企业、任何专业的工艺设计要求；自动汇总及报表；满足集成要求；方便的二次开发手段；提供安全保障。</p>
            		</div>
            		</a>
            	</li>
            </ul>
          </div>
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
