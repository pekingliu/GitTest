<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>首页</title>
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
  <script type="text/javascript" src="js/loadcookie.js"></script>  
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  
  <script type="text/javascript">

  
    $(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码
    	 //alert("登陆检测！");
        usercheck();	


// 		var c_ul = create_cusotmercase_ul();        
//         var c_end = create_cusotmercase_end();
//         $("#custome_case").append(c_ul);
//         $("#custome_case").append(c_end);
 	})
 	
 	function create_cusotmercase_ul(){
    	var ul = $("<ul data-am-widget=\"gallery\" class=\" am-avg-sm-1 am-avg-md-4 am-avg-lg-4 am-gallery-bordered customer-case-content\">");
    	var li=new Array();
    	li[0]=create_customercase_li("img/customcase/app2.jpg","柴油机缸内喷雾燃烧过程分析","2015-06-11","customer-case.php");
    	li[1]=create_customercase_li("img/customcase/app4.jpg","城市高层建筑风场分析","2016-06-21","customer-case.php");
    	li[2]=create_customercase_li("img/customcase/app5.jpg","发动机缸盖强度分析","2015-04-11","customer-case.php");
    	li[3]=create_customercase_li("img/customcase/app8.jpg","柴油机缸内喷雾燃烧过程分析","2016-09-11","customer-case.php");
    	li[4]=create_customercase_li("img/customcase/app9.jpg","高性能计算机房环境分析","2013-06-11","customer-case.php");
    	li[5]=create_customercase_li("img/customcase/app11.jpg","列车隧道内交会过程分析","2015-04-11","customer-case.php");
    	li[6]=create_customercase_li("img/customcase/app12.jpg","汽车发动机舱温度场分析","2016-09-11","customer-case.php");
    	li[7]=create_customercase_li("img/customcase/app13.jpg","汽车发动机舱温度场分析","2013-06-11","customer-case.php");
    	for(x in li){
			ul.append(li[x]);
        }
        return ul;
    }
 	function create_customercase_li(img_src,title,date,more){		
		var li = $("<li class=\"case-li am-u-sm-6 am-u-md-6 am-u-lg-3\">");
			var div_img = $("<div class=\"am-gallery-item case-img1\">");
				var a_img = $("<a href=\"#\"> <img src=\""+img_src+"\" />");
				div_img.append(a_img);
			var div_txt = $("<div class=\"case-li-mengban\">");
			var div_css = $("<div class=\" case-word\">");
				var case_title = $("<h3 class=\"am-gallery-title\">"+title+"</h3>");
				var case_date = $("<p>"+date+"</p>");
				var case_more_href = $("<a href=\""+more+"\"><span><i class=\"am-icon-eye\"></i>查看更多</span></a>");
				div_txt.append(div_css);
				div_css.append(case_title);div_css.append(case_date);div_css.append(case_more_href);
			li.append(div_img);
			li.append(div_txt);
		return li;
    }
    
    function create_cusotmercase_end(){
        var div_top = $("<div class=\"lan-bott\">");
        var div_left = $("<div class=\"left\"> ");
						 var txt = $(" <span>全方位解决方案,为您轻松解决不同问题</span> ");
						 var p =$(" <p>A full range of solutions for you to solve different problems</p> ");
						 div_left.append(txt);
						 div_left.append(p);						 
        var div_right = $("<div class=\"right\">");
						var a=$(" <a href=\"customer-case.php\"> <span class=\"see-more\">查看更多<i class=\"am-icon-angle-double-right\"></i></span>  </a>");						
						div_right.append(a);
		var div_clear = $("<div class=\"clear\">");
		div_top.append(div_left);
		div_top.append(div_right);
		div_top.append(div_clear);
		return div_top;
    }

    /***
    
    ***/
   
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
   
   function closes(){ 
       $("#Loading").fadeOut("normal",function(){ 
           $(this).remove();
        }); 
   } 

	 function  selfdefine_ajax(cityname){ 
	 	 	// alert(cityname);
	 		 if(cityname==''){cityname='济南'};		 	 			
		    $.ajax({   
		            global:false,
		            cache: false,
		            async: false,
		            type: "get", 
		            //dataType:"html",
		            data:{name:cityname},         
		            url:"getcitycode.php",  //备注：jquery.ajax不能跨域访问IP。需要后台处理后返回值。
		            success: function (data,textstatus){
	                //$.messager.alert('Info',data,'info');      
		             /// alert("response:"+data); 
		              city =  eval("("+data+")");
		            },            
		            error: function(XMLHttpRequest, textStatus, errorThrown) {
	                    alert(XMLHttpRequest.status);
	                    alert(XMLHttpRequest.readyState);
	                    alert(textStatus);	            
		            }
		          });
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
<!-- 		  <img class="logo" src="img/LOGO_JNCL.png"></img>
		  <img class="word" src="img/logo-word.png"></img> -->
		  
		  <img class="logo" src="img/LOGO_sl.png"></img>
<!-- 		  <img class="word" src="img/logo-word.png"></img> -->

		  </a>
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse " id="doc-topbar-collapse">
    

    <div class=" am-collapse am-topbar-collapse" role="search">
	   <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
			<ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
 <li class="hw-menu-active"><a href="index.php">首页</a></li>     
 
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

  </div>

  </div>
</header>

<!-- top img roller -->
<div class="rollpic">
	 <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
	  <ul class="am-slides">
	      <li><img src="img/bg-new/hw_bg1.jpg"/></li>
		   <li><img src="img/bg-new/hw_bg2.jpg"/></li> 
	      <li><img src="img/bg-new/hw_bg3.jpg"/></li>  	
	      <li><img src="img/bg-new/hw_bg4.jpg"/></li>
	      <li><img src="img/bg-new/hw_bg5.jpg"/></li>
	  </ul>
    </div>
</div>


	<div class="am-container-1">
		<!-- four cloud solutions-->
		<div class="solutions part-all">
			<div class="part-title">
				<a href="solutions.php"> <i
					class="am-icon-lightbulb-o part-title-i"></i> <span
					class="part-title-span">超链仿真云</span>
					<p>Solutions</p>
				</a>
			</div>
			<ul class="am-g part-content solutions-content">
				<li class="am-u-sm-6 am-u-md-4 am-u-lg-4"><a href="solutions.php"> <i
						class="am-icon-safari solution-circle"></i> <span
						class="solutions-title">在线高性能仿真</span>
						<p class="solutions-way"></p>
				</a></li>
				<li class="am-u-sm-6 am-u-md-4 am-u-lg-4"><a
					href="solutions.php"> <i class="am-icon-magic solution-circle"></i>
						<span class="solutions-title">远程前后处理</span>
						<p class="solutions-way"></p>
				</a></li>
				<li class="am-u-sm-6 am-u-md-4 am-u-lg-4"><a
					href="solutions.php"> <i
						class="am-icon-phone solution-circle"></i> <span
						class="solutions-title">专业技术服务</span>
						<p class="solutions-way"></p>
				</a></li>
				<!--<li class="am-u-sm-6 am-u-md-3 am-u-lg-3"><a
					href="shop/two/home/home3.php"> <i
						class="am-icon-hacker-news solution-circle"></i> <span
						class="solutions-title">商务云</span>
						<p class="solutions-way">商务云方案</p>
				</a></li>-->

			</ul>

		</div>
	</div>

	<!-- customer case -->
	<div class="gray-li">
		<div class="customer-case part-all " id="custome_case">
			<div class="part-title">
				<a href="solutions_gaoxingneng.php"> <i
					class=" am-icon-briefcase part-title-i"></i> <span
					class="part-title-span">高性能计算</span>
					<p>HPC</p>
				</a>
			</div>

			<!-- case list -->
		  <ul data-am-widget="gallery"
				class=" am-avg-sm-1
  			        am-avg-md-1 am-avg-lg-1 am-gallery-bordered customer-case-content">
				<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-12">
					<div class="am-gallery-item case-img1">
						<a href="#"> <img src="img/fpage/高性能计算_2.jpg" />
						</a>
					</div>
					<div class="case-li-mengban">
						<div class=" case-word">
							<h3 class="am-gallery-title">高性能计算</h3>
							<p>2025</p>
							<a href="solutions_gaoxingneng.php"><span><i class="am-icon-eye"></i>查看更多</span></a>
						</div>
					</div>
				</li>
<!-- 				<li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-12">
					<div class="am-gallery-item case-img1">
						<a href="#"> <img src="img/fpage/高性能计算_1.jpg" />
						</a>
					</div>
					<div class="case-li-mengban">
						<div class=" case-word">
							<h3 class="am-gallery-title">高性能计算</h3>
							<p>2015-06-11</p>
							<a href="customer-case.php"><span><i class="am-icon-eye"></i>查看更多</span></a>
						</div>
					</div>
				</li>
 -->
	
			</ul>
			
			
			<!-- case end -->
			<div class="lan-bott">
				<div class="left">
					<span>全方位高性计算,为您轻松解决不同问题</span>
					<p>A full range of solutions for you to solve different problems</p>
				</div>
				<div class="right">
					<a href="solutions_gaoxingneng.php"> <span class="see-more">查看更多<i
							class="am-icon-angle-double-right"></i></span>
					</a>
				</div>
				<div class="clear"></div>
			</div>
			
			<!-- <div class="part-title"></div> -->
		</div>
	</div>


	<!-- news -->	
<div class=" news-all">
	<div class="am-container-1">
<div class="news part-all">
		<div class="part-title">
			<a href="solutions_info.php">
			<i class="fab fa-envira part-title-i"></i>  
			<span class="part-title-span">IT技术服务</span>
			<p> Information Build</p>
			</a>
		</div>
		<div class="news-content ">
				<ul class="news-content-ul">
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
						<a href="javascript:;">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						        <span class="news-right-title">运维托管服务</span>
						    	<div class="news-img">
						    	<img src="img/fpage/2-1信息化建设.png"></img>
						    	</div>
						    </div>
						    <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-12 " style="text-align: right;padding-right:50px;" >
										
<!-- 								    <p class="news-right-time"></p>
										<p class="news-right-words"></p> -->
										<a href="javascript:;" ><span class="see-more2 ">查看更多<i class="am-icon-angle-double-right"></i></span></a>
								 <br>
							</div>	
						<div class="clear"></div>
						</a>
					</li>
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
						<a href="javascript:;">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						    <span class="news-right-title">系统集成业务</span>
						    	<div class="news-img">
						    	<img src="img/fpage/2-2信息化建设_1.png"></img>
						    	</div>
						    </div>
						    <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-12 " style="text-align: right;padding-right:50px;">
										
										<!-- <p class="news-right-time">2017-07-18</p>
										<p class="news-right-words">2017年7月，由中国人工智能产业创新联盟编制，中国电子信息产业发展研究院、百分点集团联合发布了一份《2017人工智能行业发展热点分析报告》...</p>
										 -->
										 <a href="javascript:;"><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
								 </div>	
								
<!-- 						<div class="clear"></div> -->
						</a>
					</li>	

					<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
						<a href="javascript:;">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						    <span class="news-right-title">科研项目合作</span>
						    	<div class="news-img">
						    	<img src="img/fpage/2-3信息化建设.png"></img>
						    	</div>
						    </div>
						    <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-12" style="text-align: right;padding-right:50px;">
										
<!-- 										<p class="news-right-time">2017-06-11</p>
										<p class="news-right-words">第五届全球供应链大会（GLSC2017）将于7月11-12日
										在上海召开...</p> -->
										<a href="javascript:;"><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
								 </div>	
						<div class="clear"></div>
						</a>
					</li>
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
						<a href="javascript:;">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-12">
						    <span class="news-right-title">技术培训服务</span>
						    	<div class="news-img">
						    	<img src="img/fpage/2-5信息化建设.jpg"></img>
						    	</div>
						    </div>
						    <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-12" style="text-align: right;padding-right:50px;">
										
										<!-- <p class="news-right-time">2017-07-18</p>
										<p class="news-right-words">2017年7月，由中国人工智能产业创新联盟编制，中国电子信息产业发展研究院、百分点集团联合发布了一份《2017人工智能行业发展热点分析报告》...</p> -->
										<a href="javascript:;"><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
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


<div class="part-all gray-li">
<!-- choose reason -->
<div class="three-reason" >
			<div class="part-title three-reason-title">
			<span class="part-title-span w-white">选择山东超链智能科技的三大理由</span>
			<p class="w-white">Why Choose SDSL</p>
			
		</div>
			<ul class="am-g part-content three-reason-content">
			  <li class="am-u-sm-4 am-u-md-4 am-u-lg-4">
			  	<div class="three-reason-img1 "></div>
			  	<p class="reason-title w-white">规模优势<br/>Scale advantage</p>
			  </li>
			  <li class="am-u-sm-4 am-u-md-4 am-u-lg-4">
			  	<div class="three-reason-img2 "></div>
			  	<p class="reason-title w-white ">领先技术<br/>Leading technology</p>
			  </li>
			  <li class="am-u-sm-4 am-u-md-4 am-u-lg-4">
			  	<div class="three-reason-img3 "></div>
			  	<p class="reason-title w-white">整合能力<br/>Integration capability</p>
			  </li>
			  
		</ul>
		
</div>
	
<!-- customer service -->
<!-- <div class="part-all gray-li"> -->
<div class="customer  am-container-1">
		<div class="part-title"><a href="solutions_gis_bigdata.php">
			<i class="am-icon-users part-title-i"></i>
			<span class="part-title-span">地理信息大数据平台</span>
			<p>GIS BIGDATA</p>
			</a>
		</div>		
		<div class="am-slider am-slider-default am-slider-carousel part-all" data-am-flexslider="{itemWidth:370, itemMargin: 5, slideshow: true}" style="  background-color: #f0eeed; box-shadow:none;">
  <ul class="am-slides" style="text-align:center;">
    <li><img src="img/fpage/3-1地理信息大数据.png"/><a type="button" class="am-btn am-btn-secondary" href="solutions_gis_bigdata_app.php"  >无人机解决方案</a></li>
    <li><img src="img/fpage/3-2地理信息大数据.png"/><a type="button" class="am-btn am-btn-secondary" href="solutions_gis_bigdata_satellite.php" >倾斜摄影测量</a></li>
    <li><img src="img/fpage/3-3地理信息大数据.png"/><a type="button" class="am-btn am-btn-secondary"  href="solutions_gis_bigdata_dataearth.php" >数字地球</a></li>
    <li><img src="img/fpage/3-1地理信息大数据.png"/><a type="button" class="am-btn am-btn-secondary"  href="solutions_gis_bigdata_app.php" >无人机解决方案</a></li>
    <li><img src="img/fpage/3-2地理信息大数据.png"/><a type="button" class="am-btn am-btn-secondary"  href="solutions_gis_bigdata_satellite.php" >倾斜摄影测量</a></li>
    <li><img src="img/fpage/3-3地理信息大数据.png"/><a type="button" class="am-btn am-btn-secondary"  href="solutions_gis_bigdata_dataearth.php" >数字地球</a></li>

    
<!--     <li><img src="img/product_img/LSDYNA-LSTC公司商标.jpg"/></li>
    <li><img src="img/product_img/MSC Software商标.jpg"/></li>
    <li><img src="img/ptn4.png"/></li>
    <li><img src="img/ptn5.png"/></li>
    <li><img src="img/ptn6.png"/></li>
    <li><img src="img/ptn7.png"/></li>
    <li><img src="img/ptn8.png"/></li> -->
  </ul>
</div>
<!-- 		<ul class="customer-content">
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="img/ptn4.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="img/ptn5.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="img/ptn6.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="img/ptn7.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="img/ptn8.png"/></div></li>
			<li class="am-u-sm-6 am-u-md-4 am-u-lg-2"><div><img src="img/ptn4.png"/></div></li>
			<div class="clear"></div>
		</ul> -->
</div>
</div>


<!-- contact us -->
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
<!--                     <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="recruit.php">招贤纳士</a></li> -->
                    <div class="clear"></div>
                </ul>
            </div>
        </li>
        <div class="clear"> </div>
    </ul>
   
</footer>

<?php //include "footer.php";  ?> 

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
<script src="js/scroll.js"></script>
<script type="text/javascript">

</script>
</html>
