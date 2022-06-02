<?php  

	if (isset($_POST['edit'])) {
		
		if (empty($_POST['nama']) or empty($_POST['periode']) or empty($_POST['isi'])) {
			// header("location:../edit-kepemimpinan-su");
			var_dump($_POST);
		}else {

			$id = $_GET['id'];
			$nama = $_POST['nama'];
			$periode = $_POST['periode'];
			$isi = $_POST['isi'];

			$error = $_FILES['foto']['error'];

			if ($error == 4) {
				include 'config/db.php';

				$q = "UPDATE periode_pemimpin SET `nama`='$nama', `periode`='$periode', `tagline`='$isi' WHERE  `id_pemimpin`= $id";
				$edit = $conn->query($q);

				header("location:../list-periode-kepsek");
			}else{
				$nama_foto = $_FILES['foto']['name'];
				$tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_staf/".$nama_foto;

				if (move_uploaded_file($tmp_foto,$dir)) {
					
					include 'config/db.php';

					$q = "UPDATE periode_pemimpin SET `foto`='$nama_foto', `nama`='$nama', `periode`='$periode', `tagline`='$isi' WHERE  `id_pemimpin`= $id";
					$edit = $conn->query($q);

					header("location:../list-periode-kepsek");

				}else{
					// header("location:../edit-kepemimpinan-su");
					var_dump($_POST);	
				}
			}
		}

	}

?>