<?php
 ob_start();
 $konn = mysql_connect("localhost", "root", "") or die(mysql_error());
 mysql_select_db("pw1") or die (mysql_error());
?>