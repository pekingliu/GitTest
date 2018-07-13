<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>设计云</title>
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
  
  <link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/app.css"/>
  
  <!--   <link rel="stylesheet" href="assets/css/amazeui.css" /> 
    <link rel="stylesheet" href="assets/css/solution.min.css" />
  <link rel="stylesheet" href="assets/css/common.min.css" /> -->

  
  
  
   <script type="text/javascript" src="js/loadcookie.js"></script>  
   <script type="text/javascript">


   $(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码

		

	
	   usercheck();	 
	   create_dynamic("img/cae_soft_img/cfd_001.png",
			   "ANSYS ICEM CFD","ICEM CFD软件包是专用的流体分析的前处理工具，"+
			  " 为所有世界流行的CAE软件提供高效可靠的分析模型。它拥有强大的CAD模型修复能力、自动中面抽取、独特的网格“雕塑”技术、网格编辑技术以及广泛的求解器支持能力。");
	   
	   }
   )
   
   function create_dynamic(img_href,title,descripe){
		var detail_img = $("<div class=\"am-u-sm-12 am-u-md-3 am-u-lg-3 section-detail-img\">");
			var news_img = $("<div class=\"news-img\">");
			var img_software = $("<img src=\""+img_href+"\">");
			news_img.append(img_software);
		detail_img.append(news_img);

		var txt_software = $("<div class=\"am-u-sm-12 am-u-md-9 am-u-lg-9 \">");
			var title = $("<h2 class=\"section--title\">"+title+"</h2>");
			var description = $("<p class=\"section--description\"> "+
					   " &nbsp;&nbsp;&nbsp;&nbsp;"+
					   descripe+
					   " </p>");			
		    var button = $("<div style=\"text-align: right; margin: 0 100px;\">");
				var link_jinghang = $("<a href=\"javascript:void(0);\" onclick=\"tojinghang()\" ><span class=\"see-more-download\">登陆云平台<i class=\"am-icon-home\"></i></span></a>");		
				var link_download = $("<a href=\"downloadtest.zip\"><span class=\"see-more-download\">下载软件<i class=\"am-icon-qq\"></i></span></a>");
				var link_applyfor = $("<a href=\"apply-for.php\"><span class=\"see-more-download\">申请许可<i	class=\"am-icon-weixin\"></i></span></a>");
				button.append(link_jinghang);
				button.append(link_download);
				button.append(link_applyfor);
			txt_software.append(title);
			txt_software.append(description);
			txt_software.append(button);
		$("#section_header_soft").append(detail_img);
		$("#section_header_soft").append(txt_software);
	
   }
     function usercheck(){

	         //alert(username);
			 var currenturl = window.location.href;
			 //alert(currenturl);
			 Cookies.set('cookie_forweb_url',currenturl, {  path: '' });
	         
		     if(username!="" && username!=null && username!="undefined") { 
			     //alert(username); 
		         //$("#lbl").text("欢迎您：".username);
		         $("#lbl").html("欢迎您："+username);
		         alertify.success("欢迎您：："+username);
		     }else
		     {
				 alertify.alert("请登录！");	
				 window.location.href="login.php";	
			 }

				// window.location.href="login.php";	
	}   

   
    function exitsys(){
    	// confirm dialog
    	alertify.confirm("退出登录？", function (e) {
    	    if (e) {
    	        // user clicked "ok"
    	        //alertify。success(" quit ok");
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
 	 			}
    	    } else {
    	        // user clicked "cancel"
    	    }
    	});
 	 			//alertify.alert("退出登录！");
 
 	 				
 	 }

	 function tojinghang()
	 {
		 //alert("here");
	     if(softname!="" && softname!=null && softname!="undefined") { 
		     //alert(username); 
	         //$("#lbl").text("欢迎您：".username);
	         //$("#lbl").html("欢迎您："+username);
	         alertify.alert("欢迎您："+username+",你申请了软件"+softname+"，现在将跳转！");
	         window.location.href="http://10.1.0.4:8080";
	         
	     }else
	     {
			 alertify.error("请登陆申请许可！");	
			 //window.location.href="login.php";	
		 }
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
          <li  class="am-active" ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span> 设计云</a></li>  <li class="am-divider"></li>
          <li><a href="solutions-data.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 数据云</a></li> <li class="am-divider"></li>
 			<li><a href="solutions-knowledge.php"><span class="am-icon-user am-icon-fw am-primary"></span> 知识云</a></li> <li class="am-divider"></li>
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
          <span class="am-icon-users"></span><label id="lbl">欢迎您访问！ </label> <span class="am-icon-caret-down"></span>
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
			<i class="am-icon-lightbulb-o toppic-title-i"></i>
			<span class="toppic-title-span">CAD</span>
			<p>Design Cloud-Cad</p>
		</div>
		<div class="right toppic-progress">
		    <span><a href="solutions.php" class="w-white">解决方案</a></span>
		    <i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="solutions.php" class="w-white">设计云</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="solutions-design-cad.php" class="w-white">CAE前处理</a></span>
		</div>
	</div>
</div>	

<div class="section gray-li" > <!--   style="background:#f3f4f4;style="background: #f3f4f4;"" -->
       <div class="news-content ">
			<div class="section--header " id="section_header_soft">
<!-- 				<div class="am-u-sm-12 am-u-md-3 am-u-lg-3 section-detail-img">
 
					<div class="news-img">
						<img src="img/cae_soft_img/cfd_001.png"></img>
					</div>
				</div>
				<div class="am-u-sm-12 am-u-md-9 am-u-lg-9 ">
					<h2 class="section--title">ANSYS ICEM CFD</h2>
					<p class="section--description">
					   &nbsp;&nbsp;&nbsp;&nbsp;ICEM CFD软件包是专用的流体分析的前处理工具，为所有世界流行的CAE软件提供高效可靠的分析模型。它拥有强大的CAD模型修复能力、自动中面抽取、独特的网格“雕塑”技术、网格编辑技术以及广泛的求解器支持能力。
					</p>
					<p class="section--description">					   
					</p>
					<br>
					
      				<div style="text-align: right; margin: 0 100px;">
						<a href="javascript:void(0);" onclick="tojinghang()" ><span class="see-more-download">登陆云平台<i class="am-icon-home"></i></span></a> 
						<a href="downloadtest.zip"><span class="see-more-download">下载软件<i class="am-icon-qq"></i></span></a>
						<a href="apply-for.php"><span class="see-more-download">申请许可<i	class="am-icon-weixin"></i></span></a>
					</div>
      
				</div>
-->
			</div>			<!-- section header -->
			<div class="clear"></div>
    
       <!-- news content -->
         
      <div class="solution-container">
          <div data-am-widget="tabs" class="am-tabs "  >
              <ul class="am-tabs-nav am-default">
                  <li class="am-active"><a href="[data-tab-panel-0]">服务使用流程</a></li>
                  <!-- <li class=""><a href="[data-tab-panel-1]">服务详情</a></li> -->
              </ul>
              <div class="am-tabs-bd"  style="background:#ffff;">
                  <div data-tab-panel-0 class="am-tab-panel am-active">  <!-- tabs-panel-0000 -->
                     <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 ">
          					<h2 class="section--title">我想体验CAE/CAD软件</h2>
          				    <p class="section--description"><!-- &nbsp;&nbsp;&nbsp;&nbsp;全球独创专利技术：一行代码部署，帮助企业快速安全地将现有PC版网页适配成HTML5跨屏网页，跨平台的企业统一办公门户，快捷的移动适配开发能力，完备的数据安全保护. -->
          					</p>   <br>  
                     </div>                
                  
                     <!-- pic show -->
                     <div style="width:50%;margin: 0 auto;">
                    	<div class="am-g" >                    
                      		<div class="am-u-md-4 am-u-sm-6">
                       			<img  class="am-img-thumbnail1 " src="img/cae_soft_img/cloudDesign_sylc1.jpg" alt=""  width="140" height="120"/>
                     		 </div>
                      		 <div class="am-u-md-4 am-u-sm-6">
                        		<img class="am-img-thumbnail1 " src="img/cae_soft_img/cloudDesign_sylc2.jpg" alt="" width="140" height="120"/>
                     		 </div>
                      		<div class="am-u-md-4 am-u-sm-6">
                        		<img class="am-img-thumbnail1" src="img/cae_soft_img/cloudDesign_sylc3.jpg" alt="" width="140" height="120"/>
                     		</div>                      
                      	</div>
                     </div>    
                    
                    <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" /> 
                    
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 ">
          					<h2 class="section--title">我想授权使用CAE/CAD</h2>
          				    <p class="section--description">
          					</p>   <br>  
                     </div>
                     <div style="width:80%; margin: 0 auto; ">
                        <!-- use list -->
                    	<div class="am-g" >                    
                      		<div class="am-u-md-2 am-u-sm-6">
                        		<img  class="am-img-thumbnail1 " src="img/cae_soft_img/cloudDesign_sysq1.jpg" alt="" width="140" height="106" />
                      		</div>
                      		<div class="am-u-md-3 am-u-sm-6">
                        		<img class="am-img-thumbnail1 " src="img/cae_soft_img/coludDesign_sysq2.jpg" alt="" width="168" height="107" />
                      		</div>
                      		<div class="am-u-md-2 am-u-sm-6">
                        		<img class="am-img-thumbnail1" src="img/cae_soft_img/cloudDesign_sysq3.jpg" alt="" width="97" height="105"/>
                      		</div>
                     		<div class="am-u-md-2 am-u-sm-6">
                        		<img class="am-img-thumbnail1" src="img/cae_soft_img/cloudDesign_sysq4.jpg" alt="" width="122" height="107"/>
                      		</div>
                      		<div class="am-u-md-3 am-u-sm-6">
                        		<img class="am-img-thumbnail1" src="img/cae_soft_img/cloudDesign_sysq5.jpg" alt="" width="119" height="106"/>
                      		</div>                      
                      	</div>
                   </div>         
                                                                             
                      
                  </div> <!--tab 00000 end -->
                  
                  
                  <!-- tab-panel-0001 -->
                  <!-- <div data-tab-panel-1 class="am-tab-panel ">
                    <div class="am-g">
                      <div class="am-u-md-4 am-u-sm-6">
                        <a href="#"><img src="assets/images/solution/solution-show-1.png" alt="" /></a>
                      </div>
                      <div class="am-u-md-4 am-u-sm-6">
                        <a href="#"><img src="assets/images/solution/solution-show-2.png" alt="" /></a>
                      </div>
                      <div class="am-u-md-4 am-u-sm-6">
                        <a href="#"><img src="assets/images/solution/solution-show-3.png" alt="" /></a>
                      </div>
                    </div>
                  </div> -->
                  <!-- 0001 end -->

              </div>
          </div>
        </div><!--  solution-content -->
      
        <div class="clear"></div>  
      </div>
     
 
		
</div>
<!-- section end -->

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
