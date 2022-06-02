<?php  
	session_start();

	if (isset($_GET['id_komen'])) {
		include 'config/db.php';

		$id_komen = $_GET['id_komen'];

		$q = "UPDATE komen SET `status`='diterima' WHERE `id_komen`='$id_komen'";
		$ubah = $conn->query($q);

		$id_user = $_SESSION['id'];
    	$jam = date("h:i:sa");
    	$tgl = date("Y-m-d");

    	$q_log = "INSERT INTO log VALUES('','$id_user','Terima Komentar','$jam','$tgl')";
    	$log = $conn->query($q_log);

    	header('location:../komen');
	}

?>