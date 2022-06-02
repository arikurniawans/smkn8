<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BERANDA - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/macam-border.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick/slick-bkk.css">
	
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets2/js/toogle.js"></script>
	<script type="text/javascript" src="assets2/js/dropdown.js"></script>
	<script type="text/javascript" src="assets2/css/slick/slick.min.js"></script>
	<?php
	include 'template/nav.php';
		// include $_SESSION['urlroot'].'/template/nav.php'; 
	?>
</head>
<body>
	<div class="container-fluid mana">
		<?php include 'template/slider.php'; ?>
	</div>
	<!-- profile -->
	<div class="container-fluid three">
		<div class="col-md-8 col-sm-8" style="padding: 0px;">
			<div class="col-md-5 col-sm-5" style="">
				<img src="images/foto-guru/kepsek2.jpg" class="img-responsive immg">	
			</div>
			<div class="col-md-7 col-sm-7 kon">
				<h2 class="h2"> Hj. Dewi Ningsih S.Pd.,M.Pd</h2>
				<p class="lorem">Selamat datang di Portal SMK NEGERI 8 Bandar Lampung. Website ini sebagai sarana publikasi untuk memberikan Informasi dan gambaran SMK NEGERI 8 Bandar Lampung dalam melaksanakan pelayanan pendidikan sekolah menengah kejuruan .</p></div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 twoo"> 
				<?php include 'template/wid-tab.php'; ?>
			</div>
			<div class="container-fluid" style="margin-top: 17px;">
				<div class="col-md-8 col-sm-8">
					<?php include 'template/slide-jurusan.php'; ?>
				</div>
				<div class=" col-md-4 col-sm-4 file">
					<?php include 'template/wid-download.php'; ?>
				</div>
			</div>
			<div class="container-fluid">
				<div class="col-md-8 col-sm-8" style="margin-top: 37px;">
					<?php include 'template/text.php'; ?>
				</div>
				<div class="col-md-4 col-sm-4 tau">
					<?php include 'template/tautan.php' ?>
				</div>
			</div>
			<div class="container-fluid">
				<div class="col-md-8 col-sm-8" style="margin-top: 27px;">
					<?php include 'template/berita-populer.php'; ?>
				</div>
				<div class="col-md-4 col-sm-4 tag">
					<?php include 'template/tags.php'; ?>
				</div>
				<div class="col-md-4 col-sm-4" style="padding: 0;">
					<?php include'template/komen.php' ?>
				</div>
			</div>

<!-- 			<div class="container-fluid komenn" style="margin-top: 28px;">
				<div class="col-md-8 col-sm-8">
					<?php //include 'template/berita-populer.php'; ?>
				</div>
				<div class="col-md-4 col-sm-4" style="padding: 0px;">
					<?php //include 'template/komen.php'; ?>
				</div>
			</div>
		-->			
		<div class="cc">
			<?php include 'template/footer.php'; ?>
		</div>
		<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
	</body>	
	</html>
	<script src="assets2/js/back-top.js"></script>