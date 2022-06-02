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
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Upload Kelulusan</title>
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
	<form action="sys/sys_tambah_kelulusan.php" method="POST">
		<p>nomor ujian</p>
		<input type="text" name="no_pes">
		<p>nisn</p>
		<input type="number" name="nisn">
		<p>Nama</p>
		<input type="text" name="nama">
		<p>Jurusan</p>
		<select name="jurusan">
			<?php  
				include 'sys/config/db.php';

				$q = "SELECT id_jurusan,nama_jurusan FROM jurusan";
				$rd = $conn->query($q);

				$jumlah_jurusan = mysqli_num_rows($rd);
				if ($jumlah_jurusan > 0) {
					while ($data = $rd->fetch_assoc()) { ?>
					
					<option value="<?= $data['id_jurusan'] ?>"><?= $data['nama_jurusan'] ?></option>

			<?php 
					}
				}
			?>
		</select>
		<p>Keterangan</p>
		<select name="keterangan">
			<option value="LULUS">LULUS</option>
			<option value="TIDAK LULUS">TIDAK LULUS</option>
		</select>
		<input type="submit" name="tambah" value="Tambah">
	</form>
	<!-- table -->
	<br>
	<ul class="pagination text-center">
		<?php  
			$q = "SELECT id_kelulusan FROM kelulusan";
			$rd = $conn->query($q);

			$jumlah_kelulusan = mysqli_num_rows($rd);

			if (isset($_GET['hal'])) {
				$halaman_actf = $_GET['hal'];
			}else {
				$halaman_actf = 1;
			}
			
			$jumlah_data_halaman = 10;
			$jumlah_halaman = ceil($jumlah_kelulusan / $jumlah_data_halaman);
			$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;
		?>
		<!-- b -->
				<?php if ($halaman_actf > 1) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span></a></li>
				<?php endif; ?>

				<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
					
					<?php if ($i == $halaman_actf) : ?>
					<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
					<?php else : ?>
					<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>

				<?php } ?>

				<?php if ($halaman_actf < $jumlah_halaman) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&raquo;</span></a></li>
				<?php endif; ?>
			</ul>
	<table align="center" border="1" class="table text-center">
		<thead>
			<td>Nomor Ujian</td>
			<td>NISN</td>
			<td>Nama</td>
			<td>Jurusan</td>
			<td>Keterangan</td>
			<td>Aksi</td>
		</thead>
		<tbody>
			<?php  
				$q_kelulusan = "SELECT id_kelulusan,nisn,no_pes,nama_pes,keterangan,nama_jurusan FROM kelulusan INNER JOIN jurusan ON kelulusan.jurusan = jurusan.id_jurusan ORDER BY id_kelulusan DESC LIMIT $awal_data,$jumlah_data_halaman";
				$rd = $conn->query($q_kelulusan);

				$jum = mysqli_num_rows($rd);
				if ($jum > 0) {
					while ($dat_kel = $rd->fetch_assoc()) { ?>
					<tr align="center">
						<td><?= $dat_kel['no_pes'] ?></td>
						<td><?= $dat_kel['nisn'] ?></td>
						<td><?= $dat_kel['nama_pes'] ?></td>
						<td><?= $dat_kel['nama_jurusan'] ?></td>
						<td><?= $dat_kel['keterangan'] ?></td>	
						<td><a href="edit-pengumuman-kelulusan?id=<?= $dat_kel['id_kelulusan'] ?>">Edit</a></td>
					</tr>
				<?php }
				}
			?>
		</tbody>
	</table>
	<style type="text/css">
			.aktif{
				font-weight: bold;
			}
		</style>
</body>
</html>