<?php 
	session_start();

	if (isset($_GET['id'])) {
		include 'config/db.php';
		
		$id = $_GET['id'];

		$q = "SELECT * FROM jurusan WHERE id_jurusan = $id";
		$rd = $conn->query($q);

		$jumlah_jurusan = mysqli_num_rows($rd);

		if ($jumlah_jurusan > 0) {
			$data_jurusan = $rd->fetch_assoc();

			$judul = $data_jurusan['nama_jurusan'];
			$isi = $data_jurusan['deskripsi'];
			$prestasi = $data_jurusan['prestasi'];

			$_SESSION['edt_judul'] = $judul;
			$_SESSION['edt_isi'] = $isi;
			$_SESSION['edt_prestasi'] = $prestasi;

			header('location:../edit-jurusan-su?id='."$id");
		}

	}

?>