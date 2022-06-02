<?php  
	session_start();

	if (isset($_GET['id_agenda'])) {
		include 'config/db.php';

		$id_agenda = $_GET['id_agenda'];

		$q_hapus = "DELETE FROM agenda WHERE id_agenda = $id_agenda";
		$hapus = $conn->query($q_hapus);

		$id_user = $_SESSION['id'];
		$jam = date("h:i:sa");
        $tgl = date("Y-m-d");

		$q_log = "INSERT INTO log VALUES('','$id_user','Hapus agenda','$jam','$tgl')";
		$log = $conn->query($q_log);

		header('location:../semua-agenda?pesan=agenda_Berhasil_Di_Hapus');
	}

?>