<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Staff</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
	<link rel="stylesheet" href="assets2/css/adminsu/informasi.css">
	<link rel="stylesheet" href="assets2/css/adminsu/agenda.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
</head>
<body>
	<?php include 'template/adminsu.php';  ?>
	<div class="page-backup-1">
		<form method="POST" enctype="multipart/form-data" action="sys/sys_edit_staff.php?id=<?= $_GET['id_kepemimpinan'] ?>">
		<div class="col-md-9 nama-agenda">
			<p class="all-info"><i class="fa fa-plus"></i>&nbsp;Edit Staff :</p>
			<p class="tanggal-agenda">Nama : </p>
			<input type="text" class="form-control" name="nama" value="<?= $_SESSION['edt_nama'] ?>">
			<br>
			<p class="tanggal-agenda">Jabatan : </p>
			<input type="text" class="form-control" name="jabatan" value="<?= $_SESSION['edt_jabatan'] ?>">
			<br>
			<p class="tanggal-agenda">Link Facebook : </p>
			<input type="text" class="form-control" name="fb" value="<?= $_SESSION['edt_facebook'] ?>">
			<br>
			<p class="tanggal-agenda">Link Instagram : </p>
			<input type="text" class="form-control" name="ig" value="<?= $_SESSION['edt_instagram'] ?>">
		</div>
		<div class="col-md-12 col-sm-12 page-backup-1">
			<p class="adds-media">
				<i class="fas fa-camera"></i>&nbsp; <span>Tambah Gambar Staff : </span>
			</p>
			<input type="file" class="form-control upload-file loking" name="foto">
			<button class="publish" name="tambah">Publish</button>
		</div>
		</form>	
	</div>
</body>
<script>
	$(function() { 
		$('#tgl1').datetimepicker({format : "DD/MM/YYYY"});
	});
</script> 
</body>
</html>