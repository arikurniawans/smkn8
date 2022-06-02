<?php  

	if (isset($_POST['upload'])) {
		
		if (empty($_POST['nama']) or empty($_POST['alamat'])) {
			header("location:daftar-mou?Lengkapi_Data");
		}else{

			$error = $_FILES['foto']['error'];

			if ($error == 4) {
				header("location:daftar-mou?Tambahkan_Foto");
			}else{

				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
				$nama_foto = $_FILES['foto']['name'];
				$tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_mou/" . $nama_foto;
				if (move_uploaded_file($tmp_foto, $dir)) {
					include '../sys/config/db.php';

					$q = "INSERT INTO mou VALUES('','$nama_foto','$nama','$alamat')";
					$tambah = $conn->query($q);

					header("location:../daftar-mou");
				}

			}

		}

	}

?>