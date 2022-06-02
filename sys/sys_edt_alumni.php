<?php  

	if (isset($_POST['tambah'])) {
		
		if (empty($_POST['nisn']) or empty($_POST['nama']) or empty($_POST['jurusan']) or empty($_POST['lulus']) or empty($_POST['status']) or empty($_POST['nomor']) or empty($_POST['email'])) {
			header("location:../daftar-login?Lengkapi_Data");
		}else {
			include 'config/db.php';

			$id = $_POST['id'];
			$nisn = $_POST['nisn'];
			$nama = $_POST['nama'];
			$jurusan = $_POST['jurusan'];
			$lulus = $_POST['lulus'];
			$status = $_POST['status'];
			$nomor = $_POST['nomor'];
			$email = $_POST['email'];
			$pw = $_POST['password'];
			
			if(isset($_POST['tampilkan'])){
			    $tampil = "ya";
			}else{
			    $tampil = "tidak";
			}

			$q = "UPDATE alumni SET `nisn`='$nisn', `nama`='$nama', `jurusan`='$jurusan', `tahun_lulus`='$lulus', `status`='$status', `nomor_telepon`='$nomor', `email`='$email', `tampilkan`='$tampil' WHERE `id_alumni`=$id";
			$edit = $conn->query($q);

			header("location:../login-alumni?Data_Berhasil_Diedit");
		}

	}

?>