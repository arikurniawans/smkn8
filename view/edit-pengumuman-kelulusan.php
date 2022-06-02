<?php  

	if (isset($_GET['id'])) {

		include 'sys/config/db.php';

		$no = $_GET['id'];

		$q = "SELECT id_jurusan,nisn,no_pes,nama_pes,keterangan,nama_jurusan FROM kelulusan INNER JOIN jurusan ON kelulusan.jurusan = jurusan.id_jurusan WHERE id_kelulusan=$no";
		$rd = $conn->query($q);

		$jumlah = mysqli_num_rows($rd);
		if ($jumlah > 0) {
			$data = $rd->fetch_assoc(); ?>
			<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Kelulusan</title>
  <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/css/adminsu/upload-file-su.css">
  <link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
  <link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
  <script src="assets2/js/jquery.min.js"></script>
  <script src="assets2/js/bootstrap.min.js"></script>
  <script src="assets2/js/tog-admin.js"></script>
</head>
<body>
	<?php include 'template/adminsu.php';?>
	<form action="sys/sys_edit_kelulusan.php" method="POST">
		<input type="hidden" name="id" value="<?= $no ?>">
		<p>nomor ujian</p>
		<input type="text" name="no_pes" value="<?= $data['no_pes'] ?>">
		<p>nisn</p>
		<input type="number" name="nisn" value="<?= $data['nisn'] ?>">
		<p>Nama</p>
		<input type="text" name="nama" value="<?= $data['nama_pes'] ?>">
		<p>Jurusan</p>
		<select name="jurusan">
			<option value="<?= $data['id_jurusan'] ?>"><?= $data['nama_jurusan'] ?></option>
			<?php  
				include 'sys/config/db.php';

				$q = "SELECT id_jurusan,nama_jurusan FROM jurusan";
				$rd = $conn->query($q);

				$jumlah_jurusan = mysqli_num_rows($rd);
				if ($jumlah_jurusan > 0) {
					while ($data_jurusan = $rd->fetch_assoc()) { ?>
					
					<option value="<?= $data_jurusan['id_jurusan'] ?>"><?= $data_jurusan['nama_jurusan'] ?></option>

			<?php 
					}
				}
			?>
		</select>
		<p>Keterangan</p>
		<select name="keterangan">
			<option value="<?= $data['keterangan'] ?>"><?= $data['keterangan'] ?></option>
			<option value="LULUS">LULUS</option>
			<option value="TIDAK LULUS">TIDAK LULUS</option>
		</select>
		<input type="submit" name="edit">
	</form>
</body>
</html>
		<?php 
		}else{
			header("location:upload-pengumuman-kelulusan?");
		}

	}

?>