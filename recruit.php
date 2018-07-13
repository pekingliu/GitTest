<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>招贤纳士</title>
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
  
  <link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
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
          <li  ><a href="service-center.php"> <span class="am-icon-home"></span> 服务中心 </a></li>  <li class="am-divider"></li>
          <li><a href="about-us.php"><span class="am-icon-qq"></span> 关于我们</a></li>  <li class="am-divider"></li>
          <li class="am-active"><a href="recruit.php"><span class="am-icon-user"></span> 招贤纳士 </a></li>  <li class="am-divider"></li>
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
			<i class="am-icon-paper-plane toppic-title-i"></i>
			<span class="toppic-title-span">招贤纳士</span>
			<p>Recruit</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="index.php" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="recruit.php" class="w-white">招贤纳士</a></span>
		</div>
	</div>
</div>

<div >
	<ul class=" product-show-ul">
		 <li >
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-left">
			    		<img class="product-img" src="img/zhaoping2.png" />
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-right">
			    		
			    		<div class="product-show-title">			    			
			    			<span>软件测试人员</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>岗位描述：</span>
			    			<div><p>1.熟悉软件系统开发的流程，了解软件系统开发的目标。</p>
										<p>2.能独立运用Java语言进行软件的开发。</p>
										<p>3.按时保质保量完成项目开发,运行测试并编写相关文档。</p>
										<p>4.思维敏捷,责任心强,能承受工作压力。</p>
			    			</div>
			    		</div>
			    		<div class="product-add">
			    			<span>任职资格：</span>
			    			<div><p>1、要求从软件研发工作2年以上工作经验,能独立上岗及管理团队；</p>
<p>2、精通Java，Javascript等 web 编程语言；</p>
<p>3、能熟练使用spring，hibernate等主流框架。</p>
<p>4、能熟练使用jquery，以及基于Jquery的前台组件，熟悉Extjs 者优先；</p>
<p>5、熟练掌握Oracle、SQLServer、MySQL等主流数据库，能独立完成数据库设计；</p>
<p>6、事业心强，勤奋好学，有团队精神；</p>
			    			</div>
			    		  
			    		</div>
			    	</div>
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>	
	    <li class="gray-li">
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-left">
			    		<div class="product-show-title">			    			
			    			<span>JAVA软件开发工程师</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>岗位描述：</span>
			    			<div><p>1.熟悉软件系统开发的流程，了解软件系统开发的目标。</p>
										<p>2.能独立运用Java语言进行软件的开发。</p>
										<p>3.按时保质保量完成项目开发,运行测试并编写相关文档。</p>
										<p>4.思维敏捷,责任心强,能承受工作压力。</p>
			    			</div>
			    		</div>
			    		<div class="product-add">
			    			<span>任职资格：</span>
			    			<div><p>1、要求从软件研发工作2年以上工作经验,能独立上岗及管理团队；</p>
<p>2、精通Java，Javascript等 web 编程语言；</p>
<p>3、能熟练使用spring，hibernate等主流框架。</p>
<p>4、能熟练使用jquery，以及基于Jquery的前台组件，熟悉Extjs 者优先；</p>
<p>5、熟练掌握Oracle、SQLServer、MySQL等主流数据库，能独立完成数据库设计；</p>
<p>6、事业心强，勤奋好学，有团队精神；</p>
			    			</div>
			    		  
			    		</div>
			    	</div>
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-right">
			    		<img class="product-img" src="img/zhaoping1.png" />
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>	
	    <li >
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-left">
			    		<img class="product-img" src="img/zhaoping2.png" />
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-right">
			    		
			    		<div class="product-show-title">			    			
			    			<span>软件测试人员</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
			    			<span>岗位描述：</span>
			    			<div><p>1.熟悉软件系统开发的流程，了解软件系统开发的目标。</p>
										<p>2.能独立运用Java语言进行软件的开发。</p>
										<p>3.按时保质保量完成项目开发,运行测试并编写相关文档。</p>
										<p>4.思维敏捷,责任心强,能承受工作压力。</p>
			    			</div>
			    		</div>
			    		<div class="product-add">
			    			<span>任职资格：</span>
			    			<div><p>1、要求从软件研发工作2年以上工作经验,能独立上岗及管理团队；</p>
<p>2、精通Java，Javascript等 web 编程语言；</p>
<p>3、能熟练使用spring，hibernate等主流框架。</p>
<p>4、能熟练使用jquery，以及基于Jquery的前台组件，熟悉Extjs 者优先；</p>
<p>5、熟练掌握Oracle、SQLServer、MySQL等主流数据库，能独立完成数据库设计；</p>
<p>6、事业心强，勤奋好学，有团队精神；</p>
			    			</div>
			    		  
			    		</div>
			    	</div>
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>	
	   
	    <div class="clear"></div>
	</ul>
</div>

  
   
<div class=" gray-li">		
<div class="am-container-1">
	<div class="part-title part-title-mar">
			<i class="am-icon-users part-title-i"></i>
			<span class="part-title-span">优厚待遇</span>
			<p>Good Treatments</p>
		</div>
</div>
<div data-am-widget="tabs"class="am-tabs am-tabs-d2 ">

      <ul class="am-tabs-nav am-cf daiyu-title-ul ">
         <li class="am-active "><a href="[data-tab-panel-0]" ><span class="w-white"> 福利待遇</span></a></li>
          <li class=""><a href="[data-tab-panel-1]"><span class="w-white">薪资待遇</span></a></li>
          
      </ul>

      <div class="am-tabs-bd daiyu-content ">
          <div data-tab-panel-0 class="am-tab-panel am-active">
          	<div class=" daiyu-content-1">
                <p>1.享有每周双休</p>
<p>2.年终奖</p>
<p>3.项目奖金/产品提成</p>
<p>4.调休</p>
<p>5.五险（养老保险、医疗保险、失业保险、工伤保险和生育保险）</p>
<p>6.出差补贴（一线城市100/天，二线城市60/天），出差包住</p>
<p>7. 公司每1-2月举行聚餐 </p>
<p>8. 每天7小时工作时间 早上9：00-12：00下午1：30-5:30</p>	
            </div>
            
          </div>
          <div data-tab-panel-1 class="am-tab-panel ">
             <div class=" daiyu-content-1">
                <p>1.安卓开发工程师：4000元-7000元</p>
                <p>2.软件测试人员：3000元-5000元</p>
                <p>3.JAVA软件开发工程师：4000元-6000元</p>
            </div>
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
