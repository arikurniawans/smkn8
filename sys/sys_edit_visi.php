<?php  

	if (isset($_POST['edit'])) {
		
		if (empty($_POST['judul'])) {
			header("location:../halaman-visi_misi");			
		}else {

			$id = 1;
			$judul = $_POST['judul'];
			$isi = $_POST['isi'];

			$error = $_FILES['foto']['error'];

			if ($error == 4) {
				include 'config/db.php';

				$q = "UPDATE visi_misi SET `judul`='$judul', `isi`='$isi' WHERE  `id`= 1";
				$edit = $conn->query($q);

				header("location:../halaman-visi-misi");
			}else{
				$nama_foto = $_FILES['foto']['name'];
				$tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/".$nama_foto;

				if (move_uploaded_file($tmp_foto,$dir)) {
					
					include 'config/db.php';

					$q = "UPDATE visi_misi SET `foto`='$nama_foto', `judul`='$judul', `isi`='$isi' WHERE  `id`= 1";
					$edit = $conn->query($q);

					header("location:../halaman-visi-misi");

				}else{
					// header("location:../edit-kepemimpinan-su");
					var_dump($_POST);	
				}
			}
		}

	}

?>