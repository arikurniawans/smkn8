<?php  

	if (isset($_POST['upload'])) {
		
		if (!empty($_POST['kategori'])) {
			include 'config/db.php';

			$kategori = $_POST['kategori'];

			$q = "SELECT * FROM tag WHERE kategori = '$kategori'";
			$rd = $conn->query($q);

			$jumlah_kategori = mysqli_num_rows($rd);

			if ($jumlah_kategori > 0) {
				// echo "Kategori Sudah Ada";
				header("location:../tambah-kategori-su?pesan=Kategori_Sudah_Ada");
			}else{
				
				$q = "SELECT kategori FROM tag";
				$rd = $conn->query($q);

				$cek_jumlah_kategori = mysqli_num_rows($rd);
				$id_kategori = $cek_jumlah_kategori + 1;

				//Tambah Kategori
				$q_tambah = "INSERT INTO tag VALUES('','$kategori')";
				$tambah = $conn->query($q_tambah);

				header("location:../tambah-kategori-su");
			}

		}else{
			echo "Salah";
		}

	}

?>