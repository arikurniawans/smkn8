<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/jurusan.css">
	<link rel="stylesheet" href="assets2/css/all.css">
	<link rel="stylesheet" href="assets2/css/template.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick/slick-bkk.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets2/js/toogle.js"></script>
	<script type="text/javascript" src="assets2/js/dropdown.js"></script>
	<script type="text/javascript" src="assets2/css/slick/slick.min.js"></script>
</head>
<body>
	<?php include 'template/nav.php'; ?>
	<section class="bgimage">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="title-detail-info"><span>Detail </span>Ekstrakurikuler</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="detail-ekstrakurikuler" class="list">Detail Ekstrakurikuler</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<?php  

		include 'sys/config/db.php';

		$id = $_GET['id_eskul'];

		$q = "SELECT * FROM eskul WHERE id_eskul='$id'";
		$rd = $conn->query($q);

		$jumlah_eskul = mysqli_num_rows($rd);

		if ($jumlah_eskul == 1) {
			while ($data = $rd->fetch_assoc()) { ?>
				
	<div class="container full-bkk">
		<h2 class="text-center title"><?= $data['nama'] ?></h2>
		<div class="backup-1">
			<div class="col-md-4 col-sm-5">
				<img src="images/foto-eskul/<?= $data['foto'] ?>" class="img-responsive bkk-img" style="margin:0 auto;" alt="">
			</div>
			<div class="col-md-8 col-sm-7 p-bkk">
				<div align="justify" class="paragraf-bkk">
					<?= $data['deskripsi'] ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top: 30px;">
		<div class="col-md-12">
			<?php include 'template/slide-eskul.php' ?>
		</div>
	</div>
	<div class="container" style=" margin-top: 20px;">
		<div class="col-md-6"><h3 class="list-prestasi">Daftar Prestasi</h3>
			<div class="box">		
				 			
					<p class="daftar-prestasi"><?= $data['prestasi'] ?></p>
				
			</div>
		</div>
	</div>

	<?php }
		}

	?>
	<?php include 'template/footer.php';  ?>
	<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
</body>	
</html>
<script src="assets2/js/back-top.js"></script>