<?php  
	session_start();

	if (isset($_GET['id_kepemimpinan'])) {
		include 'config/db.php';

		$id_kepemimpinan = $_GET['id_kepemimpinan'];

		$q_hapus = "DELETE FROM kepemimpinan WHERE id_kepemimpinan = $id_kepemimpinan";
		$hapus = $conn->query($q_hapus);

		$id_user = $_SESSION['id'];
		$jam = date("h:i:sa");
        $tgl = date("Y-m-d");

		$q_log = "INSERT INTO log VALUES('','$id_user','Hapus Kepemimpinan','$jam','$tgl')";
		$log = $conn->query($q_log);

		header('location:../daftar-kepemimpinan?pesan=Kepemimpinan_Berhasil_Di_Hapus');
	}

?>