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
	<form method="POST" action="sys/sys_edit_berita_su.php?id_berita=<?= $_GET['id_berita'] ?>" enctype="multipart/form-data">
	<div class="col-md-9" style="margin-bottom: 16px;">
		<div class="page-backup">
			<p class="all-info"><i class="far fa-edit"></i>&nbsp;Edit Berita :</p>
			<input type="text" class="form-control title-here" name="judul" value="<?= $_SESSION['edt_judul'] ?>" placeholder="Judul Berita">
		</div>
	</div>
	<div class="col-md-3"></div>
	<div class="col-md-9">
		<textarea class="ckeditor" id="isi" name="isi"><?= $_SESSION['edt_isi'] ?></textarea>
		<script type="text/javascript">
			CKEDITOR.replace('isi');
		</script>
	</div>
	<div class="col-md-3 side-add">
		<p class="add-media">
			<i class="fas fa-camera"></i>&nbsp; <span>Edit Gambar :</span>
		</p>
		<input type="file" class="form-control upload-file loking" name="foto">
		<p class="adds-media"><i class="fas fa-clipboard-list"></i>&nbsp; <span> Edit Kategori :</span> </p>
		<select name="tag" class="form-control categories">
				<?php  
					if (!function_exists('tampil_kategori_loop')) {
						include 'sys/function.php';
					}
					tampil_kategori_loop();
				?>
		</select>
		<button class="publish" name="upload">Publish</button>
	</div>
	</form>
</body>
</html>