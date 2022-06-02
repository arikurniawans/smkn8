<?php  

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id = $_GET['id'];

		$q_hapus = "DELETE FROM download WHERE id_download = $id";
		$hapus = $conn->query($q_hapus);

		header('location:../upload-file-su');
	}

?>