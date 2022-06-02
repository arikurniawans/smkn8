<?php  
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id = $_GET['id'];

		$q_hapus = "DELETE FROM identitas_sekolah WHERE id_identitas = $id";
		$hapus = $conn->query($q_hapus);

		header('location:../halaman-identitas');
	}

?>