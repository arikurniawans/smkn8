<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IDENTITAS SEKOLAH - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets2/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets2/css/brpage.css">
	<link rel="stylesheet" href="assets2/css/home.css">
	<link rel="stylesheet" href="assets2/css/tabel.css">
	<link rel="stylesheet" href="assets2/css/lew.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets2/js/toogle.js"></script>
	<script type="text/javascript" src="assets2/js/dropdown.js"></script>
</head>
<body>
	<?php	include 'template/nav.php';	?>
	<section class="bgimage">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><span class="front-sp">Identitas</span> Sekolah</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="identitas-sekolah" class="list">Identitas Sekolah</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid back-berita" >
		<div class="col-md-8 col-sm-7">
			<div class="container-fluid">
				<table style="" class="table-identitas">
					<thead>
						<tr>
							<th>Kategori</th>
							<th>identitas</th>			
						</tr>
					</thead>
					<tbody>
						<?php  
							include 'sys/config/db.php';

							$q = "SELECT * FROM identitas_sekolah";
							$rd = $conn->query($q);

							$jumlah = mysqli_num_rows($rd);

							if ($jumlah > 0) {
								while ($data = $rd->fetch_assoc()) { ?>
									
								<tr>
									<td data-column="Kategori" class="first"><?= $data['kategori'] ?></td>
									<td data-column="identitas"><?= $data['isi'] ?></td>	
								</tr>

							<?php }
							}
						?>

					</tbody>
				</table>	
			</div>
		</div>
		<div class="col-md-4 col-sm-5" style="padding: 12px; margin-top: -11px;">
			<?php  include 'coba.php';?>
		</div>
	</div>
	<?php include 'template/footer.php';  ?>
	<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
</body>	
</html>
<script src="assets2/js/back-top.js"></script>

<style>

</style>