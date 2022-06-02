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
			<p><a href="tambah-info-su" class="add-news">Tambah Berita Baru</a></p>
			<p class="perintah">
				Dengan menekan tombol diatas,anda akan diarahkan untuk menambah informasi baru.
			</p>
		</div>
	</div>
	<div class="col-md-8 col-sm-8">
		<!-- kosong -->
	</div>
	<div class="col-md-12 page-backup-1">
		<p class="all-info"><i class="far fa-newspaper"></i>&nbsp;Daftar Semua Informasi</p>
		<span>Show</span>&nbsp;
		<select class="select">
			<option>10</option>
			<option>50</option>
			<option>100</option>
		</select>
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
					if (!function_exists('tampil_berita_adminsu')) {
						include 'sys/function.php';
					}
					tampil_berita_adminsu();
				?>
				<!-- <tr align="center">
					<td>Upacara Sumpah Pemuda</td>
					<td>Kegiatan sekolah</td>
					<td>10.00 , 10 maret 2018</td>
					<td>
						<a href="edit-info-su" class="btn-edit">Edit</a>
						<button class="btn-delete">Hapus</button>
					</td>
				</tr> -->
								
			<!-- </tbody>
		</table>
		<div class="text-center">
		<ul class="pagination">
			<li><a href="#"><i class="fas fa-angle-left"></i></a></li>
			<?php for ($i=1; $i <= 3 ; $i++) { ?>			
			<li><a href="#"><?php echo $i;?></a></li>		
			<?php } ?>
			<li><a href="#"><i class="fas fa-angle-right"></i></a>
			</li>
		</ul> -->
	</div>
	</div>
</div>
</body>
</html>
