<?php
include "koneksi.php";

$hasil = "An error has occured";

function showAllAnggota() //nama fungsi servis 1
	{
	$result = mysql_query("SELECT kap.ID_ANGGOTA,kap.NIM,mahasiswa.Nama FROM
	kap,mahasiswa WHERE mahasiswa.NIM = kap.NIM") or die
	('Query failed: ' .mysql_error());
	
	$json_response = array ();
	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$row_array['id_anggota'] = $row['ID_ANGGOTA'];
		$row_array['nim'] = $row['NIM'];
		$row_array['nama'] = $row['Nama'];
		
		//push the values in the array
		array_push($json_response,$row_array);
		}
			return $json_response;
	}
	
	function getRentBookbyID($id_anggota) //nama fungsi servis 1
		{
	$result = mysql_query("SELECT pinjam.ID_ANGGOTA, mahasiswa.NAMA, buku.Judul, pinjam.TANGGAL from pinjam,mahasiswa,buku,kap WHERE mahasiswa.NIM = kap.NIM AND kap.ID_ANGGOTA = pinjam.ID_ANGGOTA AND pinjam.ID_BUKU = buku.ID_BUKU and kap.ID_ANGGOTA = '$id_anggota'")
		or die ('Query failed: ' .mysql_error());
		
		$json_response = array ();
		
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$row_array['id_anggota'] = $row['ID_ANGGOTA'];
			$row_array['nama'] = $row['Nama'];
			$row_array['tanggal_pinjam'] = $row['TANGGAL'];
			$row_array['judul_buku'] = $row['Judul'];
		}
}		
	function findAnggotaLike($keyword) //nama fungsi servis 1
	{
	$result = mysql_query("SELECT kap.ID_ANGGOTA, kap.NIM, mahasiswa.Nama FROM kap , mahasiswa WHERE
	kap.NIM = mahasiswa.NIM
	AND mahasiswa.Nama LIKE '%$keyword%'") or die
	('Query failed: ' . mysql_error ());
	
	$json_response = array ();
	
	while ($row = mysql_fetch_array ($result, MYSQL_ASSOC)) {
		$row_array['id_anggota'] = $row['ID_ANGGOTA'];
		$row_array['nim'] = $row['NIM'];
		$row_array['nama'] = $row['Nama'];
		
		//push the values in the array
		array_push($json_response, $row_array);
	}
	return $json_response;
}
if (isset ($_GET["action"]))
{	
	switch ($_GET["action"])
		{
			case "showAllAnggota":
				$hasil = showAllAnggota();
				break;
			case "getRentBookbyID":
				if (isset ($_GET["id"]))
					$hasil = getRentBookbyID($_GET["id"]);
				else
					$value = "Missing argument";
				break;
			case "findAnggotaByName":
				if (isset($_GET["id"]))
					$hasil = findAnggotaLike ($_GET["id"]);
				else
					$value = "Missing argument";
				break;
			default :
				$value = "error";
				break;
		}
	}


exit (json_encode($hasil));
?>
			
			