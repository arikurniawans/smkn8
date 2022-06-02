<?php 
	session_start();

	if (isset($_GET['id_berita'])) {
		include 'config/db.php';
		
		$id_berita = $_GET['id_berita'];

		$q = "SELECT judul,isi FROM berita WHERE id_berita = $id_berita";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if ($jumlah_berita > 0) {
			$data_berita = $rd->fetch_assoc();

			$judul = $data_berita['judul'];
			$isi = $data_berita['isi'];

			$_SESSION['edt_judul'] = $judul;
			$_SESSION['edt_isi'] = $isi;

			header('location:../tambah-info-su?id_berita='."$id_berita");
		}

	}

?>