<?php  
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id_agenda = $_GET['id'];

		$q_hapus = "DELETE FROM agenda WHERE id_agenda = $id_agenda";
		$hapus = $conn->query($q_hapus);

		header('location:../semua-agenda-su?pesan=agenda_Berhasil_Di_Hapus');
	}

?>