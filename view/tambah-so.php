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
	<div class="col-md-9" style="margin-bottom: 16px;">
		<div class="page-backup-1">
			<p class="all-info"><i class="fa fa-plus"></i>&nbsp;Tambah Struktur Organisasi  :</p>
			<input type="text" class="form-control title-here" name="" placeholder="Judul">
		</div>
	</div>
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<textarea class="ckeditor" id="isi" name="isi"></textarea>
		<script type="text/javascript">
			CKEDITOR.replace('isi');
		</script>
	</div>
	<div class="col-md-3 side-add">
		<p class="adds-media">
			<i class="fas fa-camera"></i>&nbsp; <span>Tambah Gambar : </span>
		</p>
		<input type="file" class="form-control upload-file loking" name="">
		<button class="publish">Publish</button>
	</div>
</body>
</html>