<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站长工具管理系统-后台-内容编辑</title>
<link href="images/admin.css" rel="stylesheet" type="text/css" />
<link href="images/icon.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include_once("admin_permission.php") ?>
<?php include_once("admin_conn.php") ?>
<div class="all">
  <div class="all_top"></div>
	<div class="main">
    	<div class="main_top"></div>
        <div class="main_txt">
			<?php include_once("admin_left.php") ?>
            <div class="right">
            	<div class="ra_edit"></div>
                <div class="rb">
                <!--表格内容开始-->

<?php 
	//屏蔽编辑器一些特殊字符
	  function strstrip( $s ){
	$s = trim( $s );
	$s = str_replace( '&#32;',' ',$s );
	$s = str_replace( '&#60;','<',$s );
	$s = str_replace( '&#92;','\\',$s );
	$s = str_replace( '&#39;','\'',$s );
	$s = str_replace( '&#37;','%',$s );
	$s = str_replace( '&#34;','\"',$s );
	$s = str_replace( '"','\'',$s);
	$s = str_replace( '\\','',$s );
	$s=stripslashes($s);
	return $s;
  }
  
					$aid = strip_tags($_GET[aid],''); //获取内容Id,屏蔽特殊字符
					$result = mysql_query("select * from wit_article where article_id='$aid'"); 
					while($row=mysql_fetch_array($result)){
                	echo "<div class=\"add_from\">";
					echo "<form action=\"article_updata.php\" method=\"post\">";
                    echo "<table width=\"100%\" border=\"0\">";
                    echo "<input type=\"text\" name=\"id\" value=\"" .$aid ."\" style=\"display:none;\" />";
                    echo "<tr>";
                    echo "<td>名称:</td>";
                    echo "<td><input type=\"text\" name=\"article_title\" class=\"article_title\" value=\"" .$row['article_title'] ."\" /></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>分类:</td>";
                    echo "<td><select name=\"article_channel\" class=\"article_channel\">";
?>
<?php include_once("article_channel.php") ?>
<?php
                    echo "</select></td>";
                   
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td valign=\"top\">简介:</td>";
                    echo "<td><textarea name=\"article_intro\" cols=\"45\" rows=\"5\" class=\"article_intro\">" .$row['article_intro'] ."</textarea></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>链接</td>";
                    echo "<td><input type=\"text\" name=\"article_url\" class=\"article_url\" value=\"" .$row['article_url'] ."\" /></td>";
                    echo "</tr>";
echo '                       <tr>';
echo '					    <td valign="top">图标:</td>';
echo '					   <td>	';
echo "<input id=\"imageid\" type=\"text\" name=\"article_imgurl\" class=\"article_keyword\" value=\"" .$row['article_imgurl'] ."\"/>";			   
echo '<ul id="menu">';
echo '<li class="tools-icons-1 tools-icon-1"title="Item 1" onclick="imageid.value=\'tools-icons-1 tools-icon-1\'"></li>';
echo '<li class="tools-icons-1 tools-icon-2" title="Item 2" onclick="imageid.value=\'tools-icons-1 tools-icon-2\'"></li>';
echo '<li class="tools-icons-1 tools-icon-3"title="Item 3" onclick="imageid.value=\'tools-icons-1 tools-icon-3\'"></li>';
echo '<li class="tools-icons-1 tools-icon-4"title="Item 4" onclick="imageid.value=\'tools-icons-1 tools-icon-4\'"></li>';
echo '<li class="tools-icons-1 tools-icon-5"title="Item 5" onclick="imageid.value=\'tools-icons-1 tools-icon-5\'"></li>';
echo '<li class="tools-icons-1 tools-icon-6"title="Item 6" onclick="imageid.value=\'tools-icons-1 tools-icon-6\'"></li>';
echo '<li class="tools-icons-1 tools-icon-7"title="Item 7" onclick="imageid.value=\'tools-icons-1 tools-icon-7\'"></li>';
echo '<li class="tools-icons-1 tools-icon-8"title="Item 8" onclick="imageid.value=\'tools-icons-1 tools-icon-8\'"></li>';
echo '<li class="tools-icons-1 tools-icon-9"title="Item 9" onclick="imageid.value=\'tools-icons-1 tools-icon-9\'"></li>';
echo '<li class="tools-icons-1 tools-icon-10"title="Item 10" onclick="imageid.value=\'tools-icons-1 tools-icon-10\'"></li>';
echo '<li class="tools-icons-1 tools-icon-11"title="Item 11" onclick="imageid.value=\'tools-icons-1 tools-icon-11\'"></li>';
echo '<li class="tools-icons-1 tools-icon-12"title="Item 12" onclick="imageid.value=\'tools-icons-1 tools-icon-12\'"></li>';
echo '<li class="tools-icons-1 tools-icon-13"title="Item 13" onclick="imageid.value=\'tools-icons-1 tools-icon-13\'"></li>';
echo '<li class="tools-icons-1 tools-icon-14"title="Item 14" onclick="imageid.value=\'tools-icons-1 tools-icon-14\'"></li>';
echo '<li class="tools-icons-1 tools-icon-15"title="Item 15" onclick="imageid.value=\'tools-icons-1 tools-icon-15\'"></li>';
echo '<li class="tools-icons-1 tools-icon-16"title="Item 16" onclick="imageid.value=\'tools-icons-1 tools-icon-16\'"></li>';
echo '<li class="tools-icons-1 tools-icon-17"title="Item 17" onclick="imageid.value=\'tools-icons-1 tools-icon-17\'"></li>';
echo '<li class="tools-icons-1 tools-icon-18"title="Item 18" onclick="imageid.value=\'tools-icons-1 tools-icon-18\'"></li>';
echo '<li class="tools-icons-1 tools-icon-19"title="Item 19" onclick="imageid.value=\'tools-icons-1 tools-icon-19\'"></li>';
echo '<li class="tools-icons-1 tools-icon-20"title="Item 20" onclick="imageid.value=\'tools-icons-1 tools-icon-20\'"></li>';
echo '<li class="tools-icons-1 tools-icon-21"title="Item 21" onclick="imageid.value=\'tools-icons-1 tools-icon-21\'"></li>';
echo '<li class="tools-icons-1 tools-icon-22"title="Item 22" onclick="imageid.value=\'tools-icons-1 tools-icon-22\'"></li>';
echo '<li class="tools-icons-1 tools-icon-23"title="Item 23" onclick="imageid.value=\'tools-icons-1 tools-icon-23\'"></li>';
echo '<li class="tools-icons-1 tools-icon-24"title="Item 24" onclick="imageid.value=\'tools-icons-1 tools-icon-24\'"></li>';
echo '<li class="tools-icons-1 tools-icon-25"title="Item 25" onclick="imageid.value=\'tools-icons-1 tools-icon-25\'"></li>';
echo '<li class="tools-icons-1 tools-icon-26"title="Item 26" onclick="imageid.value=\'tools-icons-1 tools-icon-26\'"></li>';
echo '<li class="tools-icons-1 tools-icon-27"title="Item 27" onclick="imageid.value=\'tools-icons-1 tools-icon-27\'"></li>';
echo '<li class="tools-icons-1 tools-icon-28"title="Item 28" onclick="imageid.value=\'tools-icons-1 tools-icon-28\'"></li>';
echo '<li class="tools-icons-1 tools-icon-29"title="Item 29" onclick="imageid.value=\'tools-icons-1 tools-icon-29\'"></li>';
echo '<li class="tools-icons-1 tools-icon-30"title="Item 30" onclick="imageid.value=\'tools-icons-1 tools-icon-30\'"></li>';
echo '<li class="tools-icons-1 tools-icon-31"title="Item 31" onclick="imageid.value=\'tools-icons-1 tools-icon-31\'"></li>';
echo '<li class="tools-icons-1 tools-icon-32"title="Item 32" onclick="imageid.value=\'tools-icons-1 tools-icon-32\'"></li>';
echo '<li class="tools-icons-1 tools-icon-33"title="Item 33" onclick="imageid.value=\'tools-icons-1 tools-icon-33\'"></li>';
echo '<li class="tools-icons-1 tools-icon-34"title="Item 34" onclick="imageid.value=\'tools-icons-1 tools-icon-34\'"></li>';
echo '<li class="tools-icons-1 tools-icon-35"title="Item 35" onclick="imageid.value=\'tools-icons-1 tools-icon-35\'"></li>';
echo '<li class="tools-icons-1 tools-icon-36"title="Item 36" onclick="imageid.value=\'tools-icons-1 tools-icon-36\'"></li>';
echo '<li class="tools-icons-1 tools-icon-37"title="Item 37" onclick="imageid.value=\'tools-icons-1 tools-icon-37\'"></li>';
echo '<li class="tools-icons-1 tools-icon-38"title="Item 38" onclick="imageid.value=\'tools-icons-1 tools-icon-38\'"></li>';
echo '<li class="tools-icons-1 tools-icon-39"title="Item 39" onclick="imageid.value=\'tools-icons-1 tools-icon-39\'"></li>';
echo '<li class="tools-icons-1 tools-icon-40"title="Item 40" onclick="imageid.value=\'tools-icons-1 tools-icon-40\'"></li>';
echo '<li class="tools-icons-1 tools-icon-41"title="Item 41" onclick="imageid.value=\'tools-icons-1 tools-icon-41\'"></li>';
echo '<li class="tools-icons-1 tools-icon-42"title="Item 42" onclick="imageid.value=\'tools-icons-1 tools-icon-42\'"></li>';
echo '<li class="tools-icons-1 tools-icon-43"title="Item 43" onclick="imageid.value=\'tools-icons-1 tools-icon-43\'"></li>';
echo '<li class="tools-icons-1 tools-icon-44"title="Item 44" onclick="imageid.value=\'tools-icons-1 tools-icon-44\'"></li>';
echo '<li class="tools-icons-1 tools-icon-45"title="Item 45" onclick="imageid.value=\'tools-icons-1 tools-icon-45\'"></li>';
echo '<li class="tools-icons-1 tools-icon-46"title="Item 46" onclick="imageid.value=\'tools-icons-1 tools-icon-46\'"></li>';
echo '<li class="tools-icons-1 tools-icon-47"title="Item 47" onclick="imageid.value=\'tools-icons-1 tools-icon-47\'"></li>';
echo '<li class="tools-icons-1 tools-icon-48"title="Item 48" onclick="imageid.value=\'tools-icons-1 tools-icon-48\'"></li>';
echo '<li class="tools-icons-1 tools-icon-49"title="Item 49" onclick="imageid.value=\'tools-icons-1 tools-icon-49\'"></li>';
echo '<li class="tools-icons-1 tools-icon-50"title="Item 50" onclick="imageid.value=\'tools-icons-1 tools-icon-50\'"></li>';
echo '<li class="tools-icons-1 tools-icon-51"title="Item 51" onclick="imageid.value=\'tools-icons-1 tools-icon-51\'"></li>';
echo '<li class="tools-icons-1 tools-icon-52"title="Item 52" onclick="imageid.value=\'tools-icons-1 tools-icon-52\'"></li>';
echo '<li class="tools-icons-1 tools-icon-53"title="Item 53" onclick="imageid.value=\'tools-icons-1 tools-icon-53\'"></li>';
echo '<li class="tools-icons-1 tools-icon-54"title="Item 54" onclick="imageid.value=\'tools-icons-1 tools-icon-54\'"></li>';
echo '<li class="tools-icons-1 tools-icon-55"title="Item 55" onclick="imageid.value=\'tools-icons-1 tools-icon-55\'"></li>';
echo '<li class="tools-icons-1 tools-icon-56"title="Item 56" onclick="imageid.value=\'tools-icons-1 tools-icon-56\'"></li>';
echo '<li class="tools-icons-1 tools-icon-57"title="Item 57" onclick="imageid.value=\'tools-icons-1 tools-icon-57\'"></li>';
echo '<li class="tools-icons-1 tools-icon-58"title="Item 58" onclick="imageid.value=\'tools-icons-1 tools-icon-58\'"></li>';
echo '<li class="tools-icons-1 tools-icon-59"title="Item 59" onclick="imageid.value=\'tools-icons-1 tools-icon-59\'"></li>';
echo '<li class="tools-icons-1 tools-icon-60"title="Item 60" onclick="imageid.value=\'tools-icons-1 tools-icon-60\'"></li>';
echo '<li class="tools-icons-1 tools-icon-61"title="Item 61" onclick="imageid.value=\'tools-icons-1 tools-icon-61\'"></li>';
echo '<li class="tools-icons-1 tools-icon-62"title="Item 62" onclick="imageid.value=\'tools-icons-1 tools-icon-62\'"></li>';
echo '<li class="tools-icons-1 tools-icon-63"title="Item 63" onclick="imageid.value=\'tools-icons-1 tools-icon-63\'"></li>';
echo '<li class="tools-icons-1 tools-icon-64"title="Item 64" onclick="imageid.value=\'tools-icons-1 tools-icon-64\'"></li>';
echo '<li class="tools-icons-1 tools-icon-65"title="Item 65" onclick="imageid.value=\'tools-icons-1 tools-icon-65\'"></li>';
echo '<li class="tools-icons-1 tools-icon-66"title="Item 66" onclick="imageid.value=\'tools-icons-1 tools-icon-66\'"></li>';
echo '<li class="tools-icons-1 tools-icon-67"title="Item 67" onclick="imageid.value=\'tools-icons-1 tools-icon-67\'"></li>';
echo '<li class="tools-icons-1 tools-icon-68"title="Item 68" onclick="imageid.value=\'tools-icons-1 tools-icon-68\'"></li>';
echo '<li class="tools-icons-1 tools-icon-69"title="Item 69" onclick="imageid.value=\'tools-icons-1 tools-icon-69\'"></li>';
echo '<li class="tools-icons-1 tools-icon-70"title="Item 70" onclick="imageid.value=\'tools-icons-1 tools-icon-70\'"></li>';
echo '<li class="tools-icons-1 tools-icon-71"title="Item 71" onclick="imageid.value=\'tools-icons-1 tools-icon-71\'"></li>';
echo '<li class="tools-icons-1 tools-icon-72"title="Item 72" onclick="imageid.value=\'tools-icons-1 tools-icon-72\'"></li>';
echo '<li class="tools-icons-1 tools-icon-73"title="Item 73" onclick="imageid.value=\'tools-icons-1 tools-icon-73\'"></li>';
echo '<li class="tools-icons-1 tools-icon-74"title="Item 74" onclick="imageid.value=\'tools-icons-1 tools-icon-74\'"></li>';
echo '<li class="tools-icons-1 tools-icon-75"title="Item 75" onclick="imageid.value=\'tools-icons-1 tools-icon-75\'"></li>';
echo '<li class="tools-icons-1 tools-icon-76"title="Item 76" onclick="imageid.value=\'tools-icons-1 tools-icon-76\'"></li>';
echo '<li class="tools-icons-1 tools-icon-77"title="Item 77" onclick="imageid.value=\'tools-icons-1 tools-icon-77\'"></li>';
echo '<li class="tools-icons-1 tools-icon-78"title="Item 78" onclick="imageid.value=\'tools-icons-1 tools-icon-78\'"></li>';
echo '<li class="tools-icons-1 tools-icon-79"title="Item 79" onclick="imageid.value=\'tools-icons-1 tools-icon-79\'"></li>';
echo '<li class="tools-icons-1 tools-icon-80"title="Item 80" onclick="imageid.value=\'tools-icons-1 tools-icon-80\'"></li>';
echo '<li class="tools-icons-1 tools-icon-81"title="Item 81" onclick="imageid.value=\'tools-icons-1 tools-icon-81\'"></li>';
echo '</ul>';
echo '</td>';
echo '</tr>';
                    echo "<tr>";
                    echo "<td>推荐:</td>";
                    $value = $row['article_top'];
					if($value == 1){
					    $selected='checked="checked"';
					}
					else{
					    $selected='';
					}
                    echo "<td><input type=\"checkbox\" " .$selected ." name=\"article_top\" class=\"article_top\"  value=\"1\" />";
                    echo "点击次数:";
                    echo "<input type=\"text\" name=\"article_click\" class=\"article_click\" value=\"" .$row['article_click'] ."\" />";
                    echo "相关查询:";
                    echo "<input type=\"text\" name=\"article_keyword\" class=\"article_keyword\" value=\"" .$row['article_keyword'] ."\" /></td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan=\"2\" align=\"right\"><input type=\"submit\" name=\"button\" class=\"button\" value=\"修改\" /></td>";
                    echo "</tr>";
                    echo "</table>";
                    echo "</form>";
                    echo "</div>";
}
?>
                <!--表格内容结束-->
              </div>
            </div>
        </div>
    </div>
    <div class="all_foot"></div>
     <div class="all_foot2">版权所有:<a href="http://www.gom6.com">GO代理</a> GO工具管理系统V1.0 采用WITCMS后台</div>
</div>

</body>
</html>
