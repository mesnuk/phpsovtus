<?php
$config{'charset'} = 'utf-8';
$config{'default_lng'} = 'ua';
$config_host_name=$config{'host_name'};
// include_once("http://m-dutchak.zzz.com.ua/PHP/db.php");
include_once("db.php");
// include_once("../db.php");
$LastModified_unix = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['SCRIPT_FILENAME']))); 
$LastModified = gmdate("D, d M Y H:i:s \G\M\T", $LastModified_unix); 
echo "Last modified: $LastModified"."<br>";

?>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
</head>
<?php
?>
