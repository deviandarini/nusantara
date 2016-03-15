<!DOCTYPE html>
<html>
<head>
    <title>FORM REGISTER</title>
</head>
<body>
    <form action="action2.php" method="post">
    <table border="0" align="center">
                    <tr>
						<td colspan=4>
						<center><img src="logo.jpg"><center>
						</td>
                    </tr>
					
                    <tr>
                        <td colspan=4 bgcolor="yellow">
                            FORM LIST CLEANER
                        </td>
                    </tr>
					
					<tr>
						<td>Nama
						<td>:</td>
                        <td colspan=2>
							<input type="text" name="nama" size="71" />
						</td>
                    </tr>
					
                   
                    <tr>
                        <td>Jenis Kelamin	(*)	
						<td>:</td>
                        <td colspan=2>
                        <input type="radio" name="kelamin" value="Laki-laki"> Laki-laki
						<input type="radio" name="kelamin" value="Perempuan"> Perempuan
                        </td>
                    </tr>
					
                    <tr>
						<td>Tempat/Tanggal Lahir	
						<td>:</td>
                        <td>
							<input type="text" name="tempat" size="20" />
							<input type="date" name="tl" size="10" />
						</td>
                    </tr>
					<tr>
                        <td colspan=4>Alamat Lengkap </td>
					</tr>
					<tr>
						<td>&nbsp &nbsp &nbsp Kota	
						<td>:</td>
                        <td colspan=2>
							<input type="text" name="kota" size="71" />
						</td>
                    </tr>
					<tr>
						<td>&nbsp &nbsp &nbsp Kode Pos	
						<td>:</td>
                        <td colspan=2>
							<input type="text" name="kodepos" size="71" />
						</td>
                    </tr>
					<tr>
						<td>No. Handphone
						<td>:</td>
                        <td colspan=2>
							<input type="text" name="nohp" size="71" />
						</td>
                    </tr>
						
					<tr>
                        <td>Agama	(*)	
						<td>:</td>
                        <td colspan=2>
                        <input type="radio" name="agama" value="Islam"> Islam
						<input type="radio" name="agama" value="Budha"> Budha
						<input type="radio" name="agama" value="Hindu"> Hindu
						<input type="radio" name="agama" value="KristenProtestan"> Kristen  Protestan <br>
						<input type="radio" name="agama" value="KristenKatolik">Kristen Katolik
						<input type="radio" name="agama" value=""> Lainnya.... <input type="text" name="agamalain" size="10" /> 
                        </td>
                    </tr>
					
					<tr>
						<td>Foto
						<td>:</td>
                        <td colspan=2>
							<input type="file" name="gambar" required /> 
						</td>
                    </tr>
				
									
				<tr align="center">
				<td colspan="4">
				<br>
                    <input type="submit" value="SUBMIT">
                </td>
                </tr>
				
                </tbody>
            </table>
        </form>
    </body>
</html>