<?php
session_start();

	if (isset($_POST['upload_agenda'])) {
		
		if (empty($_POST['nama_agenda']) OR empty($_POST['tanggal_agenda']) OR empty($_POST['lokasi_agenda']) OR empty($_POST['deskripsi_agenda'])) {
			header('location:../semua-agenda?pesan=Lengkapi_agenda');
		}else {

			include 'config/db.php';

			$nama_agenda = $_POST['nama_agenda'];
			$tgl = explode("/", $_POST['tanggal_agenda']);
			$tanggal_agenda = $tgl[2] . '/' . $tgl[1] . '/' . $tgl[0];
			$lokasi_agenda = $_POST['lokasi_agenda'];
			$deskripsi_agenda = $_POST['deskripsi_agenda'];

			$q = "INSERT INTO agenda VALUES('','$nama_agenda','$tanggal_agenda','$lokasi_agenda','$deskripsi_agenda')";
			$tambah_agenda = $conn->query($q);

			$id_user = $_SESSION['id'];
			$jam = date("h:i:sa");
        	$tgl = date("Y-m-d");

			$q_log = "INSERT INTO log VALUES('','$id_user','Tambah Agenda','$jam','$tgl')";
			$log = $conn->query($q_log);

			header('location:../semua-agenda');
		}

	}

?>