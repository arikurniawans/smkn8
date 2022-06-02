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
	<form action="sys/sys_edit_visi.php?id=1" method="POST" enctype="multipart/form-data">
	<div class="col-md-9" style="margin-bottom: 16px;">
		<div class="page-backup-1">
			<p class="all-info"><i class="fas fa-edit"></i>&nbsp;Edit Visi Misi  :</p>
			<input type="text" class="form-control title-here" name="judul" placeholder="Judul"
			value="<?= $_SESSION['judul_visi'] ?>">
		</div>
	</div>
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<textarea class="ckeditor" id="isi" name="isi"><?= $_SESSION['isi_visi'] ?></textarea>
		<script type="text/javascript">
			CKEDITOR.replace('isi');
		</script>
	</div>
	<div class="col-md-3 side-add">
		<p class="adds-media">
			<i class="fas fa-camera"></i>&nbsp; <span>Ubah Gambar : </span>
		</p>
		<input type="file" class="form-control upload-file loking" name="foto">
		<button class="publish" name="edit">Publish</button>
	</div>
	</form>
</body>
</html>