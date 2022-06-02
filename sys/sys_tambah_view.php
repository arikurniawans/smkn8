<?php
	include 'config/db.php';

	$id = $_GET['id'];

	$q = "SELECT id_berita,dilihat FROM berita WHERE id_berita = $id";
	$rd = $conn->query($q);

	$jumlah_berita = mysqli_num_rows($rd);

	$data = $rd->fetch_assoc();
	$jumlah_view = $data['dilihat'];

	if ($jumlah_berita > 0) {

		$jumlah_view = $jumlah_view + 1;

		$q_tambah = "UPDATE berita SET dilihat = $jumlah_view WHERE id_berita = $id";
		$tambah = $conn->query($q_tambah);
		
		header("location:../detail-berita?id=$id");
	}

?>