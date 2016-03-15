<!DOCTYPE html>
<html>
<head>
<title>DATA ANDA</title>
</head>

<body>
    <table width="500" border="0" align="center" >
	<tr>
	<td colspan="2" align="center">
	<img src="ub.jpg" width="90" height="90" border="0">
	<td colspan="8" align="center">
		<b>
		KEMENTERIAN RISET TEKNOLOGI DAN PENDIDIKAN TINGGI<br>
		UNIVERSITAS BRAWIJAYA<br>
		Jl. Veteran Malang 65145 Indonesia,<br> 
		Telepon : +62 0341-575878, <br>
		</b>
	</td>
	</td>
	</tr>
	<tr><td></td></tr>
	<tr>
			<td colspan="10" align="center" bgcolor="#9AFE2E"><b><u>ANDA TELAH TERDAFTAR</u></b></td>
	</tr>
	<tr>
			<td colspan="4" >NIM
			<td>:</td>
			</td>
			<td colspan="8" >
			<?php echo $_POST ["nomor"];?>
			</td>
	</tr>
	<tr>
			<td colspan="4" >Nama
			<td>:</td>
			</td>
			<td colspan="8" >
			<?php echo $_POST ["nama"];?>
			</td>
	</tr>
	<tr>
			<td colspan="4">TTL	
			<td>:</td>
			</td>
            <td colspan="8">
			<?php echo $_POST ["tempat"];?> ,
			<?php echo $_POST ["tgl"];?>
			</td>
    </tr>
	<tr>
            <td colspan="4">Jenis Kelamin
		    <td>:</td>
			<td colspan="8">
				<?php echo $_POST ["kelamin"];?>
			</td>
    </tr>
	<tr>
        <td colspan="10">Alamat Lengkap </td>
	</tr>
	<tr>
			<td colspan="4">&nbsp &nbsp &nbsp Alamat	
			<td>:</td>
            <td colspan="8">
			<?php echo $_POST ["alamat"];?>
			</td>
    </tr>
	<tr>
			<td colspan="4">&nbsp &nbsp &nbsp Kode Pos	
			<td>:</td>
            <td colspan="8">
			<?php echo $_POST ["kodepos"];?>
			</td>
    </tr>
	<tr>
			<td colspan="4" >Email
			<td>:</td>
			</td>
			<td colspan="8" >
			<?php echo $_POST ["email"];?></td>
	</tr>
	
				
	</table>
	</form>
	

</body>
</html>