<?php
	session_start();
	if(ISSET($_SESSION['username']))
	{
?>
<?php
include "hub2.php";

$query = mysql_query("select * from list_cleaner", $konn);
?>


<table align="center">
	<tr>
		<td colspan=6>
		<img src="logo clean.jpg">
		</td>
    </tr>
	<tr>
		<td colspan="1" align="left">
			<a href="form2.php">Tambah</a>
		</td>
		<td colspan="6" align="right">
			<a href="logout.php">Logout</a>
		</td>
	</tr>
	
	<tr><textalign ="center">
		<td bgcolor="#fa5151" align="center">Nama &nbsp</td>
		<td bgcolor="#fa5151" align="center">Jenis Kelamin &nbsp</td>
		<td bgcolor="#fa5151" align="center">Alamat &nbsp</td>
		<td bgcolor="#fa5151" align="center">Agama &nbsp</td>
		<td bgcolor="#fa5151" align="center">No Hp &nbsp</td>
		<td bgcolor="#fa5151" align="center">Others &nbsp &nbsp</td>
	</tr>
<?php
	while ($baris = mysql_fetch_array($query)) {
		echo "<tr>
			<td>".$baris['nama_cleaner']."</td>
			<td>".$baris['jeniskel_cleaner']."</td>
			<td>".$baris['kota_cleaner']."</td>
			<td>".$baris['agama_cleaner']."</td>
			<td>".$baris['nohp_cleaner']."</td>
			<td><a href='lihat_cleaner.php?id=".$baris['id_cleaner']."'>Lihat</a> &nbsp | &nbsp
			<a href='lihat_cleaner.php?id=".$baris['id_cleaner']."'>Assign</a></td>
		";	
	}
?>

</table>
<?php 
	}
	else
	{
		header('location:loginform.php?pesan=login');
	}
?>