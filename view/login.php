<?php
// include 'config/db.php';
// include 'sys/sys_login.php';

if (isset($_GET['logout'])) {
	include 'sys/sys_logout.php';	
}else{
	if (!function_exists('cek')) {
 		include 'sys/sys_cek_login.php';
 	} 
	cek();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
				<form method="POST" action="sys/sys_login.php" class="log-in">
					<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 text-center">
						<i class="fa fa-user fa-2x"></i>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control oo" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label class="noox"><input type="checkbox" name="cek" value=""><span class="remember">Ingat saya</span></label>
						</div>
						<input type="submit" class="button" value="Login" name="login">
					</div>
				</form>
			</div>
			<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 last">
				<p class="nok text-center">
					<?=
						tampil_pesan();
					?>	
				</p>
			</div>	
		</div>
	</div>
</body>
</html>