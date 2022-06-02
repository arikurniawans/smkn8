<?php 
	session_start(); 

	class agenda
	{
		public $id_agenda,
			   $judul,
			   $isi,
			   $tgl,
			   $lokasi;
	}
	
	if (isset($_POST['upload'])) {
		if (empty($_POST['judul']) OR empty($_POST['isi']) OR empty($_POST['tanggal'])) {
			header('location:../semua-agenda-su?pesan=Lengkapi_data_agenda');
		}else {

			$id_agenda = $_GET['id_agenda'];

			$agenda = new agenda();

			$tgl = explode("-", $_POST['tanggal']);
			
			$agenda->judul = $_POST['judul'];
			$agenda->isi = $_POST['isi'];
			$agenda->tanggal = $tgl[2] . '/' . $tgl[1] . '/' . $tgl[0];
			$agenda->lokasi = $_POST['lokasi'];

			// echo $agenda->judul . "<br>";
			// echo $agenda->isi . "<br>";
			// echo $agenda->tanggal . "<br>";
			// echo $agenda->lokasi . "<br>";

				include 'config/db.php';
				
				$q_edit = "UPDATE agenda SET `nama_agenda`='$agenda->judul', `tgl`='$agenda->tanggal', `lokasi`='$agenda->lokasi', `deskripsi`='$agenda->isi' WHERE `id_agenda`= $id_agenda";
				$edit = $conn->query($q_edit);

				$_SESSION['edt_judul'] = "";
				$_SESSION['edt_isi'] = "";

				header('location:../semua-agenda-su?pesan=Berita_Berhasil_Di_Edit');

		}
	}

?>