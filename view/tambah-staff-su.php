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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Staff</title>
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
	<form action="sys/sys_tambah_staf_su.php" method="POST" enctype="multipart/form-data">
	<div class="page-backup-1">
		<div class="col-md-9 nama-agenda">
			<p class="all-info"><i class="fa fa-plus"></i>&nbsp;Tambah Staff Baru :</p>
			<p class="tanggal-agenda">Nama : </p>
			<input type="text" class="form-control" name="nama">
			<br>
			<p class="tanggal-agenda">Jabatan : </p>
			<input type="text" class="form-control" name="jabatan">
			<br>
			<p class="tanggal-agenda">Link Facebook : </p>
			<input type="text" class="form-control" name="fb">
			<br>
			<p class="tanggal-agenda">Link Instagram : </p>
			<input type="text" class="form-control" name="ig">
		</div>
		<div class="col-md-12 col-sm-12 page-backup-1">
			<p class="adds-media">
				<i class="fas fa-camera"></i>&nbsp; <span>Tambah Gambar Staff : </span>
			</p>
			<input type="file" class="form-control upload-file loking" name="foto">
			<button class="publish" name="tambah">Publish</button>
		</div>	
	</div>
	</form>
</body>
<script>
	$(function() { 
		$('#tgl1').datetimepicker({format : "DD/MM/YYYY"});
	});
</script> 
</body>
</html>