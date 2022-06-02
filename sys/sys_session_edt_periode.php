<?php 
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';
		
		$id = $_GET['id'];

		$q = "SELECT * FROM periode_pemimpin WHERE id_pemimpin = $id";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if ($jumlah_berita > 0) {
			$data_berita = $rd->fetch_assoc();

			$nama = $data_berita['nama'];
			$foto = $data_berita['foto'];
			$periode = $data_berita['periode'];
			$isi = $data_berita['tagline'];

			$_SESSION['edt_nama'] = $nama;
			$_SESSION['edt_foto'] = $foto;
			$_SESSION['edt_periode'] = $periode;
			$_SESSION['edt_isi'] = $isi;

			header('location:../edit-kepemimpinan-su?id='."$id");
		}

	}

?>