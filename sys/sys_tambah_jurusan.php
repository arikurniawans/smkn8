<?php 
	session_start(); 

	class content
	{
	  	public $id_jurusan,
			   $foto,
			   $nama,
			   $deskripsi,
			   $nama_foto,
			   $tmp_foto,
			   $error,
			   $prestasi;
	}
	
	if (isset($_POST['upload'])) {
		if (empty($_POST['judul']) OR empty($_POST['isi'])) {
			$_SESSION['judul'] = $content->judul;
			$_SESSION['isi'] = $content->isi;
			header('location:../tambah-jurusan?pesan=Lengkapi_jurusan');
		}else {

			$content = new content();

			$content->judul = $_POST['judul'];
			$content->isi = $_POST['isi'];
			$content->prestasi = $_POST['prestasi'];
			$content->error = $_FILES['foto']['error'];

			if ($content->error == 4) {

				$_SESSION['judul'] = $content->judul;
				$_SESSION['isi'] = $content->isi;
				$_SESSION['prestasi'] = $content->prestasi;

				header('location:../tambah-info-su?pesan=Tambahkan_Foto_jurusan');

			}else{
				include 'config/db.php';

				$_SESSION['judul'] = "";
				$_SESSION['isi'] = "";
				$_SESSION['prestasi'] = "";

				// + ID jurusan
				$q_id = "SELECT id_jurusan FROM jurusan";
				$rd = $conn->query($q_id);

				$jumlah_jurusan = mysqli_num_rows($rd);
				$id_jurusan_next = $jumlah_jurusan + 1;

				$content->id_jurusan = $id_jurusan_next;
				$content->nama_foto = $_FILES['foto']['name'];
				$content->tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/logo-jurusan/".$content->nama_foto;

				// Jika Foto Masuk
				if (move_uploaded_file($content->tmp_foto, $dir)) {
					
					$q_tambah = "INSERT INTO jurusan (`foto`, `nama_jurusan`, `deskripsi`, `prestasi`) VALUES ('$content->nama_foto', '$content->judul', '$content->isi', '$content->prestasi');";
					$tambah = $conn->query($q_tambah);

					if ($tambah) {
						echo "string";
					}else{
						echo "string1";
					}

					header('location:../semua-jurusan-su?hal=1');

				}else{

					echo "Gagal";

					$_SESSION['judul'] = $content->judul;
					$_SESSION['isi'] = $content->isi;

				}

			}

		}
	}
?>