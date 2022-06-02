<?php 
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';
		
		$id = $_GET['id'];

		$q = "SELECT * FROM eskul WHERE id_eskul = $id";
		$rd = $conn->query($q);

		$jumlah_eskul = mysqli_num_rows($rd);

		if ($jumlah_eskul > 0) {
			$data_eskul = $rd->fetch_assoc();

			$judul = $data_eskul['nama'];
			$isi = $data_eskul['deskripsi'];
			$prestasi = $data_eskul['prestasi'];

			$_SESSION['edt_judul'] = $judul;
			$_SESSION['edt_isi'] = $isi;
			$_SESSION['edt_prestasi'] = $prestasi;

			// var_dump($_SESSION);

			header('location:../edit-eskul?id='."$id");
		}

	}

?>