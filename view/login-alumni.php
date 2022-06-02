<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN EDIT DATA - SMK NEGERI 8 BANDAR LAMPUNG</title>
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets2/css/admin/log.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="container-fluid">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3  login">
				<form method="POST" action="edit-alumni" class="log-in">
					<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center">
						<i class="far fa-user log fa-2x icon-user"></i>
					</div>
					<div class="form-group">
						<input type="number" class="form-control oo" placeholder="NISN" name="nisn">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="email" name="password">
					</div>
					<div class="form-group">
						<input type="submit" class="lo-gin button custom" value="Ubah Data" name="ubah">
					</div>
				</form>
			</div>
			<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-3 kembali">
				<a href="alumni" class="btn-kembali">Kembali</a>
			</div>	
		</div>
	</div>
</body>
</html>