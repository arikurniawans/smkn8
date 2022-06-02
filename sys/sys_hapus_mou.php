<?php  
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id = $_GET['id'];

		$q_hapus = "DELETE FROM mou WHERE id_mou = $id";
		$hapus = $conn->query($q_hapus);

		header('location:../daftar-mou?pesan=Kepemimpinan_Berhasil_Di_Hapus');
	}

?>