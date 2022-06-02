<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PENGUMUMAN KELULUSAN - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
	<link rel="stylesheet" href="assets2/css/all.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/onepage.css">
	<link rel="stylesheet" href="assets2/css/tabel.css">
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
					<h2 class="title-detail-info"><span>Pengumuman </span>Kelulusan</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="pengumuman-kelulusan" class="list">Pengumuman Kelulusan</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid" style="margin-top: 70px; margin-bottom: 70px;">
		<form action="data-kelulusan" method="POST">
		<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
			<h4 class="text-center pengumuman"><i class="fas fa-user-graduate ic-graduate"></i>&nbsp;Pengumuman Kelulusan</h4>
			<br>
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn" name="cari" type="submit"><i class="fas fa-search"></i></button>
				</span>
				<input type="number" name="no_pes" min="0" class="form-control alumni-input"  placeholder="Masukkan NISN Anda...">
			</div>
		</div>
		</form>
	</div>
	<?php include'template/footer.php' ?>
</body>
</html>