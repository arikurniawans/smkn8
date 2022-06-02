<?php 
	session_start(); 

	class content
	{
	  	public $id_eskul,
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
			header('location:../tambah-info-su?pesan=Lengkapi_eskul');
		}else {

			$id = $_GET['id'];

			$content = new content();

			$content->judul = $_POST['judul'];
			$content->isi = $_POST['isi'];
			$content->prestasi = $_POST['prestasi'];
			$content->error = $_FILES['foto']['error'];

			include 'config/db.php';

			if ($content->error == 4) {

				$q_edit = "UPDATE eskul SET `nama`='$content->judul', `deskripsi`='$content->isi', `prestasi`='$content->prestasi' WHERE  `id_eskul`= $id";
				$edit = $conn->query($q_edit);

				// var_dump($content);

				header('location:../semua-eskul?');

			}else{

				$_SESSION['judul'] = "";
				$_SESSION['isi'] = "";
				$_SESSION['prestasi'] = "";

				// + ID eskul
				$q_id = "SELECT id_eskul FROM eskul";
				$rd = $conn->query($q_id);

				$jumlah_eskul = mysqli_num_rows($rd);
				$id_eskul_next = $jumlah_eskul + 1;

				$content->id_eskul = $id_eskul_next;
				$content->nama_foto = $_FILES['foto']['name'];
				$content->tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto-eskul/".$content->nama_foto;

				// Jika Foto Masuk
				if (move_uploaded_file($content->tmp_foto, $dir)) {
					
					$q_edit = "UPDATE eskul SET `foto`='$content->nama_foto', `nama`='$content->judul', `deskripsi`='$content->isi', `prestasi`='$content->prestasi' WHERE  `id_eskul`= $id";
					$edit = $conn->query($q_edit);

					header('location:../semua-eskul?');

				}else{

					echo "Gagal";

					$_SESSION['judul'] = $content->judul;
					$_SESSION['isi'] = $content->isi;

				}

			}

		}
	}
?>