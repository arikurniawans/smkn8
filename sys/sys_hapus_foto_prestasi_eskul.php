<?php  

	if (isset($_GET['id'])) {
		include 'config/db.php';

		$id = $_GET['id'];

		$q_hapus = "DELETE FROM foto_prestasi_eskul WHERE id_foto = $id";
		$hapus = $conn->query($q_hapus);

		header("location:../menu-slide-eskul?Foto_Prestasi_Berhasil_Dihapus");
	}

?>