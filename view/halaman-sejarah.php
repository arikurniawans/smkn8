<?php

  if (!function_exists('cek')) {
    include 'sys/sys_cek_login.php';
  } 
  cek_ingat();

  if (!function_exists('cek')) {
    include 'sys/sys_cek_login.php';
  } 
  cek_key();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Semua Informasi</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/adminsu/informasi.css">
	<link rel="stylesheet" href="assets2/css/adminsu/komensu.css">
	<link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
</head>
<body>
	<?php include 'template/adminsu.php';?>
	<div class="page-backup">
		<div class="col-md-4 col-sm-4">  
			<!-- <p><a href="tambah-sejarah-su" class="add-news">Tambah Sejarah</a></p> -->
			<p class="perintah">
				Data ini hanya dapat dibuat 1 kali , Jika Ingin Mengubah Content Hanya dapat diedit.
			</p>
		</div>
	</div>
	<div class="col-md-8 col-sm-8">
		<!-- kosong -->
	</div>
	<div class="col-md-12 col-sm-12 page-backup-1">
		<p class="all-info"><i class="fas fa-home"></i>&nbsp;Sejarah Sekolah :</p>
		<!-- <table class="table table-bordered">
			<thead class="table-head">
				<tr align="center">
					<td>Foto</td>
					<td>Judul</td>
					<td>Tanggal Unggah</td>
					<td>tindakan</td>
				</tr>
			</thead>
			<tbody>
				<tr align="center">
					<td><img src="images/hs.jpg" class="img-profile"></td>
					<td>Sejarah SMKN 8 Bandar Lampung</td>
					<td>10.00 , 10 maret 2018</td>
					<td>
						<a href="edit-sejarah-su" class="btn-edit">Edit</a>
						<button class="btn-delete">Hapus</button>
					</td>
				</tr>
			</tbody>
		</table> -->
	<!-- akhir daftar-komentar -->
	<?php  

		include 'sys/config/db.php';

		$q ="SELECT * FROM sejarah";
		$rd = $conn->query($q);

		$data = $rd->fetch_assoc();

		$_SESSION['judul_sejarah'] = $data['judul'];
		$_SESSION['isi_sejarah'] = $data['isi'];
	?>
			<div class="col-md-12 berita" style="border-radius: 6px;">
				<div class="atass" style="padding: 18px 5px;">
					<span class="kat-berita">Sejarah Sekolah</span>
					<a href="edit-sejarah-su" class="btn-edit">Edit</a>
					<div class="judul-berita"><h3><?= $data['judul'] ?></h3></div>
				</div>
				<!-- gambar-berita -->
				<img src="images/<?= $data['foto'] ?>" class="img-responsive">
				<!-- gambar-beria -->
				<div class="isi-berita">
					<!-- <p align="justify">
						SMK Negeri 8 Bandar Lampung berdiri berdasarkan Surat Keputusan Bapak Walikota Bandar Lampung, Nomor : 511/14.40/HK/2014 tanggal 11 April 2014 dan menempati eks Gedung SD Jalan Pramuka Raden Imba Kusuma Kemiling Raya, Bandar Lampung yang telah melaksanakan operasional pembelajaran. Pembukaan awal tahun Pelajaran 2014/2015 menerima sebanyak 228 orang untuk 4 jurusan yaitu : RPL , MM , AK ,AP
						<br>
						<br>
						Memasuki tahun kedua 2015/2016 yang sekarang menempati eks Gedung SMPN 26 Bandar Lampung beralamat di Jalan Imam Bonjol No.52 Kemiling, Bandar Lampung 35153 menambah 1 jurusan baru yaitu : Kimia Analis, total siswa kami saat itu sebanyak 554 orang siswa dengan 16 rombongan belajar. Pada bulan januari 2016 kami menempati lokasi baru  Jalan Imam Bonjol No.52 Kemiling Raya Bandar Lampung 35153 . Dengan pelayanan yang baik kepada masyarakat serta fasilitas sekolah yang relatif tambah maju.
						<br>
						<br>
						Memasuki tahun ketiga pada Tahun Pelajaran 2017/2018 kami memiliki 1.122 orang siswa dengan 33 rombongan belajar, itupun kami telah menambah 2 Paket Keahlian baru yaitu : Kimia Industri dan Perbankan Syariah kini dengan tag line "Pendidikan Untuk Kesejahteraan Kami Berjuang dan Mengabdi untuk mendidik masyarakat untuk kesejahteraan hidupnya di masa mendatang menuju kebahagian".					
					</p> -->
					<p><?= $data['isi'] ?></p>
				</div>
			</div>

</div>
</body>
</html>
