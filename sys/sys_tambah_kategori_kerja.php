<?php  

	if (isset($_POST['upload'])) {
		
		if (!empty($_POST['kategori'])) {
			include 'config/db.php';

			$kategori = $_POST['kategori'];

			$q = "SELECT * FROM kategori_pekerjaan WHERE kategori_kerja = '$kategori'";
			$rd = $conn->query($q);

			$jumlah_kategori = mysqli_num_rows($rd);

			if ($jumlah_kategori > 0) {
				header("location:../tambah-kategori-lowongan?pesan=Kategori_Sudah_Ada");
			}else{
				
				$q = "SELECT kategori_kerja FROM kategori_pekerjaan";
				$rd = $conn->query($q);

				$cek_jumlah_kategori = mysqli_num_rows($rd);
				$id_kategori = $cek_jumlah_kategori + 1;

				//Tambah Kategori
				$q_tambah = "INSERT INTO kategori_pekerjaan VALUES('','$kategori')";
				$tambah = $conn->query($q_tambah);

				header("location:../tambah-kategori-lowongan");
			}

		}else{
			echo "Salah";
		}

	}

?>