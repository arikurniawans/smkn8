<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Agenda</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/admin/admin.css">
	<link rel="stylesheet" href="assets2/css/admin/informasi.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets2/css/bootstrap-datetimepicker.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/moment-with-locales.js"></script>
	<script src="assets2/js/bootstrap-datetimepicker.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
</head>
<body>
	<?php include 'template/adm-menu.php';  ?>
	<?php  
		if (isset($_GET['id_agenda'])) {
			$id_agenda = $_GET['id_agenda'];
			$judul = $_SESSION['edt_judul_agenda'];
			$isi = $_SESSION['edt_deskripsi_agenda'];
			$tgl = $_SESSION['tgl_agenda'];
			$lokasi = $_SESSION['lokasi_agenda'];
	?>
	<form action="sys/sys_edit_agenda.php?id_agenda=<?= $id_agenda ?>" method="POST">
	<div class="col-md-9 nama-agenda">
		<p class="tanggal-agenda">Nama Agenda : </p>
		<input type="text" class="form-control" name="judul" value="<?= $judul ?>">
	</div>
	<div class="col-md-3 col-sm-3">
		<!-- biar saja kosong -->
	</div>
	<div class=" col-md-9 tanggal-dan-lokasi" style="margin-top: 40px;padding: 0px;">
		<div class="col-md-6">
			<div class="form-group">
				<p class="tanggal-agenda">Tanggal Agenda : </p> 
				<div class="input-group date" id="tgl">
					<input type="text" class="form-control" name="tanggal">
					<span class="input-group-addon"><i class="fas fa-calendar-alt"></i>
					</span>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<p class="tanggal-agenda">Lokasi Agenda : </p> 
				<input type="text" class="form-control" name="lokasi" value="<?= $lokasi ?>">
			</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-3"> 
		<!-- biar saja kosong --> 
	</div>
	<div class="col-md-9" style="margin-top: 	30px;">
		<p class="tanggal-agenda">Deskripsi Agenda : </p>
		<textarea class="form-control" name="isi"><?= $isi ?></textarea>
	</div>
	<div class="col-md-12 unggah">
		<button class="btn-unggah" name="upload">Publish</button>
	</div>	
	</form>
	<?php
		}
	?>
</body>
<script>
	$(function() { 
		$('#tgl').datetimepicker({format : "DD/MM/YYYY"});

	});
</script> 
</body>
</html>
<style>
.input-group-addon {
	background-color: #011c38;
	color: #fff;
	border: 1px solid #011c38;
	border-radius: 	0px;
}
.input-group-addon:hover , .input-group-addon:focus , .input-group-addon:active {
	background-color: #26baee;
	border: 1px solid #26baee;
	-webkit-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;	
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
	margin-top: 17px;
}
.btn-unggah {
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