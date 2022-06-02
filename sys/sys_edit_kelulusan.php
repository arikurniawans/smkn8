<?php  

	if (isset($_POST['edit'])) {
		
		if (empty($_POST['nisn']) or empty($_POST['no_pes']) or empty($_POST['nama']) or empty($_POST['jurusan']) or empty($_POST['keterangan'])) {
			header("location:../upload-pengumuman-kelulusan?pesan=Lengkapi_Data");			
		}else{
			include 'config/db.php';

			$id = $_POST['id'];
			$nisn = $_POST['nisn'];
			$nomor = $_POST['no_pes'];
			$nama = $_POST['nama'];
			$jurusan = $_POST['jurusan'];
			$keterangan = $_POST['keterangan'];

			$q = "UPDATE kelulusan SET `nisn`='$nisn', `no_pes`='$nomor', `nama_pes`='$nama', `jurusan`='$jurusan', `keterangan`='$keterangan' WHERE  `id_kelulusan`=$id";
			$edit = $conn->query($q);

			header("location:../upload-pengumuman-kelulusan?pesan=Berhasil_diedit");
		}

	}

?>