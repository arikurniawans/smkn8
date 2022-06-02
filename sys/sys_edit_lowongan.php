<?php  

	if (isset($_POST['upload'])) {
		
		if (empty($_POST['profesi']) or empty($_POST['industri']) or empty($_POST['link']) or empty($_POST['isi'])) {
			header("location:../tambah-lowongan-su?lengkapi_data");
		}else {

			$id_lowongan = $_GET['id_lowongan'];
			$error = $_FILES['foto']['error'];

			if ($error == 4) {
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

				include 'config/db.php';
					
				$q = "UPDATE lowongan_pekerjaan SET `profesi`='$profesi', `nama_industri`='$industri', `kategori_pekerjaan`='$kategori', `lokasi`='$lokasi', `link`='$link', `waktu_pekerjaan`='$waktu', `telepon`='$nomor', `email`='$email', `isi`='$isi' WHERE  `id_lowongan`=$id_lowongan";
				$tambah = $conn->query($q);

				header("location:../bursa-kerja?lowongan_berhasil_di_edit");
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
					
					$q = "UPDATE lowongan_pekerjaan SET `profesi`='$profesi', `nama_industri`='$industri', `foto_industri`='$nama_foto', `kategori_pekerjaan`='$kategori', `lokasi`='$lokasi', `link`='$link', `waktu_pekerjaan`='$waktu', `telepon`='$nomor', `email`='$email', `isi`='$isi' WHERE  `id_lowongan`=$id_lowongan";
					$tambah = $conn->query($q);

					header("location:../bursa-kerja?lowongan_berhasil_di_edit");
				}else{
					header("location:../tambah-lowongan-su?");
				}

			}

		}

	}

?>