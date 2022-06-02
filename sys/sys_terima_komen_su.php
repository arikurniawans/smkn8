<?php  

	if (isset($_GET['id_komen'])) {
		include 'config/db.php';

		$id_komen = $_GET['id_komen'];

		$q = "UPDATE komen SET `status`='diterima' WHERE `id_komen`='$id_komen'";
		$ubah = $conn->query($q);

    	header('location:../komentar-su');
	}

?>