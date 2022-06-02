<?php  

	if (isset($_POST['cari'])) {
		
		if (!empty($_POST['judul'])) {
			$judul = $_POST['judul'];
			header("location:../informasi?judul=$judul");
		}else {
			header("location:../home");
		}

	}

?>