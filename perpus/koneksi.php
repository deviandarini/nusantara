<?php
$db = mysql_connect("localhost","root",'');
if (!$db){
	die('Could not connect to db: ' . mysql_error());
}
//Select the Database
mysql_select_db("perpustakaan2",$db)or die('Could not select database');
?>