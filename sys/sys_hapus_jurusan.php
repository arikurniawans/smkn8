<?php  
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id_agenda = $_GET['id'];

		$q_hapus = "DELETE FROM jurusan WHERE id_jurusan = $id_agenda";
		$hapus = $conn->query($q_hapus);

		header('location:../semua-jurusan-su?pesan=agenda_Berhasil_Di_Hapus');
	}

?>