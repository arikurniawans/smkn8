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
			<p><a href="tambah-eskul" class="add-news">Tambah Ekstrakurikuler Baru</a></p>
			<p class="perintah">
				Dengan menekan tombol diatas,anda akan diarahkan untuk menambah Ekstrakurikuler baru.
			</p>
		</div>
	</div>
	<div class="col-md-8 col-sm-8">
		<!-- kosong -->
	</div>
	<div class="col-md-12 col-sm-12 page-backup-1">
		<p class="all-info"><i class="fa fa-users"></i>&nbsp;Daftar Semua Ekstrakurikuler :</p>
		<span>Show</span>&nbsp;
		<select class="select">
			<option>10</option>
			<option>50</option>
			<option>100</option>
		</select>
		<table class="table table-bordered">
			<thead class="table-head">
				<tr align="center">
					<td>Foto Ekstrakurikuler</td>
					<td>Nama Ekstrakurikuler</td>
					<td>tindakan</td>
				</tr>
			</thead>
			<tbody>
				<!-- <tr align="center">
					<td><img src="images/foto-eskul/jambore.jpg" class="img-fasilitas"></td>
					<td>Pramuka</td>
					<td>10.00 , 10 maret 2018</td>
					<td>
						<a href="edit-eskul" class="btn-edit">Edit</a>
						<button class="btn-delete">Hapus</button>
					</td>
				</tr> -->
				<?php  
				if (!function_exists('tampil_eskul_su')) {
					include 'sys/function.php';
				}
				tampil_eskul_su();
			?>
			
	<!-- akhir daftar-komentar -->
</div>
</body>
</html>
