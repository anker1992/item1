<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><META http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<?php
function getIP ()
{
global $_SERVER;
if (getenv('HTTP_CLIENT_IP')) {
$ip = getenv('HTTP_CLIENT_IP');
} 
else if (getenv('HTTP_X_FORWARDED_FOR')) {
$ip = getenv('HTTP_X_FORWARDED_FOR');
} 
else if (getenv('REMOTE_ADDR')) {
$ip = getenv('REMOTE_ADDR');
} 
else {
$ip = $_SERVER['REMOTE_ADDR'];
}
return $ip;
}
$ip=getIP();
?>
<META name="keywords" content=""> 
<META name="description" content=""> 
<META http-equiv="X-UA-Compatible" content="IE=EmulateIE7"> 
<LINK type="text/css" rel="stylesheet" href="http://www.laii.cn/static/main.css"> 
<LINK type="text/css" rel="stylesheet" href="http://www.laii.cn/static/icon.css"> 
<LINK rel="search" type="application/opensearchdescription+xml" href="" title="GO在线工具箱"> 
<SCRIPT src="http://www.laii.cn/static/jquery.js" type="text/javascript"></SCRIPT> 
<SCRIPT src="http://www.laii.cn/static/common.js" type="text/javascript"></SCRIPT> 
<SCRIPT src="alexa.js" type="text/javascript"></SCRIPT> 
<TITLE>GO在线工具箱</TITLE> 
</HEAD><BODY> 
	<DIV id="topbar"> 
		<DIV class="nav" id="topbar_nav"><p> 您的IP：<?=$ip?>&nbsp;&nbsp; <a href="http://www.gom6.com" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.gom6.com');return(false);" style="behavior: url(#default#homepage)">设为主页</a> <a title="把站长工具添加到收藏夹，方便日后查询！）" href="#" onclick="window.external.AddFavorite('http://www.gom6.com', '站长工具 - 致力于专业权威、数据准确的实用工具,站长帮手查询站!'); return false;">加入收藏</a>-站长工具 - 致力于专业权威、数据准确的实用工具,站长帮手查询站!</p></DIV> 
		<DIV id="topbar_login"><A href="http://www.laii.cn/admin">登录</A></DIV> 
	</DIV> 
	<!--/#top_bar--> 
 
	<DIV id="wrap"> 
		<DIV id="header"> 
			<H1 id="logo"><A href="http://www.gom6.com"><SPAN class="hide">来啦工具箱</SPAN></A></H1> 
			<FORM id="tool_search" action="javascript://" onsubmit="IndexSearchTool();return false;"> 
				<INPUT type="text" id="tool_kw" class="text-input blue-input" autocomplete="off"> 
				<SPAN STYLE="border:1px #a8c5ee solid;float:left;padding:1px;margin-right:8px"><INPUT type="button" id="js_search_self" value="在线代理" class="button" onclick="IndexSearchTool(); "></SPAN> 
				<SPAN STYLE="border:1px #a8c5ee solid;float:left;padding:1px;"> 
               	<INPUT type="button" onclick="google();return false;"  class="button" value="搜索网页"> 
                </SPAN> 
			</FORM> 
 
				
		</DIV>    	
<DIV id="menu"><UL><LI> <A href="/">推荐工具</A></LI>
			   <LI><A href="/?ac=my">我的工具</A></LI>
                <LI><A href="/?ac=all">所有工具</A></LI>
                <LI class="current"><A href="#">MD5加密</A></LI>     </UL></DIV>﻿<DIV id="main" class="clearfix"> 
			<DIV id="leftbar" class="fl"> 
				<DIV class="rn shadow"> 
					<DIV class="shadow-rt"> 
						<DIV class="shadow-lb"> 
							<DIV class="shadow-rb"> 
								<DIV class="shadow-lt"> 
									<DIV class="rn-header"> 
										<DIV class="rn-border rn-border-1"></DIV> 
										<DIV class="rn-border rn-border-2"></DIV> 
										<DIV class="rn-border rn-border-3"></DIV> 
										<DIV class="rn-border rn-border-4"></DIV> 
										<DIV class="rn-border rn-border-5"></DIV> 
									</DIV> 
									<!--rn inner--> 
									<DIV class="rn-inner clearfix"> 
<?php  include_once("md5.php") ?>
									</DIV> 
									<!--/rn inner--> 
									<DIV class="rn-footer"> 
										<DIV class="rn-border rn-border-5"></DIV> 
										<DIV class="rn-border rn-border-4"></DIV> 
										<DIV class="rn-border rn-border-3"></DIV> 
										<DIV class="rn-border rn-border-2"></DIV> 
										<DIV class="rn-border rn-border-1"></DIV> 
									</DIV> 
								</DIV> 
							</DIV> 
						</DIV> 
					</DIV>	
				</DIV> 
				<!--/widget-->	
									
									
									
 
 
			</DIV> 
			<!--/#leftbar--> 
			
			
			
			
			<DIV id="rightbar" class="fr"> 
            			
	<!--widget--> 
				<DIV id="other_tools" class="rn shadow"> 
					<DIV class="shadow-rt"> 
						<DIV class="shadow-lb"> 
							<DIV class="shadow-rb"> 
								<DIV class="shadow-lt"> 
									<DIV class="blue-header"> 
										<DIV class="blue-header-left"></DIV> 
										<DIV class="blue-header-right"></DIV> 
										<H4>其他实用工具</H4> 
									</DIV> 
									<!--rn inner--> 
									<DIV class="rn-inner pt5"> 
										<UL class="side-list"> 
                      <LI><A href="http://www.laii.cn/tools/alexa">alexa排名查询</A></LI>                      
										</UL> 
									</DIV> 
									<!--/rn inner--> 
									<DIV class="rn-footer"> 
										<DIV class="rn-border rn-border-5"></DIV> 
										<DIV class="rn-border rn-border-4"></DIV> 
										<DIV class="rn-border rn-border-3"></DIV> 
										<DIV class="rn-border rn-border-2"></DIV> 
										<DIV class="rn-border rn-border-1"></DIV> 
									</DIV> 
								</DIV> 
							</DIV> 
						</DIV> 
					</DIV>	
				</DIV>					            					
			</DIV>	
		</DIV> 
				
		<DIV id="footer" class="text-center gray6"> 
			<P>
			Copyright © 2009 GoM6.com All Rights Reserved 			

<A href="http://www.miibeian.gov.cn/" target="_blank">京icp888888</A>
						</P>
 
	
 
		</DIV> 
		<!--/#footer--> 
	</DIV> 
    <UL id="js_search_msg" style="display: none; width: 356px; top: 91px; left: 361px; " class="js_search_msg"> 
    </UL> 
 
 
</BODY></HTML>