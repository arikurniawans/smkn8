<?php  

	if (isset($_POST['tambah'])) {
		
		$error = $_FILES['foto']['error'];

		if ($error == 4) {
			header("location:../menu-slide-utama?Tambahkan_Foto_Slider");
		}else {
		
			$nama_foto = $_FILES['foto']['name'];
			$tmp_foto = $_FILES['foto']['tmp_name'];

			$dir = "../images/foto-slider/" . $nama_foto;
			if (move_uploaded_file($tmp_foto, $dir)) {
				
				include 'config/db.php';

				$q = "INSERT INTO slider_utama VALUES('','$nama_foto')";
				$tambah = $conn->query($q);

				header("location:../menu-slide-utama?Foto_Slider_Berhasil_Ditambahkan");
			}
		}

	}

?>