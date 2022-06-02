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
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/adminsu/informasi.css">
	<link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
	<title>Document</title>
</head>
<body>
	<?php include 'template/adminsu.php'; ?>
	<div class="col-md-6" >
		<div class="page-backup">
			<p class="all-info"><i class="fa fa-plus"></i>&nbsp;Tambah Kategori Berita :</p>
		</div>
	</div>
	<div class="set-backup" style="margin-top: 100px;">
		<div class="col-md-7 col-sm-7">
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
						include 'sys/config/db.php';

						$q = "SELECT * FROM tag ORDER BY id_kategori DESC";
						$rd = $conn->query($q);

						$jumlah = mysqli_num_rows($rd);
						if ($jumlah > 0) { $i = 1;
							while ($data = $rd->fetch_assoc()) { ?>
								<tr align="center">
									<td><?= $i; ?></td>
									<td><?= $data['kategori'] ?></td>
									<td><a href="" class="btn-delete">Delete</a></td>
								</tr>
						<?php $i++; 
							}
						}
					?>
					
				</tbody>
			</table>
		</div>
		<div class="col-md-5 col-sm-5">
		<form action="sys/sys_tambah_kategori_su.php" method="POST">
			<p class="title-kategori">Tambah Kategori Berita : </p>
			<input type="text" class="form-control" name="kategori">
			<button class="btn-unggah" name="upload">Tambahkan</button>
		</form>
		</div>
	</div>
</body>
</html>