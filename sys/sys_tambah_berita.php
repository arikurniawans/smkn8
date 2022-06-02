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

			$_SESSION['judul'] = $content->judul;
			$_SESSION['isi'] = $content->isi;
			header('location:../tambah-info?pesan=Lengkapi_Berita');
			
		}else {

			$content = new content();

			$content->id_user = $_SESSION['id'];
			$content->judul = $_POST['judul'];
			$content->isi = $_POST['isi'];
			$content->tanggal = date("Y-m-d");
			$content->id_kategori = $_POST['tag'];
			$content->error = $_FILES['foto']['error'];

			if ($content->error == 4) {

				$_SESSION['judul'] = $content->judul;
				$_SESSION['isi'] = $content->isi;

				header('location:../tambah-info?pesan=Tambahkan_Foto_Berita');

			}else{
				include 'config/db.php';

				$_SESSION['judul'] = "";
				$_SESSION['isi'] = "";

				// + ID Berita
				$q_id = "SELECT id_berita FROM berita";
				$rd = $conn->query($q_id);

				$jumlah_berita = mysqli_num_rows($rd);
				$id_berita_next = $jumlah_berita + 1;

				$content->id_berita = $id_berita_next;
				$content->nama_foto = $_FILES['foto']['name'];
				$content->tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_berita/".$content->nama_foto;

				// Jika Foto Masuk
				if (move_uploaded_file($content->tmp_foto, $dir)) {
					
					$q_tambah = "INSERT INTO berita VALUES('$content->id_berita','$content->id_kategori','$content->id_user','$content->judul','$content->isi','$content->nama_foto','$content->tanggal','0')";
					$tambah = $conn->query($q_tambah);

					// LOG
					$id_user = $_SESSION['id'];
					$jam = date("h:i:sa");
        			$tgl = date("Y-m-d");

					$q_log = "INSERT INTO log VALUES('','$id_user','Tambah Berita','$jam','$tgl')";
					$log = $conn->query($q_log);

					header('location:../semua-info?pesan=Berita_Berhasil_Di_Upload');

				}else{

					echo "Gagal";

					$_SESSION['judul'] = $content->judul;
					$_SESSION['isi'] = $content->isi;

				}

			}

		}
	}
?>