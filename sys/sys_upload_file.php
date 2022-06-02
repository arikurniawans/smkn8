<?php  

	if (isset($_POST['tambah'])) {
		
		$error = $_FILES['data']['error'];
		$judul = $_POST['judul'];
		
		if ($error == 4) {
			header("location:../upload-file-su");
		}else {
			$tmp_data = $_FILES['data']['tmp_name'];
			$nama_data = $_FILES['data']['name'];

			$dir = "../file/".$nama_data;

			if (move_uploaded_file($tmp_data, $dir)) {
					
					include 'config/db.php';

					$tgl = date("Y-m-d");

					$q_tambah = "INSERT INTO `web_sekolah2`.`download` (`judul`, `file`, `tanggal`) VALUES ('$judul', '$nama_data', '$tgl')";
					$tambah = $conn->query($q_tambah);

					header('location:../upload-file-su');
					
				}else{

					echo "Gagal";

				}
		}

	}

?>