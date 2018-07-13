<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>申请授权</title>
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
  
  
 <!--  <link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png"> -->
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/app.css">
  
 <script type="text/javascript" src="js/loadcookie.js"></script>  

   <script type="text/javascript"  >

	$(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码
 //       menutree = _menus; //从js文件获取 tree_accord_menu.js
 	     if(username!="" && username!=null) { 
		     //alert(username); 
	         //$("#lbl").text("欢迎您：".username);
	         //$("#user-name").html(username);
	         $("#user-name").val(username);
	     } 
      var requeststr="";
      var usernamejudge="";
      var changflag="0";

//       usercheck();

 	})
 	
 	
 	   function usercheck(){
			 var currenturl = window.location.href;
			 //alert(currenturl);
			 //Cookies.set('cookie_forweb_url',currenturl, {  path: '' });

	         
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
	   }

function formpost_ajax(){	

		 var username=$("#user-name").val();
		 //var userpass=$("#doc-ipt-pwd-1").val();
         var softname=$("#soft-name").val();
         var applytype=$("#apply-type").val();
         var applytime=$("#apply-time").val();

		 
		// alertify.alert("Message");
		if(username=="") {alertify.error("用户名空！");};
		if(softname=="") {alertify.error("软件名空！");};   //+username+"userpass="+userpass);
		if(applytype=="") {alertify.error("申请类型空！");};
		if(applytime=="") {alertify.error("申请时长空！");};   //+username+"userpass="+userpass);



		  //var isValid = $("#userinfo_form").form("validate");//验证表单中的一些控件的值是否填写正确，比如某些文本框中的内容必须是数字
		  //var username = $("#usernames").val;
		 // var userpass = $('#userpass').val;
	
		 
		 //alertify.success("username="+username);//+"userpass="+userpass);     
         if (username!="" && softname!="" && applytype!="" && applytime!="") {  

     		//usernamejudge = namejudge_ajax(username);
    		//var usercount = usernamejudge.usercount;
    		var usercount="0";
    		//alert("usercount="+usercount);

    		if(usercount=="0") {                 
        	     //alertify.success("here!!!");        
		         $.ajax({
					cache: true,
					type: "POST",
					url:"datatrans/userapply.php",
					data:$('#userapply_form').serialize(),// 你的formid
					async: false,
           			success: function (data,textstatus){
           				//alertify("here!!");       
	            			//alert("response:"+data); 
	             			//if (data > 0) { 
	              			requeststr =  eval("("+data+")");	 	            
	              			analyjson(requeststr);

	            	},            
	            	error: function(XMLHttpRequest, textStatus, errorThrown) {
                    	//alert(XMLHttpRequest.status);
                   		// alert(XMLHttpRequest.readyState);
                    	//alert(textStatus);	
	            		alertify.error("Connection error");            
	                }
		        }); 
		 }else{
			 alertify.alert("用户名重复，请重新输入！");
			} ; // end if usercount==0			
			//window.navigate("index.php"); 
			//location.href = "index.php"; 

		} 

		
	}

	function analyjson(data){

		//alert(data.username);
		//alert(data.useremail);
		//alert(data.sqlflag);
		//alert(data.$errortext);
		//$.cookie('the_cookie', data.username); 
		//Cookies.set('cookie_name', data.username);//detail see  https://github.com/js-cookie/js-cookie

		var dataflag = data.sqlflag;
		
        if(dataflag =='0'){
    		var date = new Date();
    		date.setTime(date.getTime()+10*1000);//只能这么写，10表示10秒钟    		
    		//Cookies.remove('cookie_name');
    		//Cookies.set('cookie_name',  data.username, { expires: 1, path: 'd:/' });
    		Cookies.set('cookie_name',  data.username, { path: '' });
    		Cookies.set('cookie_softname',  data.softname, { path: '' });
    		Cookies.set('cookie_apptype',  data.applytype, { path: '' });
    		Cookies.set('cookie_apptime',  data.applytime, { path: '' });
		     // $.messager.alert('Info','注册成功！跳转中...','info')  ; 
		      alertify.alert("申请成功！");
		      changflag="1";
                // window.history.back(-1);
                // window.history.back(-1);
		        //window.navigate("index.php");  
                //location.href = "index.php";   
                //window.location.href = "index.php";   
                //window.location.replace("index.php");  
                //$(location).attr('href', 'index.php');
                //$(window).attr('location','index.php');
		      //$(location).prop('href', 'index.php');
		      //alert("zhunbei跳转！！！！！！！");
		      //top.location='index.php'; 
		      //self.location='jb51.htm'
		      var openurl=Cookies.get('cookie_forweb_url');
		      window.open(openurl);
		      window.close();
		      //window.open("index.php");
              
          }else{
        	//Cookies.set('cookie_name',''); 
	     	//$.messager.error('Info','注册失败！跳转中...','info');     
	     	alertify.alert('申请失败！');     
			//window.history.back(-1);
			// window.location.href="register.php";
          }	   
		//var anObject = {one:1,two:2,three:3};//对json数组each
		/*
		$.each(data,function(name,value) {
		alert(name);
		alert(value);
		});*/		
		/*
		 $.each(data, function(i, sm) //i=索引，sm=取值
		            {		                     　  		  
		                     　  		     alert("name=".sm.usernmae);
		                     　  		     alert("email=".sm.useremail);	      		                     		        		                     
		        		
		            }
         )*/
	}

   
   function closes(){ 
       $("#Loading").fadeOut("normal",function(){ 
           $(this).remove();
        }); 
   } 

   
   function  namejudge_ajax(usernamej){ 
	 	    //alert(usernamej);	 	
	 		 var nameexits=""; 	 			
		    $.ajax({   
				cache: true,
				type: "POST",
				url:"datatrans/usernamejudge.php", //备注：jquery.ajax不能跨域访问IP。需要后台处理后返回值。	
				async: false,
		        data:{uname:usernamej}, 
		        success: function (data,textstatus){
	                //$.messager.alert('Info',data,'info');      
		             //alert("response:"+data); 
		             nameexits =  eval("("+data+")");
		            },            
		        error: function(XMLHttpRequest, textStatus, errorThrown) {
	                    alert(XMLHttpRequest.status);
	                    alert(XMLHttpRequest.readyState);
	                    alert(textStatus);	            
		            }
		          });
	          return nameexits;
		}

  //表单验证 validate
  function submitdata_form(){
   $('#userinfo_form').form({
       global:false,
       cache: false,
       async: false,
       type: "get", 
       //dataType:"html",
       //data:{name:cityname}, 
       data:$('#userinfo_form').serialize(),// 你的formid        
       url:"datatrans/userregister.php",  //备注：jquery.ajax不能跨域访问IP。需要后台处理后返回值。
		success:function(data){
			$.messager.alert('Info', data, 'info');
		}
	});
  }

  function submitdata(){

//	  $.messager.alert('Info', 'herer.........', 'info'); 
//	   alert($('#userinfo_form').serialize());
		var demo=$("#user-name").val();
		 //alert("demo="+demo);	
//		 alert($("#userinfo_form").serialize());	
	      $('#userinfo_form').form('submit', {  	          
	          url: "datatrans/userregister.php", 
	          onSubmit: function () {        //表单提交前的回调函数	        	
	            var isValid = $(this).form('validate');//验证表单中的一些控件的值是否填写正确，比如某些文本框中的内容必须是数字 
	            if (!isValid) { 
	            } 
	            return isValid; // 如果验证不通过，返回false终止表单提交 
	          }, 
	          success: function (data) {  //表单提交成功后的回调函数，里面参数data是我们调用/BasicClass/ModifyClassInfo方法的返回值。 
	            if (data > 0) { 
		            alert(data);		                         
	              //$.messager.alert('Info', data, 'info'); 
	              //$('#Editwin').window('close'); //关闭窗口
	             // location.href="index.php"; 
	            } 
	            else { 
	              //$.messager.alert('提示信息', '提交失败，请重新填写信息！', 'warning'); 
	          } 
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
	   	    		
	   	    		username=""; 
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
		  <img class=" logo" src="img/LOGO_JNCL.png"></img>
		  <img class="word" src="img/logo-word.png"></img>
		  </a>
    </div>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse " id="doc-topbar-collapse">
    

    <div class=" am-collapse am-topbar-collapse" role="search">
	   <div class=" am-topbar-left am-form-inline am-topbar-right" role="search">
			<ul class="am-nav am-nav-pills am-topbar-nav hw-menu">
 <li ><a href="index.php">首页</a></li>     
 
 	     <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle hw-menu-active" data-am-dropdown-toggle href="javascript:;solutions.php;">        
          <span class="am-icon-github am-icon-fw"></span>核心业务 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span>超链仿真云</a></li>   <li class="am-divider"></li>
          <li class="hw-menu-active"><a href="solutions_gaoxingneng.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 高性能计算</a></li>     <li class="am-divider"></li>
          <li><a href="solutions-knowledge.php"><span class="am-icon-user am-icon-fw am-primary"></span> 信息化建设</a></li>      <li class="am-divider"></li>
          <li><a href="shop/two/home/home3.php"><span class="am-icon-cog am-icon-fw am-primary"></span> 遥感大数据</a></li> 
            </ul>
      </li>
 
 
  
     <li class="am-dropdown " data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;solutions.php;">        
          <span class="am-icon-github am-icon-fw"></span>产品与解决方案 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li ><a href="solutions.php"><span class=" am-icon-user am-icon-fw"></span> 设计云</a></li>   <li class="am-divider"></li>
          <li><a href="solutions-data.php"><span class="am-icon-cog am-icon-fw am-primary"></span>产品库</a></li>     <li class="am-divider"></li>
          <li><a href="solutions-knowledge.php"><span class="am-icon-user am-icon-fw am-primary"></span> 解决方案</a></li>  
		 <!-- <li class="am-divider"></li> -->
        </ul>
      </li>
      <li><a href="news.php">新闻动态 </a></li>
      <li><a href="product-show.php">合作伙伴</a></li>

	  <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users am-icon-fw"></span><label id="lbl">关于我们</label> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="about-us.php"> <span class="am-icon-home"></span>公司介绍</a></li>  <li class="am-divider"></li>
          <li><a href="shop/one/home/home.html"><span class="am-icon-user"></span>联系我们</a></li>  
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
			<span class="toppic-title-span">申请许可</span>
			<p>Apply for</p>
		</div>
		<div class="right toppic-progress">
		    <span><a href="solutions.php" class="w-white">核心业务</a></span>
		    <i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="solutions_gaoxingneng.php" class="w-white">高性能计算</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
		    	<span><a href="apply-for.php" class="w-white">申请许可</a></span>
		</div>
	</div>
</div>

		
    <!--===========layout-container=======register=========-->
              <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span >申请：</span> 
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>
                </div>
                
                <div class="tpl-block ">
                    <div class="am-g tpl-amazeui-form">
                        <div class="am-u-sm-12 am-u-md-9">
                            <form  action="" id="userapply_form" class="am-form am-form-horizontal"  data-am-validator>
                              <fieldset>

							<div class="am-form-group">
								<label for="soft-name" class="am-form-label am-u-sm-4 ">软件名 /
									Software Name</label>				
								<div class="am-u-sm-8">
									<select id="soft-name" name="soft-name" autofocus required>
										<option value="">-=请选择软件=-</option>
										<option value="1">超算CAD</option>
										<option value="2">超算CAE</option>
										<option value="3">其他软件</option>
									</select> <span class="am-form-caret"></span>
								</div>
							</div>
							
							<div class="am-form-group">
							<label for="apply-type" class="am-form-label am-u-sm-4 ">申请类型 /
									Applyfor Type</label>
									<div class="am-u-sm-8">
									<select id="apply-type" name="apply-type" required>
										<option value="">-=请选择类型=-</option>
										<option value="1">在线试用</option>
										<option value="2">包月</option>
										<option value="3">包年</option>
									</select> <span class="am-form-caret"></span>
								</div>
							</div>
							
							<div class="am-form-group">
							<label for="apply-time" class="am-form-label am-u-sm-4 ">申请时长 /
									Applyfor Time</label>
								<!-- <label for="doc-select-1">下拉单选框</label>  -->
								<div class="am-u-sm-8">
									<select id="apply-time" name="apply-time" required>
										<option value="">-=请选择一项=-</option>
										<option value="1">1天</option>
										<option value="2">2天</option>
										<option value="3">3天</option>
										<option value="4">4天</option>
										
									</select> <span class="am-form-caret"></span>
								</div>
							</div>
							<div class="am-form-group ">
                                    <label for="user-name" class="am-form-label am-u-sm-4 ">用户名/ User Name</label>
                                    <div class="am-u-sm-8">
                                        <input type="text" id="user-name" name="user-name" minlength="2" readonly="readonly" placeholder="输入用户名（至少 3 个字符）"  required/>
                                       <!--   <span class="am-icon-check"></span> -->
                                        <!-- <small>输入你的名字，让我们记住你。</small> -->
                                    </div>
                                </div>			



                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-4 am-form-label">电话 / Telephone</label>
                                    <div class="am-u-sm-8">
                                        <input type="tel" name="user-phone" placeholder="输入你的电话号码 / Telephone">
                                    </div>
                                </div>

                                <!-- <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-4 am-form-label">单位</label>
                                    <div class="am-u-sm-8">
                                        <input type="number" pattern="[0-9]*" id="user-QQ" placeholder="输入你的QQ号码">
                                    </div>
                                </div> -->

                                <div class="am-form-group">
                                    <label for="user-unit" class="am-u-sm-4 am-form-label">单位 / Twitter</label>
                                    <div class="am-u-sm-8">
                                        <input type="text" id="user-unit" name="user-unit" placeholder="输入你的单位 / Twitter">
                                    </div>
                                </div>
                                
                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-4 am-form-label">电子邮件 / Email</label>
                                    <div class="am-u-sm-8">
                                        <input type="email" id="user-email" name="user-email" placeholder="输入你的电子邮件 / Email" class="js-pattern-email">
                                        <!-- <small>邮箱你懂得...</small> -->
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-4 am-form-label">申请原因 /Applyfor Reason</label>
                                    <div class="am-u-sm-8">
                                        <textarea class="" rows="5" id="user-intro" name="user-intro" placeholder="输入申请原因"></textarea>
                                        <small>250字以内...</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-8 am-u-sm-push-4">
                                        <button type=submit class="am-btn am-btn-primary" onclick="formpost_ajax()" >提交申请</button>
                                    </div>
                                </div>
                              </fieldset>
                            </form>
                        </div>

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
<!-- <script src="js/jquery.min.js"></script> -->
<!--<![endif]-->
<script src="js/amazeui.min.js"></script>

</html>
