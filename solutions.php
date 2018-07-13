<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>超链仿真云</title>
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
 <li><a href="index.php">首页</a></li>     
 
 	     <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle hw-menu-active" data-am-dropdown-toggle href="javascript:;solutions.php;">        
          <span class="am-icon-github am-icon-fw"></span>核心业务 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li  class="hw-menu-active"><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span>超链仿真云</a></li>   <li class="am-divider"></li>
          <li><a href="solutions_gaoxingneng.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 高性能计算</a></li>     <li class="am-divider"></li>
          <li><a href="solutions_info.php"><span class="am-icon-user am-icon-fw am-primary"></span> IT技术服务</a></li>      <li class="am-divider"></li>
          <li><a href="solutions_gis_bigdata.php"><span class="am-icon-cog am-icon-fw am-primary"></span>地理信息大数据平台</a></li> 
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
	</div>

<!--   </div> -->

  </div>
</header>
  
  
</header>
	<div class="toppic">
		<div class="am-container-1">
			<div class="toppic-title left">
				<i class="am-icon-lightbulb-o toppic-title-i"></i> <span
					class="toppic-title-span">超链仿真云</span>
				<p>Design Cloud</p>
			</div>
			<div class="right toppic-progress">
				<span><a href="solutions.php" class="w-white">核心业务</a></span> <i
					class=" am-icon-arrow-circle-right w-white"></i> <span><a
					href="solutions.php" class="w-white">超链仿真云</a></span>
			</div>
		</div>
	</div>


	<div class="part-title">
			<a href="#">
			<i class="am-icon-newspaper-o part-title-i"></i>
			<span class="part-title-span">超链仿真云</span>
			<p> 构建设计建模、仿真渲染的全流程技术服务云平台。集成了模型处理、可视化计算等模块。<br>其中模型处理可为用户提供模型前处理、模型后处理与协同仿真等可视化应用</p>
			</a>
		</div>
	
	<!-- introduce -->
<!--  	<div class="mysection" style="background: #f3f4f4;">
		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 " style="background: #f3f4f4;">
			<h2 class="mysection--title">...</h2>			
			<p class="mysection--description">在线高性能/远程前后处理/专业技术服务
			</p>
			<br>
		</div>
	</div>-->


	<!-- news -->	
<div class=" news-all gray-li">
	<div class="am-container-1">
<div class="news part-all">

		<div class="news-content ">
				<ul class="news-content-ul">
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
					
					<i class="am-icon-shield  part-title-i"></i>
					<span class="part-title-span">仿真云平台</span>
						<a href="javascript:;">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						    	<div class="news-img">
						    	<img src="img/solutions_CAE/软件资源-CAE.png"></img><br>
						    	</div>
						    </div>

						    <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						    <br>
<!-- 								<span class="news-right-title">用户伙伴</span> -->

									<!-- <ul data-am-widget="gallery"
										class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-3 am-gallery-default"
										data-am-gallery="{ pureview: false }">
										<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/ABAQUS.jpg"
													alt="" />
												</a>
											</div>
										</li>
										<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/Altair.jpg"
													alt="  " />
												</a>
											</div>
										</li>
										<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/ANSYS.jpg"
													alt=" " />
												</a>
											</div>
										</li>
																				<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/MSC.jpg"
													alt=" " />
												</a>
											</div>
										</li>
																				<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/海洋实验室.jpg"
													alt=" " />
												</a>
											</div>
										</li>
																				<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/科瑞.jpg"
													alt=" " />
												</a>
											</div>
										</li>
																				<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/青特.jpg"
													alt=" " />
												</a>
											</div>
										</li>
						<li>
											<div class="am-gallery-item">
												<a href="javascript:;"	class=""> <img
													src="img/solutions_CAE/patner/软控.jpg"
													alt="  " />
												</a>
											</div>
										</li>
										<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/山大.jpg"
													alt=" " />
												</a>
											</div>
										</li>
																				<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/特拓.jpg"
													alt=" " />
												</a>
											</div>
										</li>
																				<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/潍柴.jpg"
													alt=" " />
												</a>
											</div>
										</li>
																				<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/远景.jpg"
													alt=" " />
												</a>
											</div>
										</li>
																				<li>
											<div class="am-gallery-item">
												<a href="javascript:;"
													class=""> <img
													src="img/solutions_CAE/patner/中车.jpg"
													alt=" " />
												</a>
											</div>
										</li>

									</ul> -->






									<a href="solutions_fangzhengyun.php"><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
								 </div>	
						<div class="clear"></div>
						</a>
					</li>
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
						<i class="am-icon-weixin part-title-i"></i>
					    <span class="part-title-span">仿真技术服务</span>
						<a href="javascript:;">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						    	<div class="news-img">
						    	<img src="img/solutions_CAE/服务模式-CAE.png"></img>
						    	</div>
						    </div>
						    <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
									<!-- 	<span class="news-right-title">&nbsp;&nbsp;&nbsp;&nbsp;山东超链智能科技有限公司拥有一支专业的工程仿真计算团队，
										技术人员为国家超级计算济南中心工程仿真计算部原班人马，均毕业于国内知名高校，拥有硕士及以上学历，在工程咨询领域具有丰富的模拟仿真经验。
										依托国家超级计算济南中心强大的高性能计算能力、娴熟的工程应用技术和丰富的工程应用经验，
										公司可提供石油装备行业、汽车行业、机床行业、工程机械等众多领域的企业提供高质量的咨询服务，开展结构强度、刚度、疲劳分析、多体动力学分析、优化减重设计、流体仿真等方面的工作，有力提升了企业产品研发设计能力。</span>
										<br> -->
										<a href="solutions_fangzheng_tech.php"><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
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
