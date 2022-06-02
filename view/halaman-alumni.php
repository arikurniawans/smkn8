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
	<title>Document</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/adminsu/komensu.css">
	<link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
	<link rel="stylesheet" href="assets2/css/adminsu/tabel.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
</head>
<body>
	<?php
	include 'template/adminsu.php';
	?>
	<div class="container-fluid">
		<div class="page-backup">
			<p class="all-info"><i class="fas fa-user-graduate"></i>&nbsp;Alumni</p>
			<p class="alert col-md-4">
				Untuk Admin,Ini adalah halaman yang menampilkan semua Data Alumni.
			</p>
			<div class="col-md-12 tabel-komentar">
				<p class="all-info"><i class="fas fa-user-graduate"></i>&nbsp;Daftar Semua Alumni :</p>
				<span>Show</span>&nbsp;
				<select class="select">
					<option>10</option>
					<option>50</option>
					<option>100</option>
				</select>
				<?php  
					if (!function_exists('table_alumni')) {
						include 'sys/function_alumni.php';
					}
					table_alumni();
				?>
			</div>
		</div>
	</div>
</body>
</html>