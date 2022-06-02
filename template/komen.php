<div class="" style="padding:0px; margin-top: 15px;">
	<div class="lambo">
	<?php  
		if (!function_exists('Komentar')) {
			include 'sys/function.php';
		}
		komentar();
	?>
	</div>
	<form action="sys/sys_kirim_komentar.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		<input type="text" class="form-control cook" name="nama" placeholder="Nama">
		</div>
		<div class="form-group">
			<input type="email" class="form-control cook" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<textarea name="komentar" class="form-control cook" placeholder="Komentar"></textarea>
		</div>
		<!--  -->
		<p><img src="images/photo-camera (1).png" class="img-camera" alt="">&nbsp;
		<span class="quote-camera">Unggah Foto : </span></p>
		<!--  -->
		<input type="file" name="foto" enctype="multipart/form-data" id="fileUpload" class="loking" data-buttonText="Your label here.">
		<!--  -->
		<input type="submit" value="kirim" class="button" name="kirim">
	</form>
</div>
	<style>
	.img-camera {
		width: 30px;
		height: 30px;
		margin-bottom: 5px;
	}
	.quote-camera {
		font-weight: 400;
		font-size: 17px;
	}
</style>
