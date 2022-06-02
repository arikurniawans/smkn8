<?php 
	session_start(); 

	class kepemimpinan
	{
		public $id_user,
			   $id_kepemimpinan,
			   $nama,
			   $jabatan,
			   $facebook,
			   $nama_foto,
			   $tmp_foto,
			   $error,
			   $instagram;
	}
		
		if (empty($_POST['nama_pemimpin']) OR empty($_POST['jabatan']) OR empty($_POST['fb']) OR empty($_POST['ig'])) {
			header('location:../kepemimpinan?pesan=Lengkapi_Data');
		}else {

			$id_kepemimpinan = $_GET['id_kepemimpinan'];

			$kepemimpinan = new kepemimpinan();

			$kepemimpinan->id_user = $_SESSION['id'];
			$kepemimpinan->nama = $_POST['nama_pemimpin'];
			$kepemimpinan->jabatan = $_POST['jabatan'];
			$kepemimpinan->facebook = $_POST['fb'];
			$kepemimpinan->instagram = $_POST['ig'];
			$kepemimpinan->error = $_FILES['foto']['error'];

			if ($kepemimpinan->error == 4) {
				include 'config/db.php';
				
				$q_edit = "UPDATE kepemimpinan SET `nama`='$kepemimpinan->nama', `jabatan`='$kepemimpinan->jabatan', `facebook`='$kepemimpinan->facebook', `instagram`='$kepemimpinan->instagram' WHERE  `id_kepemimpinan`='$id_kepemimpinan'";
				$edit = $conn->query($q_edit);

				// LOG
				$id_user = $_SESSION['id'];
				$jam = date("h:i:sa");
			    $tgl = date("Y-m-d");

				$q_log = "INSERT INTO log VALUES('','$id_user','Edit Kepemimpinan','$jam','$tgl')";
				$log = $conn->query($q_log);

				$_SESSION['edt_judul'] = "";
				$_SESSION['edt_isi'] = "";

				header('location:../kepemimpinan?pesan=Berita_Berhasil_Di_Edit');

			}else{
				include 'config/db.php';

				$kepemimpinan->nama_foto = $_FILES['foto']['name'];
				$kepemimpinan->tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_kepemimpinan/".$kepemimpinan->nama_foto;

				// Jika Foto Masuk
				if (move_uploaded_file($kepemimpinan->tmp_foto, $dir)) {
					
					$q_edit = "UPDATE kepemimpinan SET `foto`='$kepemimpinan->nama_foto', `nama`='$kepemimpinan->nama', `jabatan`='$kepemimpinan->jabatan', `facebook`='$kepemimpinan->facebook', `instagram`='$kepemimpinan->instagram' WHERE  `id_kepemimpinan`='$id_kepemimpinan'";
					$edit = $conn->query($q_edit);

					// LOG
					$id_user = $_SESSION['id'];
					$jam = date("h:i:sa");
			        $tgl = date("Y-m-d");

					$q_log = "INSERT INTO log VALUES('','$id_user','Edit Kepemimpinan','$jam','$tgl')";
					$log = $conn->query($q_log);

					$_SESSION['edt_judul'] = "";
					$_SESSION['edt_isi'] = "";

					header('location:../kepemimpinan?pesan=Berita_Berhasil_Di_Edit');
					
				}else{

					echo "Gagal";

					$_SESSION['edt_judul'] = $kepemimpinan->judul;
					$_SESSION['edt_isi'] = $kepemimpinan->isi;

				}

			}

		}
?>