<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DAFTAR INFORMASI - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets2/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets2/css/brpage.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets2/js/toogle.js"></script>
	<script type="text/javascript" src="assets2/js/dropdown.js"></script>
</head>
<body>
	<?php  
		if (!empty($_GET['judul'])) {	
			$tulisan = "Cari";
			$tulisan2 = $_GET['judul'];
		}elseif (!empty($_GET['kategori'])) {
			$tulisan = "Kategori";
			$tulisan2 = "Kategori";						
		}else {
			$tulisan = "Semua";
			$tulisan2 = "Semua Informasi";
		}
	?>
	<?php
	include 'template/nav.php';
	?>
	<section class="bgimage">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><span class="front-sp"><?= $tulisan ?></span> Informasi</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="informasi" class="list"><?= $tulisan2 ?></a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid back-berita" >
		<div class="col-md-8 col-sm-7">
				
				<!-- <div class="col-md-12 berita">
					<span class="kat-berita">Informasi</span>
					<a href ="#" class="judul-berita"><h3>Peringatan Hari Pendidikan Nasional</h3></a>
					<p class="list-berita">
						<i class="fa fa-user-alt"></i>&nbsp; <span>Admin</span>&nbsp;
						<i class="far fa-calendar-alt"></i>&nbsp; <span>Selasa, 02 Juni 2018</span>
							&nbsp;<i class="far fa-eye"></i>&nbsp;<span>100 pembaca</span>
						</p>
						<p class="isi-berita">
							Ing ngarsa sung tuladha (Di depan menjadi teladan) Ing madya mangun karsa (Di tengah membangun kemauan/inisiatif) Tut wuri handayani..
						</p>
						<a href="detail-informasi" class="read-more">Baca Selengkapnya</a>
					</div> -->
			
			<?php  
				if (!empty($_GET['judul'])) {
					
					if (!function_exists('cari_berita')) {
						include 'sys/function.php';
					}

					$judul = $_GET['judul'];
					cari_berita($judul);

				}elseif (!empty($_GET['kategori'])) {
					
					if (!function_exists('berita_kategori')) {
						include 'sys/function.php';
					}

					$kategori = $_GET['kategori'];
					berita_kategori($kategori);

				}else {

					if (!function_exists('Tampil_Berita')) {
						include 'sys/function.php';
					}

					Tampil_Berita();

				}
			?>

				<!-- <div class="pagi-nation text-center">
					<a href=""><i class="fas fa-chevron-left left-icon"></i></a>
					<a href=""><i class="fas fa-chevron-right right-icon"></i></a>
				</div> -->
			</div>
			<div class="col-md-4 col-sm-5" style="padding: 12px; margin-top: -4px;">
				<?php  include 'coba.php';?>
			</div>
		</div>
		<?php include 'template/footer.php';  ?>
		<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
	</body>	
	</html>
	<script src="assets2/js/back-top.js"></script>