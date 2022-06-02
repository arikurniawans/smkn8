<?php 
var_dump($_POST);
	if (isset($_POST['tambah'])) {
		
		if (empty($_POST['nama']) or empty($_POST['periode']) or empty($_POST['isi'])) {
			echo "Lengkapi data";
		}else {

			class kepemimpinan
			{
				public $nama,
					   $periode,
					   $isi,
					   $error,
					   $foto;
			}

			$orang = new kepemimpinan;

			$orang->nama = $_POST['nama'];
			$orang->periode = $_POST['periode'];
			$orang->isi = $_POST['isi'];
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
				echo "Foto Belum Dipilih";
			}else{
				$orang->nama_foto = $_FILES['foto']['name'];
				$orang->tmp_foto = $_FILES['foto']['tmp_name'];

				$dir = "../images/foto_staf/".$orang->nama_foto;

				if (move_uploaded_file($orang->tmp_foto, $dir)) {
					
					include 'config/db.php';
					$q_tambah = "INSERT INTO periode_pemimpin (`foto`, `nama`, `periode`, `tagline`) VALUES ('$orang->nama_foto', '$orang->nama', '$orang->periode', '$orang->isi');";
					$tambah = $conn->query($q_tambah);

					$q_log = "INSERT INTO log VALUES('','$id_user','Tambah Kepemimpinan','$jam','$tgl')";
					$log = $conn->query($q_log);

					header('location:../list-periode-kepsek');

				}else{

					echo "Gagal";

				}
			}

		}

	}

?>