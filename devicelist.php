<?php
#ini_set('display_errors', 'On');
include_once("config.php");
require_once("DB.php");


## DB connect
$dsn = 'pgsql://'.$database_username.':'.$database_password.'@'.$database_hostname.'/'.$database_name;
$db =& DB::connect($dsn);
$db->setFetchMode(DB_FETCHMODE_ASSOC);
## DB connect
?>
<select name='hostname'>
    <option value=''>請選交換器名稱</option>
<?php
$res =& $db->query('select hostname from switch.switch_alias group by hostname order by hostname');
if ($res->numRows() != 0){
	#for ($k=1; $k<= $number3; $k++){
	while ($res->fetchInto($row)) {
		echo "<option value='".$row["hostname"]."'";
		if ($row["hostname"]==$hostname){
			echo " selected";	
		}
		echo ">".$row["hostname"]."</option>";
	}
}
?>
</select>

