<?php
$db_name	= 'epiz_33518701_sovtus';
$db_host	= 'sql303.epizy.com';
$db_user	= 'epiz_33518701';
$db_pass	= '87CpNX8vmRs';


$db_server = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name");
if (!$db_server) 
        die ("db.php: Error connect to db_server = $db_host, $db_user, $db_name <br>"); 

if ($db_server) {echo "db.php: good connect to db_server = $db_host, $db_user, $db_name <br>";}

mysqli_query('SET NAMES utf8');

?>