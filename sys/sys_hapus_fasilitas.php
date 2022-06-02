<?php  

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id = $_GET['id'];

		$q_hapus = "DELETE FROM fasilitas WHERE id = $id";
		$hapus = $conn->query($q_hapus);

		header('location:../menu-fasilitas');
	}

?>