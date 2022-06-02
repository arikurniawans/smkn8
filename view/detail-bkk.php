<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DETAIL LOWONGAN KERJA - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/bkk.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick/slick-bkk.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/toogle.js"></script>
	<script src="assets2/js/dropdown.js"></script>
	<script type="text/javascript" src="assets2/css/slick/slick.min.js"></script>
</head>
<body>
	<?php include 'template/nav.php'; ?>
	<!-- hero image -->
	<section class="bgimage">
		<div class="container-fluid">
			<div class="row">
				<div class="backup text-center">
					<div class="col-lg-12 col-md-12 col-sm-12 hero-images" style="margin-top:75px;">
						<h3 class="h1"><span class="det-lowongan">Detail</span> Lowongan</h3>
						<ol class="breadcrumb text-center">
							<li><a href="home" class="list">Beranda</a></li>
							<li><a href="bkk" class="list">Bkk</a></li>
							<li><a href="detail-bkk" class="list">Detail Lowongan</a></li>
						</ol>
					</div>  
				</div>
			</div>
		</div>
	</section>
	<!-- hero image -->
	<?php  
		$id = $_GET['id_lowongan'];
		include 'sys/config/db.php';

		$q = "SELECT id_lowongan,profesi,nama_industri,foto_industri,lokasi,link,waktu_pekerjaan,telepon,email,isi,tanggal,kategori_kerja FROM lowongan_pekerjaan INNER JOIN kategori_pekerjaan ON lowongan_pekerjaan.kategori_pekerjaan = kategori_pekerjaan.id_kategori WHERE id_lowongan = $id";
		$rd = $conn->query($q);

		$jumlah_data = mysqli_num_rows($rd);
		if ($jumlah_data > 0) { 
			$data = $rd->fetch_assoc();
			if (!function_exists('tanggal')) {
				include 'sys/tanggal.php';
			}
			?>
			
	<div class="container card-bkk"> 
		<div class="col-md-8 col-sm-8 info">
			<h2 class="jabatan"><?= $data['profesi'] ?></h2>
			<p class="perusahaan"><?= $data['nama_industri'] ?></p>
		</div>
		<div class="col-md-4 col-sm-4">
			<img src="images/foto_lowongan/<?= $data['foto_industri'] ?>" class="img-responsive img-1" alt="">
		</div>	
		<div class="col-md-12 col-sm-12"><hr></div>
		<div class="bottom">
			<div class="col-md-4 col-sm-4">
				<p class="item-list">
					<span class="list-agenda">
						<i class="fa fa-user-alt"></i> &nbsp;<span>Admin</span>
					</span>
					<span class="list-agenda">
						<i class="far fa-calendar-alt"></i> &nbsp;<span><?= tanggal(date('d-m-Y',strtotime($data['tanggal']))) ?></span>
					</span>
					<span class="list-agenda">
						<i class="fas fa-briefcase"></i> &nbsp;<span><?= $data['kategori_kerja'] ?></span>
					</span>
				</p>
			</div>
			<div class="col-md-4 col-sm-4">
				<p class="item-list">
					<span class="list-agenda">
						<i class="fas fa-map-marker-alt"></i> &nbsp;<span><?= $data['lokasi'] ?></span>
					</span>
					<span class="list-agenda">
						<i class="fas fa-map-signs"></i> &nbsp;<span><a href="<?= $data['link'] ?>"><?= $data['link'] ?></a></span>
					</span>
				</p>
			</div>
			<div class="col-md-4 col-sm-4">
				<p class="item-list">
					<span class="list-agenda">
						<i class="far fa-clock"></i> &nbsp;<span><?= $data['waktu_pekerjaan'] ?></span>
					</span>
				</p>
			</div>
			<div class="col-md-12 col-sm-12"><hr></div>
			<div class="col-md-12 col-sm-12" style="margin-top: 20px;">
				<h2 class="text-center h2"><span>Deskripsi</span> Pekerjaan</h2>
				<div class="isi-perintah" style="margin-top: 40px;">
					<?= $data['isi'] ?>
					<h3>Tentang Perusahaan</h3>
					<div class="mt">
						<p>
							<i class="fas fa-phone icon-1"></i>&nbsp;<span><?= $data['telepon'] ?></span>
						</p>
						<p>
							<i class="far fa-envelope icon-1 icon-2"></i>&nbsp;<span><?= $data['email'] ?></span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container foott-bkk">	
		<div class="col-md-12 foot-bkk" style="padding: 20px;">
			<div class="col-md-12 isi-perintah">
				<div class="">
					<span class="follow">Follow Us</span>&nbsp;
					<a href="https://www.instagram.com/bkksmkn8bl/?hl=id"><i class="fab fa-instagram" id="ig"></i></a>
					
				</div>
				<a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=bkk.smkn8bl@gmail.com&tf=1" 
				class="btn btn-primary button-ask"><i class="far fa-envelope">&nbsp;</i>Hubungi Admin</a>
			</div>
		</div>
	</div>
	<?php  
		}
	?>
	<?php include 'template/footer.php';  ?>
	<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
</body>	
</html>
<script src="assets2/js/back-top.js"></script>