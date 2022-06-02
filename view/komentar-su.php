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
			<p class="all-info"><i class="far fa-comment-alt"></i>&nbsp;Komentar</p>
			<p class="alert col-md-6">
				Untuk Admin,Ini adalah halaman yang menampilkan semua komentar.Anda akan diberi pilihan untuk menampilkan atau tidak menampilkan nya dalam website.(Harap tidak menampilkan Komentar yang mengandung hinaan , SARA dan lain-lain.
			</p>
			<div class="col-md-12 tabel-komentar">
				<p class="all-info"><i class="far fa-comment-alt"></i>&nbsp;Daftar Semua Komentar :</p>
				<span>Show</span>&nbsp;
				<select class="select">
					<option>10</option>
					<option>50</option>
					<option>100</option>
				</select>
				<table class="table table-bordered">
					<thead class="table-head">
						<tr align="center">
							<td>Profile</td>
							<td>Email</td>				
							<td>Nama</td>
							<td>Isi Komentar</td>
							<td>Tanggal</td>
							<td>tindakan</td>
						</tr>
					</thead>
					<tbody>
						<?php  
							if (!function_exists('tampil_terima_komen_adm_su')) {
								include 'sys/function.php';
							}
							tampil_terima_komen_adm_su();
						?>
					</tbody>
				</table>
				<!-- <div class="text-center">
					<ul class="pagination">
						<li><a href="#"><i class="fas fa-angle-left"></i></a></li>
									
							<li><a href="#"></a></li>		
						
						<li><a href="#"><i class="fas fa-angle-right"></i></a>
						</li>
					</ul>
				</div> -->
			</div>
			<!-- akhir daftar-komentar -->
		</div>
		<div class="page-backup-1">			
			<div class="col-md-12 tabel-komentar">
				<p class="all-info"><i class="fas fa-undo"></i>&nbsp;Tarik Komentar :</p>
				<span>Show</span>&nbsp;
				<select class="select">
					<option>10</option>
					<option>50</option>
					<option>100</option>
				</select>
				<table class="table table-bordered">
					<thead class="table-head">
						<tr align="center">
							<td>Profile</td>
							<td>Email</td>				
							<td>Nama</td>
							<td>Isi Komentar</td>
							<td>Tanggal</td>
							<td>tindakan</td>
						</tr>
					</thead>
					<tbody>
						<?php  
							if (!function_exists('tampil_tolak_komen_adm_su')) {
								include 'sys/function.php';
							}
							tampil_tolak_komen_adm_su();
						?>
					</tbody>
				</table>
				<!-- <div class="text-center">
					<ul class="pagination">
						<li><a href="#"><i class="fas fa-angle-left"></i></a></li>
									
							<li><a href="#"></a></li>		
						
						<li><a href="#"><i class="fas fa-angle-right"></i></a>
						</li>
					</ul>
				</div> -->
			</div>
			<!-- akhir daftar-komentar -->
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function myfunction() {
		var txt;
		if (confirm("anda yakin untuk menampilkan Komentar ini ?")) {
			alert('komentar berhasil ditampikan !');
		}else {
			alert('komentar ditolak');
		}
	}
	function sess() {
		var a;
		alert('komentar ditolak');
	}
</script>