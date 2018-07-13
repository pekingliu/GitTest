<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>无人机应用解决方案</title>
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
		   url : 'http://192.168.10.13', 
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
	           url: getUrl(option.url)+'/'+ (new Date()).getTime() + '.html',  //设置一个空的ajax请求
	           type: 'GET',
	           dataType: 'html',
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
	               	               
	           },
	           error: function (data) {
	        	   ping="错误: 网络不通！" ;
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
          <li  ><a href="solutions_gaoxingneng.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 高性能计算</a></li>     <li class="am-divider"></li>
          <li><a href="solutions_info.php"><span class="am-icon-user am-icon-fw am-primary"></span> IT技术服务</a></li>      <li class="am-divider"></li>
          <li class="hw-menu-active"><a href="solutions_gis_bigdata.php"><span class="am-icon-cog am-icon-fw am-primary"></span>地理信息大数据平台</a></li> 
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
			<div class="toppic-title left ">
				<i class="am-icon-lightbulb-o toppic-title-i"></i> <span
					class="toppic-title-span">无人机应用解决方案</span>
				<p>UAV Solutuons</p>
			</div>
			<div class="right toppic-progress  ">
				<span><a href="solutions.php" class="w-white">核心业务</a></span> 
				<i class=" am-icon-arrow-circle-right w-white"></i> <span>
				<a href="solutions_gis_bigdata.php" class="w-white">地理信息大数据平台</a></span>
				<i class=" am-icon-arrow-circle-right w-white"></i> <span>
				<a href="solutions_gis_bigdata_app.php" class="w-white">无人机应用解决方案</a></span>
			</div>
		</div>
	</div>


	<div class="part-title"  style="display: none;">
			<a href="#">
			<i class="am-icon-newspaper-o part-title-i"></i>
			<span class="part-title-span">仿真技术服务</span>
			</a>
			
		</div>
	
	<!-- introduce -->
	<div class="section gray-li " style="display: none;">
	
		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 " style="background: #f3f4f4;">
			<h2 class="mysection--title"></h2>	
			<p class="mysection--description">简介：构建设计建模、仿真渲染的全流程技术服务云平台。集成了模型处理、可视化计算等模块。<br>
			特点：构建设计建模、仿真渲染的全流程技术服务云平台。集成了模型处理、可视化计算等模块。</p>		
			<p class="mysection--description"></p>
			
			
			  <div style="text-align: right; margin: 0 100px;">
				<!--  	<a href="javascript:void(0);" onclick="tojinghang()" ><span class="see-more-download">登陆云平台<i class="am-icon-home"></i></span></a> 
						<a href="downloadtest.zip"><span class="see-more-download">下载软件<i class="am-icon-qq"></i></span></a>
						<a href="apply-for.php"><span class="see-more-download">申请许可<i	class="am-icon-weixin"></i></span></a>
-->	
				<a class="am-btn am-btn-warning" href="javascript:void(0);" onclick="tojinghang()">
					<i class="am-icon-cog"></i>登陆仿真云平台
				</a>

<!-- 				<a class="am-btn am-btn-warning" href="downloadtest.zip"> <i
					class="am-icon-shopping-cart"></i>下载软件
				</a> -->

<!-- 				<a class="am-btn am-btn-default">
					<i class="am-icon-spinner am-icon-spin"></i> 加载中
				</a> -->

				<a class="am-btn am-btn-primary" href="apply-for.php">
					申请许可 <i class="am-icon-cloud-download"></i>
				</a>


			</div>
		
		</div>
	</div>




    <!-- tabs -->
	<div data-am-widget="tabs"class="am-tabs am-tabs-d2 ">

      <ul class="am-tabs-nav am-cf solutions-tabs-ul " id="tabpanel_main">
           <li class="am-active solutions-tabs-ul-li1"><a href="[data-tab-panel-0]" ><i class=" am-primary am-icon-shield "></i><span>硬件展示</span></a></li>
           <li class="solutions-tabs-ul-li2"><a href="[data-tab-panel-1]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>成果示例</span></a></li> 
           <li class="solutions-tabs-ul-li3"><a href="[data-tab-panel-2]" ><i class=" am-icon-desktop"></i><span>精度展示</span></a></li> 
           <li class="solutions-tabs-ul-li4"><a href="[data-tab-panel-3]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>飞行软实力</span></a></li>
           <li class="solutions-tabs-ul-li2"><a href="[data-tab-panel-4]"><i class=" am-icon-mobile-phone mobile-phone"></i><span>行业应用</span></a></li>
       
      </ul>

      <div class="am-tabs-bd solutions-tabs-content " id="tabpanel_content">
         <div data-tab-panel-0 class="am-tab-panel am-active"">
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
<!--             		<a href="#">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Fluids/流体分析.jpg" />
            		</div>
            		</a>  -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>“云团- Clouds”固定翼无人机飞行平台</h5>
            			         			
            			
            			<img src="img/solutions_gis/图片1.png"  class="am-img-responsive" alt="云团- Clouds”固定翼无人机飞行平台" />
            			<p>云团- Clouds”固定翼无人机飞行平台</p>   
            			<br>
            			<img src="img/solutions_gis/图片2.png"  class="am-img-responsive" alt="" />
            			  <P>  机体采用轻量化复合材料，具有高安全性，高飞行稳定性，长航时，优异的起飞降落性能，对野外作业环境适应能力强等优点 。      </P>			<br>
            			<img src="img/solutions_gis/图片3.png"  class="am-img-responsive" alt="" />
            			<p>采用无人机通用动力锂电池，高效固定翼专用电机，续航能力业内领先。</p>              			<br>
            			<img src="img/solutions_gis/图片4.png"  class="am-img-responsive" alt="" />
            			<p>机翼可快速拆装，展开迅速，携带方便</p>  
            		</div>
            		
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
<!--              		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Fluids/流体分析2.jpg" />
            		</div>
            		</a> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>警用多旋翼无人机</h5>
            			
            			<img src="img/solutions_gis/图片6.png" class="am-img-responsive" alt=""/>
            			<p></p>
            		</div>
            		 
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
<!--              		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Fluids/流体分析2.jpg" />
            		</div>
            		</a> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>警用多旋翼无人机</h5>
            			
            			<img src="img/solutions_gis/图片6.png" class="am-img-responsive" alt=""/>
            			<p></p>
            		</div>
            		 
            	</li>
<!--             	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>五镜头</h5>
            			<p>&nbsp;&nbsp;&nbsp;&nbsp;山东超链智能科技有限公司拥有一支专业的工程仿真计算团队，技术人员为国家超级计算济南中心工程仿真计算部原班人马，均毕业于国内知名高校，拥有硕士及以上学历，在工程咨询领域具有丰富的模拟仿真经验。依托国家超级计算济南中心强大的高性能计算能力、娴熟的工程应用技术和丰富的工程应用经验，公司可提供石油装备行业、汽车行业、机床行业、工程机械等众多领域的企业提供高质量的咨询服务，开展结构强度、刚度、疲劳分析、多体动力学分析、优化减重设计、流体仿真等方面的工作，有力提升了企业产品研发设计能力。</p>
            			
            		</div>
            		 
            	</li> -->

             <div class="clear"></div>
            </ul>
            
          </div>  
          <div data-tab-panel-1 class="am-tab-panel" >
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
<!--             		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Structures/结构分析.jpg" />
            		</div></a> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>实景三维模型</h5>  
            			<p>&nbsp;&nbsp;&nbsp;&nbsp;实景三维模型为最终用户“自主测量、按需测绘” 提供了可能。 可以采用开放的、带有层级LOD（Levels of Detail的简称，意
为多细节层次） 的osgb格式进行存储。osgb格式的3DM数据可用开源数据库（MongoDB）进行存储和管理。初步测算，如倾斜影像的地面分辨率为2厘米，每平方公里3DM的数据量约为4～6GB。 </p>  
            			    <ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-4 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片1.png"
												title="实景三维模型">
												<img src="img/solutions_gis/UAV/图片1.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
<!-- 												<div class="am-gallery-desc">双横臂悬架多体动力学分析</div></a> -->
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片2.png"
												title="实景三维模型">
												<img src="img/solutions_gis/UAV/图片2.png"	alt="" />
											
<!-- 												<div class="am-gallery-desc">麦弗逊悬架多体动力学分析</div></a> -->
										</div>
									</li>
																		<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片3.png"
												title="实景三维模型">
												<img src="img/solutions_gis/UAV/图片3.png"	alt="" />
											
<!-- 												<div class="am-gallery-desc">整车多体动力学分析</div></a> -->
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片4.png"
												title="实景三维模型">
												<img src="img/solutions_gis/UAV/图片4.png"	alt="" />
											
<!-- 												<div class="am-gallery-desc">整车多体动力学分析</div></a> -->
										</div>
									</li>
							</ul>        			
            		</div>            		 
            	</li>
            	
            	
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
<!--             		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Structures/结构分析.jpg" />
            		</div></a> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>DEM</h5>    
            			<p>&nbsp;&nbsp;&nbsp;&nbsp;在DSM的基础上进行编辑，去除建筑物、树木、植被的非地形要素，并恢复地面形状，再经过滤波、平滑等处理后，可以得到准确表达地面高程信息的数字高程模型（DEM）产品。<br>
&nbsp;&nbsp;&nbsp;&nbsp; 利用倾斜摄影三维模型生成的DEM，保留了微观地貌的真实形态，具有极高的精度。在DEM的基础上，再经自动提取或人工引导添加部分地形特征线（合水线、分水线）、水域边线等，使用等高线生成软件，就可以自动生成等高线。 </p>
            			    <ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-2 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片5.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片5.png"	alt="" />
										
<!-- 												<div class="am-gallery-desc">修井机强度分析</div></a> -->
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片6.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片6.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
<!-- 												<div class="am-gallery-desc">电磁仿真模型</div></a> -->
										</div>
										</li>

							</ul>        			
            		</div>            		 
            	</li>
            	
            	<!-- 3333 -->
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>DLG</h5> 
            			<p>&nbsp;&nbsp;&nbsp;&nbsp;在实景三维模型的基础上，采用人工引导、自动识别、智能提取的方式，可以快速获取大多数地物的范围和边线，如建筑物的轮廓和形状、道路的范围和边线、水域的范围和边线、田块的范围和边线等线划要素。使用实景三维模型，可以进行大部分要素的识别和判读工作，调绘工作也可以改为全部室内判读、部分外业检核（室内外综合判调）。在DEM的基础上，再经自动提取或人工引导添加部分地形特征线（合水线、分水线）、水域边线等，使用等高线生成软件，就可以自动生成等高线。 </p>   
            			    <ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-2 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片7.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片7.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">受飞机影响后的辐射方向</div></a> -->
										</div>
									</li>
									
							</ul>        			
            		</div>            		 
            	</li>
            	
				<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>Dom</h5> 
            			<p>&nbsp;&nbsp;&nbsp;&nbsp;将三维模型进行置平或绝对定向后，利用正投影方法，就可以得到完全消除因地形起伏和地物高差产生的投影差的真正射影像。
以垂直中心投影的少量影像，要想完全自动消除正射影像的投影差，是非常困难的。而使用三维模型制作数字真正射影像（TDOM），则解决了以往数字摄影测量中不能完全消除的建筑物、树木等的投影差，实现了在正射影像上所有物体的投影位置和投影形状与实体的外轮廓完全一致的目标。</p>   
            			    <ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-2 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片8.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片8.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">受飞机影响后的辐射方向</div></a> -->
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片9.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片9.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">受飞机影响后的辐射方向</div></a> -->
										</div>
									</li>
									
							</ul>        			
            		</div>            		 
            	</li>
            	


             <div class="clear"></div>
            </ul>
            
          </div>  
          
           <div data-tab-panel-2 class="am-tab-panel">
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>汽车行业</h5>
									<ul data-am-widget="gallery"
										class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-3 am-gallery-default"
										data-am-gallery="{ pureview: false }">
										
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
													src="img/solutions_CAE/patner/中车.jpg"
													alt=" " />
												</a>
											</div>
										</li>

									</ul>



							</div>
            	</li>
 
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>石油装备行业</h5>
            			<p></p>
            		</div>
            		 
            	</li>
            	 <li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>轨道机车行业</h5>
            			<p></p>
            		</div>
            		
            	</li>
            	 <li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
             		
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>工程机械行业</h5>
            			<p></p>
            		</div>
            	 
            	</li>
            	 <li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
             		
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>石油装备行业</h5>
            			<p></p>
            		</div>
            		
            	</li>             	
             <div class="clear"></div>
             </ul>
           </div> 
            
            
          
 
          
           <div data-tab-panel-3 class="am-tab-panel" >
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>行业经历</h5>
            			<p><h6>杨鑫：</h6>
早年在济南市勘察测绘研究院从事传统测绘行业，2014年开始研究无人机航测，有多年勘测行业从业经验。<br>
<h6>顾宗仁：</h6>
2014年开始从事无人机行业，16年中旬曾在山东省计算中心担任无人机飞行教员一职，亲手培养无人机驾驶员三百人以上，负责培训学员实践操作，并熟练掌握航空摄影测量内外业各项工作。<br>
<h6>田丰：</h6>
2014年开始从事无人机行业，2015年取得机长资格，并在山东正方人合信息技术公司从事航测及学员培训工作至今。从事无人机航空摄影测量工作1年以上，目前负责航测数据的外业收集以及无人机的日常保管、保存、维护，航测内业处理、作图。<br>
<h6>李智国：</h6>
无人机专业毕业，科班出身，AOPA机长，从事无人机航空摄影测量工作1年以上，具有丰富的内业处理经验。</p>
            		</div>
            	</li>
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-9 solution-tabs-words">
            			<h5>人员证件</h5>
            			<p></p>
            			
            			<ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-2 am-avg-lg-2 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片10.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片10.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">受飞机影响后的辐射方向</div></a> -->
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片11.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片11.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">受飞机影响后的辐射方向</div></a> -->
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片12.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片12.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">受飞机影响后的辐射方向</div></a> -->
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片13.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片13.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3>
												<div class="am-gallery-desc">受飞机影响后的辐射方向</div></a> -->
										</div>
									</li>
									
							</ul>        
            			
            			
            			
            		</div>            		
            	</li>
            	
            	
             <div class="clear"></div>
            </ul>
            
          </div>  
          
          
           <div data-tab-panel-4 class="am-tab-panel" >
          	<ul class=" solutions-content-ul">
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
<!--             		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Structures/结构分析.jpg" />
            		</div></a> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>倾斜摄影在建筑行业中的应</h5>   
            			<p>&nbsp;&nbsp;&nbsp;&nbsp;近年来随着信息技术和数字技术的进一步发展，倾斜摄影测量技术成为了目前在测绘行业中的一个热点技术，而倾斜摄影测量技术集成了传统航空摄影技术和数字地面采集技术，在拍摄影像的精准度和可用性上都较之传统的测量技术有很大的提升。因此，倾斜摄影测量技术在建筑行业也得到了广泛应用。</p> 
            			    <ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-1 am-avg-lg-3 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片14.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片14.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
												<div class="am-gallery-desc">工程前期，用倾斜摄影测量技术，可以提高工程规划的效率。相对传统的测绘省时省力。</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片15.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片15.png"	alt="" />
											
												<div class="am-gallery-desc">工程结束，可利用倾斜摄影测量立体成果真实 ,对于地面周围的反映符合人类感知; 为建模提供真实、丰富的纹理信息；可实现高精度测量的特点，对于工程质量有一个良好的把控。析</div></a>
										</div>
									</li>
																		<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片16.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片16.png"	alt="" />
											
												<div class="am-gallery-desc">利用倾斜摄影测量技术对古建筑进行高精度建模，对建筑材质，外观数据进行整理。对以后古建筑的保护和修复提供便利。</div></a>
										</div>
									</li>
							</ul>        			
            		</div>            		 
            	</li>
            	
            	
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
<!--             		<a href="solutions-design-cad.php">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-3 solution-tabs-img">
            			<img src="img/product_img/ANSYS-Structures/结构分析.jpg" />
            		</div></a> -->
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>倾斜摄影测量技术在规划行业的应用</h5>    
            			<p>&nbsp;&nbsp;&nbsp;&nbsp;目前数字城市和智慧城市是城市规划的热点。借助无人机航拍获取影像资料，导入软件加工还原城市真实三维模型正是结合了城市规划学、建筑学、计 算机等多类学科。三维数字模型可模拟复原场地三维景观，提取场地信息，帮助规划师深入对场地的观察和理解。<br>
            			&nbsp;&nbsp;&nbsp;&nbsp;运用无人机航测技术快速获取信息，验证了无人机具有成本低、效率高、分辨率高等特点， 在地形复杂的丘陵、建筑物密集的城区和多云雾的山区都有更强的适应性。 因此利用无人机不受地形的约束的特点， 构建偏远地区的三维模型能为后期调查做好铺垫，缓解交通不便，进一步促进 山区旧村落复兴。倾斜摄影传感器所拍摄出的像片分辨率高，颜色真实，能够提高所构建模型的质量。经对比得出，无人机用于快速建模的优越性，具有速度快、效率高的优势。运用 GIS、Pix4Dmapper、Smart3D 等软件进行快速建模，相比传统大型飞机， 可有效节约成本，减少作业周期，尤其适合于城市中小范围建模。<br>
            			&nbsp;&nbsp;&nbsp;&nbsp;合理规划布局。城乡规划现阶段缺乏对于存量空间的标准化、规范化 的信息建设。三维模型能够直观的反映 出城市及村落的布局形态、分布特点、 比例，人群活动习惯、聚集点分布等，二者相结合可为场地的业态分布、功能 分区、设施管线布置提供科学依据.<br>
            			&nbsp;&nbsp;&nbsp;&nbsp;在三维模型中也更易对建筑容积率、 建筑密度、日照等进行空间分析，运用 Smart 3D、Ecotect等软件，在三维界面中分析建筑日照，相较于普通的平面日照分析更具有直观性，能准确判断遮挡物其遮阳范围及面积，且能同时综合 地形地势等其他因素。在三维模型中还能读取任意点的三维坐标测算任意建筑 的水平距离和空间距离、投影面积，实现视觉分析、日照分析、D/H 值确定等（见 图 2）。 图 2 平面与三维模型日照分析的对比 2.2  指导管理 数字城市的规划将更注重人文信息 的融合，所得的数据赋予其丰富的可视 化信息并指导管理。已有许多学者提出 校园三维模型的实时漫游能更合理监管 校园，实时查询各地点的人数、使用情 况等。模拟不同时期的学生活动有助于 人体工程学的运用，进行更人性化的设 计管理。<br>
            			&nbsp;&nbsp;&nbsp;&nbsp;现阶段城市规划受地点和时间的限 制。无法同时在一个地点进行城乡对比 研究，也无法同时进行改造前后场地现 状的对比分析，即对施工过程缺乏监管。 运用三维软件建模，远距离空间对比城 乡及场地规划前后情况，能实时检查现 阶段建筑与环境的融合程度。
            			
            			</p>
            			       			
            		</div>            		 
            	</li>
            	
            	<!-- 3333 -->
            	<li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>倾斜摄影测量技术在交通行业的应用</h5>   
            			<P>&nbsp;&nbsp;&nbsp;&nbsp;随着建筑信息模型技术（BIM）在城市交通行业的推进，传统的测绘成果难以满足设计施工的需求。倾斜摄影测量技术作为一种可以快速、高精度获取地表三维模型的高新技术，为BIM设计提供了更加直观的基础数据。倾斜摄影测量能够为城市交通规划、设计、施工、、运营提供数据支持进行更高的辅助决策。</P> 
            			    <ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-1 am-avg-lg-3 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片17.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片17.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
												<div class="am-gallery-desc">地铁项目中无人机对整段路线的规划</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片18.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片18.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
												<div class="am-gallery-desc"> 在交通日常维护中的应用;通过前后两次的成果对比，可监测交通道路的使用情况，以便及时的维修和维护。</div></a>
										</div>
									</li>
																		<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片19.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片19.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
												<div class="am-gallery-desc">在城市交通路网规划中的应用</div></a>
										</div>
									</li>

							</ul>        			
            		</div>            		 
            	</li>
            
            
              <li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>倾斜摄影测量技术在勘测行业应用</h5>   
            			<P>&nbsp;&nbsp;&nbsp;&nbsp;伴随着航空摄影发展起来的航空摄影测量理论和方法，其基本原理是根据
摄影过程的几何反转思想，利用光学、机械、数字方法模拟摄影过程，以模拟恢复摄影时相邻两张像片的空间位置、姿态和相互关系，形成一个比实地缩小了的几何模型，并在此基础上进行量测。</P> 
            			    <ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-1 am-avg-lg-2 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片20.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片20.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
												<div class="am-gallery-desc">基于无人机倾斜摄影测量的数字线划图</div></a>
										</div>
									</li>


							</ul>        			
            		</div>            		 
            	</li>
       <li class="am-u-sm-12 am-u-md-6 am-u-lg-12">
            		<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 solution-tabs-words">
            			<h5>倾斜摄影测量技术在矿产行业应用</h5>   
            			<P>&nbsp;&nbsp;&nbsp;&nbsp;伴随着航空摄影发展起来的航空摄影测量理论和方法，其基本原理是根据
摄影过程的几何反转思想，利用光学、机械、数字方法模拟摄影过程，以模拟恢复摄影时相邻两张像片的空间位置、姿态和相互关系，形成一个比实地缩小了的几何模型，并在此基础上进行量测。</P> 
            			    <ul data-am-widget="gallery" 
								class="am-gallery am-avg-sm-1  am-avg-md-1 am-avg-lg-2 am-gallery-imgbordered"
									data-am-gallery="{pureview:true}">
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片21.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片21.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
												<div class="am-gallery-desc">矿产资源开发状况调查中的应用</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片22.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片22.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
												<div class="am-gallery-desc">矿产资源开发引发的灾害调查中的应用</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片23.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片23.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
												<div class="am-gallery-desc">矿山生态环境信息调查中的应用</div></a>
										</div>
									</li>
									<li>
										<div class="am-gallery-item">
											<a
												href="img/solutions_gis/UAV/图片24.png"
												title="天线综合布局设计与优化">
												<img src="img/solutions_gis/UAV/图片24.png"	alt="" />
<!-- 												<h3 class="am-gallery-title">复杂电磁环境数值模拟</h3> -->
												<div class="am-gallery-desc">地质矿山公园景观建模中的应用</div></a>
										</div>
									</li>


							</ul>        			
            		</div>            		 
            	</li>
            	


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
