<?php  

	if (isset($_POST['tambah'])) {
		
		if (empty($_POST['nisn']) or empty($_POST['no_pes']) or empty($_POST['nama']) or empty($_POST['jurusan']) or empty($_POST['keterangan'])) {
			header("location:../upload-pengumuman-kelulusan?pesan=Lengkapi_Data");			
		}else{
			include 'config/db.php';

			$nisn = $_POST['nisn'];
			$nomor = $_POST['no_pes'];
			$nama = $_POST['nama'];
			$jurusan = $_POST['jurusan'];
			$keterangan = $_POST['keterangan'];

			$q = "INSERT INTO kelulusan (`nisn`, `no_pes`, `nama_pes`, `jurusan`, `keterangan`) VALUES ('$nisn', '$nomor', '$nama', '$jurusan', '$keterangan')";
			$tambah = $conn->query($q);

			header("location:../upload-pengumuman-kelulusan?pesan=Berhasil_diupload");
		}

	}

?>