<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/admin/admin.css">
	<link rel="stylesheet" href="assets2/css/admin/informasi.css">
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
		<div class="col-md-4" style="padding: 0px;">
			<p><span class="post">Post</span>&nbsp;<a href="tambah-info" class="btn-add">Add New</a></p>
			<p class="clue">
				Dengan menekan tombol diatas,anda akan diarahkan untuk menambah informasi baru.
			</p>
		</div>
		<div class="col-md-12" style="padding: 0px;">
			<h2>Semua Informasi</h2>
			<table class="table table-bordered">
				<thead>
					<tr align="center">
						<td>Judul</td>
						<td>Kategori</td>				
						<td>Tanggal Unggah</td>
						<td>Tindakan</td>
					</tr>
				</thead>
				<tbody>
			<?php  
				if (!function_exists('tampil_berita_admin')) {
					include 'sys/function.php';
				}
				tampil_berita_admin();
			?>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>

<style type="text/css">
.edit , .edit:active{
	background-color: #26baee;
	padding: 6px 14px;
	color: #fff;
	border-radius: 2px;
	letter-spacing: 0.7px;
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
	/* background-color: #db2d43;
	border:none;
	color:#fff;
	letter-spacing: 0.3px; 
	border-radius: 2px;
	padding: 4px 12px;
	outline: none; */
	background-color: #db2d43;
	padding: 6px 14px;
	color: #fff;
	border-radius: 2px;
	letter-spacing: 0.7px;
}
.delete:hover {
	color: #fff;
	text-decoration: none;
	background-color: #c1224f;
	-webkit-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out; 
}
</style>
</body>
</html>