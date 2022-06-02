<?php  

	if (isset($_GET['id_lowongan'])) {
		include 'config/db.php';

		$id = $_GET['id_lowongan'];

		$q_hapus = "DELETE FROM lowongan_pekerjaan WHERE id_lowongan = $id";
		$hapus = $conn->query($q_hapus);

		header('location:../bursa-kerja');
	}

?>