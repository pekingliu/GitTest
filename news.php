<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>新闻动态</title>
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
  
<!--   <link rel="alternate icon" type="img/hengwang-1.png" href="img/hengwang-1.png"> -->
  <link rel="stylesheet" href="css/amazeui.css"/>
  <link rel="stylesheet" href="css/style.css"/>

   <script type="text/javascript">   
     $(function(){ //等效于$(document).ready(function(){})或者 jQuery(function($){ })   ，防止文档在完全加载（就绪）之前运行 jQuery 代码
	    
	     usercheck();
	     //add news
		 var ul_news=createnews();
		 var ul_page=create_nextpage();
//alert(ul_news.html());
//alert(ul_page.html());
	     $("#news_detail").append(ul_news);
	     $("#news_detail").append(ul_page);

	     //add hot news
		 var section=create_hotnews();
	     $("#news_hot").append(section);
	     
	   }
   )
   
   function createnews(){
    	var ul = $("<ul class=\"news-ul\">");
     	var li=new Array();
     	li[0]=createnewslist("news-inform.php","img/news/1001_new.jpg","2017-07-18","大数据",Math.round(Math.random()*1000),
     	     	"大数据浪潮下，制造业如何转型升级",
     	     	"2017年7月，由中国人工智能产业创新联盟编制，中国电子信息产业发展研究院、百分点集团联合发布了一份《2017人工智能行业发展热点分析报告》，报告显示，48.3%的关注者对人工智能未来发展将会带来的冲击表示担忧。这种担忧不仅表现在人工智能技术可能会取代很多行业的人工岗位，还表现在其潜在的不可控和威胁性上。");
     	li[1]=createnewslist("news-inform.php","img/news/1002_new.jpg","2017-07-07","制造业信息",Math.round(Math.random()*1000),
     	     	"第十四届中国制造业管理信息化大会成功召开",
     	     	"2017年7月6日，由e-works数字化企业网主办，安徽省信息化协会、安徽省首席信息官协会、安徽省机械行业联合会、安徽省机电行业协会协办的“第十四届中国制造业管理信息化大会”在合肥市成功召开。"+ 
                " 本次论坛以“智能管理与智能制造”为主题，通过演讲、展示、圆桌讨论及主题沙龙等多种形式分享了管理信息化领域的技术前沿、发展趋势、应用案例和解决方案，受到了各界广泛关注。来自管理信息化领域的专家，知名制造企业信息化负责人、国内外主流解决方案厂商及制造企业代表400多人出席了本次会议。"+
                " ");
     	li[2]=createnewslist("news-inform.php","img/news/1000_new.png","2017-07-04","中国制造2025",Math.round(Math.random()*1000),
     	     	"中国制造2025 制造业必须抓住智能制造这一先机",
     	     	"第五届全球供应链大会（GLSC2017）将于7月11-12日，在上海召开，大会以“链接，数以智用”为主题，旨在链接开放的全数字化转型生态链的业界领袖、企业家、运营高管、科技专家、商业智囊一道，力求在数字化转型升级大战中，让企业每个方面都享受到最前瞻的思维、最好的技术、最佳的创新实践，共同探索数字化转型之路。");
     	li[3]=createnewslist("news-inform.php","img/news/1003_new.jpg","2017-06-29","智能大会",Math.round(Math.random()*1000),
     	     	"世界智能大会今日开幕，业界领袖共话人工智能未来",
     	     	"2017年6月29日，世界智能大会在天津梅江会展中心隆重开幕，来自17个国家和地区的1200余名中外政要、企业家、科学家代表与会，探讨智能科技前沿发展趋势，共谋智能科技发展愿景。本届大会为期2日，主题为“迈向大智能时代”，由天津市人民政府，中国国家发展和改革委员会、科学技术部、工业和信息化部、国家互联网信息办公室，中国科学院、中国工程院共同主办。会议期间，将举办1场主题峰会、15场分论坛，世界智能科技展、世界智能驾驶挑战赛亦将同期举行。");
     	li[4]=createnewslist("news-inform.php","img/news/1001_new.png","2017-06-27","人工智能",Math.round(Math.random()*1000),
     	     	"中国人工智能大会2017将于7月22-23日在杭州盛大开幕",
     	     	"7月 22 - 23 日，由中国人工智能学会、阿里巴巴集团 & 蚂蚁金服主办，CSDN、中国科学院自动化研究所承办的第三届中国人工智能大会（CCAI 2017）将在杭州国际会议中心盛大开幕，活动家提供中国人工智能大会在线报名服务。");
     	li[5]=createnewslist("news-inform.php","img/news/1004_new.jpg","2017-07-14","云计算和物联网",Math.round(Math.random()*1000),
     	     	"2017云计算及工业物联网论坛在广州成功召开",
     	     	"2017年7月14日，由e-works数字化企业网主办，广东省首席信息官协会、澳门亚太IT协会协办的2017云计算及工业物联网论坛在广州卡威尔酒店成功召开，来自全国各地的制造企业信息化主管、CIO、IT项目经理，以及高校及科研院所的云计算及工业物联网的研究人员共计150余人参加了本次会议。");
		
     	for(x in li){
 			ul.append(li[x]);
         }
        var div_clear=$("<div class=\"clear\"></div>");
        ul.append(div_clear);
        //alert(ul.html());
        return ul;
     }
   function createnewslist(new_href,img_href,date,content,clicknum,title_para,txt_para){
    	 var li = $("	<li class=\"am-u-sm-12 am-u-md-6 am-u-lg-4 \">");
			var a = $("<a href=\""+new_href+"\">");
			var div_ul = $("<div class=\"news-ul-liall\">");
				var img_url = $("<img class=\"news-ul-liimg\" src=\""+img_href+"\"/>");
				var div_infor_list = $("<div class=\"inform-list\">");
					var div_infro_detail = new Array();
					div_infro_detail[0]=$("<div class=\"inform-list-date\"><i class=\"am-icon-arrow-circle-right\"></i>"+date+"</div>");
					div_infro_detail[1]=$("<div class=\"inform-list-label\"><i class=\"am-icon-arrow-circle-right\"></i>"+content+"</div>");
					div_infro_detail[2]=$("<div class=\"inform-list-numb\"><i class=\"am-icon-arrow-circle-right\"></i>点击次数："+clicknum+"</div>");
					for( x in div_infro_detail){
						div_infor_list.append(div_infro_detail[x]);
					}
				var title =$("<span>"+title_para+"</span>");
				var txt=$("<p>"+txt_para+"</p>");
				var more_href=$("<span class=\"see-more3\">查看更多<i class=\"am-icon-angle-double-right\"></i></span>");
				div_ul.append(img_url);
				div_ul.append(div_infor_list);
				div_ul.append(title);
				div_ul.append(txt);
				div_ul.append(more_href);
			a.append(div_ul);
		li.append(a);
		return li;
   }
   function create_nextpage(){
	    var ul = $("<ul class=\"am-pagination \">");
	    //var li = $("");
    	var li=new Array();
    	li[0]=$("<li ><a href=\"#\">&laquo;</a></li>");
    	li[1]=$("<li><a href=\"#\">上一页</a></li> ");
    	li[2]=$("<li><a class=\"current-page\">1</a></li>");
    	li[3]=$("<li><a href=\"#\">下一页</a></li>");
    	li[4]=$("<li ><a href=\"#\">&raquo;</a></li>");    	
    	for(x in li){
			ul.append(li[x]);
        }  
       return ul;
   }


   function create_hotnews(){
		var section=$("<section data-am-widget=\"accordion\" class=\"am-accordion am-accordion-gapped\" data-am-accordion='{  }'>");
		var div_title=$("<div class=\"hot-title\"><i class=\"am-icon-thumbs-o-up\"></i>热门新闻 / Hot 	News</div>");
		section.append(div_title);
		var dl=new Array();
		dl[0]=create_hotnews_accord("am-in","“智创新 慧设计”2017 Altair技术大会成功落幕",
							"7月13-14日，“智创新 慧设计”2017 Altair技术大会（ATC 2017）在南京香格里拉大酒店召开， 来自航空航天、汽车、电子与消费品、重型机械、船舶、轨道机车、能源等行业及研究院所的技术专家，以及全国重点高校的教授、学者们共计超过700位嘉宾齐聚金陵，共同开启“仿真驱动创新”的技术盛宴。");
		dl[1]=create_hotnews_accord("","“ 人工智能成新一轮产业变革核心方向",
		" 新一轮产业变革席卷全球，人工智能成为新一轮产业变革的核心方向。如今，越来越多传统制造企业在新旧动能转换中，将人工智能作为发展的新动力，不断创造出新的发展机遇。“我们正在进入科技革命与产业变革交汇的新时代。”中国科学院院士怀进鹏认为，这一新时代的基本特征是数字化，基本形式是网络化应用，重要特点和结果体现的是智能化。智能化不断赋予中国传统产业新能量，赋予制造业更高效率、更好效果 ");
		dl[2]=create_hotnews_accord("","“ 波音与达索系统宣布深化合作伙伴关系",
		"2017年7月25日，中国上海 —达索系统（巴黎欧洲证券交易所：#13065,DSY.PA）和波音决定深化合作伙伴关系。波音将扩大达索系统产品（含达索系统3DEXPERIENCE平台）在商用飞机、宇航和国防项目上的使用。");
		dl[3]=create_hotnews_accord("","“共襄盛举——探索智能制造大潮下的智能管理之道——第十四届中国制造业管理信息化大会即将召开",
		"2017年7月6日，由e-works数字化企业网主办、安徽省信息化协会、安徽省首席信息官协会、安徽省机械行业联合会协办的“第十四届中国制造业管理信息化大会”将在合肥盛大开幕。一年一度的“中国制造业管理信息化大会”是我国管理信息化领域级别最高、规模最大、内容最全面、影响最深远的年度盛会。从2004年至今，e-works已在北京、广州、深圳、杭州、南京、苏州、无锡、宁波、武汉、郑州、长沙等地连续举办了十三届，成为制造企业CIO和IT经理重点关注的专业大会，并获得了制造企业、软件厂商以及业界人士的一致好评。");
		
		for(x in dl){
			section.append(dl[x]);
			}
		return section;
	   }
   function create_hotnews_accord(flag,title,content){
		var dl=$("<dl class=\"am-accordion-item am-active\">");
		var dt=$("<dt class=\"am-accordion-title\">"+title+"</dt>");			
		var dd=$("<dd class=\"am-accordion-bd am-collapse "+ flag +"\">");
			var div_dd=$("<div class=\"am-accordion-content\"> "+ content+ "</div>");
            dd.append(div_dd);
        dl.append(dt);
        dl.append(dd);
        return dl;
	   }

     /***
 
     
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
      <li class="hw-menu-active"><a href="news.php">新闻动态 </a></li>
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
<div class="toppic">
	 <div class="am-container-1">
	 <div class="toppic-title left">
			<i class="am-icon-newspaper-o toppic-title-i"></i>
			<span class="toppic-title-span">新闻动态</span>
			<p>News</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="index.php" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="news.php" class="w-white">新闻动态</a></span>
		</div>
	</div>
</div>


	
<div class="am-container-1 news-content-all">
<!-- news detail -->
<div class="left am-u-sm-12 am-u-md-8 am-u-lg-9 "  id="news_detail">
	  <!-- <ul class="news-ul">
	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4 ">
	  		<a href="news-inform.php">
	  		<div class="news-ul-liall">
	  		  	<img class="news-ul-liimg" src="img/news.png"/>		  	  		  	 
	  		  <div class="inform-list">
		  		  	<div class="inform-list-date"><i class="am-icon-arrow-circle-right"></i>2015-6-11</div>
		  		  	<div class="inform-list-label"><i class="am-icon-arrow-circle-right"></i>互联网 开发</div>
		  		  	<div class="inform-list-numb"><i class="am-icon-arrow-circle-right"></i>点击次数：273</div>
	  		  </div>		  
	  		  <span>关于召开年会通知</span>
	  		  <p>互联网，又称网际网路或音网际网路或音译因特网英特网，是网络与网络之间所串连成的庞大网络网络与网络之间大家可是快乐的</p>
	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
	  	  </div>
	  	  </a>
	  	</li>	  	
	  	
	  	 <div class="clear"></div> 
		</ul> -->
		<!-- <ul class="am-pagination ">
	  	 <li ><a href="#">&laquo;</a></li>
				  <li><a href="#">上一页</a></li> 
				  <li><a class="current-page">1</a></li>
				  <li><a href="#">下一页</a></li>
				   <li ><a href="#">&raquo;</a></li>
		</ul>	 -->  
</div>	  



<!-- hot news -->
<div class="left am-u-sm-12 am-u-md-4 am-u-lg-3" id="news_hot">
	
	<!-- <section data-am-widget="accordion" class="am-accordion am-accordion-gapped" data-am-accordion='{  }'>
		<div class="hot-title"><i class="am-icon-thumbs-o-up"></i>热门新闻 / Hot 	News</div>
      <dl class="am-accordion-item am-active">
        <dt class="am-accordion-title">
          “智创新 慧设计”2017 Altair技术大会成功落幕
        </dt>
        <dd class="am-accordion-bd am-collapse am-in"> -->
          <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
          <!-- <div class="am-accordion-content">
            7月13-14日，“智创新 慧设计”2017 Altair技术大会（ATC 2017）在南京香格里拉大酒店召开， 来自航空航天、汽车、电子与消费品、重型机械、船舶、轨道机车、能源等行业及研究院所的技术专家，以及全国重点高校的教授、学者们共计超过700位嘉宾齐聚金陵，共同开启“仿真驱动创新”的技术盛宴。
          </div>
        </dd>
      </dl>      
  </section> -->
	
</div>

<div class="clear"></div>
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
