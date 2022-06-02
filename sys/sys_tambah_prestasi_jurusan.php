<?php  

	if (isset($_POST['tambah'])) {
		
		$error = $_FILES['foto']['error'];

		if ($error == 4) {
			header("location:../menu-slide-jurusan?Tambahkan_Foto_Prestasi");
		}else {
			$jurusan = $_POST['jurusan'];
			$nama_foto = $_FILES['foto']['name'];
			$tmp_foto = $_FILES['foto']['tmp_name'];

			$dir = "../images/foto_prestasi_jurusan/" . $nama_foto;
			if (move_uploaded_file($tmp_foto, $dir)) {
				
				include 'config/db.php';

				$q = "INSERT INTO foto_prestasi_jurusan VALUES('','$nama_foto','$jurusan')";
				$tambah = $conn->query($q);

				header("location:../menu-slide-jurusan?Foto_Prestasi_Berhasil_Ditambahkan");
			}
		}

	}

?>