<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/admin/admin.css">
	<link rel="stylesheet" href="assets2/css/admin/komentar.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
</head>
<body>
	<?php
	include 'template/adm-menu.php';
	?>
	<div class="container-fluid">
		<h3 class="agenda">Komentar</h3>	
		<p class="alert col-md-6">Untuk Admin,Ini adalah halaman yang menampilkan semua komentar.Anda akan diberi pilihan untuk menampilkan atau tidak menampilkan nya dalam website.(Harap tidak menampilkan Komentar yang mengandung hinaan , SARA dan lain-lain.</p>
		<div class="col-md-6"> <!-- kosong --> </div>
		<!-- daftar komentar -->
		<div class="col-md-12 tabel-komentar">
			<h3>Terima Komentar</h3>
			<table class="table table-bordered">
				<thead>
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

						if (!function_exists('tampil_terima_komen_adm')) {
							include 'sys/function.php';
						}
						tampil_terima_komen_adm();

					?>
				</tbody>
			</table>
		</div>
		<!-- akhir daftar-komentar -->
		<div class="col-md-12 tabel-komentar">
			<h3>Tarik Komentar</h3>
			<table class="table table-bordered">
				<thead>
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

						tampil_tolak_komen_adm();

					?>					
				</tbody>
			</table>
		</div>
		<!-- akhir tarik komen -->
	</div>
</body>
</html>

<style type="text/css">
.agenda {
	color: 	#000;
	font-family: calibri;
	font-size: 	25px;
}
.agenda:before {
	content: '';
	position: absolute;
	top: 24.5%;
	transform: translateX(2px);
	height: 3px;
	width: 17px;
	border-bottom: 2.5px solid #26baee;
}
.alert {
	margin-top: 3px;
	background-color: #fff;
	box-shadow: 1px 1px 20px #dedede;
}
.tabel-komentar {
	padding-left: 0px !important;
}
.img-profile {
	width: 90px;
	height: 90px;
}
.edit , .edit:active{
	background-color: #26baee;
	margin-top: 30px;
	border: none;
	padding: 6px 12px;
	color: #fff;
	border-radius: 2px;
}
.edit:hover ,.edit:focus  {
	color:#fff; 
	text-decoration: none;
	background-color: #005792;
	-webkit-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out; 
}
.delete , .delete:active , .delete:focus {
	margin-top: 30px;
	background-color: #db2d43;
	border:none;
	color:#fff; 
	border-radius: 2px;
	padding: 6px 28px;
	outline: none;
}
.delete:hover {
	background-color: #c1224f;
	-webkit-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out; 
}
</style>
<!-- <script type="text/javascript">
	function myfunction() {
		var txt;
		if (confirm("anda yakin untuk menampilkan Komentar ini ?")) {
			alert('komentar berhasil ditampikan !');
		}else {
			alert('komentar ditolak');
		}
	}
</script> -->