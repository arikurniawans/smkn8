<?php 

	if (isset($_POST['ubah'])) {
		
		if (empty($_POST['nisn']) or empty($_POST['password'])) {
			header("location:login-alumni?pesan=Lengkapi_Nisn_Dan_Password");
		}else{

			$nisn = $_POST['nisn'];
			$password = $_POST['password'];

			include 'sys/config/db.php';

			$q = "SELECT * FROM alumni WHERE nisn=$nisn";
		    $rd = $conn->query($q);

      		$jumlah_user = mysqli_num_rows($rd);
      		$data_user = $rd->fetch_assoc();

      		if ($jumlah_user == 1) {

      			if ($password == $data_user['email']) { 
      		?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EDIT DATA ALUMNI - SMK NEGERI 8 BANDAR LAMPUNG</title>
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
				<form action="sys/sys_edt_alumni.php" method="POST" class="log-in">
					<input type="hidden" name="id" value="<?= $data_user['id_alumni'] ?>">
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Nisn : </p>
						<input type="number" class="form-control oo" placeholder="Nisn" min="0" name="nisn" value="<?= $data_user['nisn'] ?>">
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Nama lengkap : </p>
						<input type="text" class="form-control oo" placeholder="Nama Lengkap" name="nama" value="<?= $data_user['nama'] ?>">
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
								<input type="text" class="form-control not-shadow" placeholder="Tahun lulus" name="lulus" value="<?= $data_user['tahun_lulus'] ?>">
								<span class="input-group-addon">
									<i class="far fa-calendar-alt"></i>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Status : </p>
						<!--<input type="text" class="form-control oo" placeholder="Status" name="status" value="">-->
						<select class="form-control" name="status">
						    <option value="<?= $data_user['status'] ?>"><?= $data_user['status'] ?></option>
						    <option value="Bekerja">Bekerja</option>
						    <option value="Kuliah">Kuliah</option>
						    <option value="Berwirausaha">Berwirausaha</option>
						</select>
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Nomor Telepon : </p>
						<input type="number" class="form-control oo" placeholder="Nomor Telepon" min="0" name="nomor" value="<?= $data_user['nomor_telepon'] ?>">
					</div>
					<div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Email : </p>
						<input type="email" class="form-control oo" placeholder="Email" name="email" value="<?= $data_user['email'] ?>">
					</div>
					<!-- <div class="form-group col-md-4 col-sm-4">
						<p class="name-input">Password : </p>
						<input type="password" class="form-control oo" placeholder="Password" name="password">
					</div> -->
					<div class="form-group col-md-4 col-sm-4">
					    <p class="name-input">TampilKan Nomor Telepon : </p>
					    <?php
					        if($data_user['tampilkan'] == "ya"){ ?>
					            <input type="checkbox" checked ="checked" name="tampilkan">
					        <?php }else{ ?>
					            <input type="checkbox" checked ="" name="tampilkan">
					        <?php }
					    ?>
					</div>
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

      	  <?php }else{
      				header("location:login-alumni?pesan=Password_Salah");	
      			}

      		}else{
      			header("location:login-alumni?pesan=Nisn_Belum_terdaftar");
      		}	
		}

	}

?>