<?php  
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id = $_GET['id'];

		$q_hapus = "DELETE FROM user WHERE id_user = $id";
		$hapus = $conn->query($q_hapus);

		header('location:../list-admin');
	}

?>