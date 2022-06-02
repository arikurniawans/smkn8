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
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Semua Informasi</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/adminsu/informasi.css">
	<link rel="stylesheet" href="assets2/css/adminsu/komensu.css">
	<link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
</head>
<body>
	<?php include 'template/adminsu.php';?>
	<div class="page-backup">
		<div class="col-md-4 col-sm-4">  
			<p><a href="tambah-jurusan-su" class="add-news">Tambah Jurusan Baru</a></p>
			<p class="perintah">
				Dengan menekan tombol diatas,anda akan diarahkan untuk menambah Jurusan baru.
			</p>
		</div>
	</div>
	<div class="col-md-8 col-sm-8">
		<!-- kosong -->
	</div>
	<div class="col-md-12 col-sm-12 page-backup-1">
		<p class="all-info"><i class="fas fa-book"></i>&nbsp;Daftar Semua Jurusan :</p>
		<span>Show</span>&nbsp;
		<select class="select">
			<option>10</option>
			<option>50</option>
			<option>100</option>
		</select>
		<table class="table table-bordered">
			<thead class="table-head">
				<tr align="center">
					<td>Logo Jurusan</td>
					<td>Nama Jurusan</td>
					<td>tindakan</td>
				</tr>
			</thead>
			<tbody>
				
			<?php  
				if (!function_exists('tampil_jurusan_su')) {
					include 'sys/function.php';
				}
				tampil_jurusan_su();
			?>

	</div>
	<!-- akhir daftar-komentar -->
</div>
</body>
</html>
