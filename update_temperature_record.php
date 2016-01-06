<?php
include_once('config.php');
require_once('DB.php');

## DB connect
$dsn = 'pgsql://'.$database_username.':'.$database_password.'@'.$database_hostname.'/'.$database_name;
$db =& DB::connect($dsn);
$db->setFetchMode(DB_FETCHMODE_ASSOC);
## DB connect

$db->query("update switch.switch_feature set temperature = $argv[2] where hostname = '$argv[1]'");


?>
