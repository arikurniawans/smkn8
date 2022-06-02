<?php  
	session_start();

	if (isset($_GET['id_berita'])) {
		include 'config/db.php';

		$id_berita = $_GET['id_berita'];

		$q_hapus = "DELETE FROM berita WHERE id_berita = $id_berita";
		$hapus = $conn->query($q_hapus);

		$id_user = $_SESSION['id'];
		$jam = date("h:i:sa");
        $tgl = date("Y-m-d");

		$q_log = "INSERT INTO log VALUES('','$id_user','Hapus Berita','$jam','$tgl')";
		$log = $conn->query($q_log);

		header('location:../semua-info?pesan=Berita_Berhasil_Di_Hapus');
	}

?>