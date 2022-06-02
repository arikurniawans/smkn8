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
	<script src="assets2/ckeditor/ckeditor.js"></script>
	<title>Document</title>
</head>
<body>
	<?php include 'template/adminsu.php';?>
	<div class="col-md-11" style="margin-bottom: 16px;">
		<?php  

			$id = $_GET['id_lowongan'];

			include 'sys/config/db.php';

			$q = "SELECT * FROM lowongan_pekerjaan WHERE id_lowongan = $id";
			$rd = $conn->query($q);

			$jumlah = mysqli_num_rows($rd);

			if ($jumlah > 0) {
				$data_l = $rd->fetch_assoc();
		?>
		<form action="sys/sys_edit_lowongan.php?id_lowongan=<?= $id ?>" method="POST" enctype="multipart/form-data">
		<div class="page-backup-1">
			<p class="all-info"><i class="fas fa-briefcase"></i>&nbsp;Profesi yang dibutuhkan :</p>
			<input type="text" class="form-control title-here" name="profesi" placeholder="Profesi" value="<?= $data_l['profesi'] ?>">
			<!--  -->
			<div class="col-md-4 page-backup-2">
				<p class="all-info-1"><i class="fas fa-home"></i>&nbsp;Nama Industri :</p>
				<input type="text" class="form-control title-here" name="industri" placeholder="Nama Industri" value="<?= $data_l['nama_industri'] ?>">
			</div>
			<!--  -->
			<div class="col-md-4 page-backup-2">
				<p class="all-info-1"><i class="fas fa-camera"></i>&nbsp;Foto Industri :</p>
				<input type="file" class="form-control upload-file loking" name="foto" multiple accept='image/*'>
			</div>
			<!--  -->
			<div class="col-md-4 page-backup-2">
				<p class="all-info-1"><i class="fas fa-list"></i>&nbsp;Kategori Pekerjaan :</p>
				<select class="form-control" name="kategori">
					<?php  
						include 'sys/config/db.php';

						$q = "SELECT * FROM kategori_pekerjaan";
						$rd = $conn->query($q);

						$jumlah = mysqli_num_rows($rd);
						if ($jumlah > 0) {
							while ($data_kat = $rd->fetch_assoc()) { ?>
								<option value="<?= $data_kat['id_kategori'] ?>"><?= $data_kat['kategori_kerja'] ?></option>
							<?php }
						}
					?>
				</select>
			</div>
			<!--  -->
			<div class="col-md-4 page-backup-2">
				<p class="all-info-1"><i class="fas fa-map-marker-alt"></i>&nbsp;Lokasi Industri :</p>
				<input type="text" class="form-control title-here" name="lokasi" placeholder="Lokasi Industri" value="<?= $data_l['lokasi'] ?>">
			</div>
			<!--  -->
			<div class="col-md-4 page-backup-2">
				<p class="all-info-1"><i class="fas fa-map-signs"></i>&nbsp;Sumber Lowongan :</p>
				<input type="text" class="form-control title-here" name="link" placeholder="ex: www.google.com" value="<?= $data_l['link'] ?>">
			</div>
			<!--  -->
			<div class="col-md-4 page-backup-2">
				<p class="all-info-1"><i class="far fa-clock"></i>&nbsp;Kategori Pekerjaan :</p>
				<select class="form-control" name="waktu">
					<option value="Part Time">Part Time</option>
					<option value="Full Time">Full Time</option>
				</select>
			</div>
			<!--  -->
		</div>
	</div>
	<div class="col-md-11 mb">
		<p class="all-info"><i class="far fa-address-card"></i>&nbsp;Tentang Perusahaan:</p>
		<!--  -->
		<div class="col-md-6 pa-3">
			<p class="all-info-1"><i class="fas fa-phone"></i>&nbsp;Telepon Perusahaan :</p>
			<input type="number" class="form-control title-here" name="nomor" placeholder="0895-xxxx-xxx" min="0" value="<?= $data_l['telepon'] ?>">
		</div>
		<div class="col-md-6 pa-3">
			<p class="all-info-1"><i class="far fa-envelope"></i>&nbsp;Email Perusahaan :</p>
			<input type="email" class="form-control title-here" name="email" placeholder="example@gmail.com" value="<?= $data_l['email'] ?>">
		</div>
		<!--  -->
	</div>
	<div class="col-md-11">
		<textarea class="ckeditor" id="isi" name="isi"><?= $data_l['isi'] ?></textarea>
		<script type="text/javascript">
			CKEDITOR.replace('isi');
		</script>
		<button class="publish mb" name="upload">Edit</button>
	</div>
	</form>
	<?php } ?>
</body>
</html>