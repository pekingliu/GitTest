<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>合作伙伴</title>
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
      <li class="hw-menu-active"><a href="partner.php">合作伙伴</a></li>

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
			<i class="am-icon-paper-plane toppic-title-i"></i>
			<span class="toppic-title-span">合作伙伴</span>
			<p>Partner</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="index.php" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="recruit.php" class="w-white">合作伙伴</a></span>
		</div>
	</div>
</div>

<div >
	<ul class=" product-show-ul">
		 <li >
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-left">
			    		<img class="product-img" src="img/partner/图片1.png" />
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-right">
			    		
			    		<div class="product-show-title">			    			
			    			<span>山东省现代产业发展投资有限公司</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
<!-- 			    			<span>岗位描述：</span> -->
			    			<div><p></p>
										<p>&nbsp;&nbsp;&nbsp;&nbsp;山东省现代产业发展投资有限公司成立于2016年10月，为山东发展投资控股集团有限公司全资子公司，注册资本金3亿元。</p>
										<p>&nbsp;&nbsp;&nbsp;&nbsp;山东发展投资控股集团是省委、省政府在新一轮国企改革背景下，运用省基建基金资产组建的省管功能型国有资本投资运营公司，是支持山东省基础设施建设和现代产业发展，推动区域联动、产业融合、协作发展的投融资主体。集团公司，围绕全省新旧动能转换重大工程实施，聚焦聚力以“四新”促“四化”的中心任务，根据全省生产力布局和国民经济发展战略规划，贯彻落实省政府重大投资建设任务，开展国有资本投资运营，放大国有资本功能， 促进全省产业结构转型升级。</p>
			    			</div>
			    		</div>

			    	</div>
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>	
	    <li class="gray-li">
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-6 am-u-lg-8 recruit-left">
			    		<div class="product-show-title">			    			
			    			<span>山东省科学院</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
<!-- 			    			<span>岗位描述：</span> -->
			    			<div><p>&nbsp;&nbsp;&nbsp;&nbsp;山东省科学院是山东省政府直属事业单位，是山东省新型工业科技创新及人才培养领域的重要力量。</p>
										<p>&nbsp;&nbsp;&nbsp;&nbsp;科学院积极参与国家和山东省发展战略，面向主导产业发展需求开展科技成果示范推广和产业化工作，全面服务山东省新旧动能转化重大工程。近5年，与30多个政府，90多个龙头企业建立科技合作关系，创办科技企业70多家，共建科技示范基地30多个,累计创造直接经济效益1000多亿元。被授予中国创新驿站山东区域站点、国家技术转移示范机构、国家级科技合作示范基地、国家级科技成果研究推广中心、国家级成果产业化基地、山东省产学研合作创新突出贡献单位等称号。</p>

			    			</div>
			    		</div>
			    		<div class="product-add">
			    		
			    		</div>
			    	</div>
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-4 recruit-right">
			    		<img class="product-img" src="img/partner/图片2.png" />
			    		<img class="product-img" src="img/partner/图片3.png" />
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>	
	    <li >
	    	<div class="product-content">
			    	<div class="left am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-left">
			    		<img class="product-img" src="img/partner/图片5.png" />
			    	</div>
			    	<div class="right am-u-sm-12 am-u-md-6 am-u-lg-6 recruit-right">
			    		
			    		<div class="product-show-title">			    			
			    			<span>山东省计算中心（国家超级计算济南中心）</span>
			    		</div>
			    	
			    	<div class="product-show-content">
			    		<div class="product-add">
<!-- 			    			<span>岗位描述：</span> -->
			    			<div><p>&nbsp;&nbsp;&nbsp;&nbsp;山东省计算中心（国家超级计算济南中心）成立于1976年，隶属于山东省科学院，是山东省成立最早的公益性计算机应用技术科研机构。</p>
										<p>&nbsp;&nbsp;&nbsp;&nbsp;国家超级计算济南中心是科技部批准成立的千万亿次国家超级计算中心之一，总投资6亿元，建设主体为山东省计算中心（国家超级计算济南中心）。</p>

			    			</div>
			    		</div>
			    		<div class="product-add">
			    		  
			    		</div>
			    	</div>
			    	</div>	
			    	<div class="clear"></div>
	    	</div>
	    </li>	
	   
	    <div class="clear"></div>
	</ul>
</div>

  
   
<!-- <div class=" gray-li">		
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
  </div> -->

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
