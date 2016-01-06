<?php
##Mysql connect function
include("mysql.inc.php");
$mysql_query=mysql_query("INSERT INTO `NetDevENV`.`Temperature` (`floor`,`time`,`Temperature`) values('$switch_host','$time','$snmpval')");
#if (mysqli_select_db("NetDevENv")) {
#    echo "New record created successfully";
#} else {
#    echo "Error: "
#}



?>
