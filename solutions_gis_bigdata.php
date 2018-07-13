<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>地理信息大数据平台</title>
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
   <script type="text/javascript" src="datajs/solution-addconent.js"></script> 
  
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/app.css"/>
  
  
  <script type="text/javascript">


   $(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码
	    
	     usercheck();

//		 addtabs("在线高性能仿真",1,0);
//		 var liarray_caef = addlicontent_caeforward();
//		 addcontent(2,liarray_caef);

//		 addtabs("远程前后处理",2,1);
//		 var liarray_cael = addlicontent_caelarge();
//		 addcontent(2,liarray_cael);

//		 addtabs("专业技术服务",3,2);
//		 var liarray_caeb = addlicontent_caeback();
//		 addcontent(2,liarray_caeb);
	     
//		 addtabs("专业技术服务",4,3);
//		 var liarray = addlicontent_cad();
//		 addcontent(3,liarray);
//
	   }
   ) 

   	/**
   	*add tabs
   	*tabtitle：tab标题
   	*classno：tab背景色
   	*tabno：tab导航序列号，与内容div对应，即addcontent的tabno；
   	**/
   function addtabs(tabtitle,classno,tabno){
	  // var classno = 4;
	 // var tabno = 3;
	  // var tabtitle = "CAD";
	  // create_add_tab_ul(tabtitle,classno,tabno);	
   }  
       			
   
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
<header class="am-topbar header ">

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
 <li class=""><a href="index.php">首页</a></li>     
 
 	     <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle  hw-menu-active" data-am-dropdown-toggle href="javascript:;solutions.php;">        
          <span class="am-icon-github am-icon-fw"></span>核心业务 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span>超链仿真云</a></li>   <li class="am-divider"></li>
          <li><a href="solutions_gaoxingneng.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 高性能计算</a></li>     <li class="am-divider"></li>
          <li><a href="solutions_info.php"><span class="am-icon-user am-icon-fw am-primary"></span> IT技术服务</a></li>      <li class="am-divider"></li>
          <li  class="hw-menu-active"><a href="solutions_gis_bigdata.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 地理信息大数据平台</a></li> 
            </ul>
      </li>
 
 
  
     <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;solutions.php;">        
          <span class="am-icon-github am-icon-fw"></span>产品与解决方案 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
<!--           <li ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span> 设计云</a></li>   <li class="am-divider"></li> -->
          <li><a href="product-show.php"><span class="am-icon-cog am-icon-fw am-primary"></span>产品库</a></li>     <li class="am-divider"></li>
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
  
  
</header>
	<div class="toppic">
		<div class="am-container-1">
			<div class="toppic-title left">
				<i class="am-icon-lightbulb-o toppic-title-i"></i> <span
					class="toppic-title-span">地理信息大数据平台</span>
				<p>Design Cloud</p>
			</div>
			<div class="right toppic-progress">
				<span><a href="solutions.php" class="w-white">核心业务</a></span> <i
					class=" am-icon-arrow-circle-right w-white"></i> <span><a
					href="solutions_gis_bigdata.php" class="w-white">地理信息大数据平台</a></span>
			</div>
		</div>
	</div>


	<div class="part-title">
			<a href="#">
			<i class="am-icon-newspaper-o part-title-i"></i>
			<span class="part-title-span">地理信息大数据平台</span>
			<p> </p>
			</a>
		</div>
	
	<!-- introduce -->
	<div class="mysection" style="background: #f3f4f4;display:none;">
		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 " style="background: #f3f4f4;">
			<h2 class="mysection--title">...</h2>			
			<p class="mysection--description">
			</p>
			<br>
		</div>
	</div>


	<!-- news -->	
<div class=" news-all gray-li">
<div class="am-container-1">
<div class="news part-all">

		<div class="news-content ">
				<ul class="news-content-ul">
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-4">					
					<i class="am-icon-shield  part-title-i"></i>
					<span class="part-title-span">无人机应用解决方案</span>
						<a href="solutions_gis_bigdata_app.php">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						    	<div class="news-img">
						    	<img src="img/fpage/3-1地理信息大数据.png"></img>
						    	</div>
						    </div>
						    <br>
<!-- 						    <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
										<a href="javascript:;"><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
										
								 </div>	 -->
						<div class="clear"></div>
						</a>
						<br>
					</li>
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-4">
						<i class="am-icon-weixin part-title-i"></i>
					    <span class="part-title-span">卫星倾斜</span>
						<a href="solutions_gis_bigdata_satellite.php">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						    	<div class="news-img">
						    	<img src="img/fpage/3-2地理信息大数据.png"></img>
						    	</div>
						    </div>
						<div class="clear"></div>
						</a>
					</li>	
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-4">
						<i class="am-icon-weixin part-title-i"></i>
					    <span class="part-title-span">数字地球</span>
						<a href="solutions_gis_bigdata_dataearth.php">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						    	<div class="news-img">
						    	<img src="img/fpage/3-3地理信息大数据.png"></img>
						    	</div>
						    </div>
						<div class="clear"></div>
						</a>
					</li>	
					<div class="clear"></div>
				</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>

<div class="gray-li-">
<div class=" am-container-1">
	<div class="contact-us">
		 <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
		 	<img src="img/map-2.png" />
		 </div>
		 <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
		 	 <ul class="contact-add">
		 	 	<li>
		 	 		<div><i class=" am-icon-map-marker"></i><span class="contact-add-1">济南市高新开发区新泺大街1768号齐鲁软件大厦B座A207</span></div>
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-phone"></i><span>0531-66680211</span></div>		 	 		
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-mobile mobile"></i><span>15000000000</span></div>	 	 		
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-envelope-o"></i><span>sdsc@sdas.org</span></div>		 	 		
		 	 	</li>
		 	 </ul>	 	
		 </div>
		 <div class="clear"></div>
	</div>
</div>
</div>







    <!-- tabs -->
		
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
