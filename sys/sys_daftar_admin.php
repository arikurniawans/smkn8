<?php  

	if (isset($_POST['daftar'])) {
		
		if (empty($_POST['nama']) or empty($_POST['email']) or empty($_POST['password'])) {
			header("location:../list-admin?lengkapi_data");
		}else{

			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$pw = $_POST['password'];
			$password = password_hash($pw, PASSWORD_DEFAULT);

			$error = $_FILES['foto']['error'];
			if ($error == 4) {
				header("location:../list-admin?Tambahkan_foto");	
			}else{
				include 'config/db.php';

				$nama_foto = $_FILES['foto']['name'];
				$tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/profil_admin/" . $nama_foto;
				if (move_uploaded_file($tmp_foto, $dir)) {
					$q = "INSERT INTO user VALUES('','$nama','$email','$password','$nama_foto')";
					$tambah = $conn->query($q);
					header("location:../list-admin");
				}
			}
		}

	}

?>