<?php  

	if (isset($_POST['tambah'])) {
		
		$error = $_FILES['foto']['error'];

		if ($error == 4) {
			header("location:../menu-slide-eskul?Tambahkan_Foto_Prestasi");
		}else {
			$eskul = $_POST['eskul'];
			$nama_foto = $_FILES['foto']['name'];
			$tmp_foto = $_FILES['foto']['tmp_name'];

			$dir = "../images/foto_prestasi_eskul/" . $nama_foto;
			if (move_uploaded_file($tmp_foto, $dir)) {
				
				include 'config/db.php';

				$q = "INSERT INTO foto_prestasi_eskul VALUES('','$nama_foto','$eskul')";
				$tambah = $conn->query($q);

				header("location:../menu-slide-eskul?Foto_Prestasi_Berhasil_Ditambahkan");
			}
		}

	}

?>