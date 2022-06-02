<link rel="stylesheet" href="assets2/css/template.css">
<h2 class="news-title">Berita <span>populer</span></h2> 

	<!-- <div class="col-md-6 col-sm-6 eskul-card">
		<div class="backup">
			<img src="images/exam-berita.jpg" class="img-responsive news-photo">
			<div class="post-content">
				<div class="tittle-tools ti-tol">
					<h2 class="nama-guru">Peringatan Hari Pendidikan Nasional</h2>
					<p class="list-berita">
						<i class="fa fa-user"></i>&nbsp; <span>Admin</span>
						&nbsp;<i class="far fa-calendar-alt"></i>&nbsp; <span>Selasa, 02 Juni 2018 </span>
						&nbsp;<i class="far fa-eye"></i>&nbsp;<span>100</span>
					</p>
				</div>
				<div class="isi-content">
					<p align="justify">Ing ngarsa sung tuladha (Di depan menjadi teladan) Ing madya mangun karsa (Di tengah membangun kemauan/inisiatif) Tut wuri handayani (Dari belakang...</p>
				</div>
				<a href="detail-berita" class="read-more">Selengkapnya..</a>
			</div>
		</div>
	</div> -->
<?php 

	if (!function_exists('tampil_berita_terpopuler')) {
		include 'sys/function.php';
	}

	tampil_berita_terpopuler();

?>	
