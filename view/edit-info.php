<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/admin/admin.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
	<script src="assets2/ckeditor/ckeditor.js"></script>
	<title>Document</title>
</head>
<body>
	<?php
	include 'template/adm-menu.php';
	?>

	<div class="col-md-9" style="margin-bottom: 16px;">
		<h4>Edit Berita : </h4>
		<input type="text" class="form-control title-here" name="" placeholder="Judul">
	</div>
	<div class="col-md-3"></div>
	<div class="col-md-9 ck-write">
		<textarea class="ckeditor" id="isi" name="isi"></textarea>
		<script type="text/javascript">
			CKEDITOR.replace('isi');
		</script>
	</div>
	<div class="col-md-3 side-add">
		<p class="add-media"><i class="fas fa-camera"></i>&nbsp; <span>Edit Gambar : </span></p>
		<input type="file" class="form-control upload-file loking" name="">
		<p class="adds-media"><i class="fas fa-clipboard-list"></i>&nbsp; <span>Edit Kategori :</span> </p>
		<select class="form-control title-here">
			<option>Prestasi</option>
			<option>info PPDB</option>
			<option>Siswa</option>
		</select>
		<button class="publish">Publish</button>
	</div>
</body>
</html>