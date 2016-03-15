<?php

//$db = mysql_connect("localhost","root",'');
	//if(!$db) {
		//die('Could not connect to db: ' . mysql_error());
	//}
	
	//select the db
	//mysql_select_db("ffinder",$db) or die('Could not select database');
	

	$conn = mysqli_connect("mysql.idhostinger.com","u670648309_devi","depzidevi","u670648309_voka");
	//check connect
	if (!soon) {
		die("connection failed: " . mysqli_connect_error());
	}
	
$hasil = "An error has occured";

function login(mysqli $con, $username,$password) //nama fungsi servis 1
{
	$result= mysqli_query($con, "SELECT username, password, nama, latitude, longitude FROM friendlist WHERE username='$username' and password=MD5('$password')") or die ('Query failed: ' . mysqli_error());
	
		$json_response= "kosong";
		
		while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
		$json_response="verified";
		}
		return $json_response;
		mysqli_close($con);
		}

	function updatePos(mysqli $con, $username, $password, $lat, $long)
	{
		$json_response = "kosong";
		
		$sqli= "UPDATE friendlist SET latitude='$lat', longitude='$long' WHERE username='$username' AND password = md5('$password')";
		
		if (mysqli_query($con, $sqli) && login ($con, $username, $password) =="verified")
	{
	 $json_response = "Record updated successfully";
	} else {
		$json_response = "Error updating record" . mysqli_error($con);
	}
		return $json_response;
			mysqli_close($con);
	}
	
	function register (mysqli $con, $nama, $username, $password, $lat, $long)
	{
		$json_response="kosong";
		
		$sqli = "INSERT INTO friendlist(username, password, nama, latitude, longitude) VALUES ('$username', md5('$password'), '$nama', '$lat', '$long')";
		
	if (mysqli_query($con, $sqli)) {
		$json_response = "sukses";
	} else {
		$json_response = "Error Insert Data COba Username Lain: " . mysqli_error($con);
	}
	
	return $json_response;
	mysqli_close($con);
	}
	
	
	
if (isset($_GET["action"]))
{
	switch ($_GET["action"])
	{
		case "login":
			if (isset($_GET["user"])&&isset($_GET["pass"]))
				$hasil = login($conn, $_GET["user"],$_GET["pass"]);
			else
				$value="Missing argument";
			break;
			
			
		case "updatepos":
			$hasil = updatePos($conn, $_GET["user"],$_GET["pass"],$_GET["lat"],$_GET["long"]);
			break;
			
		case "register":
			$hasil = register($conn, $_GET["nama"], $_GET["user"], $_GET["pass"], $_GET["lat"], $_GET["long"]);
			break;
			
			default:
				$value="error";
				break;
	}
}
exit(json_encode($hasil));
?>