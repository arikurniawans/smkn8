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
	<title>Tambah Agenda</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
	<link rel="stylesheet" href="assets2/css/adminsu/agenda.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets2/css/bootstrap-datetimepicker.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
	<script src="assets2/js/moment-with-locales.js"></script>
	<script src="assets2/js/bootstrap-datetimepicker.js"></script>
</head>
<body>
	<?php include 'template/adminsu.php';  ?>
	<div class="page-backup-1">
		<form action="sys/sys_tambah_agenda_su.php" method="POST">
		<div class="col-md-9 nama-agenda">
			<p class="all-info"><i class="fa fa-plus"></i>&nbsp;Tambah Agenda Baru :</p>
			<p class="tanggal-agenda">Nama Agenda : </p>
			<input type="text" class="form-control" name="nama_agenda">
		</div>
		<div class="col-md-3 col-sm-3">
			<!-- biar saja kosong -->
		</div>
		<div class=" col-md-9 tanggal-dan-lokasi">
			<div class="col-md-4">
				<div class="form-group">
					<p class="tanggal-agenda">Tanggal Agenda : </p> 
					<div class="input-group date" id="tgl1">
						<input type="text" class="form-control" name="tanggal_agenda">
						<span class="input-group-addon"><i class="far fa-calendar-alt"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<p class="tanggal-agenda">Lokasi Agenda : </p> 
					<input type="text" class="form-control" name="lokasi_agenda">
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-3"> 
			<!-- biar saja kosong --> 
		</div>
		<div class="col-md-9 desc">
			<p class="tanggal-agenda">Deskripsi Agenda : </p>
			<textarea class="form-control" name="deskripsi_agenda"></textarea>
		</div>
		<div class="col-md-12 unggah">
			<button class="btn-unggah" name="upload_agenda">Publish</button>
		</div>	
		</form>
	</div>
</body>
<script>
	$(function() { 
		$('#tgl1').datetimepicker({format : "DD-MM-YYYY"});
	});
</script> 
</body>
</html>