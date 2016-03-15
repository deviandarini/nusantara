<?php
include "hub2.php";

if(isset($_GET['id'])){ 
	$id = $_GET['id'];
	$query = mysql_query("select * from list_cleaner where id_cleaner = $id", $konn);
	$result = mysql_fetch_assoc($query);
?>

<center>

<tr>
<td align="center">
<img src="gambar/<?=$result['foto'];?>" alt="" width="300px"><br><br>
</td></tr>

<table border="1" align="center">
					

	
	<tr>
		<td colspan=2>Nama
		<td colspan=1>:</td>
        <td colspan=9><?= $result['nama_cleaner'];?></td>
    </tr>
					
	<tr>
		<td colspan=2>Jenis Kelamin</td>
		<td colspan=1>:</td>
		<td colspan=9><?= $result['jeniskel_cleaner'];?></td>
	</tr>
	<tr>
		<td colspan=12>Tempat/Tanggal Lahir</td>
	</tr>
	<tr>
		<td colspan=2><li>Tempat</li></td>
		<td colspan=1>:</td>
		<td colspan=9><?= $result['tempat_cleaner'];?></td>
	</tr>
	<tr>
		<td colspan=2><li>Tanggal Lahir</li></td>
		<td colspan=1>:</td>
		<td colspan=9><?= $result['tanggal_cleaner'];?></td>
	</tr>
	
	<tr>
		<td colspan=12>Alamat Lengkap</td>
	</tr>
	<tr>
		<td colspan=2><li>Kota</li></td>
		<td colspan=1>:</td>
		<td colspan=9><?= $result['kota_cleaner'];?></td>
	</tr>
	<tr>
		<td colspan=2><li>Kode Pos</li></td>
		<td colspan=1>:</td>
		<td colspan=9><?= $result['kodepos_cleaner'];?></td>
	</tr>
	<tr>
		<td colspan=2>No. Handphone</td>
		<td colspan=1>:</td>
		<td colspan=9><?= $result['nohp_cleaner'];?></td>
	</tr>
	<tr>
		<td colspan=2>Agama</td>
		<td colspan=1>:</td>
		<td colspan=9><?= $result['agama_cleaner'];?></td>
	</tr>
	
	<tr>
	<td colspan=3>
	<input type="submit" value="Assign" size="20" /></td>
	<td colspan=3>
	<input type="submit" value="Delete" size="20" />
	</td>
	<td colspan=3>
	<input type="submit" value="Edit" size="20" />
	</td>
	<td colspan=3>
	<input type="submit" value="Simpan" size="20" />
	</td>
	</tr>
	
</table></center>
<?php }else{ echo "You dont have prefillage to access this pages"; } ?>