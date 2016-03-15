<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_GET["action"]) && isset($_GET["alas"])
	&& isset($_GET["tinggi"]) && $_GET["action"] == "luas")
{
	$app_info =
	file_get_contents('http://localhost/webserver/json2/servis2.php?action=luas&alas=' .
		$_GET["alas"]."&tinggi=".$_GET["tinggi"]
		);
		
	$app_info = json_decode($app_info, true);
	echo "hasilnya = ".$app_info;
}
?>

</body>
</html>