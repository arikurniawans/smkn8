<?php  

	if (isset($_POST['tambah'])) {
		
		if (empty($_POST['nisn']) or empty($_POST['nama']) or empty($_POST['jurusan']) or empty($_POST['lulus']) or empty($_POST['status']) or empty($_POST['nomor']) or empty($_POST['email'])) {
			header("location:../daftar-login?Lengkapi_Data");
		}else {
			include 'config/db.php';

			$nisn = $_POST['nisn'];
			$nama = $_POST['nama'];
			$jurusan = $_POST['jurusan'];
			$lulus = $_POST['lulus'];
			$status = $_POST['status'];
			$nomor = $_POST['nomor'];
			$email = $_POST['email'];
			$pw = $_POST['password'];
			$tam = "tidak";

			$q = "INSERT INTO alumni VALUES('','$nisn','$nama','$jurusan','$lulus','$status','$nomor','$email','$tam')";
			$daftar = $conn->query($q);

			header("location:../login-alumni?Akun_Berhasil_Dibuat");
		}

	}

?>