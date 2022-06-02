<?php  

	if (isset($_POST['tambah'])) {
		
		if (empty($_POST['nama'])) {
			header('location:../menu-fasilitas');
		}else {

			$error = $_FILES['foto']['error'];

			if ($error == 4) {
				header('location:../menu-fasilitas');
			}else{

				$nama = $_POST['nama'];

				$nama_foto = $_FILES['foto']['name'];
				$tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_fasilitas/".$nama_foto;

				if (move_uploaded_file($tmp_foto,$dir)) {
					
					include 'config/db.php';

					$q_tambah = "INSERT INTO fasilitas VALUES ('', '$nama', '$nama_foto');";
					$tambah = $conn->query($q_tambah);

					header('location:../menu-fasilitas');

				}else{
					header('location:../menu-fasilitas');
				}
			}

		}

	}

?>