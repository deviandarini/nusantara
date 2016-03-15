<html>
<form method = "get" action ="Client.php" name="form">

<table>
<tr>
	<td>Search</td>
	<td>:</td>
	<td>
	<input type = "text" name="keyword" value="">
	</td>
	<td>
	<input type= "submit" value = "go">
	</td>
</tr>
</table>
</form>

<?php
$hasilJson;
	if(isset($_GET["keyword"]))
	{

	$hasilJson =
	file_get_contents ("http://localhost/webserver/perpus/servisDB.php?action=findAnggotaByName&id=".$_GET["keyword"]);
	
	$hasilJson = json_decode($hasilJson, true);
	
foreach($hasilJson as $field)
	{
		echo $field['id_anggota'];
		echo "<br>";
		echo $field['nim'];
		echo "<br>";
		echo $field['nama'];
		
		echo "<br>";
		echo "<br>";
		}
}	
?>
</html>