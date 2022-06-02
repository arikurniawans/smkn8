<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GALERI - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
	<link rel="stylesheet" href="assets2/css/template.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/all.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets2/js/toogle.js"></script>
	<script type="text/javascript" src="assets2/js/dropdown.js"></script>
</head>
<body>
	<?php include 'template/nav.php'; ?>
	<!--  -->
	<section class="bgimage">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2 class="title-detail-info"><span>Galeri </span>Foto</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="galeri" class="list">Galeri Foto</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid" style="margin-top: 40px;">
		<div class="jar-as">
			
			<?php  
				if (!function_exists('tampil_galeri')) {
					include 'sys/function.php';
				}
				tampil_galeri();
			?>
			
		</div>
	</div>
	<!--bottom-->
	
	
	
	<div class="" style="margin-top: 120px;">
		<?php include 'template/footer.php' ?>
	</div>
	<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
	<!--bottom -->
</body>
<script src="assets2/js/back-top.js"></script>
</html>