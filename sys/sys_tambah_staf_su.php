<?php 

	if (isset($_POST['tambah'])) {
		
		if (empty($_POST['nama']) or empty($_POST['jabatan']) or empty($_POST['fb']) or empty($_POST['ig'])) {
			echo "Lengkapi data";
		}else {

			class kepemimpinan
			{
				public $nama,
					   $jabatan,
					   $fb,
					   $ig,
					   $foto;
			}

			$orang = new kepemimpinan;

			$orang->nama = $_POST['nama'];
			$orang->jabatan = $_POST['jabatan'];
			$orang->fb = $_POST['fb'];
			$orang->ig = $_POST['ig'];
			$orang->error = $_FILES['foto']['error'];

			// echo $orang->nama;
			// echo "<br>";
			// echo $orang->jabatan;
			// echo "<br>";
			// echo $orang->fb;
			// echo "<br>";
			// echo $orang->ig;
			// echo "<br>";
			// echo $orang->error;
			// echo "<br>";

			if ($orang->error == 4) {
				echo "salah";
			}else{
				$orang->nama_foto = $_FILES['foto']['name'];
				$orang->tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_staf/".$orang->nama_foto;

				if (move_uploaded_file($orang->tmp_foto, $dir)) {
					
					include 'config/db.php';
					$q_tambah = "INSERT INTO kepemimpinan (`id_kepemimpinan`, `foto`, `nama`, `jabatan`, `facebook`, `instagram`) VALUES ('', '$orang->nama_foto', '$orang->nama', '$orang->jabatan', '$orang->fb', '$orang->ig')";
					$tambah = $conn->query($q_tambah);

					// // LOG
					$id_user = $_SESSION['id'];
					$jam = date("h:i:sa");
        			$tgl = date("Y-m-d");

					$q_log = "INSERT INTO log VALUES('','$id_user','Tambah Kepemimpinan','$jam','$tgl')";
					$log = $conn->query($q_log);

					header('location:../daftar-kepemimpinan');

				}else{

					echo "Gagal";

				}
			}

		}

	}

?>