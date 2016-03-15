<!DOCTYPE html>
<html>
<head>
<title>ISI FORM</title>
</head>

<body>
<form action="OutputUB.php" method="post">
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
			<td colspan="10" align="center" bgcolor="yellow"><b><u>FORMULIR PENDAFTARAN</u></b></td>
	</tr>
	<tr>
			<td colspan="4" >NIM
			<td>:</td>
			</td>
			<td colspan="8" ><input type="number" name="nomor" size="50" required /></td>
	</tr>
	<tr>
			<td colspan="4" >Nama
			<td>:</td>
			</td>
			<td colspan="8" ><input type="text" name="nama" size="50" required /></td>
	</tr>
	<tr>
			<td colspan="4">TTL	
			<td>:</td>
			</td>
            <td colspan="8">
				<input type="text" name="tempat" size="20" />
				<input type="date" name="tgl" size="20" />
			</td>
    </tr>
	<tr>
            <td colspan="4">Jenis Kelamin
		    <td>:</td>
			<td colspan="8">
				<input type="radio" name="kelamin" value="Laki-laki"> Laki-laki
				<input type="radio" name="kelamin" value="Perempuan"> Perempuan
			</td>
    </tr>
	<tr>
        <td colspan="10">Alamat Lengkap </td>
	</tr>
	<tr>
			<td colspan="4">&nbsp &nbsp &nbsp Alamat	
			<td>:</td>
            <td colspan="8">
			<input type="text" name="alamat" size="50" />
			</td>
    </tr>
	<tr>
			<td colspan="4">&nbsp &nbsp &nbsp Kode Pos	
			<td>:</td>
            <td colspan="8">
			<input type="number" name="kodepos" size="50" />
			</td>
    </tr>
	<tr>
			<td colspan="4" >Email
			<td>:</td>
			</td>
			<td colspan="8" ><input type="email" name="email" size="50" required /></td>
	</tr>
	<tr>
			<td colspan="4" >Password
			<td>:</td>
			</td>
			<td colspan="8" ><input type="password" name="pass" size="50" required /></td>
	</tr>
	
	<tr align="center">
		<td colspan="8">
		<br>
            <input type="submit" value="SUBMIT">
        </td>
    </tr>
				
	</table>
	</form>
	

</body>
</html>