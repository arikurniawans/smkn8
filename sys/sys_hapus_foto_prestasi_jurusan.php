<?php  

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id = $_GET['id'];

		$q_hapus = "DELETE FROM foto_prestasi_jurusan WHERE id_foto = $id";
		$hapus = $conn->query($q_hapus);

		header("location:../menu-slide-jurusan?Foto_Prestasi_Berhasil_Dihapus");
	}

?>