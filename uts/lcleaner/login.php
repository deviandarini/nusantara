<?php
	session_start();
	include "hub2.php";
	$username	= $_GET['username'];
	$password	= $_GET['password'];
	$query		= mysql_query("SELECT * FROM `user` WHERE username='$username' and password='$password'");
	$cek		= mysql_num_rows($query);
	if($cek)
	{
		$_SESSION['username']=$username;
		header('location:list_data.php');
	}
	else
	{
		header('location:loginform.php?pesan=error');
	}
?>