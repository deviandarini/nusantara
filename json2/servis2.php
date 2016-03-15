<?php

function luasSegitiga($alas,$tinggi) //nama fungsi servis 1
{
	$app_info = 1/2 * $alas*$tinggi;
	return $app_info;
}

$value = "An error has occurred";

if (isset($_GET["action"]) && ($_GET["action"]=='luas'))
{
	$value = luasSegitiga($_GET["alas"],$_GET["tinggi"]);
}

//exit (json_encode)($value));
echo json_encode($value);
?>