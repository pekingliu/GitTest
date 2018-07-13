<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>高性能计算平台</title>
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
<!--    <script type="text/javascript" src="datajs/solution-addconent.js"></script>  -->
  
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/app.css"/>
  
      <script src="js/alertify.js-0.3.11/lib/alertify.min.js"></script>
<link rel="stylesheet" href="js/alertify.js-0.3.11/themes/alertify.core.css" />
<link rel="stylesheet" href="js/alertify.js-0.3.11/themes/alertify.default.css" />
  
  <script language="javascript" src="js/ping.js"></script>
  
  <script type="text/javascript">


   $(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码
	    
	     usercheck();

/* 		 addtabs("在线高性能仿真",1,0);
		 var liarray_caef = addlicontent_caeforward();
		 addcontent(2,liarray_caef);

		 addtabs("远程前后处理",2,1);
		 var liarray_cael = addlicontent_caelarge();
		 addcontent(2,liarray_cael);

		 addtabs("专业技术服务",3,2);
		 var liarray_caeb = addlicontent_caeback();
		 addcontent(2,liarray_caeb);
	     
		 addtabs("专业技术服务",4,3);
		 var liarray = addlicontent_cad();
		 addcontent(3,liarray); */
	     pingf();

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
	  create_add_tab_ul(tabtitle,classno,tabno);	
   }  

   function create_li(title,content,contenthref,imagsrc)
	{
	    var panelli=new Array();
		panelli[0]=$("<li class=\"am-u-sm-12 am-u-md-6 am-u-lg-12\"> ");	
		panelli[1]=$(contenthref);
		panelli[2]=imagsrc;
		panelli[3]=$("<div class=\"am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img\">");
		panelli[4]=$(" <div class=\"am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words\"> ");
		panelli[5]=title;
		panelli[6]= content;
		return panelli;
	}
   function create_add_tab_ul(tabtitle,classno,tabno){
	   var li = " <li class=\"solutions-tabs-ul-li"+classno
	   +"\"><a href=\"[data-tab-panel-"+tabno
	   +"]\"><i class=\" am-icon-mobile-phone mobile-phone\"></i><span>"+tabtitle
	   +"</span></a></li> ";
	   $("#tabpanel_main").append(li);	 
	   return li;
  }

   
   function addlicontent_caeforward(){
	   var li_1 = create_li("<h5>ANSYS ICEM CFD</h5> "," <p>ICEM CFD软件包是专用的流体分析的前处理工具，"+
				  " 为所有世界流行的CAE软件提供高效可靠的分析模型。它拥有强大的CAD模型修复能力、自动中面抽取、独特的网格“雕塑”技术、网格编辑技术以及广泛的求解器支持能力。</p> ",
				   "<a href=\"solutions-design-cad.php\">","<img src=\"img/product_img/ANSYS-Fluids/流体分析.jpg\" />");
		   var li_2 = create_li("<h5>ANSYS CFD PrePost</h5> "," <p>Fluent和CFX的通用CFD前后处理器。  具有直观的用户界面，能以多种格式输入网格模型并交互式定义物理过程和流固耦合求解设置。"+
				 "具备丰富的后处理能力，可获得矢量图、流线、动画等；可在多个计算结果之间对比数据;能进行图形绘制；具备标注能力（色标、二维和三维文字说明）；可以JPEG、PNG、BMP、PPM、VRML等多种格式输出图形。"+
				   "由世界上最大的有限元分析软件公司之一的美国ANSYS开发，它能与多数CAD软件接口，实现数据的共享和交换，如Creo, NASTRAN, Alogor, I－DEAS, AutoCAD等， 是现代产品设计中高级CAE工具之一。</p> ",
				   "<a href=\"solutions-design-cad.php\">","<img src=\"img/product_img/ANSYS-Fluids/流体分析2.jpg\" />");
		   var li_3 = create_li("<h5>ANSYS Mechanical PrePost</h5> "," <p>提供前处理阶段的建模功能以及后处理阶段的结果分析处理。 "+
		 		   "具有基于Parasolid内核的全参数建模工具，提供强大的几何模型修改、修复和编辑功能，能方便快捷的创建符合CAE分析人员要求的模型。 "+
		 		   "与Catia、NX、Pro/E、Solidworks等主流CAD软件实现无缝连接，当CAD模型参数变化后，会自动进行网格的重新划分。 "+"可进行载荷、边界条件和材料参数的定义和管理。 "+
		 		   "具有通用后处理和时间历程后处理功能。 </p> ",
	 				   "<a href=\"solutions-design-cad.php\">","<img src=\"img/product_img/ANSYS-Structures/结构分析.jpg\" />");
			
		   var liarray = new Array();
		   liarray[0]=li_1;
		   liarray[1]=li_2;
		   liarray[2]=li_3;
		   return liarray; 
   }

  function addlicontent_caelarge(){
	   var li_1 = create_li("<h5>ANSYS Mechanical</h5> "," <p>ANSYS Mechanical软件包提供结构力学分析功能、热分析功能及热机耦合分析功能。材料模型涵盖各种金属材料和橡胶、泡沫、岩土等非金属材料。"+
				  "ANSYS Mechanical软件包提供结构静力学、动力学和非线性分析能力，热分析能力以及结构和热的耦合分析能力，适用于单一结构以及复杂装配体。"+
				  "ANSYS Mechanical软件包的耦合分析功能支持声学分析、压电分析、热/结构耦合分析和热/电耦合分析能力。"+
				  "ANSYS Mechanical软件包与ANSYS CFX流体分析模块可以进行实时流固耦合分析。"+
				  "</p> ",
				   "<a href=\"solutions-design-cad.php\">","<img src=\"img/product_img/ANSYS-Structures/结构分析2.jpg\" />");
		   var li_2 = create_li("<h5>ANSYS Fluent</h5> "," <p>"+
				   "Fluent软件包适用于从不可压缩到高度可压缩范围内流体的运动仿真。通过多种求解方法和多重网格加速技术，"+
				   "获得较高的收敛速度和求解精度。使FLUENT在湍流、传热与相变、化学反应与燃烧、多相流、旋转机械、动/变形网格、噪声、材料加工、燃料电池等方面有广泛应用。"+
				   "</p> ",
				   "<a href=\"solutions-design-cad.php\">","<img src=\"img/product_img/ANSYS-Fluids/流体分析.jpg\" />");
		   var liarray = new Array();
		   liarray[0]=li_1;
		   liarray[1]=li_2;
		   return liarray; 
  }
  function addlicontent_cad(){
	   var li_1 = create_li("<h5>TH-PDM面向产品全生命周期管理的产品数据管理系统</h5> "," <p>TH-PDM系统就是在上述的理念基test.....20170726</p> ",
			   "<a href=\"solutions-design-cad.php\">","<img src=\"img/icon-png1/Toolkit_04.png\" />");
	   var li_2 = create_li("<h5>TH-PDM面向产品全生命周期管理的产品数据管理系统</h5> "," <p>TH-PDM系统就是在上述的理念基test.....20170726</p> ",
			   "<a href=\"solutions-design-cad.php\">","<img src=\"img/icon-png1/Toolkit_05.png\" />");
	   var liarray = new Array();
	   liarray[0]=li_1;
	   liarray[1]=li_2;
	   return liarray; 
  }
  function addlicontent_caeback(){
	   var li_1 = create_li("<h5>Abaqus/CAE (有限元前后处理)</h5> "," <p>"+
			   "BAQUS/CAE是一个对于ABAQUS分析任务建模、管理和监控的完整环境；同样可以有效地观察ABAQU分析的可视化结果。ABAQUS/CAE的可视化能力同样可以在其单独的产品ABAQUS/Viewer中实现。"+
			  " 快速地创建高质量的模型——用户能够创建参数化几何体如：拉伸、旋转、扫略、倒角和放样。同时也能够由各种流行的 CAD 系统导入几何体，并运用上述建模方法进行进一步编辑。"+
			  "</p> ",
			   "<a href=\"solutions-design-cad.php\">","<img src=\"img/product_img/Abaqus_CAE.png\" />");
	   var li_2 = create_li("<h5>MSC Patran</h5> "," <p>"+
			   "Patran是通用的有限元分析（FEA）预/后处理软件，能够提供实体建模，网格划分，以及为MSC Nastran， Marc, Abaqus, LS-DYNA, ANSYS,和Pam-Crash提供分析设置。"+
			   "支持所有的主流CAD 软件"+"功能强大的CAD清理工具;"+"支持多种有限元求解器"+"简易结果评价的后处理和报告工具"+"前/后处理自动化脚本"+
			   "</p> ",
			   "<a href=\"solutions-design-cad.php\">","<img src=\"img/product_img/MSC-Software/MSC Adams2.jpg\" />");
	   var liarray = new Array();
	   liarray[0]=li_1;
	   liarray[1]=li_2;
	   return liarray; 
  }

  function addcontent(tabno,li_array){
	   
		var paneldata=new Array()
	   		paneldata[0]=$("<ul class=\" solutions-content-ul\">");
			paneldata[8]= " <div data-tab-panel-"+tabno+"  class=\"am-tab-panel\" >";   		   			
	       // $("#panel5").empty();//每次点击，请div内容清空，但是不删除当前div节点
			var ul= paneldata[0];
			
			
			for(x in li_array){
				var li= li_array[x][0];	
	           	var a_li = li_array[x][1];
			
				var backimg = li_array[x][2];
				var div_img = li_array[x][3];
				div_img.append(backimg);				//add icon img	to div	

						
		        var div_content = li_array[x][4];
				var title_content = li_array[x][5];
				var content_ = li_array[x][6];	
				div_content.append(title_content); //add content title to div
				div_content.append(content_);      //add content to div
				a_li.append(div_img);             //add img to a href
				a_li.append(div_content);          //add content to a href 
				
				li.append(a_li);	//add a to li 	
				ul.append(li);       //add li to ul
			}

			//var tabno = paneldata[9];;
			var paneltxt = paneldata[8];	
			var panel_content= $(paneltxt);	
			
			panel_content.append(ul);			//add ul 2 panel
			$("#tabpanel_content").append(panel_content);

    //       alert($("#tabpanel_content").html());	
		
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


   function tojinghang()
   {
	   pingjinghang()
   }
   function pingjinghang()
   {
	   $.ping({
		   url : 'http://127.0.0.1', //url:'https://vpn.nsccjn.cn/SSL/user/PasswordLogin.jsp',
		   beforePing : function(){},
		   afterPing : function(ping){}, 
		   successPing : function(ping){alertify.success(ping)},
		   errorPing : function(ping){alertify.error(ping)},
		   interval : 1000000
	  });
	   
   }


   
function pingf()
{

	   $.ping = function(option) 
	   {
	       var ping, requestTime, responseTime ;
	       var getUrl = function(url){    //保证url带http://
	           var strReg="^((https|http)?://){1}"
	           var re=new RegExp(strReg); 
	           return re.test(url)?url:"http://"+url;
	       }
	       $.ajax({
	           url: getUrl(option.url),//+'/'+ (new Date()).getTime() + '.jsp',  //设置一个空的ajax请求
	           type: 'GET',
	           //dataType: 'html',
	           timeout: 10000,
	           beforeSend : function() 
	           {
	               if(option.beforePing) option.beforePing();
	               requestTime = new Date().getTime();
	           },
	           complete : function() 
	           {
	               responseTime = new Date().getTime();
	               ping = Math.abs(requestTime - responseTime);
	               if(option.afterPing) option.afterPing(ping);
	           },
	           success: function (data) {
		           ping = " 网络联通！"
	               if(option.successPing) option.successPing(ping);
// 	               alert(option.url);
// 		           window.location.href="https://vpn.nsccjn.cn/SSL/user/PasswordLogin.jsp"; 
		           window.open("http://10.1.0.4:8080/appform/login");    
	               	               
	           },
	           error: function (data) {
// 		           alert(data);
// 	        	   ping="错误: 网络不通！" ;
	        	   window.open("http://10.1.0.4:8080/appform/login");    
	               //console.info("error: " + data.responseText);
	        	   if(option.errorPing) option.errorPing(ping);
	           }
	       });
	    
	       if(option.interval && option.interval > 0)
	       {
	           var interval = option.interval * 1000;
	           setTimeout(function(){$.ping(option)}, interval);
//	           option.interval = 0;        // 阻止多重循环
//	           setInterval(function(){$.ping(option)}, interval);
	       }
	   };
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
          <li ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span>超链仿真云</a></li>   <li class="am-divider"></li>
          <li  class="hw-menu-active"><a href="solutions_gaoxingneng.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 高性能计算</a></li>     <li class="am-divider"></li>
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
<!-- 	</div> -->

  </div>

  </div>
</header>
  
  
</header>
	<div class="toppic">
		<div class="am-container-1">
			<div class="toppic-title left">
				<i class="am-icon-lightbulb-o toppic-title-i"></i> <span
					class="toppic-title-span">高性能计算平台</span>
				<p>Design Cloud</p>
			</div>
			<div class="right toppic-progress">
				<span><a href="solutions.php" class="w-white">核心业务</a></span> <i
					class=" am-icon-arrow-circle-right w-white"></i> <span><a
					href="solutions.php" class="w-white">高性能计算平台</a></span>
			</div>
		</div>
		
		
	</div>


<!-- 	<div class="part-title">
			<a href="#">
			<i class="am-icon-newspaper-o part-title-i"></i>
			<span class="part-title-span">高性能计算</span>
			</a>
			
		</div><br> -->
	
	<!-- introduce -->
	<div class="section- gray-li-"
		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 " style="background: #f3f4f4-1111;">
<!-- 			<h2 class="mysection--title"></h2>	
			<p class="mysection--description">简介：构建设计建模、仿真渲染的全流程技术服务云平台。集成了模型处理、可视化计算等模块。<br>
			特点：构建设计建模、仿真渲染的全流程技术服务云平台。集成了模型处理、可视化计算等模块。</p>		
			<p class="mysection--description"></p> -->
			
			
			  <div style="text-align: right; margin: 10px 30px;">
				<!--  	<a href="javascript:void(0);" onclick="tojinghang()" ><span class="see-more-download">登陆云平台<i class="am-icon-home"></i></span></a> 
						<a href="downloadtest.zip"><span class="see-more-download">下载软件<i class="am-icon-qq"></i></span></a>
						<a href="apply-for.php"><span class="see-more-download">申请许可<i	class="am-icon-weixin"></i></span></a>
-->	
	<!-- 			<a class="am-btn am-btn-default" href="javascript:void(0);" onclick="tojinghang()">
					<i class="am-icon-cog"></i>登陆云平台
				</a>   -->

				<a class="am-btn am-btn-warning" target="_new" href="https://vpn2.nsccjn.cn/por/login_psw.csp?rnd=0.5448416581701686#https%3A%2F%2Fvpn2.nsccjn.cn%2F"> <i
					class="am-icon-shopping-cart"></i>VPN登陆
				</a>

<!-- 				<a class="am-btn am-btn-default">
					<i class="am-icon-spinner am-icon-spin"></i> 加载中
				</a> -->

				<a class="am-btn am-btn-primary" href="apply-for.php">
					申请试用 <i class="am-icon-cloud-download"></i>
				</a>


			</div>
		
		</div>
	</div>




    <!-- tabs -->
	<div data-am-widget="tabs"class="am-tabs am-tabs-d2 ">

      <ul class="am-tabs-nav am-cf solutions-tabs-ul " id="tabpanel_main">
           <li class="am-active solutions-tabs-ul-li1"><a href="[data-tab-panel-0]" ><i class=" am-primary am-icon-shield "></i><span>平台资源</span></a></li>
           <li class="solutions-tabs-ul-li2"><a href="[data-tab-panel-1]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>使用指南</span></a></li> 
           <li class="solutions-tabs-ul-li3"><a href="[data-tab-panel-2]" ><i class=" am-icon-desktop"></i><span>案例成果</span></a></li> 
<!--            <li class="solutions-tabs-ul-li4"><a href="[data-tab-panel-3]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>试用申请</span></a></li> -->
       
      </ul>

      <div class="am-tabs-bd solutions-tabs-content " id="tabpanel_content">
         <div data-tab-panel-0 class="am-tab-panel am-active"">
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Fluids/流体分析.jpg" />
            		</div>
            		</a> 
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>硬件资源</h5>
            			<p>为所有世界流行的CAE软件提供高效可靠的分析模型。它拥有强大的CAD模型修复能力、自动中面抽取、独特的网格“雕塑”技术、网格编辑技术以及广泛的求解器支持能力。</p><br>
            			<img src="img/solutions_gao/hardware.png"  class="am-img-responsive" alt="" />
            		</div>
            		
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
             		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Fluids/流体分析2.jpg" />
            		</div>
            		</a>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>软件资源</h5>
            			<p>具备丰富的后处理能力，可获得矢量图、流线、动画等；可在多个计算结果之间对比数据;能进行图形绘制；具备标注能力（色标、二维和三维文字说明）；可以JPEG、PNG、BMP、PPM、VRML等多种格式输出图形。</p>
            			<br>
            			<img src="img/solutions_gao/software.png" class="am-img-responsive" alt=""/>
            		</div>
            		 
            	</li>

             <div class="clear"></div>
            </ul>
            
          </div>  
          <div data-tab-panel-1 class="am-tab-panel" >
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Structures/结构分析.jpg" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>用户手册</h5>
            			<p</p>
            		</div>
            		</a> 
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
             		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/bur.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>演示视频</h5>
            			<p></p>
            		</div>
            		</a> 
            	</li>

             <div class="clear"></div>
            </ul>
            
          </div>  
          
           <div data-tab-panel-2 class="am-tab-panel">
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
<!--             		<a href="solutions-design-cad.php"> -->
<!--             		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/bur.png" />
            		</div> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>海洋</h5>
								<ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-4 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片1.png"
												title="全球涡分辨率海洋环流模式">
												<img src="img/solutions_gao/图片1.png"	alt="该成果基于并行海洋模式POP建立了全球0.1度分辨率海洋环流模式，模拟年平均海平面高度和海洋表层温度" />
												<h3 class="am-gallery-title">全球平均海平面高度</h3>
												<div class="am-gallery-desc">全球涡分辨率海洋环流模式</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片2.png"
												title="全球涡分辨率海洋环流模式">
												<img src="img/solutions_gao/图片2.png" alt="该成果基于并行海洋模式POP建立了全球0.1度分辨率海洋环流模式，模拟年平均海平面高度和海洋表层温度" />
												<h3 class="am-gallery-title">全球海洋表层温度</h3>
												<div class="am-gallery-desc">全球涡分辨率海洋环流模式</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片3.png"
												title="全球涡分辨率海洋环流模式">
												<img src="img/solutions_gao/图片3.png"	alt="该成果基于并行海洋模式POP建立了全球0.1度分辨率海洋环流模式，模拟年平均海平面高度和海洋表层温度" />
												<h3 class="am-gallery-title">海表面高度分布（单位：m）</h3>
												<div class="am-gallery-desc">全球涡旋分辨率海洋环流数值模式</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片4.png"
												title="全球涡分辨率海洋环流模式">
												<img src="img/solutions_gao/图片4.png" alt="该成果基于并行海洋模式POP建立了全球0.1度分辨率海洋环流模式，模拟年平均海平面高度和海洋表层温度" />
												<h3 class="am-gallery-title">海表面温度分布（单位：℃）</h3>
												<div class="am-gallery-desc">全球涡旋分辨率海洋环流数值模式</div></a>
										</div>
									</li>
								</ul>


							</div>
            		</a> 
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
             		<a href="solutions-design-cad.php">
<!--             		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/bur.png" />
            		</div> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>气象</h5>
            			<ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-4 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片5.png"
												title="精细化集合数值天气预报">
												<img src="img/solutions_gao/图片5.png"	alt="" />
												<h3 class="am-gallery-title">集合预报</h3>
												<div class="am-gallery-desc">精细化集合数值天气预报</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片6.png"
												title="精细化集合数值天气预报">
												<img src="img/solutions_gao/图片6.png" alt="" />
												<h3 class="am-gallery-title">集合预报</h3>
												<div class="am-gallery-desc">精细化集合数值天气预报</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片7.png"
												title="精细化集合数值天气预报">
												<img src="img/solutions_gao/图片7.png"	alt="" />
												<h3 class="am-gallery-title">HYBRID集合同化0612预报</h3>
												<div class="am-gallery-desc">精细化集合数值天气预报</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片8.png"
												title="精细化集合数值天气预报">
												<img src="img/solutions_gao/图片8.png" alt="" />
												<h3 class="am-gallery-title">WRF同时次的预</h3>
												<div class="am-gallery-desc">精细化集合数值天气预报</div></a>
										</div>
									</li>
								</ul>
            		</div>
            		</a> 
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
             		<a href="solutions-design-cad.php">
<!--             		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/bur.png" />
            		</div> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>生物</h5>
            			<ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-1 am-avg-lg-1 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片9.png"
												title="纳米材料生物效应和毒理性的分子动力学模拟">
												<img src="img/solutions_gao/图片9.png"	alt="山东大学物理学院" />
												<h3 class="am-gallery-title">纳米材料生物效应和毒理性的分子动力学模拟</h3>
												<div class="am-gallery-desc">山东大学物理学院</div></a>
										</div>
									</li>
									
								</ul>
            		</div>
            		</a> 
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
             		<a href="solutions-design-cad.php">
<!--             		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/bur.png" />
            		</div> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>物理</h5>
            			            			<ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-2 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片10.png"
												title="">
												<img src="img/solutions_gao/图片10.png"	alt="山东大学物理学院" />
												<h3 class="am-gallery-title">973”计划和国家自然科学基金课题</h3>
												<div class="am-gallery-desc">非过渡金属杂质、缺陷对拓扑绝缘体材料改性的理论研究</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片11.png"
												title="">
												<img src="img/solutions_gao/图片11.png"	alt="山东大学物理学院" />
												<h3 class="am-gallery-title">973”计划和国家自然科学基金课题</h3>
												<div class="am-gallery-desc">非过渡金属杂质、缺陷对拓扑绝缘体材料改性的理论研究</div></a>
										</div>
									</li>
								</ul>
            		</div>
            		</a> 
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
             		<a href="solutions-design-cad.php">
<!--             		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/bur.png" />
            		</div> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>电磁</h5>
            			  <ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-4 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片13.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gao/图片13.png"	alt="" />
												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">受飞机影响后的辐射方向</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片14.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gao/图片14.png"	alt="" />
												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">电磁仿真模型</div></a>
										</div>
									</li>
																		<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片15.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gao/图片15.png"	alt="" />
												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">八木天线阵列辐射方向图</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片16.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gao/图片16.png"	alt="" />
												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">天线综合布局设计与优化</div></a>
										</div>
									</li>
																		<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片17.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gao/图片17.png"	alt="" />
												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">天线罩烧蚀前后对瞄准线的影响分析</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片18.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gao/图片18.png"	alt="" />
												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">隐身战机仿真模型</div></a>
										</div>
									</li>
																		<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片20.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gao/图片20.png"	alt="" />
												<h3 class="am-gallery-title">电磁仿真后处理软件EMSVIEW</h3>
												<div class="am-gallery-desc">电磁远场辐射方向图</div></a>
										</div>
									</li>
																		<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gao/图片18.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gao/图片20.png"	alt="" />
												<h3 class="am-gallery-title">电磁仿真后处理软件EMSVIEW</h3>
												<div class="am-gallery-desc">远场三维切片展示</div></a>
										</div>
									</li>
							</ul>
            		</div>
            		</a> 
            	</li>
<!--             	<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
             		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/icon-png1/bur.png" />
            		</div>
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>化学</h5>
            			<p></p>
            		</div>
            		</a> 
            	</li> -->
             <div class="clear"></div>
            </ul>
            
          </div>  
 
          
      </div>
  </div






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
