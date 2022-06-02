<?php  

	if (isset($_POST['cari'])) {
		
		include 'sys/config/db.php';

		$no = $_POST['no_pes'];

		$q = "SELECT nisn,no_pes,nama_pes,keterangan,nama_jurusan FROM kelulusan INNER JOIN jurusan ON kelulusan.jurusan = jurusan.id_jurusan WHERE nisn = '".$_POST['no_pes']."'";
		$rd = $conn->query($q);

		$jumlah = mysqli_num_rows($rd);
		if ($jumlah == 1) {
			$data = $rd->fetch_assoc(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DETAIL KELULUSAN - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
	<link rel="stylesheet" href="assets2/css/all.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/onepage.css">
	<link rel="stylesheet" href="assets2/css/mix.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets2/js/toogle.js"></script>
	<script type="text/javascript" src="assets2/js/dropdown.js"></script>
</head>
<body>
	<?php include 'template/nav.php'; ?>
	<section class="bgimage">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2 class="title-detail-info"><span>Detail&nbsp;</span>Kelulusan</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="detail-kelulusan" class="list">Detail Kelulusan</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="dd" style="padding: 0px 14px;">
		<div class="container">
			<div class="welcome col-md-8 col-md-offset-2 text-center">
				<p class="id-nomor"><i class="fa fa-user-alt"></i>&nbsp; NISN Anda :&nbsp;<span><?= $data['nisn'] ?></span></p>
			</div>
			<table style="" class="table-margin">
				<thead>
					<tr>
						<th>Nomor Peserta</th>
						<th>NISN</th>
						<th>Nama Peserta</th>				
						
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td data-column="Nomor Peserta" class="first"><?= $data['no_pes'] ?></td>
						<td data-column="NISN" class=""><?= $data['nisn'] ?></td>
						<td data-column="Nama Peserta"><?= $data['nama_pes'] ?></td>
						
						<td data-column="Status"><b><?= $data['keterangan'] ?></b></td>
					</tr>
				</tbody>
			</table>
			<div class="col-md-8 col-md-offset-2 print-btn">
				<a href="cetak2?nisn=<?= $data['nisn'] ?>" class="text-center btn-cetak" target="_blank">Cetak</a>
			</div>
		</div>
	</div>
</div>
<?php include 'template/footer.php' ?>
<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
</body>
</html>
<script src="assets2/js/back-top.js"></script>
		<?php 
		}else{
			header("location:pengumuman-kelulusan?pesan=Nomor_Peserta_Tak_Tersedia_dengan_no=".$no);
		}

	}

?>