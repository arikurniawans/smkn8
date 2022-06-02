<link rel="shortcut icon" href="../images/skapan.png">
	<nav class="navbar navbar-default navbar-fixed-top">
		<header class="site-header" role="banner">
			<div class="container-fluid one">
				<div class="container">
					<div class="nav-bar">
						<a href="javascript:;" class="toggle-search co-xs-12"><i class="fas fa-search lock search"></i></a>
						<div class="konten">
							<i class="fas fa-phone icon hidden-xs"></i>&nbsp;<span class="name hidden-xs">(0721) 8019298</span>
							<i class="far fa-envelope icon"></i>&nbsp;<span class="name">smkn8bl@yahoo.co.id</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="search-wrap">
			<div class="container">
				<form action="sys/sys_data_cari.php" method="POST">
				<div class="col-md-12">
					<div class="input-group">
						<input type="text" name="judul" class="form-control group-input"  placeholder="Search...">
						<span class="input-group-btn">
							<button class="btn" name="cari" type="submit"><i class="fas fa-search"></i>&nbsp;<span class="cari">Search</span>
							</button>
						</span>
					</div>
				</div>
				</form>
			</div>
		</div>
	</header>  
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="images/logo-sekolah.png"></a>
		</div>
		<div class="navbar-right">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="home">Beranda</a></li>
					<li><a href="informasi">Informasi</a></li>
				</ul>
				<ul class="nav navbar-nav">        
					<li class="dropdown">
						<a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-expanded="false">Profile<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" style="margin-top: 9.9px;">
							<li><a href="kepemimpinan-sekolah">Kepemimpinan Sekolah</a></li>
							<li><a href="periode-kepala-sekolah">Periode Kepala Sekolah</a></li>
							<li><a href="identitas-sekolah">Identitas Sekolah</a></li>
							<li><a href="sejarah">Sejarah</a></li>            
							<li><a href="visi-misi">Visi Misi</a></li>            
							<li><a href="tujuan">Tujuan</a></li>
							<li><a href="struktur-organisasi">Struktur Organisasi</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav">        
					<li><a href="agenda">Agenda</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="galeri">Galeri</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jurusan <span  class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" style="margin-top: 9.9px;">
							<!-- <li><a href="jurusan">Rekayasa Perangkat Lunak</a></li> -->
							<?php
							include 'sys/config/db.php';

							$q = "SELECT id_jurusan,nama_jurusan FROM jurusan";
							$rd = $conn->query($q);

							$jumlah_jurusan = mysqli_num_rows($rd);

							if ($jumlah_jurusan > 0) {
								while ($data_jurusan = $rd->fetch_assoc()) {
									echo '<li><a href="jurusan?id_jurusan='.$data_jurusan['id_jurusan'].'">'. $data_jurusan['nama_jurusan'] .'</a></li>';
								}
							}
							?>
						</ul>
					</li>
				</ul>
				<!--LSP-->
				<ul class="nav navbar-nav">        
					<li class="dropdown">
						<a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-expanded="false">LSP<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu" style="margin-top: 9.9px;">
							<li><a href="#">Kata Sambutan</a></li>
							<li><a href="#">Pembentukan</a></li>
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="#">Visi Misi</a></li>
							<li><a href="#">Sasaran Mutu</a></li>            
						</ul>
					</li>
				</ul>
				<!--/LSP-->
				<ul class="nav navbar-nav">
					<li><a href="ekstrakurikuler">Ekstrakurikuler</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="bkk">BKK</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="alumni">Alumni</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="pengumuman-kelulusan">Pengumuman kelulusan</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- pengumuman-kelulusan -->