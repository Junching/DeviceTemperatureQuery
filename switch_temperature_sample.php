<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<title>歷~O�溫度~D</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<script type="text/javascript" src="/include/layout.js"></script>

	<LINK REL="stylesheet" TYPE="text/css" HREF="switch_temperature.css">

	</head>
<body>

  <div id="main">
    <div id="header">

	  <div id="banner">

	    <div id="welcome">
	      <h1>朝陽科技大學-圖書資訊處</h1>
	    </div><!--close welcome-->

	<div id="welcome_slogan">
	      <h1>各棟大樓 Switch 溫度</h1>
	    </div><!--close welcome_slogan-->


	      <div id="backgroundimg">
        <ul class="slideshow">
        <li class="show"><img width="680" height="250" src="image.PNG" alt="&quot;Enter your caption here&quot;" /></li>
       </ul>   	  
      </ul>  
    </div><!--close backgroundimg-->

      
      </div><!--close banner-->
    </div><!--close header-->


	<div id="menubar">
      <ul id="menu">
        <li class="current"><a href="test.php">首頁</a></li>

        <li><a href="ourwork.html">今日溫度</a></li>

        <li><a href="testimonials.html">歷史紀錄</a></li>

      </ul>
    </div><!--close menubar-->	

		  <br style="clear:both"/>

<p align="center">
<?php
include("mysql.inc.php");


$sql="SELECT * FROM `Temperature`";
$result=mysql_query($sql);

$page;
 
if(!isset($_GET["page"])) 
    $page=1; 
else
    $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
 
 
$items = mysql_affected_rows(); //取得總項數,以便算出分頁須幾頁
 
$per = 21; 
$pages = ceil($items/$per); 
$start = ($page-1)*$per; 
 
$query1 = "SELECT * FROM `Temperature` LIMIT   $start  ,  $per "; 
 
$result = mysql_query( $query1, $link );    
 
mysqli_close($link);

echo "<table><tr><th>floor</th><th>time</th><th>temperature</th><tr>";
while ($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<tr/>";
}
echo '</table>';
?>
</p>

<p align="center">
<?php 
for($i = 1; $i <= $pages; $i++)
{
        echo '<a href="http://163.17.1.132/devicetemperature/switch_temperature_sample.php?page='.$i.'">[' . $i . '] </a>';            
}

?>
</p>
<p align="center">第<?php echo$page?>頁/共有<?php echo $pages?>頁</p>
<p>&nbsp;</p>
	<div id="content_grey">
    </div><!--close content_grey-->   
   </div><!--close main-->

  
  <div id="footer">
	  <a href="http://http://web.cyut.edu.tw/">朝陽科技大學</a>   |  <a href="http://www.cyut.edu.tw/admin/pmlis/">圖書資訊處-網路服務組</a>

  </div><!--close footer-->  


</body>
