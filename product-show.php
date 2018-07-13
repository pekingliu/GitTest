<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>产品库</title>
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
  <link rel="alternate icon" type="img/HENGWANG.png" href="img/HENGWANG.png">
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
		<a href="../introduce">
		  <img class=" logo" src="img/LOGO_sl.png"></img>
<!-- 		  <img class="word" src="img/logo-word.png"></img> -->
		  </a>
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse " id="doc-topbar-collapse">
    

<!--     <div class=" am-collapse am-topbar-collapse" role="search"> -->
	   <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
			<ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
 <li ><a href="index.php">首页</a></li>     
 
 	     <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;solutions.php;">        
          <span class="am-icon-github am-icon-fw"></span>核心业务 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span>超链仿真云</a></li>   <li class="am-divider"></li>
          <li><a href="solutions_gaoxingneng.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 高性能计算</a></li>     <li class="am-divider"></li>
          <li><a href="solutions_info.php"><span class="am-icon-user am-icon-fw am-primary"></span> IT技术服务</a></li>      <li class="am-divider"></li>
          <li><a href="solutions_gis_bigdata.php"><span class="am-icon-cog am-icon-fw am-primary"></span>地理信息大数据平台</a></li> 
            </ul>
      </li>
 
 
  
     <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle hw-menu-active" data-am-dropdown-toggle href="javascript:;solutions.php;">        
          <span class="am-icon-github am-icon-fw"></span>产品与解决方案 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
<!--           <li ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span> 设计云</a></li>   <li class="am-divider"></li> -->
          <li class="hw-menu-active"><a href="product-show.php"><span class="am-icon-cog am-icon-fw am-primary"></span>产品库</a></li>     <li class="am-divider"></li>
          <li><a href="javascript:;"><span class="am-icon-user am-icon-fw am-primary"></span> 解决方案</a></li>  
		 <!-- <li class="am-divider"></li> -->
        </ul>
      </li>
      <li><a href="news.php">新闻动态 </a></li>
      <li><a href="partner.php">合作伙伴</a></li>

	  <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users am-icon-fw"></span><label id="lbl">关于我们</label> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="about-us.php"> <span class="am-icon-home"></span>公司介绍</a></li>  <li class="am-divider"></li>
          <li><a href="javascript:;"><span class="am-icon-user"></span>联系我们</a></li>  
        </ul>
      </li>	   



	</ul>
<!-- 	</div> -->

  </div>

  </div>
</header>
<div class="toppic">
	 <div class="am-container-1">
	 <div class="toppic-title left">
			<i class="am-icon-dropbox toppic-title-i"></i>
			<span class="toppic-title-span">产品库</span>
			<p>Product Show</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="index.php" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="javascript:void(0);" class="w-white">产品与解决方案</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="product-show.php" class="w-white">产品库</a></span>
		</div>
	</div>
</div>

<div >
	<ul class=" product-show-ul">
	    <li >
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-left">
			    		<div class="product-show-title">
<!-- 			    			<h3>泉云</h3> -->
			    			<span>泉云管理平台</span>			    			
			    		</div>			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>查看地址：</span>
			    			<div><a href="https://www.sdcloud.net/" target="_blank">泉云</a></div>
			    			<i class="am-icon-dribbble"></i>
			    		</div>
			    		<div class="product-intro">
			    			<span>详情介绍：</span>
			    			<div><p><span class="am-badge am-badge-primary am-round">1</span>
			    			 资源:对服务器、磁盘阵列等信息化基础资源进行整合管理和高效利用，提高资源利用率，节能降耗，降低运维成本，并易于扩展。
							</p>
							<p><span class="am-badge am-badge-secondary am-round">2</span>
							 应用:对各类业务系统进行运维管理，保证各类业务系统的连续性、可靠性和安全性，出现故障第一时间进行响应。
							</p>
							<p><span class="am-badge am-badge-success am-round">3</span>
							数据:高效存储处理来自物联网、互联网的海量数据，打通“信息孤岛”，对沉淀在业务系统中的海量历史数据进行整合、分析和利用，辅助管理决策.
							</p></div>
			    		  <i class="am-icon-tasks"></i>
			    		</div>
			    	</div>
			    	</div>
			    	<div class=" am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-right">
			    		<img class="product-img" src="img/product/图片2.png" />
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>	
	    
	    <li class="gray-li">
	    	<div class="product-content ">
			    	<div class="left am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-left">
			    		<div class="product-show-title">
<!-- 			    			<h3>泉云</h3> -->
			    			<span>水滴实验室</span>			    			
			    		</div>			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>查看地址：</span>
			    			<div><a href="https://www.sdcloud.net/" target="_blank">泉云</a></div>
			    			<i class="am-icon-dribbble"></i>
			    		</div>
			    		<div class="product-intro">
			    			<span>详情介绍：</span>
			    			<div><p><span class="am-badge am-badge-primary am-round">1</span>
			    			实验环境按需定制。
							</p>
							<p><span class="am-badge am-badge-secondary am-round">2</span>
							 实验桌面秒级就绪。
							</p>
							<p><span class="am-badge am-badge-success am-round">3</span>
							实验教学互动互助.
							</p>
							<p><span class="am-badge am-badge-success am-round">4</span>
							实验过程实时监控.
							</p>
							<p><span class="am-badge am-badge-success am-round">5</span>
							海量免费云资源.
							</p></div>
			    		  <i class="am-icon-tasks"></i>
			    		</div>
			    	</div>
			    	</div>
			    	<div class=" am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-right">
			    		<img class="product-img" src="img/product/图片3.png" />
<!-- 			    		<img class="product-img" src="img/product/图片4.png" /> -->
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>	
	    
	    
	    <li class="gray-li--">
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-left">
			    		<div class="product-show-title">
<!-- 			    			<h3>超链高性能</h3> -->
			    			<span>超链HPC监控管理系统</span>			    			
			    		</div>			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>查看地址：</span>
			    			<div><a href="javascript:;" target="_blank"></a></div>
			    			<i class="am-icon-dribbble"></i>
			    		</div>
			    		<div class="product-intro">
			    			<span>详情介绍：</span>
			    			<div><p><span class="am-badge am-badge-primary am-round">1</span>
			    			作业级监控管理。
							</p>
							<p><span class="am-badge am-badge-secondary am-round">2</span>
							实时监控作业状态。
							</p>
							<p><span class="am-badge am-badge-success am-round">3</span>
							快速定位作业故障.
							</p>
						</div>
			    		  <i class="am-icon-tasks"></i>
			    		</div>
			    	</div>
			    	</div>
			    	<div class=" am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-right">
			    		<img class="product-img" src="img/product/图片4.png" />
<!-- 			    		<img class="product-img" src="img/product/图片4.png" /> -->
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>
	    
	    	    
	    <li class="gray-li">
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-left">
			    		<div class="product-show-title">
<!-- 			    			<h3>超链高性能</h3> -->
			    			<span>超链大数据与人工智能系统</span>			    			
			    		</div>			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>查看地址：</span>
			    			<div><a href="javascript:;" target="_blank"></a></div>
			    			<i class="am-icon-dribbble"></i>
			    		</div>
			    		<div class="product-intro">
			    			<span>详情介绍：</span>
			    			<div><p><span class="am-badge am-badge-primary am-round">1</span>
			    			科教融合实训平台。
							</p>
							<p><span class="am-badge am-badge-secondary am-round">2</span>
							科技智库信息平台。
							</p>
							<p><span class="am-badge am-badge-success am-round">3</span>
							图像标注深度学习.
							</p>
							<p><span class="am-badge am-badge-warning am-round">4</span>
							遥感数据应用集市.
							</p>
							<p><span class="am-badge am-badge-danger am-round">5</span>
							信息安全态势感知.
							</p>
							<p><span class="am-badge am-badge-success am-round">6</span>
							健康医疗大数据.
							</p>
						
						</div>
			    		  <i class="am-icon-tasks"></i>
			    		</div>
			    	</div>
			    	</div>
			    	<div class=" am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-right">
			    		<img class="product-img" src="img/product/图片5.png" />
<!-- 			    		<img class="product-img" src="img/product/图片4.png" /> -->
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>
	    
	    
	    
	    
	    <li >
	    	<div class="product-content">			    	
			    	<div class=" am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-right">
			    		  <div class="product-show-title">
<!-- 			    			<h3>无人机</h3> -->
			    			<span>超链集群部署智能机器人</span>
			    		</div>
			    	
			    		<div class="product-show-content">
			    			<div class="product-add">
			    				<span>查看地址：</span>
			    				<div><a href="javascript:void(0);"></a></div>
			    				<i class="am-icon-dribbble"></i>
			    			</div>
			    			<div class="product-intro">
			    				<span>详情介绍：</span>
			    				<div>
			    				<p><span class="am-badge am-badge-warning am-round">1</span>
			    				高性能计算集群批量化自动部署机器人1.0.</p>
								<p><span class="am-badge am-badge-danger am-round">2</span>
								大数据集群批量化自动部署机器人1.0。</p>
								<p><span class="am-badge am-round">3</span>
								云计算集群批量化自动部署机器人1.0.	</p>
								</div>
			    		  		<i class="am-icon-tasks"></i>
			    			</div>
			    		</div>
			    	</div>	
			    	
			    	<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-left">
<!-- 			    		<img class="product-img" src="img/product_img/Hyperworks_OptiStruct.png" /> -->
			    		
			    	</div>
			    	<div class="clear"></div>
	    	</div>
	    </li>
	    <li class="gray-li">
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-left">
			    		<div class="product-show-title">
<!-- 			    			<h3>Abaqus/CAE </h3> -->
			    			<span>超链运维管家服务</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>查看地址：</span>
			    			<div><a href="#">商务云</a></div>
			    			<i class="am-icon-dribbble"></i>
			    		</div>
			    		<div class="product-intro">
			    			<span>详情介绍：</span>
			    			<div><p><span class="am-badge am-badge-primary am-round">1</span>
			    			软件层以上的检测控制、作业调度、软件移植、数据迁移、并行计算优化等事宜；</p>
			    			<p><span class="am-badge am-badge-secondary am-round">2</span>
			    			软件层以下的计算、存储、网络、安全、配电、制冷、综合布线、消防等支撑系统的软硬件维护保养事宜。</p>
							</div>
			    		  <i class="am-icon-tasks"></i>
			    		</div>
			    	</div>
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-6 product-content-right">
			    		<img class="product-img" src="img/product/图片6.png" />
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-6 product-content-right">
			    		<img class="product-img" src="img/product/图片6.png" />
			    	</div>		
			    	<div class="clear"></div>
	    	</div>
	    </li>
	    
	    <li class="gray-li-">
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-left">
			    		<div class="product-show-title">
<!-- 			    			<h3>Abaqus/CAE </h3> -->
			    			<span>超链集群顾问服务</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>查看地址：</span>
			    			<div><a href="#">商务云</a></div>
			    			<i class="am-icon-dribbble"></i>
			    		</div>
			    		<div class="product-intro">
			    			<span>详情介绍：</span>
			    			<div></div>
			    		  <i class="am-icon-tasks"></i>
			    		</div>
			    	</div>
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-right">
			    		<img class="product-img" src="img/product/图片8.png" />
			    	</div>
	
			    	<div class="clear"></div>
	    	</div>
	    </li>
	    <li class="gray-li">
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-left">
			    		<div class="product-show-title">
<!-- 			    			<h3>Abaqus/CAE </h3> -->
			    			<span>超链工业软件系统</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>查看地址：</span>
<!-- 			    			<div><a href="#">商务云</a></div> -->
			    			<i class="am-icon-dribbble"></i>
			    		</div>
			    		<div class="product-intro">
			    			<span>详情介绍：</span>
			    			<div></div>
			    		  <i class="am-icon-tasks"></i>
			    		</div>
			    	</div>
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-right">
			    	<p><br><span class="am-badge am-badge-primary am-round">1</span>
			    			超链CAE仿真云管理系统</p>
			    		<img class="product-img" src="img/product/图片9.png" />
			    		<br>
			    	<p><br><span class="am-badge am-badge-secondary am-round">2</span>
			    			超链CAE仿真云管理系统作业调度系统</p>	
			    		<img class="product-img" src="img/product/图片10.png" />
			    	<p><br><span class="am-badge am-badge-success am-round">3</span>
			    			超链三维云设计软件</p>	
			    		<img class="product-img" src="img/product/图片11.png" />
			    		<p><br><span class="am-badge am-badge-warning am-round">4</span>
			    			CAE仿真软件</p>	
			    		<img class="product-img" src="img/product/图片12.png" />
			    	</div>
	
			    	<div class="clear"></div>
	    	</div>
	    </li>
	    
	    
	    
	    	    <li class="gray-li--">
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-left">
			    		<div class="product-show-title">
<!-- 			    			<h3>Abaqus/CAE </h3> -->
			    			<span>无人机产品</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>查看地址：</span>
<!-- 			    			<div><a href="#">商务云</a></div> -->
			    			<i class="am-icon-dribbble"></i>
			    		</div>
			    		<div class="product-intro">
			    			<span>详情介绍：</span>
			    			<div></div>
			    		  <i class="am-icon-tasks"></i>
			    		</div>
			    	</div>
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-12 am-u-lg-12 product-content-right">
			    	<p><br><span class="am-badge am-badge-primary am-round">1</span>
			    			航测六旋翼无人机</p>
			    		<img class="product-img" src="img/product/图片13.png" />
			    		<br>
			    	<p><br><span class="am-badge am-badge-secondary am-round">2</span>
			    			航测固定翼无人机</p>	
			    		<img class="product-img" src="img/product/图片14.png" />
			    	<p><br><span class="am-badge am-badge-success am-round">3</span>
			    			警用六旋翼无人机</p>	
			    		<img class="product-img" src="img/product/图片15.png" />
			    		<p><br><span class="am-badge am-badge-warning am-round">4</span>
			    			植保六旋翼无人机</p>	
			    		<img class="product-img" src="img/product/图片16.png" />
			    	</div>
	
			    	<div class="clear"></div>
	    	</div>
	    </li>
	    
	    


	    

	    
	    
	    
	    <div class="clear"></div>
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
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="jacascript:;">解决方案</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="product-show.php">产品展示</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="partner.php">合作伙伴</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="www.nsccjn.cn" target="_blank">济南超算</a></li>
                    <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="about-us.php">关于我们</a></li>
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
