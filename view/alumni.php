<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DAFTAR ALUMNI - SMK NEGERI 8 BANDAR LAMPUNG</title>
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
					<h2 class="title-detail-info"><span>Daftar&nbsp;</span>Alumni</h2>
					<ol class="breadcrumb text-center">
						<li><a href="home" class="list">Beranda</a></li>
						<li><a href="alumni" class="list">Daftar Alumni</a></li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<div class="container-fluid" style="margin-top: 60px;">
		<p>
			<a href="daftar-login" class="button-login">
				<i class="fas fa-plus"></i>&nbsp;<span>Daftar Alumni</span>
			</a>
			&nbsp;
			<a href="login-alumni" class="button-login">
				<i class="far fa-edit"></i>&nbsp;<span>Edit Alumni</span>
			</a>
		</p>
	</div>
	<div>
		<div class="col-md-8 col-sm-8">
			<p>
				<span class="show-entries">Show</span>&nbsp;
				<select class="select">
					<option>10</option>
					<option>50</option>
					<option>100</option>
					<option>500</option>
				</select>
			</p>
		</div>
			<form action="sys/sys_arah.php" method="POST">
		<div class="col-md-4 col-sm-4" style="margin-top: 12px; padding-right: 26px;">
			<div class="input-group">
				<span class="input-group-btn">
					<button class="btn" type="submit" name="cari"><i class="fas fa-search"></i></button>
				</span>
				<input type="text" class="form-control alumni-input" placeholder="Cari Data Alumni..." name="nama">
			</div>
		</div>
			</form>
	</div>

	<div class="container-fluid">
		<div class="">
			<div>
				<!-- tb -->
				<?php  

					if (!function_exists('table_alumni')) {
						include 'sys/function_alumni.php';
					}
					table_alumni();

				?>
			</div>
		</div>
	</div>
	<?php include 'template/footer.php';  ?>
	<a id="abc"><i class="fas fa-chevron-up fa-2x icon-top"></i></a>
</body>	
</html>
<script src="assets2/js/back-top.js"></script>