<?php  

	if (isset($_POST['cari'])) {
		
		$nama = $_POST['nama'];

		header("location:../alumni?nama=".$nama);

	}

?>