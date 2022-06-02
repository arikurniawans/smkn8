<?php  

	if (isset($_POST['tambah'])) {
		
		if (empty($_POST['kategori']) or empty($_POST['isi'])) {
			header('location:../halaman-identitas?');
		}else {

			include 'config/db.php';

			$kategori = $_POST['kategori'];
			$isi = $_POST['isi'];

			$q = "INSERT INTO identitas_sekolah (`kategori`, `isi`) VALUES ('$kategori', '$isi')";
			$tambah = $conn->query($q);

			header('location:../halaman-identitas');
		}

	}

?>