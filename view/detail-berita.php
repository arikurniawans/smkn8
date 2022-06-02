<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DETAIL INFORMASI - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
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
					<h2>Informasi</h2>
					<ol class="breadcrumb text-center">
						<li><a href="#" class="list">Beranda</a></li>
						<li><a href="#" class="list">Detail Berita</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid" style="margin-top:40px; padding: 0px;">
		<div class="col-md-8">
			<?php  
				if (!empty($_GET['id'])) {

					if (!function_exists('detail_berita')) {
						include 'sys/function.php';
					}

					$id = $_GET['id'];

					detail_berita($id);
			?>
			
			<?php
				}
			?>
			
		</div>
		<div class="col-md-4"> <?php  include_once 'template/wid-tab.php'; ?></div>
	</div>
	<?php  include 'template/footer.php'; ?>
</body>
</html>
