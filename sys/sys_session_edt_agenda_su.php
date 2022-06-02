<?php 
	session_start();

	if (isset($_GET['id_agenda'])) {
		include 'config/db.php';
		
		$id_agenda = $_GET['id_agenda'];

		$q = "SELECT * FROM agenda WHERE id_agenda = $id_agenda";
		$rd = $conn->query($q);

		$jumlah_agenda = mysqli_num_rows($rd);

		if ($jumlah_agenda > 0) {
			$data_agenda = $rd->fetch_assoc();

			$judul_agenda = $data_agenda['nama_agenda'];
			$deskripsi_agenda = $data_agenda['deskripsi'];
			$lokasi_agenda = $data_agenda['lokasi'];
			$tgl_agenda = $data_agenda['tgl'];

			$_SESSION['edt_judul_agenda'] = $judul_agenda;
			$_SESSION['edt_deskripsi_agenda'] = $deskripsi_agenda;
			$_SESSION['lokasi_agenda'] = $lokasi_agenda;
			$_SESSION['tgl_agenda'] = $tgl;

			header('location:../edit-agenda-su?id_agenda='."$id_agenda");
		}

	}

?>