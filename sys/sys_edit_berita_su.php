<?php 
	session_start(); 

	class content
	{
		public $id_user,
			   $id_berita,
			   $judul,
			   $isi,
			   $id_kategori,
			   $nama_foto,
			   $tmp_foto,
			   $error,
			   $tanggal;
	}
	
	if (isset($_POST['upload'])) {
		if (empty($_POST['judul']) OR empty($_POST['isi'])) {
			echo "string";
		}else {

			$id_berita = $_GET['id_berita'];

			$content = new content();

			$content->id_user = $_SESSION['id'];
			$content->judul = $_POST['judul'];
			$content->isi = $_POST['isi'];
			$content->tanggal = date("Y-m-d");
			$content->id_kategori = $_POST['tag'];
			$content->error = $_FILES['foto']['error'];

			if ($content->error == 4) {
				include 'config/db.php';
				
				$q_edit = "UPDATE berita SET `id_kategori`='$content->id_kategori', `judul`='$content->judul', `isi`='$content->isi' WHERE `id_berita`='$id_berita'";
				$edit = $conn->query($q_edit);

				// LOG
				$id_user = $_SESSION['id'];
				$jam = date("h:i:sa");
			    $tgl = date("Y-m-d");

				$q_log = "INSERT INTO log VALUES('','$id_user','Edit Berita','$jam','$tgl')";
				$log = $conn->query($q_log);

				$_SESSION['edt_judul'] = "";
				$_SESSION['edt_isi'] = "";

				header('location:../semua-info-su?hal=1');

			}else{
				include 'config/db.php';

				$content->nama_foto = $_FILES['foto']['name'];
				$content->tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_berita/".$content->nama_foto;

				// Jika Foto Masuk
				if (move_uploaded_file($content->tmp_foto, $dir)) {
					
					// $q_tambah = "INSERT INTO berita VALUES('$content->id_berita','$content->id_kategori','$content->id_user','$content->judul','$content->isi','$content->nama_foto','$content->tanggal','0')";
					$q_edit = "UPDATE berita SET `id_kategori`='$content->id_kategori', `judul`='$content->judul', `isi`='$content->isi', `gambar`='$content->nama_foto' WHERE `id_berita`='$id_berita'";
					$edit = $conn->query($q_edit);

					// LOG
					$id_user = $_SESSION['id'];
					$jam = date("h:i:sa");
			        $tgl = date("Y-m-d");

					$q_log = "INSERT INTO log VALUES('','$id_user','Edit Berita','$jam','$tgl')";
					$log = $conn->query($q_log);

					$_SESSION['edt_judul'] = "";
					$_SESSION['edt_isi'] = "";

					header('location:../semua-info-su?hal=1');

				}else{

					echo "Gagal";

					$_SESSION['edt_judul'] = $content->judul;
					$_SESSION['edt_isi'] = $content->isi;

				}

			}

		}
	}
?>