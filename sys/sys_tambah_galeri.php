<?php  

	if (isset($_POST['tambah'])) {
		
		$error = $_FILES['data']['error'];
		
		if ($error == 4) {
			header("location:../upload-galeri");
		}else {
			$tmp_data = $_FILES['data']['tmp_name'];
			$nama_data = $_FILES['data']['name'];

			$dir = "../images/foto_galeri/".$nama_data;

			if (move_uploaded_file($tmp_data, $dir)) {
					
					include 'config/db.php';

					$tgl = date("Y-m-d");

					$q_tambah = "INSERT INTO galeri VALUES ('', '$nama_data');";
					$tambah = $conn->query($q_tambah);

					header('location:../upload-galeri');

				}else{

					echo "Gagal";

				}
		}

	}

?>