<?php  
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id_agenda = $_GET['id'];

		$q_hapus = "DELETE FROM eskul WHERE id_eskul = $id_agenda";
		$hapus = $conn->query($q_hapus);

		header('location:../semua-eskul?pesan=agenda_Berhasil_Di_Hapus');
	}

?>