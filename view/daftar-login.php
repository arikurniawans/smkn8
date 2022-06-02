<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TAMBAH DATA ALUMNI - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/alumni.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets2/css/bootstrap-datetimepicker.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/moment-with-locales.js"></script>
	<script src="assets2/js/bootstrap-datetimepicker.js"></script>
</head>
<body>
<body>
	<div class="">
		<div class="container-fluid">
			<div class="col-md-12 login">
				<form action="sys/sys_daftar_alumni.php" method="POST" class="log-in">
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Nisn : </p>
						<input type="number" class="form-control oo" placeholder="Nisn" min="0" name="nisn">
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Nama lengkap : </p>
						<input type="text" class="form-control oo" placeholder="Nama Lengkap" name="nama">
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Jurusan : </p>
						<select class="form-control" name="jurusan">
						<?php  
							include 'sys/config/db.php';

							$q = "SELECT id_jurusan,nama_jurusan FROM jurusan";
							$rd = $conn->query($q);

							$jumlah = mysqli_num_rows($rd);
							if ($jumlah > 0) {
								while ($data_j = $rd->fetch_assoc()) { ?>
									<option value="<?= $data_j['id_jurusan'] ?>"><?= $data_j['nama_jurusan'] ?></option>
							<?php }
							}
						?>
						</select>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="form-group">
							<p class="name-input-2">Tahun lulus: </p> 
							<div class="input-group date" id="tgl2">
								<input type="text" class="form-control not-shadow" placeholder="Tahun lulus" name="lulus">
								<span class="input-group-addon">
									<i class="far fa-calendar-alt"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Status : </p>
						<!--<input type="text" class="form-control oo" placeholder="Status" name="status">-->
						<select class="form-control" name="status">
						    <option value="Bekerja">Bekerja</option>
						    <option value="Kuliah">Kuliah</option>
						    <option value="Berwirausaha">Berwirausaha</option>
						</select>
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Nomor Telepon : </p>
						<input type="number" class="form-control oo" placeholder="Nomor Telepon" min="0" name="nomor">
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Email : </p>
						<input type="email" class="form-control oo" placeholder="Email" name="email">
					</div>
					<!-- <div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Password : </p>
						<input type="password" class="form-control oo" placeholder="Password" name="password">
					</div> -->
					<div class="col-md-12 col-sm-12">
						<button type="submit" class="btn" name="tambah">Daftarkan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<script>
	$(function() { 
		$('#tgl2').datetimepicker({format : "YYYY"});

	});
</script>