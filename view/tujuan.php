<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TUJUAN - SMK NEGERI 8 BANDAR LAMPUNG</title>
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
					<h2 class="title-detail-info"><span>Tujuan</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="tujuan" class="list">Tujuan</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid" style="margin-top:40px; padding: 0px;">
		<div class="col-md-8">
			<?php  
				include 'sys/config/db.php';

				$q ="SELECT * FROM tujuan";
				$rd = $conn->query($q);

				$data = $rd->fetch_assoc();
			?>
			<div class="col-md-12 berita" style="border-radius: 6px;">
				<div class="atass" style="padding: 18px 5px;">
					<span class="kat-berita">Visi Misi</span>
					<div class="judul-berita"><h3><?= $data['judul'] ?></h3></div>
				</div>
				<!-- gambar-berita -->
				<img src="images/<?= $data['foto'] ?>" class="img-responsive">
				<!-- gambar-beria -->
				<div class="isi-berita">
					<p align="justify">
						<!-- <h3 class="tujuan">Visi : </h3>
						<ul>
							<li>Menjadi Lembaga diklat yang mampu menghasilkan lulusan yang kompeten dengan landasan penguasaan Teknologi Informasi dan berakhlak mulia.</li>
						</ul>
						<h3 class="tujuan">Misi : </h3>
						<ul>
							<li>Mengembangkan nilai dan budaya sekolah yang seluruh warganya menjunjung tinggi nilai - nilai disiplin etika dan moral.</li>
							<li>Mengembangkan lingkungan sekolah yang berwawasan lingkungan hidup dan sekolah sehat untuk memberikan rasa aman, nyaman dan menyenangkan.</li>
							<li>Menyelenggarakan pendidikan berstandar untuk menghasilkan lulusan yang kompeten dan profesional dibidangnya dengan memanfaatkan perkembangan teknologi informasi secara optimal.</li>
						</ul> -->
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