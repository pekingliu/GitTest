<!DOCTYPE html>
<html>

<head  lang="en">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>用户登录</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />

  
    <script src="jquery-easyui-1.5.2/jquery.min.js" type="text/javascript" > </script>    
   <script type="text/javascript" src="jquery-easyui-1.5.2/jquery.easyui.min.js"></script> 
   <script type="text/javascript" src="jquery-easyui-1.5.2/jquery.cookie.js"></script> 
   <link rel="stylesheet" type="text/css" href="jquery-easyui-1.5.2/themes/icon.css" />
   <link href="jquery-easyui-1.5.2/themes/default/easyui.css" rel="stylesheet" type="text/css" /> 
  
 <script src="js/alertify.js-0.3.11/lib/alertify.min.js"></script>
<link rel="stylesheet" href="js/alertify.js-0.3.11/themes/alertify.core.css" />
<link rel="stylesheet" href="js/alertify.js-0.3.11/themes/alertify.default.css" />

  <link rel="stylesheet" href="assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="assets/css/app.css"> 
  

  
     <script type="text/javascript">


    

	$(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码
		//window.location.href="index.php";
	     var requeststr="";
	     var changflag="0";
 	})
 	
 	function formpost_ajax(){	 

		 var username=$("#user-name").val();
		 var userpass=$("#doc-ipt-pwd-1").val();	
		 //alert(username);alert(userpass);

		 if(username=="") {alertify.error("用户名空！");};
		 if(userpass=="") {alertify.error("密码空！");};  
		 if (username!="" && userpass!="") { 

			$.ajax({
				cache: true,
				type: "POST",
				url:"datatrans/userlogin.php",
				data:$('#user_login_form').serialize(),// 你的formid
				async: false,
            	success: function (data,textstatus){  //data,textstatus
	             	//alert(""+data);
	             	requeststr =  eval("("+data+")");	 	            
	             	analyjson(requeststr);	             
              	
	            	},            
	            	error: function(XMLHttpRequest, textStatus, errorThrown) {
                    	//alert(XMLHttpRequest.status);
                  	 // alert(XMLHttpRequest.readyState);
                    	//alert(textStatus);	
	            		alertify("Connection error");            
	            	}
			}); //ajax------end
			//ifchangeweb(changflag);
			//alert("here..location..index.php..end");
		 };//end if username!=""
		
	}

    // window.location.href="index.php";
    // window.open("index.php",'_self');
      //location.reload()
    	 //location.href = "news.html";
    	 //location.reload();               	
    	//window.open("index.php");              	
     //window.onload.href = "index.php";//这个引号里面写要跳转的网址
    	//Response.Write("<script language='javascript'>" + "window.open('www.1616.net', '')"+"<\/script>");    
    			//window.location.href="index.php";	
		//window.open("http://www.1616.net");
		// window.open("index.php"); 

	function ifchangeweb(flag1)
	{
		alert("是否跳转="+flag1);
		if(flag1=="1")
		{
			window.location.href="index.php";

		}
	}

	function analyjson(data){

		//alert(data.username);
		//alert(data.usercount);
		//alert(data.sqlflag);
		//alert("sqlflag="+data.sqlflag+"usercount"+data.usercount);
		
		//alert(data.$errortext);
		//$.cookie('the_cookie', data.username); 
		//Cookies.set('cookie_name', data.username);//detail see  https://github.com/js-cookie/js-cookie
		//var date = new Date();
		//date.setTime(date.getTime()+10*1000);  //只能这么写，10表示10秒钟
		
		var dataflag = data.sqlflag;
		var usercount = data.usercount;
		//alert("here!!flag--"+dataflag+"--num--"+usercount);
		
		
        if(dataflag =='0' && usercount != '0'){
        	    alertify.alert("登陆成功！");
        	    Cookies.set('cookie_name',  data.username, {  path: '' });
		      //$.messager.alert('Info','登陆成功！跳转中...','info')  ; 	
		        changflag="1";
		        //location.href="index.php";
		        //alert( window.location.href);
		        //window.location.href="http://192.168.10.71/blueclouder/index.php";
		       // window.open("http://192.168.10.71/blueclouder/index.php",'_top')
		        "canal".lastIndexOf("a")   // returns 3 //lastIndexOf
		        var openurl=Cookies.get('cookie_forweb_url');
		        window.open(openurl);
		        window.close();
		       // window.onload.href = 'index.php ';
		               
          }else{
	     	  //$.messager.error('Info','登陆失败！请重新输入用户名和密码！','info');  
	     	 alertify.alert("登陆失败！请重新输入用户名和密码！");        
			//window.history.back(-1);
			// window.location.href="register.php";
          }	   

	}
 
   </script> 
  
  
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				<span><a href="index.php" >济南超算工业云</a></span> <i class="am-icon-skyatlas"></i>
				
			</div>
		</div>

		<div class="login-font">   <!-- login-font -->
			<a href="login.php"><span class="am-ion-user"></span>登陆</a>
			<a href="register.php"><span class="am-icon-cog"></span>注册</a>

			<!-- <i>Log In </i> or <span> Sign Up</span> -->
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" id="user_login_form" >
				<fieldset>
					<div class="am-form-group">
						<input type="text" id="user-name" name = "user-name" class="" placeholder="输入用户名">
					</div>
					<div class="am-form-group">
						<input type="password" class="" name="user-pass" id="doc-ipt-pwd-1" placeholder="输入密码">
					</div>
					<p><button type="submit" class="am-btn am-btn-default"  onclick="formpost_ajax()">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>

<!--   <script src="assets/js/jquery-2.1.1.js"></script>
  <script src="assets/js/amazeui.min.js"></script>
  <script src="assets/js/app.js"></script> -->
  
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