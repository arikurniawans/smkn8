<?php  
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id = $_GET['id'];

		$q_hapus = "DELETE FROM periode_pemimpin WHERE id_pemimpin = $id";
		$hapus = $conn->query($q_hapus);

		header('location:../list-periode-kepsek?pesan=Kepemimpinan_Berhasil_Di_Hapus');
	}

?>