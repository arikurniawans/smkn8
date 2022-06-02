<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BURSA KERJA KHUSUS - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/bkk.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/slick/slick-bkk.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/toogle.js"></script>
	<script src="assets2/js/dropdown.js"></script>
	<script src="assets2/js/type.js"></script>
	<script type="text/javascript" src="assets2/css/slick/slick.min.js"></script>
</head>
<body>
	<?php include 'template/nav.php'; ?>
	<!-- hero image -->
	<section class="bgimage">
		<div class="container-fluid">
			<div class="row">
				<div class="backup text-center">
					<div class="col-lg-12 col-md-12 col-sm-12 hero-image">
						<h3 class="h1">
							<div class="typewrite" 
							data-period="2000" data-type='[ "Selamat Datang", "Di situs BKK", "SMKN 8 Bandar Lampung" ]'>
							<span class="wrap"></span>
						</div>
					</h3>
					<p class="definition">Temukan pekerjaan sesuai dengan keinginanmu</p>
					<a href="#coba" class="scroll-more">Lihat lowongan pekerjaan &nbsp;<i class="fas fa-angle-down bounce"></i></a>
				</div>  
			</div>
		</div>
	</section>
	<!-- hero image -->
	<div class="container full-bkk">
		<h2 class="text-center title">TENTANG KAMI</h2>
		<div class="backup">
			<div class="col-md-4 col-sm-5">
				<img src="images/bkk.png" class="img-responsive bkk-img" alt="">
			</div>
			<div class="col-md-8 col-sm-7 p-bkk">
				<p align="justify" class="paragraf-bkk">
					Bursa Kerja Khusus (BKK) adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.
				</p>
			</div>
		</div>
	</div>
	<div class="container full-bkk-1">
		<div class="col-md-12 tujuan">
			<h3 class="title">TUJUAN</h3>
			<p align="justify" class="paragraf-bkk">
				<ol class="ol" align="justify">
					<li>Sebagai wadah dalam mempertemukan tamatan dengan pencari kerja.</li>
					<li>Memberikan layanan kepada tamatan sesuai dengan tugas dan fungsi masing-masing seksi yang ada dalam BKK.</li>
					<li>Sebagai wadah dalam pelatihan tamatan yang sesuai dengan permintaan pencari kerja</li>
					<li>Sebagai wadah untuk menanamkan jiwa wirausaha bagi tamatan melalui pelatihan.</li>
				</ol>
			</p>
		</div>
	</div>
	<div class="container-fluid slide-mou">
		<div class="col-md-12">
			<h2 class="text-center title-1">PERUSAHAAN</h2>
			<p class="text-center corporate">
				List Perusahaan yang bekerja sama dengan pihak SMK Negeri 8 Bandar Lampung
			</p>
			<?php include 'template/slide-bkk.php'; ?>
		</div>
	</div>
	<div class="container-fluid back-berita" id="coba">
		<div class="">
			<h2 class="text-center title work">LOWONGAN PEKERJAAN</h2>
				<?php  

					include 'sys/config/db.php';

					$q = "SELECT * FROM lowongan_pekerjaan ORDER BY id_lowongan DESC";
					$rd = $conn->query($q);

					$jumlah = mysqli_num_rows($rd);
					if ($jumlah > 0) {
						while ($data = $rd->fetch_assoc()) { 
							if (!function_exists('tanggal')) {
								include 'sys/tanggal.php';
							}
							?>
							<div class="col-md-4 col-sm-6">
					<div class="backup-card">
						<p class="time"><?= tanggal(date('d-m-Y',strtotime($data['tanggal']))) ?></p>
						<img src="images/foto_lowongan/<?= $data['foto_industri'] ?>" class="img-responsive img-agenda">
						<div class="post-content">
							<p class="nama-guru text-center"><?= $data['nama_industri'] ?></p>
							<p class="posisi">
								<i class="fas fa-briefcase"></i>&nbsp;
								<span><?= $data['profesi'] ?></span>
							</p>
							<hr>
							<p class="penjelasan">
								
							</p>
							<p class="lokasi">
								<i class="fas fa-map-marker-alt"></i>&nbsp;<span><?= $data['lokasi'] ?></span>
							</p>
							<p class="jam-kerja">
								<i class="far fa-clock"></i>&nbsp;<span><?= $data['waktu_pekerjaan'] ?></span>
							</p>
							<hr class="hr2">
							<p><?= substr($data['isi'] ,0,150) ?></p>
							<br>
							<a href="detail-bkk?id_lowongan=<?= $data['id_lowongan'] ?>" class="read-more">Selengkapnya</a>
						</div>
					</div>
				</div>
					<?php }
					}

				?> 
		</div>
	</div>
	<div class="pagi-nation text-center">
		<a href=""><i class="fas fa-chevron-left left-icon"></i></a>
		<a href=""><i class="fas fa-chevron-right right-icon"></i></a>
	</div>
</div>
<?php include 'template/footer.php';  ?>
<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
</body>
</html>
<script src="assets2/js/back-top.js"></script>