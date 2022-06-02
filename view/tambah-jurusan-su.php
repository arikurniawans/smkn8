<?php

  if (!function_exists('cek')) {
    include 'sys/sys_cek_login.php';
  } 
  cek_ingat();

  if (!function_exists('cek')) {
    include 'sys/sys_cek_login.php';
  } 
  cek_key();  

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/adminsu/informasi.css">
	<link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
	<script src="assets2/ckeditor/ckeditor.js"></script>
	<title>Document</title>
</head>
<body>
	<?php include 'template/adminsu.php';?>
	<form action="sys/sys_tambah_jurusan.php" method="POST" enctype="multipart/form-data">
	<div class="col-md-9" style="margin-bottom: 16px;">
		<div class="page-backup-1">
			<p class="all-info"><i class="fa fa-plus"></i>&nbsp;Tambah Jurusan Baru :</p>
			<input type="text" class="form-control title-here" name="judul" placeholder="Nama Jurusan" value="<?php if (isset($_SESSION['judul'])) {
			echo $_SESSION['judul'];
		} ?>">
		</div>
	</div>
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<textarea class="ckeditor" id="isi" name="isi"><?php if (isset($_SESSION['isi'])) {
			echo $_SESSION['isi'];
		} ?></textarea>
		<script type="text/javascript">
			CKEDITOR.replace('isi');
		</script>
		<div class="" style="margin-top: 30px;margin-bottom: 30px;">
			<p class="all-info"><i class="fa fa-plus"></i>&nbsp;Tambah Prestasi :</p>
			<textarea name="prestasi" id="" cols="30" rows="10" class="form-control"><?php if (isset($_SESSION['prestasi'])) {
			echo $_SESSION['prestasi'];
		} ?></textarea>
		<script type="text/javascript">
			CKEDITOR.replace('prestasi');
		</script>
		</div>
	</div>
	<div class="col-md-3">
		<div class="side-add">
			<p class="adds-media">
				<i class="fas fa-camera"></i>&nbsp; <span>Tambah Logo Jurusan</span>
			</p>
			<input type="file" class="form-control upload-file loking" name="foto">
			<button class="publish" name="upload">Publish</button>
		</div>
	</div>
	</form>
</body>
</html>