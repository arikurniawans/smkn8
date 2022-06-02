<?php

	if (isset($_GET['id_kategori'])) {
		include 'config/db.php';

		$id_kategori = $_GET['id_kategori'];

		$q = "SELECT * FROM berita WHERE id_kategori = $id_kategori";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		while ($data_berita = $rd->fetch_assoc()) {
			
			$id_berita = $data_berita['id_berita'];
			$q_edit = "UPDATE berita SET `id_kategori`='0' WHERE `id_berita`='$id_berita'";
			$edit = $conn->query($q_edit);

		}

		$q_hapus = "DELETE FROM tag WHERE id_kategori = $id_kategori";
		$hapus = $conn->query($q_hapus);

		$id_user = $_SESSION['id'];
    	$jam = date("h:i:sa");
    	$tgl = date("Y-m-d");

    	$q_log = "INSERT INTO log VALUES('','$id_user','Logout','$jam','$tgl')";
    	$log = $conn->query($q_log);

    	header('location:../tambah-kategori?pesan=kategori_berhasil_dihapus');
	}

?>