<?php 
	session_start();

	if (isset($_GET['id_kepemimpinan'])) {
		include 'config/db.php';
		
		$id_kepemimpinan = $_GET['id_kepemimpinan'];

		$q = "SELECT nama,jabatan,facebook,instagram FROM kepemimpinan WHERE id_kepemimpinan = $id_kepemimpinan";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if ($jumlah_berita > 0) {
			$data_berita = $rd->fetch_assoc();

			$nama = $data_berita['nama'];
			$jabatan = $data_berita['jabatan'];
			$facebook = $data_berita['facebook'];
			$instagram = $data_berita['instagram'];

			$_SESSION['edt_nama'] = $nama;
			$_SESSION['edt_jabatan'] = $jabatan;
			$_SESSION['edt_facebook'] = $facebook;
			$_SESSION['edt_instagram'] = $instagram;

			header('location:../edit-kepemimpinan?id_kepemimpinan='."$id_kepemimpinan");
		}

	}

?>