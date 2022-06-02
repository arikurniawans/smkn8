<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/admin/admin.css">
	<link rel="stylesheet" href="assets2/css/admin/kepemimpinan.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
</head>
<body>
	<!--  -->
	<?php  include 'template/adm-menu.php';  ?>
	<!--  -->
	<div class="container-fluid">
		<form action="sys/sys_tambah_kepemimpinan.php" method="POST" enctype="multipart/form-data">
		<div class="col-md-9 nama-agenda">
			<h3 class="title">Tambah Staff : </h3>
			<p class="tanggal-agenda">Nama : </p>
			<input type="text" name="nama_pemimpin" class="form-control">
		</div>
		<div class="col-md-3 col-sm-3">
			<!-- biar saja kosong -->
		</div>
		<div class="col-md-9 jabatan">
			<p class="tanggal-agenda">Jabatan : </p>
			<input type="text" name="jabatan" class="form-control">
		</div>
		<div class=" col-md-9 tanggal-dan-lokasi">
			<div class="col-md-6">
				<div class="form-group">
					<p class="tanggal-agenda">Link Facebook : </p> 
					<input type="text" name="fb" class="form-control">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<p class="tanggal-agenda">Link Instagram : </p> 
					<input type="text" name="ig" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-12 unggah">
			<p><i class="fas fa-camera"></i>&nbsp;<span>Unggah Foto : </span></p>
			<input type="file" class="upload-file loking" name="foto">
			<button class="btn-unggah" name="tambah">Publish</button>
		</div>	
		</form>
	</div>
</body> 
</body>
</html>
<style>
.title {
	font-size: 30px;
	margin-left: -7px;
}
.title:before {
	content: '';
	position: absolute;
	top: 40%;
	transform: translateX(7px);
	height: 3px;
	width: 20px;
	border-bottom: 2.7px solid #26baee;
}
@media (max-width: 767px) {
	.title:before {
		top: 30%;
		border-bottom: 2.7px solid #26baee;
	}
}
.tanggal-dan-lokasi {
	margin-top: 40px;
	padding: 0px;
}
.jabatan {
	margin-top:30px;
}
.form-control:active , .form-control:focus {
	border: 1px solid #ddd;
	box-shadow: none;
}
.tanggal-agenda {
	font-family: calibri;
	font-size: 	20px;
	color: #000;
}
textarea {
	resize: none;
}
.unggah {
	margin-top: 10px;
}
.btn-unggah {
	margin-top: 15px;
	margin-bottom: 5px;
	background-color: #011c38;
	border: none;
	color: #fff;
	padding: 7px 20px;
	border-radius: 2px;
}
.btn-unggah:hover , .btn-unggah:focus , .btn-unggah:active {
	background-color: #26baee;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
</style>