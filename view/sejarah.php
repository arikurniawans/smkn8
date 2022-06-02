<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SEJARAH SEKOLAH - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
	<link rel="stylesheet" href="assets2/css/brpage.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/mix.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets2/js/toogle.js"></script>
	<script type="text/javascript" src="assets2/js/dropdown.js"></script>
</head>
<body>
	<?php include 'template/nav.php'; ?>
	<section class="bgimage">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="title-detail-info"><span>Sejarah </span>Sekolah</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="sejarah" class="list">Sejarah Sekolah</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid" style="margin-top:40px; padding: 0px;">
		<div class="col-md-8">
			<?php  
				include 'sys/config/db.php';

				$q ="SELECT * FROM sejarah";
				$rd = $conn->query($q);

				$data = $rd->fetch_assoc();

			?>
			<div class="col-md-12 berita" style="border-radius: 6px;">
				<div class="atass" style="padding: 18px 5px;">
					<span class="kat-berita">Sejarah Sekolah</span>
					<div class="judul-berita"><h3><?= $data['judul'] ?></h3></div>
				</div>
				<!-- gambar-berita -->
				<img src="images/<?= $data['foto'] ?>" class="img-responsive">
				<!-- gambar-beria -->
				<div class="isi-berita">
					<p align="justify">
						<!-- SMK Negeri 8 Bandar Lampung berdiri berdasarkan Surat Keputusan Bapak Walikota Bandar Lampung, Nomor : 511/14.40/HK/2014 tanggal 11 April 2014 dan menempati eks Gedung SD Jalan Pramuka Raden Imba Kusuma Kemiling Raya, Bandar Lampung yang telah melaksanakan operasional pembelajaran. Pembukaan awal tahun Pelajaran 2014/2015 menerima sebanyak 228 orang untuk 4 jurusan yaitu : RPL , MM , AK ,AP
						<br>
						<br>
						Memasuki tahun kedua 2015/2016 yang sekarang menempati eks Gedung SMPN 26 Bandar Lampung beralamat di Jalan Imam Bonjol No.52 Kemiling, Bandar Lampung 35153 menambah 1 jurusan baru yaitu : Kimia Analis, total siswa kami saat itu sebanyak 554 orang siswa dengan 16 rombongan belajar. Pada bulan januari 2016 kami menempati lokasi baru  Jalan Imam Bonjol No.52 Kemiling Raya Bandar Lampung 35153 . Dengan pelayanan yang baik kepada masyarakat serta fasilitas sekolah yang relatif tambah maju.
						<br>
						<br>
						Memasuki tahun ketiga pada Tahun Pelajaran 2017/2018 kami memiliki 1.122 orang siswa dengan 33 rombongan belajar, itupun kami telah menambah 2 Paket Keahlian baru yaitu : Kimia Industri dan Perbankan Syariah kini dengan tag line "Pendidikan Untuk Kesejahteraan Kami Berjuang dan Mengabdi untuk mendidik masyarakat untuk kesejahteraan hidupnya di masa mendatang menuju kebahagian". -->					
						<?= $data['isi'] ?>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4" style="padding: 12px;"> <?php include 'coba.php' ?></div>
	</div>
	<?php include 'template/footer.php';  ?>
	<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
</body>	
</html>
<script src="assets2/js/back-top.js"></script>