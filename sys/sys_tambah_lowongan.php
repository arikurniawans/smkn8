<?php  

	if (isset($_POST['upload'])) {
		
		if (empty($_POST['profesi']) or empty($_POST['industri']) or empty($_POST['link']) or empty($_POST['isi'])) {
			header("location:../tambah-lowongan-su?lengkapi_data");
		}else {

			$error = $_FILES['foto']['error'];

			if ($error == 4) {
				include 'config/db.php';

				$profesi = $_POST['profesi'];
				$industri = $_POST['industri'];
				$kategori = $_POST['kategori'];
				$lokasi = $_POST['lokasi'];
				$link = $_POST['link'];
				$waktu = $_POST['waktu'];
				$nomor = $_POST['nomor'];
				$email = $_POST['email'];
				$isi = $_POST['isi'];

				$tgl = date("Y-m-d");
					
					$q = "INSERT INTO lowongan_pekerjaan (`profesi`, `nama_industri`, `foto_industri`, `kategori_pekerjaan`, `lokasi`, `link`, `waktu_pekerjaan`, `telepon`, `email`, `isi`, `tanggal`) VALUES ('$profesi', '$industri', 'bkk.jpg', '$kategori', '$lokasi', '$link', '$waktu', '$nomor', '$email', '$isi', '$tgl')";
					$tambah = $conn->query($q);

					header("location:../bursa-kerja?lowongan_berhasil_di_tambah");
			}else {
				$profesi = $_POST['profesi'];
				$industri = $_POST['industri'];
				$kategori = $_POST['kategori'];
				$lokasi = $_POST['lokasi'];
				$link = $_POST['link'];
				$waktu = $_POST['waktu'];
				$nomor = $_POST['nomor'];
				$email = $_POST['email'];
				$isi = $_POST['isi'];

				$tgl = date("Y-m-d");

				$nama_foto = $_FILES['foto']['name'];
				$tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_lowongan/" . $nama_foto;
			
				if (move_uploaded_file($tmp_foto, $dir)) {
					include 'config/db.php';
					
					$q = "INSERT INTO lowongan_pekerjaan (`profesi`, `nama_industri`, `foto_industri`, `kategori_pekerjaan`, `lokasi`, `link`, `waktu_pekerjaan`, `telepon`, `email`, `isi`, `tanggal`) VALUES ('$profesi', '$industri', '$nama_foto', '$kategori', '$lokasi', '$link', '$waktu', '$nomor', '$email', '$isi', '$tgl')";
					$tambah = $conn->query($q);

					header("location:../bursa-kerja?lowongan_berhasil_di_tambah");
				}else{
					header("location:../tambah-lowongan-su?");
				}

			}

		}

	}

?>