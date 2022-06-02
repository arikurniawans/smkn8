<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PERIODE KEPALA SEKOLAH - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets2/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets2/css/onepage.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/all.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets2/js/toogle.js"></script>
	<script type="text/javascript" src="assets2/js/dropdown.js"></script>
</head>
<body>
	<?php
	include 'template/nav.php';
	?>
	<section class="bgimage">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><span class="front-sp">Periode</span> Kepemimpinan</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="periode-kepala-sekolah" class="list">Periode Kepemimpinan</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid periode-kepsek">
		<div class="col-md-8 col-sm-8 col-xs-12 periode-grid">
			<ul class="timeline">
				
			<?php  

				if (!function_exists('tampil_pemimpin')) {
					include 'sys/function.php';
				}
				tampil_pemimpin();
			?>			
					
			</ul>
		</div>
			<div class="col-md-4 col-sm-4 col-xs-12" style="padding: 7px; margin-top: 17px;">
				<?php include 'coba.php'; ?>
			</div>
		</div>
		<?php include 'template/footer.php';  ?>
		<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
	</body>	
	</html>
	<script src="assets2/js/back-top.js"></script>