<html>

<form method="post" action="http://deviandarini.esy.es/FFINDER/clientLOGIN.php" name="form">
<table>

<tr>
	<td>Username</td>
	<td>:</td>
	<td><input type="text" name="user" value=""></td>
</tr>

<tr>
	<td>Password</td>
	<td>:</td>
	<td><input type="password" name="pass" value=""></td>
</tr> 

<tr>
	<td><input type="submit" value="login"></td>
</tr>

</table>
</form>

<?php
if (isset($_POST["user"]))
	{
	$hasilJson = file_get_contents("http://deviandarini.esy.es/FFINDER/servisFINDER.php?action=login&user=".$_POST["user"]."&pass=".$_POST["pass"]);
	//$hasilJson = file_get_contents("http://deviandarini.esy.es/FFINDER/servisFINDER.php?action=login&user=Budi&pass=abcde");
	$hasilJson= json_decode($hasilJson, true);

	echo $hasilJson;
	}
?>
</html>