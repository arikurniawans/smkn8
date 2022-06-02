<?php  

	if (isset($_POST['upload'])) {
		
		if (empty($_POST['nama']) or empty($_POST['alamat'])) {
			header("location:daftar_mou?Lengkapi_Data");
		}else{

			$id = $_GET['id'];
			$error = $_FILES['foto']['error'];

			if ($error == 4) {

				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
				
				include '../sys/config/db.php';

				$q = "UPDATE mou SET `nama`='$nama', `alamat`='$alamat' WHERE  `id_mou`= $id";
				$edit = $conn->query($q);

				header("location:../daftar-mou");

			}else{

				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];
				$nama_foto = $_FILES['foto']['name'];
				$tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_mou/" . $nama_foto;
				if (move_uploaded_file($tmp_foto, $dir)) {
					include '../sys/config/db.php';

					$q = "UPDATE mou SET `foto`='$nama_foto', `nama`='$nama', `alamat`='$alamat' WHERE  `id_mou`= $id";
					$edit = $conn->query($q);

					header("location:../daftar-mou");
				}

			}

		}

	}

?>