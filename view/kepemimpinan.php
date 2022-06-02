<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/admin/admin.css">
	<link rel="stylesheet" href="assets2/css/admin/Kepemimpinan.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
</head>
<body>
	<?php include 'template/adm-menu.php'; ?>
	<div class="container-fluid">
		<h3 class="agenda">Kepemimpinan Sekolah</h3>	
		<br>
		<a href="tambah-guru" class="add">Tambah baru</a>
		<!-- daftar jabatan -->
		<div class="col-md-12 tabel-komentar">
			<table class="table table-bordered">
				<thead>
					<tr align="center">
						<td>Foto</td>
						<td>Nama</td>				
						<td>Jabatan</td>
						<td>Facebook</td>
						<td>Instagram</td>
						<td>tindakan</td>
					</tr>
				</thead>
				<tbody>
					<?php 
								
						if (!function_exists('tampil_pimpinan_adm')) {
							include 'sys/function.php';
						}

						tampil_pimpinan_adm();

					?>
					<!-- <tr align="center">
						<td><img src="images/book.jpg" class="img-profile"></td>
						<td>HJ.Dewi Ningsih</td>
						<td>Kepala Sekolah</td>
						<td>www.facebook.com</td>
						<td>www.instagram.com</td>
						<td> 
							<div class="dsd">
							<a href="#" class="edit">Edit</a><br>
							<button class="delete" onclick="myfunction()">Hapus</button>
						</div>
						</td>
					</tr> -->
			</tbody>
		</table>
	</div>
	<!-- akhir daftar-komentar -->
</div>
</body>
</html>

<style type="text/css">
.agenda {
	color: 	#000;
	font-family: calibri;
	font-size: 	29px;
}
.agenda:before {
	content: '';
	position: absolute;
	top: 21%;
	transform: translateX(2px);
	height: 3px;
	width: 20px;
	border-bottom: 2.7px solid #26baee;
}
@media (max-width: 767px) {
	.agenda:before {
		top: 23%;
		border-bottom: 2.7px solid #26baee;
	}
}
.tabel-komentar {
	margin-top: 17px;
	padding-left: 0px !important;
}
.img-profile {
	width: 90px;
	height: 90px;
}

.add {
	border-radius: 2px;
	margin-top: 16px;
	background-color: #011c38;
	color: #fff;
	border: none;
	padding: 9px 12px;
}
.add:hover , .add:focus{
	background-color: #26baee;
	color: #fff;
	text-decoration: none;
	transition: all 0.3s ease-in-out;
}
.dsd {
	margin-top: 3px;
}
.edit , .edit:active{
	background-color: #26baee;
	border: none;
	padding: 7px 36px;
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
	margin-top: 15px;
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
<script type="text/javascript">
	function myfunction() {
		var txt;
		if (confirm("anda yakin untuk menghapus data ini ?")) {
			alert('Data berhasil dihapus !');
		}else {
			alert('Data gagal dihapus');
		}
	}
</script>	
</body>
</html>