<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Struktur Organisasi</title>
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
			<p><a href="tambah-so" class="add-news">Tambah Struktur Organisasi</a></p>
			<p class="perintah">
				Data ini hanya dapat dibuat 1 kali , Jika Ingin Mengubah Content Hanya dapat diedit.
			</p>
		</div>
	</div>
	<div class="col-md-8 col-sm-8">
		<!-- kosong -->
	</div>
	<div class="col-md-12 col-sm-12 page-backup-1">
		<p class="all-info"><i class="fas fa-home"></i>&nbsp;Struktur Organisasi Sekolah :</p>
		<table class="table table-bordered">
			<thead class="table-head">
				<tr align="center">
					<td>Foto</td>
					<td>Judul</td>
					<td>Tanggal Unggah</td>
					<td>tindakan</td>
				</tr>
			</thead>
			<tbody>
				<tr align="center">
					<td><img src="images/hs.jpg" class="img-profile"></td>
					<td>Struktur Organisasi SMKN 8 Bandar Lampung</td>
					<td>10.00 , 10 maret 2018</td>
					<td>
						<a href="edit-so" class="btn-edit">Edit</a>
						<button class="btn-delete">Hapus</button>
					</td>
				</tr>
			</tbody>
		</table>
	<!-- akhir daftar-komentar -->
</div>
</body>
</html>