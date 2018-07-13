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
	     //videoplay();
	     var theadd = create_tablehead("ID","标题","类别","作者","日期","操作");	     
	     var tbody = create_tablebody();
	     //alert(tbody.html());

	     $("#document_table").append(theadd);
	     $("#document_table").append(tbody);



	     create_videolist();
	     videoplay();


	     var thead_product = create_tablehead("ID","标题","类别","作者","日期","操作");	     
	     var tbody = create_body_producy();

	     $("#product_document").append(thead_product);
	     $("#product_document").append(tbody);
	    
	     
	     
	     
	   }
   )
   
   /****
   *product document dynamic create
   */
   function create_tablehead(id,title,type,author,date,opera){
		var table_head = $("<thead>");
		var thead_detail = new Array();
		//thead_detail[0]=$("	<th class=\"table-id\">"+id+"</th>");
		thead_detail[1]=$("	<th class=\"table-title\">"+ title+"</th>");
		thead_detail[2]=$("	<th class=\"table-type\">"+type+"</th>");
		thead_detail[3]=$(" <th class=\"table-author am-hide-sm-only\">"+author+"</th>");
		thead_detail[4]=$(" <th class=\"table-date am-hide-sm-only\">"+date+"</th>");
		thead_detail[5]=$(" <th class=\"table-set\">"+opera+"</th>");
		for(x in thead_detail){
			table_head.append(thead_detail[x]); 
		}
		return table_head;
     }

     function create_body_producy(){
 		var table_body=$("<tbody>");
    	var tr =  create_tabletr_product("assets/img/43.jpg","有适配微信小程序的计划吗","天纵之人","2016-09-26","click101()");
    	var tr1 = create_tabletr_product("assets/img/a1.png","请问有没有amazeui 分享插件","王宽师","2016-09-26","click101()");
    	var tr2 = create_tabletr_product("assets/img/a10.png","关于input输入框的问题","着迷","2016-09-26","click101()");
    	var tr3 = create_tabletr_product("assets/img/a2.png","有没有发现官网上的下载包不好用","醉里挑灯看键","2016-09-26","click101()");
    	var tr4 = create_tabletr_product("assets/img/a3.png","我建议WEB版本文件引入问题","罢了","2016-09-26","click101()");
    	table_body.append(tr);  
    	table_body.append(tr1);  
    	table_body.append(tr2);  
    	table_body.append(tr3);  
    	table_body.append(tr4);   	
    	return table_body;
     }
/**
 *创建tr表格内容，行业库
 *                                                
*/
 	function create_tabletr_product(imgurl,title,author,date,buttonfunction){
		var table_tr = $("<tr class=\"gradeX\">");
		var tbody_detail = new Array();
		tbody_detail[0]=$("	<td class=\"am-text-middle\"> </td>");
		      var imgaddress = $("<img src=\""+imgurl+"\" class=\"tpl-table-line-img\" alt=\"\">");
		      tbody_detail[0].append(imgaddress);		
		//tbody_detail[1]=$("	<td><a href=\""+downhref+"\">"+title+"</a></td>");
		tbody_detail[1]=$("<td class=\"am-text-middle\">"+title+"</a></td>");
		//tbody_detail[2]=$("<td class=\"am-text-middle\">"+type+"</td>");
		tbody_detail[3]=$("<td class=\"am-text-middle\">"+author+"</td>");
		tbody_detail[4]=$("<td class=\"am-text-middle\">"+date+"</td>");
		tbody_detail[5]=$("<td class=\"am-text-middle\">");
				var divtop = $("<div class=\"tpl-table-black-operation\">");
				//var divm = $("<div class=\"am-btn-group am-btn-group-xs\">");
				var a_href = $("  <a href=\"javascript:void(0)\" onclick=\""+buttonfunction+"\" > "+
						       " <i class=\"am-icon-pencil\"></i> 下载  "+
                               " </a>  ");
				//divm.append(button);
				divtop.append(a_href);
			    tbody_detail[5].append(divtop);
		
		for(x in tbody_detail){
			table_tr.append(tbody_detail[x]); 
		}
		return table_tr;
	}
     
    /****
 	   *document dynamic create
 	   */

     
     function create_tablebody(){
		var table_body=$("<tbody>");
    	var tr = create_tabletr("1","CAE指南","课件","张兰","2017年3月4日 7:28:47","","downloadtest.zip","click001()");
    	var tr1 = create_tabletr("2","CAD设计","课件","高岗","2017年5月4日 7:28:47","","downloadtest.zip","click001()");
    	var tr2 = create_tabletr("3","ABAQUS设计","课件","张兰","2017年1月4日 7:28:47","","downloadtest.zip","click001()");
    	var tr3 = create_tabletr("4","CFD设计","课件","高岗","2016年3月4日 7:28:47","","downloadtest.zip","click001()");
    	var tr4 = create_tabletr("5","Hypermesh设计","课件","高岗","2017年6月4日 7:28:47","","downloadtest.zip","click001()");
    	table_body.append(tr);  
    	table_body.append(tr1);  
    	table_body.append(tr2);  
    	table_body.append(tr3);  
    	table_body.append(tr4);   	
    	return table_body;
     }

	function create_tabletr(id,title,type,author,date,opera,downhref,buttonfunction){
		var table_tr = $("<tr>");
		var tbody_detail = new Array();
		//tbody_detail[0]=$("	<td>"+id+"</td>");
		//tbody_detail[1]=$("	<td><a href=\""+downhref+"\">"+title+"</a></td>");
		tbody_detail[1]=$("	<td>"+title+"</a></td>");
		tbody_detail[2]=$("<td>"+type+"</td>");
		tbody_detail[3]=$("<td class=\"am-hide-sm-only\">"+author+"</td>");
		tbody_detail[4]=$(" <td class=\"am-hide-sm-only\">"+date+"</td>");
		tbody_detail[5]=$("<td>");
				var divtop = $("<div class=\"am-btn-toolbar\">");
				var divm = $("<div class=\"am-btn-group am-btn-group-xs\">");
				var button = $("<button class=\"am-btn am-btn-default am-btn-xs am-text-secondary\" "+
							   " onclick=\""+ buttonfunction +"\"> "+
							   "<span class=\"am-icon-pencil-square-o\"></span> 下载 </button>");
				divm.append(button);
				divtop.append(divm);
			    tbody_detail[5].append(divtop);
		
		for(x in tbody_detail){
			table_tr.append(tbody_detail[x]); 
		}
		return table_tr;
	}


	/***
	*video dynamic create
	*
	*/	
	
	function create_videolist(){
	
		var vf = new Array();
	    vf[0] = create_videofile("video/170405.mp4","领跑世界速度的超级计算机");
		vf[1] = create_videofile("video/170620.mp4","神威·太湖之光再次蝉联超算世界冠军");
		vf[2] = create_videofile("video/CAE对工程机械进行运动学仿真/wajueji.mp4","CAE对工程机械进行运动学仿真");
		vf[3] = create_videofile("video/CAE对高速列车交汇过程的模拟/2_111021184238_1.mp4","CAE对高速列车交汇过程的模拟1");
		vf[4] = create_videofile("video/CAE对高速列车交汇过程的模拟/2_111021184313_1.mp4","CAE对高速列车交汇过程的模拟2");
		vf[5] = create_videofile("video/CAE对高速列车交汇过程的模拟/2_111021184329_1.mp4","CAE对高速列车交汇过程的模拟3");
		vf[6] = create_videofile("video/CAE对金属成型过程的仿真/板料冲压过程仿真.mp4","CAE对金属成型过程的仿真1");
		vf[7] = create_videofile("video/CAE对金属成型过程的仿真/棒料成型过程仿真.mp4","CAE对金属成型过程的仿真2");
		vf[8] = create_videofile("video/CAE在电子行业中的应用/电子产品（以手机为例）跌落过程仿真.mp4","CAE在电子行业中的应用");


		
		//alert(vf1.html());
		//alert(vf2.html());
		
		for(x in vf){
			
			$("#list_video").append(vf[x]);
		}

		//alert($("#list_video").html());
	}

	function create_videofile(videfile,filename){
		var pvideo  = $("<p><a videohref=\""+videfile+
				  "\"  class=\"video_link\"> <span class=\"am-icon-video-camera am-icon-fw\"></span>"+filename
				   +"</a></p>");
		return pvideo;
	}
	



/**
 * user check
 * 
 */
   
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
  /**
  *system exit
  **/ 
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
/****
 * video play
 */
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
/**
 * document file download
 */
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
			<span class="toppic-title-span">知识云</span>
			<p>Konwledge cloud</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="solutions.php" class="w-white">解决方案</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="solutions-knowledge.php" class="w-white">知识云</a></span>
		</div>
	</div>
</div>

<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="customer-case.html">
			<i class="am-icon-mixcloud part-title-i"></i>
			<span class="part-title-span">知识云</span>
			<p>About Nsccjncae</p>
			</a>
		</div>
	<div class="company-intro">
	<p>培训课件、资料</p>
  <p>基于开源软件及商业软件的复杂工程并行仿真、CAE软件培训视频</p>
  <p>行业知识库、政府政策、行业政策、行业标准规范</p>

	</div>
</div>
<!-- document -->
<div class="gray-li company-thought-all" >
	<div class="part-title part-title-mar">
			<a href="javascript:void(0)">
			<i class=" am-icon-institution part-title-i"></i>
			<span class="part-title-span">CAE资料库</span>
			<p>CAE Education</p>
			</a>
	</div>	
	<div class=" am-container-1">
			<div class="tpl-portlet-components">
	                    <div class="portlet-title">
                    		<div class="caption font-green bold">
                       			 <span class="am-icon-bookmark"></span>资料列表
                    		</div>
                		</div>	
                	<!-- index -->
                     <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                <select data-am-selected="{btnSize: 'sm'}">
              						<option value="option1">所有类别</option>
              						<option value="option2">IT业界</option>
              						<option value="option3">数码产品</option>
              						<option value="option3">笔记本电脑</option>
              						<option value="option3">平板电脑</option>
              						<option value="option3">只能手机</option>
              						<option value="option3">超极本</option>
           						</select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field">
                                <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
          </span>
                            </div>
                        </div>
                    </div>
                    <!-- table -->
                     <div class="am-g">
                        <div class="am-u-sm-12">
 <!--                            <form class="am-form"> -->
						<table class="am-table am-table-striped am-table-hover table-main" id="document_table">
<!-- 							<thead> -->
<!-- 								<tr> -->
									<!--    <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th> -->
<!-- 									<th class="table-id">ID</th> -->
<!-- 									<th class="table-title">标题</th> -->
<!-- 									<th class="table-type">类别</th> -->
<!-- 									<th class="table-author am-hide-sm-only">作者</th> -->
<!-- 									<th class="table-date am-hide-sm-only">修改日期</th> -->
<!-- 									<th class="table-set">操作</th> -->
<!-- 								</tr> -->
<!-- 							</thead> -->
<!-- 							<tbody> -->
<!-- 								<tr> -->
									<!-- <td><input type="checkbox"></td> -->
<!-- 									<td>1</td> -->
<!-- 									<td><a href="downloadtest.zip">课件001</a></td> -->
<!-- 									<td>default</td> -->
<!-- 									<td class="am-hide-sm-only">测试1号</td> -->
<!-- 									<td class="am-hide-sm-only">2017年3月4日 7:28:47</td> -->
<!-- 									<td> -->
<!-- 										<div class="am-btn-toolbar"> -->
<!-- 											<div class="am-btn-group am-btn-group-xs"> -->
<!-- 												<button -->
<!-- 													class="am-btn am-btn-default am-btn-xs am-text-secondary" -->
<!-- 													onclick="click001()"> -->
<!-- 													<span class="am-icon-pencil-square-o"></span> 下载 -->
<!-- 												</button> -->
												<!--        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
<!--                                                         <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button> -->
<!--  --> <!---->
<!-- 											</div> -->
<!-- 										</div> -->
<!-- 									</td> -->
<!-- 								</tr> -->
<!-- 							</tbody> -->
						</table>
						<div class="am-cf">
							<div class="am-fr">
								<ul class="am-pagination tpl-pagination">
<!-- 									<li class="am-disabled"><a href="#">«</a></li>
									<li class="am-active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">»</a></li> -->
									<a href="solutions-knowledge-documents.php" ><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
								</ul>
							</div>
						</div>
						<hr>
                          <!--   </form> -->
                        </div>

            </div>
    </div>  
</div>
</div>

<!-- video -->
<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="customer-case.html">
			<i class=" am-icon-film part-title-i"></i>
			<span class="part-title-span">CAE视频</span>
			<p>CAE Video</p>
			</a>
	</div>
	<div class="solution-video-space" style="">
	           <div class="am-u-sm-12 am-u-md-12 am-u-lg-8 solution-tabs-img">
            			<video id="my-video" class="video-js" controls preload="auto"   width="640" height="380"   
						  poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{}">
						
						<source src="video/170405.mp4" type="video/mp4">
						<source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm">
						<source src="http://vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
						<p class="vjs-no-js" > To view this video please enable JavaScript, and consider upgrading to a web browser that
			  				<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
						</p>
		  				</video>
		  			<script type="text/javascript">
							var myPlayer = videojs('my-video');
							videojs("my-video").ready(function(){
							var myPlayer = this;
								myPlayer.play();
								myPlayer.pause();
							});
					</script>
            	</div>
            	<div class="am-u-sm-12 am-u-md-12 am-u-lg-4  list" id="list_video" >
            			<!-- <p id="new1"><a videohref="video/170405.mp4"  class="video_link"> <span class="am-icon-video-camera am-icon-fw"></span> 领跑世界速度的超级计算机 </a></p>
            			<p><a videohref="video/170620.mp4"  class="video_link">	<span class="am-icon-video-camera am-icon-fw"></span> "神威·太湖之光"再次蝉联超算世界冠军</a></p>
            			<p><a videohref="video/170405.mp4"  class="video_link">	<span class="am-icon-video-camera am-icon-fw"></span> Fluent是目前国际</a></p>
            			<p><a videohref="video/170405.mp4"  class="video_link">	<span class="am-icon-video-camera am-icon-fw"></span> Fluent (14.0)</a></p>
            	 -->		
            	</div>
            	<div class="am-u-sm-12 am-u-md-12 am-u-lg-12 list" >
            		<div class="right">
            			<a href="solutions-knowledge-video.php" ><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
            		</div>
            	</div>  				
		<div class="clear"></div>
		<hr>
		<br>
		
	</div>
	
</div>







<div class="gray-li">
	<div class="part-title part-title-mar">
			<a href="customer-case.html">
			<i class=" am-icon-leaf part-title-i"></i>
			<span class="part-title-span">行业知识库</span>
			<p>Product education</p>
			</a>
	</div>

    <div class=" am-container-1">		
	    <!-- 内容区域 -->
        <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">文件列表</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                        <select data-am-selected="{btnSize: 'sm'}">
										  <option value="option1">所有类别</option>
										  <option value="option2">IT业界</option>
										  <option value="option3">数码产品</option>
										  <option value="option3">笔记本电脑</option>
										  <option value="option3">平板电脑</option>
										  <option value="option3">只能手机</option>
										  <option value="option3">超极本</option>
										</select>
                                   </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
                                        <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
                                        </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="product_document">
<!--                                         <thead> -->
<!--                                             <tr> -->
<!--                                                 <th>文章缩略图</th> -->
<!--                                                 <th>文章标题</th> -->
<!--                                                 <th>作者</th> -->
<!--                                                 <th>时间</th> -->
<!--                                                 <th>操作</th> -->
<!--                                             </tr> -->
<!--                                         </thead> -->
<!--                                         <tbody> -->
<!--                                             <tr class="gradeX"> -->
<!--                                                 <td> -->
<!--                                                     <img src="assets/img/32.jpg" class="tpl-table-line-img" alt=""> -->
<!--                                                 </td> -->
<!--                                                 <td class="am-text-middle">Amaze UI 模式窗口</td> -->
<!--                                                 <td class="am-text-middle">张鹏飞</td> -->
<!--                                                 <td class="am-text-middle">2016-09-26</td> -->
<!--                                                 <td class="am-text-middle"> -->
<!--                                                     <div class="tpl-table-black-operation"> -->
 <!--                                                      <a href="javascript:void(0)" onclick="click101()" >-->          
<!--                                                            <i class="am-icon-pencil"></i> 下载 -->
<!--                                                         </a> -->

<!--                                                     </div> -->
<!--                                                 </td> -->
<!--                                             </tr> -->     
                                            
                                            <!-- more data -->
<!--                                         </tbody> -->
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
<!--                                             <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li> -->
                                            <a href="solutions-knowledge-documents-gov.php" ><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>  <!--end  tpl-content-wrapper -->
        </div>  <!--end  tpl-content-wrapper -->
         
         <!-- 内容区域 -->
    </div>
    <div class="clear"></div>
	<br>
	<br>
</div>


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
