<?php
	//jika prosess ini tidak bisa, pastika versi php kalian versi 5, jika tetap tidak bisa setting php.ini cari tulisan file_uploads ubah nilainya menjadi on
	include "hub2.php";
	if(isset($_POST)){
		//initialize Form Input		
		$nama = $_POST ['nama'];
		$kelamin = $_POST ['kelamin'];
		$tempat = $_POST ['tempat'];
		$tl = $_POST ['tl'];
		$kota = $_POST ['kota'];
		$kodepos = $_POST ['kodepos'];
		$nohp = $_POST ['nohp'];
		$agama = $_POST ['agama'];

		//initialize form uploads
		$target_dir = "gambar/"; //initialize upload dirrectory
		$isUploaded = false; //declare isUpload for error handling (if u dont know about error handling, google please :p)
		$target_files = $target_dir.basename($filename = $_FILES["gambar"]["name"]); //setting up complete directory file and name 
		$fileType = pathinfo($target_files, PATHINFO_EXTENSION); //get exstension of file
		$check = getimagesize($_FILES["gambar"]["tmp_name"]);
		if($check !== false) //if check return false
		{
			$isUploaded = true; //setting upload true
		} else { //otherwise show error and set it false
			echo "File is not an image";
			$isUploaded = false;
		}

		if(file_exists($target_files)){ //check if foto exists on server folder (/gambar/) if true show error
			echo "Sorry, file already exists.";
			$isUploaded = false;
		}

		//remove command if you wanto limit file size
		/*if($_FILES["gambar"]["size"] > 500000){ //getsize of image, if image size more than 500000kb then show error
			echo = "Sorry, your file is to large";
			$isUploaded = false;
		}*/

		//remove command if you want to add handler for file exstensions, so just image file are allowed :D
		/*if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"){
			echo "Sorry, only jpg, png, jpeg file are allowed.";
			$isUploaded = false;
		}*/

		//get status error handling, if false show error, otherwise start progress
		if($isUploaded == false){
			echo "sorry, there was error while upploading your image, please try again";
		}else{
			//check if file successfull uploaded then get file name and save it to database, otherwish show error
			if(move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_files)){
				//belum ada field kodepos
				//if query insert success redirect to action2.php
				if(mysql_query("INSERT INTO list_cleaner (nama_cleaner, jeniskel_cleaner, tempat_cleaner, tanggal_cleaner, kota_cleaner, kodepos_cleaner,  nohp_cleaner, agama_cleaner, foto)".
				
				
				"VALUES ('$nama', '$kelamin', '$tempat', '$tl', '$kota', '$kodepos', '$nohp', '$agama', '$filename')") or die (mysql_error())){
					header('Location:list_data.php');
				}else{
					echo "error while saveing data";
				}
			}else{
				echo "Sorry, there was an error uploading your file.";
			}
		}

	}else{
		echo "Sorry, there was an error while saveing your form, please try again";
	}
	//untuk cek list cleaner localhost/Icleaner/list_cleaner.php
?>