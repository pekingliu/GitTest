<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>知识云</title>
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
  
  <link href="js/video5.18.4.js/css/video-js.css" rel="stylesheet" type="text/css">
  <script src="js/video5.18.4.js/js/video.min.js"></script> 
  <script src="js/video5.18.4.js/js/videojs-ie8.min.js"></script> 
  
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>
  
  <link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png">
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/app.css"/>
  
  
  
  <script type="text/javascript">   
     $(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码
	    
	     usercheck();
	     videoplay();
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

	 function videoplay(){

		 $(".video_link").click(function() {
			    var myPlayer = videojs('my-video');
			    var videoUrl = $(this).attr("videohref");
			    var name=$(this).text();
			    alertify.success("即将播放---"+name);
			    videojs("my-video", {}, function() {	
				 	window.myPlayer = this;
			        $("#mymoda .video-con #my-video source").attr("src", videoUrl);
			        myPlayer.src(videoUrl);
			        myPlayer.load(videoUrl);
			        myPlayer.play();
			    });
			    //$(".click-modal").click();
			});

	 }

   function click001(){
	   alertify.success("下载文件！");
	   location.href="downloadtest.zip";
	}
   function click101(){
	   alertify.success("下载文件！");
	   location.href="downloadtest.zip";
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
          <li  class="am-active"><a href="solutions-knowledge.php"><span class="am-icon-user am-icon-fw am-primary"></span> 知识云</a></li>      <li class="am-divider"></li>
          <li><a href="solutions-business.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 商务云</a></li> 
            </ul>
      </li>
      
      <li><a href="product-show.php">产品展示 </a></li>
      <li><a href="customer-case.php">客户案例</a></li>
 <!--      <li><a href="service-center.html">服务中心 </a></li> -->
      <li class="am-dropdown "><a href="news.php">新闻动态 </a></li>
<!--       <li><a href="about-us.html">关于我们</a></li>
      <li><a href="recruit.html">招贤纳士 </a></li> -->
	   


	   <li class="am-dropdown  " data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users am-icon-fw"></span><label id="lbl">欢迎您访问！ </label> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="service-center.php"> <span class="am-icon-home"></span> 服务中心 </a></li>  <li class="am-divider"></li>
          <li ><a href="about-us.php"><span class="am-icon-qq"></span> 关于我们</a></li>  <li class="am-divider"></li>
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
			<i class="am-icon-mixcloud toppic-title-i"></i>
			<span class="toppic-title-span">行业知识库</span>
			<p>Industry Konwledge database</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="solutions.php" class="w-white">解决方案</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="solutions-knowledge.php" class="w-white">知识云</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="solutions-knowledge-documents-gov.php" class="w-white">行业知识库</a></span>
		</div>
	</div>
</div>

<div class=" " >	
	<div class="part-title part-title-mar">
			<a href="javascript:void(0)">
			<i class=" am-icon-institution part-title-i"></i>
			<span class="part-title-span">行业资料列表</span>
			<p>Industry Documents List</p>
			</a>
	</div>
	
	<!-- img list -->
	
	
    <div class="am-g">
                    <div class="tpl-table-images">
                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>	
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>							
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                <div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-i-time">发布时间：2016-09-12</div>
                                    <div class="tpl-i-title">
                                        “你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！
                                    </div>
                                    <a href="javascript:;" class="tpl-table-images-content-i">
                                        <div class="tpl-table-images-content-i-info">
                                            <span class="ico">
                                    <img src="assets/img/user02.png" alt="">追逐
                                 </span>

                                        </div>
                                        <span class="tpl-table-images-content-i-shadow"></span>
                                        <img src="assets/img/a1.png" alt="">
                                    </a>
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">
                                            你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片。
                                        </div>
                                        <div class="tpl-i-more">
                                            <ul>
                                                <li><span class="am-icon-qq am-text-warning"> 100+</span></li>
                                                <li><span class="am-icon-weixin am-text-success"> 235+</span></li>
                                                <li><span class="am-icon-github font-green"> 600+</span></li>
                                            </ul>
                                        </div>
                                        <div class="am-btn-toolbar center">
                                            <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn ">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 下载</button>
                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="am-u-lg-12">
                                <div class="am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                            </div>
	
	                </div>

  </div>
	
	
</div>









<!-- contact us -->

<div class="gray-li">
<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="customer-case.html">
			<i class=" am-icon-comments-o part-title-i"></i>
			<span class="part-title-span">联系我们</span>
			<p>Contact Us</p>
			</a>
	</div>		
</div>

<div class=" am-container-1 ">
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
		 	 		<div><i class=" am-icon-phone"></i><span>027-837362778</span></div>		 	 		
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
