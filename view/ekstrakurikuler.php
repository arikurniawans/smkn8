<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DAFTAR EKSTRAKURIKULER - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets2/css/style.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/all.css">
	<link rel="stylesheet" href="assets2/css/template.css">
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
					<h2 class="title-detail-info"><span>Daftar </span>Ekstrakurikuler</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="ekstrakurikuler" class="list">Ekstrakurikuler</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid eskul">
		<?php  
			include 'sys/config/db.php';

			$q = "SELECT * FROM eskul ORDER BY id_eskul DESC";
			$rd = $conn->query($q);

			$jumlah_eskul = mysqli_num_rows($rd);

			if ($jumlah_eskul > 0) {
				while ($data = $rd->fetch_assoc()) { ?>
				<div class="col-md-4 col-sm-6 eskul-card">
				<div class="backup loop-eskul">
					<img src="images/foto-eskul/<?= $data['foto'] ?>" class="img-responsive news-photo">
					<div class="post-content">
						<div class="tittle-tools esk">
							<h2 class="nama-guru"><img src="images/social-care.png" alt="" class="img-eskul">&nbsp;<?= $data['nama'] ?></h2>
						</div>
						<div class="isi-content" align="justify">
							<p><?= substr($data['deskripsi'] ,0,150) ?></p>
						</div>
						<a href="detail-ekstrakurikuler?id_eskul=<?= $data['id_eskul'] ?>" class="read-more">Selengkapnya..</a>
					</div>
				</div>
				</div>		
			<?php }
			}
		?> 	
		
	</div>
	<?php include 'template/footer.php' ?>
	<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
</body>
</html>
<script src="assets2/js/back-top.js"></script>