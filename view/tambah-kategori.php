<?php  
	if (isset($_GET['pesan'])) {
		
		if ($_GET['pesan'] = "Kategori_Sudah_Ada") {
			echo "<script>alert('Nama Kategori Sudah Ada')</script>";
		}

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Kategori</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/admin/admin.css">
	<link rel="stylesheet" href="assets2/css/admin/komentar.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
</head>
<body>

	<?php include 'template/adm-menu.php';  ?>
	<h2 class="title-kate">Tambah Kategori Berita</h2>
	<div class="tambah-kategori">
		<div class="col-md-7">
			<p class="title-kategori">Daftar Kategori Berita : </p>
			<table class="table table-bordered">
				<thead>
					<tr align="center">
						<td>No.</td>
						<td>Nama Kategori</td>
						<td>Tindakan</td>				
					</tr>
				</thead>
				<tbody>
					<?php
						if (!function_exists('tampil_kategori_adm')) {
							include 'sys/function.php';
						}
						tampil_kategori_adm();
					?>
				</tbody>
			</table>
		</div>
		<div class="col-md-5">
			<form action="sys/sys_tambah_kategori.php" method="POST">
				<p class="title-kategori">Tambah Kategori Berita : </p>
				<input type="text" name="kategori" class="form-control">
				<button name="upload" class="btn-unggah">Tambahkan</button>
			</form>
		</div>
	</div>
</body>
</html>
<style>
.tambah-kategori {
	margin-top: 70px;
}
.title-kategori {
	font-size: 18px;
}
.title-kate {
	margin-left: 10px;
}
.title-kate:before {
	content: '';
	position: absolute;
	height: 1px;
	width: 30px;
	top:140px;
	transform: translateX(7px);
	border-bottom: 3.5px solid #26baee;
	border-radius: 2px;
}
.btn-unggah {
	background-color: #011c38;
	border: none;
	color: #fff;
	margin-top: 8px;
	padding: 7px 20px;
	border-radius: 2px;
}
.btn-unggah:hover , .btn-unggah:focus , .btn-unggah:active {
	background-color: #26baee;
	-webkit-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	transition: all 0.3s ease;
}
.form-control:focus {
	border: 1px solid #ddd;
}
.delete , .delete:active , .delete:focus {
	background-color: #db2d43;
	border:none;
	color:#fff;
	letter-spacing: 0.3px; 
	border-radius: 2px;
	padding: 4px 12px;
	outline: none;
}
.delete:hover {
	color:#fff;
	text-decoration: none;
	background-color: #c1224f;
	-webkit-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out; 
}
</style>