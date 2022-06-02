<?php

	if (!function_exists('cek')) {
  		include 'sys/sys_cek_login.php';
  	} 
  	cek_key();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets2/css/admin/admin.css">
	<link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/js/bootstrap.min.js"></script>
	<script src="assets2/js/tog-admin.js"></script>
	<script src="assets2/ckeditor/ckeditor.js"></script>
	<title>Document</title>
</head>
<body>
	<?php
	include 'template/adm-menu.php';
	?>

		<div class="col-md-9" style="margin-bottom: 16px;">
			<h4>
				<?php

					if (isset($_GET['id_berita'])) {
						echo "Edit Berita :";

						$id = $_GET['id_berita'];
						$act = "sys/sys_edit_berita.php?id_berita=$id";

						$_SESSION['judul'] = "";
						$_SESSION['isi'] = "";

						// $ses_judul = $_SESSION['judul'];
						// $ses_isi = $_SESSION['isi'];
					}else{
						echo "Tambah Berita Baru :";
						$act = "sys/sys_tambah_berita.php";

						$_SESSION['edt_judul'] = "";
						$_SESSION['edt_isi'] = "";
						// session_unset($_SESSION['edt_judul']);
						// session_unset($_SESSION['edt_isi']);
					}

				?> 
			</h4>
	<form action="<?= $act ?>" method="POST" enctype="multipart/form-data">
			<input type="text" class="form-control title-here" name="judul" placeholder="Judul" 
			value="<?php 
				if (isset($_SESSION['judul'])){
					echo $_SESSION['judul'];
				}
				if (isset($_SESSION['edt_judul'])){
					echo $_SESSION['edt_judul'];
				}
			?>">
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-9 ck-write">
			<textarea class="ckeditor" id="isi" name="isi">
				<?php  
					if (isset($_SESSION['isi'])) {
						echo $_SESSION['isi'];
					}
					if (isset($_SESSION['edt_isi'])) {
						echo $_SESSION['edt_isi'];
					}
				?>
			</textarea>
			<script type="text/javascript">
				CKEDITOR.replace('isi');
			</script>
		</div>
		<div class="col-md-3 side-add">
			<p class="add-media"><i class="fas fa-camera"></i>&nbsp; <span>Tambah Gambar : </span></p>
			<input type="file" class="form-control upload-file loking" name="foto">
			<p class="adds-media"><i class="fas fa-clipboard-list"></i>&nbsp; <span>Kategori :</span> </p>
			<select name="tag" class="form-control title-here">
				<?php  
					if (!function_exists('tampil_kategori_loop')) {
						include 'sys/function.php';
					}
					tampil_kategori_loop();
				?>
			</select>
			<button name="upload" class="publish" onclick="javascript: return confirm('yakin?')">
				Publish
			</button>
		</div>
	</form>

</body>
</html>