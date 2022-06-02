<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets2/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets2/css/lew.css">
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
					<h2><span class="front-sp">Kepemimpinan</span> Sekolah</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="tabel" class="list">Kepemimpinan Sekolah</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid back-berita">
		<?php 
								
			if (!function_exists('tampil_pimpinan')) {
				include 'sys/function.php';
			}

			tampil_pimpinan();

		?>
	</div>
	
	<?php
	include 'template/footer.php';
	?>
</body>
</html>

<style>
#ig {
	width: 36px;
	height: 36px;
	color: #fff;
	font-size: 22px;
	border-radius: 50px;
	padding-top:8px;
	padding-left: 8px;
	background: #833ab4; 
	background: -webkit-linear-gradient(to top, #fcb045, #fd1d1d, #833ab4);
	background: linear-gradient(to top, #fcb045, #fd1d1d, #833ab4);
}
#fb {
	width: 36px;
	height: 36px;
	color: #fff;
	font-size: 22px;
	border-radius: 50px;
	padding-top:8px;
	padding-left: 11px;
	background: #4267b2; 
}
.back-berita {
	margin-top: 40px;
}
.backup {
	border-radius: 6px;
	box-shadow: 3px 3px 30px #dedede;
}
.img-responsive {
	border-top-left-radius: 6px;
	border-top-right-radius: 6px;
}
.post-content {
	padding: 10px 15px 19px;
}
.nama-guru {
	font-family: calibri;
	font-weight: 500;
}
.jabatan {
	font-weight: 500;
	font-size: 20px;
	color: #e74c3c;
}
.backup:hover { 
	transition: all 0.5s ease-out;
	-webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
}
</style>	
