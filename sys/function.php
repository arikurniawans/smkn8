<?php  
	
	// function pageination_berita()
	// {
	// 	$q = "SELECT id_berita FROM berita";
	// 	$rd = $conn->query($q);

	// 	$jumlah_berita = mysqli_num_rows($rd);

	// 	$jumlah_data_halaman = 3;
	// 	$jumlah_halaman = ceil($jumlah_berita / $jumlah_data_halaman);
	// 	$
	// }

	function tampil_terima_komen_adm_su()
	{
		include 'config/db.php';

		class komen
		{
			public $id_komen,
				   $foto,
				   $email,
				   $nama,
				   $isi,
				   $tanggal,
				   $status;
		}

		$q_terima = "SELECT * FROM komen WHERE status='diproses'";
		$rd = $conn->query($q_terima);

		$jumlah_komen = mysqli_num_rows($rd);

		if ($jumlah_komen > 0) {
			while ($data_komen = $rd->fetch_assoc()) {
				
				$komen = new komen();

				$komen->id_komen = $data_komen['id_komen'];
				$komen->foto = $data_komen['foto'];
				$komen->email = $data_komen['email'];
				$komen->nama = $data_komen['nama'];
				$komen->isi = $data_komen['isi'];
				$komen->tanggal = $data_komen['tanggal'];
				$komen->status = $data_komen['status'];

				$link = "sys/sys_terima_komen_su.php?id_komen=$komen->id_komen";

				if (!function_exists('tanggal')) {
					include 'tanggal.php';
				}
			?>
				<tr align="center">
					<td><img src="images/profil_komen/<?= $komen->foto ?>" class="img-profile"></td>
					<td><?= $komen->email ?></td>
					<td><?= $komen->nama ?></td>
					<td><?= $komen->isi ?></td>
					<td><?= tanggal(date('d-m-Y',strtotime($komen->tanggal))) ?></td>
					<td>
						<a href="<?= $link ?>" class="edit" onclick="javascript: return confirm('Tampilkan Komentar?')">Tampilkan</a><br>
						<!-- <button class="delete" onclick="myfunction()">Tolak</button> -->
					</td>
				</tr>
			<?php
			}
		}
	}
	//Tampil Terima Komen ADM su

	function tampil_tolak_komen_adm_su()
	{
		include 'config/db.php';

		class komen_tolak
		{
			public $id_komen,
				   $foto,
				   $email,
				   $nama,
				   $isi,
				   $tanggal,
				   $status;
		}

		$q_terima = "SELECT * FROM komen WHERE status='diterima'";
		$rd = $conn->query($q_terima);

		$jumlah_komen = mysqli_num_rows($rd);

		if ($jumlah_komen > 0) {
			while ($data_komen = $rd->fetch_assoc()) {
				
				$komen = new komen_tolak();

				$komen->id_komen = $data_komen['id_komen'];
				$komen->foto = $data_komen['foto'];
				$komen->email = $data_komen['email'];
				$komen->nama = $data_komen['nama'];
				$komen->isi = $data_komen['isi'];
				$komen->tanggal = $data_komen['tanggal'];
				$komen->status = $data_komen['status'];

				$link = "sys/sys_tarik_komen_su.php?id_komen=$komen->id_komen";

				if (!function_exists('tanggal')) {
					include 'tanggal.php';
				}
			?>
				<tr align="center">
					<td><img src="images/profil_komen/<?= $komen->foto ?>" class="img-profile"></td>
					<td><?= $komen->email ?></td>
					<td><?= $komen->nama ?></td>
					<td><?= $komen->isi ?></td>
					<td><?= tanggal(date('d-m-Y',strtotime($komen->tanggal))) ?></td>
					<td>
						<!-- <a href="" class="edit" onclick="myfunction()">Tampilkan</a><br> -->
						<a href="<?= $link ?>" class="delete" onclick="javascript: return confirm('Tarik Komentar?')">Tarik</a>
					</td>
				</tr>
			<?php
			}
		}
	} 
	// Tolak Komen Adm su

	function tampil_fasilitas_su()
	{
		include 'config/db.php';

		$q = "SELECT * FROM fasilitas";
		$rd = $conn->query($q);

		$jumlah = mysqli_num_rows($rd);

		if ($jumlah > 0) {
			while ($data = $rd->fetch_assoc()) { ?>
			<tr align="center">
            	<td><img src="images/foto_fasilitas/<?= $data['foto'] ?>" class="img-fasilitas" alt=""></td>
            	<td><?= $data['nama'] ?></td>
            	<td>
              	<a href="sys/sys_hapus_fasilitas.php?id=<?= $data['id'] ?>" class="btn-delete">Hapus</a>
            	</td>
          	</tr>	
		<?php }
		}
	}

	function tampil_identitas_sekolah_su()
	{
		include 'config/db.php';

		$q = "SELECT * FROM identitas_sekolah ORDER BY id_identitas DESC";
		$rd = $conn->query($q);

		$jumlah = mysqli_num_rows($rd);

		if ($jumlah > 0) {
			while ($data = $rd->fetch_assoc()) { ?>
			<tr align="center">
            <td><?= $data['kategori'] ?></td>
            <td><?= $data['isi'] ?></td>
            <td>
              <a href="sys/sys_hapus_identitas.php?id=<?= $data['id_identitas'] ?>" class="btn-delete">Hapus</a>
            </td>
          	</tr>	
		<?php }
		}
	}

	function tampil_staf()
	{
		include 'config/db.php';

		$q = "SELECT * FROM kepemimpinan ORDER BY id_kepemimpinan DESC";
		$rd = $conn->query($q);

		$jumlah = mysqli_num_rows($rd);

		if ($jumlah > 0) {
			while ($data = $rd->fetch_assoc()) { ?>
				<div class="col-md-4 col-sm-4 card-beritaku">
				<div class="backup">
					<img src="images/foto_staf/<?= $data['foto'] ?>" class="img-responsive img-guru">
					<div class="post-content">
						<h2 class="nama-guru"><?= $data['nama'] ?></h2>
						<p class="jabatan"><?= $data['jabatan'] ?></p>
						<div class="">
							<a href="<?= $data['facebook'] ?>"><i class="fab fa-instagram" id="ig"></i></a>
							<a href="<?= $data['instagram'] ?>"><i class="fab fa-facebook-f" id="fb"></i></a>
						</div>
					</div>
				</div>
			</div>	
		<?php }
		}
	}

	function tampil_pemimpin()
	{
		include 'config/db.php';

		$q = "SELECT * FROM periode_pemimpin ORDER BY id_pemimpin DESC";
		$rd = $conn->query($q);

		$jumlah = mysqli_num_rows($rd);

		if ($jumlah > 0) {
			while ($data = $rd->fetch_assoc()) { ?>
				<li>
						<div class="timeline-badge"><i class="far fa-user"></i></div>
						<div class="timeline-panel">
							<div class="timeline-body">
								<h3 class="timeline-title"><?= $data['nama'] ?></h3>
								<p class="periode-waktu">
									<i class="far fa-clock"></i>&nbsp;Periode : <?= $data['periode'] ?>
								</p>
								<img src="images/foto_staf/<?= $data['foto'] ?>" class="img-responsive img-periode" alt="">
								<div class="timeline-heading" style="color:#000">
									<p><?= $data['tagline'] ?></p>
								</div>
							</div>
						</li>	
		<?php }
		}
	}

	function daftar_periode()
	{
		include 'config/db.php';

		$q = "SELECT id_pemimpin FROM periode_pemimpin";
		$rd = $conn->query($q);

		$jumlah_kepemimpinan = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 5;
		$jumlah_halaman = ceil($jumlah_kepemimpinan / $jumlah_data_halaman);
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		class staf
		{
			public $id_staf,
				   $nama,
				   $foto,
				   $periode,
				   $isi;
		}

		$q = "SELECT * FROM periode_pemimpin ORDER BY id_pemimpin DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_staf = mysqli_num_rows($rd);

		if ($jumlah_staf > 0) {
			while ($data_staf = $rd->fetch_assoc()) {

				$staf = new staf();

				$staf->id_staf = $data_staf['id_pemimpin'];
				$staf->foto = $data_staf['foto'];
				$staf->nama = $data_staf['nama'];
				$staf->periode = $data_staf['periode'];
				$staf->isi = $data_staf['tagline'];

			?>
			<tr align="center">
					<td><img src="images/foto_staf/<?= $staf->foto ?>" class="img-profile"></td>
					<td><?= $staf->nama ?></td>
					<td><?= $staf->periode ?></td>
					<td>
						<a href="sys/sys_session_edt_periode.php?id=<?= $staf->id_staf ?>" class="btn-edit">Edit</a>
						<a href="sys/sys_hapus_periode.php?id=<?= $staf->id_staf ?>" class="btn-delete">Hapus</a>
					</td>
				</tr>
			<?php
			} 
			?>
			</tbody>
		</table>
			<div class="text-center">
			<nav aria-label="...">
			<ul class="pagination">
				<?php if ($halaman_actf > 1) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span></a></li>
				<?php endif; ?>

				<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
					
					<?php if ($i == $halaman_actf) : ?>
					<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
					<?php else : ?>
					<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>

				<?php } ?>

				<?php if ($halaman_actf < $jumlah_halaman) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&raquo;</span></a></li>
				<?php endif; ?>
			</ul>
		</nav>
		</div>
		<style type="text/css">
			.aktif{
				font-weight: bold;
			}
		</style>
	<?php 
		}
	}
	// daftar periode

	function daftar_staf_su()
	{
		include 'config/db.php';

		$q = "SELECT id_kepemimpinan FROM kepemimpinan";
		$rd = $conn->query($q);

		$jumlah_kepemimpinan = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 5;
		$jumlah_halaman = ceil($jumlah_kepemimpinan / $jumlah_data_halaman);
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		class staf
		{
			public $id_staf,
				   $nama,
				   $foto,
				   $ig,
				   $fb,
				   $jabatan;
		}

		$q = "SELECT * FROM kepemimpinan ORDER BY id_kepemimpinan DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_staf = mysqli_num_rows($rd);

		if ($jumlah_staf > 0) {
			while ($data_staf = $rd->fetch_assoc()) {

				$staf = new staf();

				$staf->id_staf = $data_staf['id_kepemimpinan'];
				$staf->foto = $data_staf['foto'];
				$staf->nama = $data_staf['nama'];
				$staf->fb = $data_staf['facebook'];
				$staf->ig = $data_staf['instagram'];
				$staf->jabatan = $data_staf['jabatan'];

			?>
			<tr align="center">
					<td><img src="images/foto_staf/<?= $staf->foto ?>" class="img-profile"></td>
					<td><?= $staf->nama ?></td>
					<td><?= $staf->jabatan ?></td>
					<td><a href="<?= $staf->fb ?>"><?= $staf->fb ?></a></td>
					<td><a href="<?= $staf->ig ?>"><?= $staf->ig ?></a></td>
					<td>
						<a href="sys/sys_session_edt_staf_su.php?id=<?= $staf->id_staf ?>" class="btn-edit">Edit</a>
						<a href="sys/sys_hapus_staf.php?id_kepemimpinan=<?= $staf->id_staf ?>" class="btn-delete">Hapus</a>
					</td>
				</tr>
			<?php
			} 
			?>
			</tbody>
		</table>
			<div class="text-center">
			<nav aria-label="...">
			<ul class="pagination">
				<?php if ($halaman_actf > 1) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span></a></li>
				<?php endif; ?>

				<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
					
					<?php if ($i == $halaman_actf) : ?>
					<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
					<?php else : ?>
					<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>

				<?php } ?>

				<?php if ($halaman_actf < $jumlah_halaman) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&raquo;</span></a></li>
				<?php endif; ?>
			</ul>
		</nav>
		</div>
		<style type="text/css">
			.aktif{
				font-weight: bold;
			}
		</style>
	<?php 
		}
	}

	function detail_jurusan()
	{
		include 'config/db.php';

		$jurusan = $_GET['id_jurusan'];

		$q = "SELECT * FROM jurusan WHERE id_jurusan = $jurusan";
		$rd = $conn->query($q);

		$jumlah_jurusan = mysqli_num_rows($rd);

		if ($jumlah_jurusan == 1) { 
			$data = $rd->fetch_assoc();
			?>
	<div class="container full-bkk">
		<h2 class="text-center title"><?= $data['nama_jurusan'] ?></h2>
		<div class="backup-1">
			<div class="col-md-4 col-sm-5">
				<img src="images/logo-jurusan/<?= $data['foto'] ?>" class="img-responsive bkk-img" style="margin:0 auto;" alt="">
			</div>
			<div class="col-md-8 col-sm-8 p-bkk">
			<p>
				<?= $data['deskripsi'] ?>
			</p>	
			</div>
		</div>
	</div>
	<div class="container" style="margin-top: 30px;">
		<div class="col-md-12">
			<div class="judul-jurusan">
    <h2 class="jd-jurusan-1">Prestasi</h2>
</div>
<div class="slider variable-width">
    <?php  
    	$q = "SELECT * FROM foto_prestasi_jurusan WHERE id_jurusan=$jurusan";
    	$rd = $conn->query($q);

    	$jumlah_file = mysqli_num_rows($rd);

    	if ($jumlah_file > 0) {
    		while ($data_file = $rd->fetch_assoc()) {		
    ?>
        <div class="img-tem">
            <img class="img-responsive" img src="images/foto_prestasi_jurusan/<?= $data_file['nama_foto'] ?>" style="width: 310px;box-shadow: none;">
        </div>
    <?php } 
    	}
    ?>    
    </div>
    <script type="text/javascript">

        $('.variable-width').slick({
            arrows: true,
            dots: false,
            infinite: true,
            speed:300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    </script>
		</div>
	</div>
	<div class="container" style=" margin-top: 20px;">
		<div class="col-md-6"><h3 class="list-prestasi">Daftar Prestasi</h3>
			<div class="box">		
				 			
					<p class="daftar-prestasi"><?= $data['prestasi'] ?></p>
				
			</div>
		</div>
	</div>
		<?php }
	}

	function tampil_detail_agenda()
	{
		include 'config/db.php';

		$id = $_GET['id_agenda'];

		$q = "SELECT * FROM agenda WHERE id_agenda='$id'";
		$rd = $conn->query($q);

		$jumlah_agenda = mysqli_num_rows($rd);

		if ($jumlah_agenda == 1) {
			$data = $rd->fetch_assoc();
			if (!function_exists('tanggal')) {
					include 'sys/tanggal.php';
				}
			?>
			<div class="container-fluid" style="margin-top:40px; padding: 0px;">
		<div class="col-md-8 col-sm-7">
			<div class="col-md-12 berita">
				<div class="atass">
					<span class="kat-berita">Kegiatan</span>
					<a href ="#" class="judul-berita"><h3><?= $data['nama_agenda'] ?></h3></a>
					<p class="list-berita">
						<i class="fa fa-user"></i>&nbsp; <span>Admin</span>&nbsp;
						<i class="far fa-calendar-alt"></i>&nbsp; <span><?= tanggal(date('d-m-Y',strtotime($data['tgl']))) ?></span>
						&nbsp;<i class="fas fa-map-marker-alt"></i>&nbsp;<span><?= $data['lokasi'] ?></span>&nbsp;
					</p>
				</div>
				<!-- gambar-berita -->
				<img src="images/agenda.jpg" class="img-responsive">
				<!-- gambar-beria -->
				<p class="isi-berita">
					<span class="list-agenda">
						<i class="fas fa-map-marker-alt"></i>&nbsp;<span>Lokasi : <?= $data['lokasi'] ?></span> 
					</span>
					<span class="list-agenda">
						<i class="far fa-calendar-alt"></i>&nbsp;<span>Tanggal : <?= tanggal(date('d-m-Y',strtotime($data['tgl']))) ?></span>
					</span>
					<span class="penjelasan-agenda">
						"<?= $data['deskripsi'] ?>"
					</span>
				</p>
			</div>
		</div>
		<div class="col-md-4 col-sm-5" style="padding: 12px; margin-top: -10px;">
			<?php  include 'template/wid-tab.php';?>
		</div>
	</div>
			<?php 
		}
	}

	function tampil_eskul_su()
	{
		include 'config/db.php';

		$q = "SELECT id_eskul FROM eskul";
		$rd = $conn->query($q);

		$jumlah_eskul = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 5;
		$jumlah_halaman = ceil($jumlah_eskul / $jumlah_data_halaman);
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		class eskul
		{
			public $id_eskul,
				   $nama,
				   $foto,
				   $prestasi,
				   $deskripsi;
		}

		$q = "SELECT * FROM eskul ORDER BY id_eskul DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_eskul = mysqli_num_rows($rd);

		if ($jumlah_eskul > 0) {
			while ($data_eskul = $rd->fetch_assoc()) {

				$eskul = new eskul();

				$eskul->id_eskul = $data_eskul['id_eskul'];
				$eskul->foto = $data_eskul['foto'];
				$eskul->nama = $data_eskul['nama'];
				$eskul->deskripsi = $data_eskul['deskripsi'];
				$eskul->prestasi = $data_eskul['prestasi'];

			?>
			<tr align="center">
					<td><img src="images/foto-eskul/<?= $eskul->foto ?>" class="img-profile"></td>
					<td><?= $eskul->nama ?></td>
					<td>
						<a href="sys/sys_session_edt_eskul.php?id=<?= $eskul->id_eskul ?>" class="btn-edit">Edit</a>
						<a href="sys/sys_hapus_eskul.php?id=<?= $eskul->id_eskul ?>" class="btn-delete">Hapus</a>
					</td>
				</tr>
			<?php
			} 
			?>
			</tbody>
		</table>
			<div class="text-center">
			<nav aria-label="...">
			<ul class="pagination">
				<?php if ($halaman_actf > 1) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span></a></li>
				<?php endif; ?>

				<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
					
					<?php if ($i == $halaman_actf) : ?>
					<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
					<?php else : ?>
					<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>

				<?php } ?>

				<?php if ($halaman_actf < $jumlah_halaman) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&raquo;</span></a></li>
				<?php endif; ?>
			</ul>
		</nav>
		</div>
		<style type="text/css">
			.aktif{
				font-weight: bold;
			}
		</style>
	<?php 
		}
	}

	function tampil_jurusan_su()
	{
		include 'config/db.php';

		$q = "SELECT id_jurusan FROM jurusan";
		$rd = $conn->query($q);

		$jumlah_jurusan = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 5;
		$jumlah_halaman = ceil($jumlah_jurusan / $jumlah_data_halaman);
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		class jurusan
		{
			public $id_jurusan,
				   $nama,
				   $foto,
				   $prestasi,
				   $deskripsi;
		}

		$q = "SELECT * FROM jurusan ORDER BY id_jurusan DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_jurusan = mysqli_num_rows($rd);

		if ($jumlah_jurusan > 0) {
			while ($data_jurusan = $rd->fetch_assoc()) {

				$jurusan = new jurusan();

				$jurusan->id_jurusan = $data_jurusan['id_jurusan'];
				$jurusan->foto = $data_jurusan['foto'];
				$jurusan->nama = $data_jurusan['nama_jurusan'];
				$jurusan->deskripsi = $data_jurusan['deskripsi'];
				$jurusan->prestasi = $data_jurusan['prestasi'];

				if (!function_exists('tanggal')) {
					include 'sys/tanggal.php';
				}

			?>
			<tr align="center">
					<td><img src="images/logo-jurusan/<?= $jurusan->foto ?>" class="img-profile"></td>
					<td><?= $jurusan->nama ?></td>
					<td>
						<a href="sys/sys_session_edt_jurusan.php?id=<?= $jurusan->id_jurusan ?>" class="btn-edit">Edit</a>
						<a href="sys/sys_hapus_jurusan.php?id=<?= $jurusan->id_jurusan ?>" class="btn-delete">Hapus</a>
					</td>
				</tr>
			<?php
			} 
			?>
			</tbody>
		</table>
			<div class="text-center">
			<nav aria-label="...">
			<ul class="pagination">
				<?php if ($halaman_actf > 1) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span></a></li>
				<?php endif; ?>

				<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
					
					<?php if ($i == $halaman_actf) : ?>
					<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
					<?php else : ?>
					<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>

				<?php } ?>

				<?php if ($halaman_actf < $jumlah_halaman) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&raquo;</span></a></li>
				<?php endif; ?>
			</ul>
		</nav>
		</div>
		<style type="text/css">
			.aktif{
				font-weight: bold;
			}
		</style>
	<?php 
		}
	}
	// tampil_jurusan_su

	function tampil_agenda()
	{
		include 'config/db.php';

		$q = "SELECT id_agenda FROM agenda";
		$rd = $conn->query($q);

		$jumlah_agenda = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 8;
		$jumlah_halaman = ceil($jumlah_agenda / $jumlah_data_halaman);
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		class agenda
		{
			public $id_agenda,
				   $judul,
				   $tanggal,
				   $lokasi,
				   $deskripsi;
		}

		$q = "SELECT * FROM agenda LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_agenda = mysqli_num_rows($rd);

		if ($jumlah_agenda > 0) {
			while ($data_agenda = $rd->fetch_assoc()) {

				$agenda = new agenda();

				$agenda->id_agenda = $data_agenda['id_agenda'];
				$agenda->judul = $data_agenda['nama_agenda'];
				$agenda->tanggal = $data_agenda['tgl'];
				$agenda->lokasi = $data_agenda['lokasi'];
				$agenda->deskripsi = $data_agenda['deskripsi'];

				if (!function_exists('tanggal')) {
					include 'sys/tanggal.php';
				}

			?>
			<div class="col-md-6 col-sm-6">
					<div class="backup">
						<img src="images/agenda.jpg" class="img-responsive img-agenda">
						<div class="post-content">
							<h3 class="nama-guru"><?= $agenda->judul ?></h3>
							<p class="jabatan">
								<i class="far fa-calendar-alt"></i>&nbsp;<span><?= tanggal(date('d-m-Y',strtotime($agenda->tanggal))) ?></span> &nbsp; 
								<i class="fas fa-map-marker-alt"></i>&nbsp;<span><?= $agenda->lokasi ?></span>
							</p>
							<a href="detail-kegiatan?id_agenda=<?= $agenda->id_agenda ?>" class="detail-agenda">Detail</a>
						</div>
					</div>
				</div>
			<?php
			} 
			?>
			<div class="">
			<nav aria-label="...">
			<ul class="pagination">
				<?php if ($halaman_actf > 1) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span></a></li>
				<?php endif; ?>

				<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
					
					<?php if ($i == $halaman_actf) : ?>
					<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
					<?php else : ?>
					<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>

				<?php } ?>

				<?php if ($halaman_actf < $jumlah_halaman) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&raquo;</span></a></li>
				<?php endif; ?>
			</ul>
		</nav>
		</div>
		<style type="text/css">
			.aktif{
				font-weight: bold;
			}
		</style>
	<?php 
		}
	}

	function tampil_agenda_adminsu()
	{
		include 'config/db.php';

		$q = "SELECT id_agenda FROM agenda";
		$rd = $conn->query($q);

		$jumlah_agenda = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 3;
		$jumlah_halaman = ceil($jumlah_agenda / $jumlah_data_halaman);
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		class agenda
		{
			public $id_agenda,
				   $judul,
				   $tanggal,
				   $lokasi,
				   $deskripsi;
		}

		$q = "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_agenda = mysqli_num_rows($rd);

		if ($jumlah_agenda > 0) {
			while ($data_agenda = $rd->fetch_assoc()) {

				$agenda = new agenda();

				$agenda->id_agenda = $data_agenda['id_agenda'];
				$agenda->judul = $data_agenda['nama_agenda'];
				$agenda->tanggal = $data_agenda['tgl'];
				$agenda->lokasi = $data_agenda['lokasi'];
				$agenda->deskripsi = $data_agenda['deskripsi'];

				if (!function_exists('tanggal')) {
					include 'sys/tanggal.php';
				}

			?>
			<tr align="center">
					<td><?= $agenda->judul ?></td>
					<td><?= tanggal(date('d-m-Y',strtotime($agenda->tanggal))) ?></td>
					<td><?= $agenda->lokasi ?></td>
					<td><?= $agenda->deskripsi ?></td>
					<td>
						<a href="sys/sys_session_edt_agenda_su.php?id_agenda=<?= $agenda->id_agenda ?>" class="btn-edit">Edit</a>
						<a href="sys/sys_hapus_agenda_su.php?id=<?= $agenda->id_agenda ?>" class="btn-delete">Hapus</a>
					</td>
				</tr>
			<?php
			} 
			?>
			</tbody>
		</table>
			<div class="text-center">
			<nav aria-label="...">
			<ul class="pagination">
				<?php if ($halaman_actf > 1) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span></a></li>
				<?php endif; ?>

				<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
					
					<?php if ($i == $halaman_actf) : ?>
					<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
					<?php else : ?>
					<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>

				<?php } ?>

				<?php if ($halaman_actf < $jumlah_halaman) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&raquo;</span></a></li>
				<?php endif; ?>
			</ul>
		</nav>
		</div>
		<style type="text/css">
			.aktif{
				font-weight: bold;
			}
		</style>
	<?php 
		}
	}
	// tampil_agenda_adminsu

	function tampil_galeri()
	{
		include 'config/db.php';

		$q = "SELECT * FROM galeri ORDER BY id_foto DESC";
		$rd = $conn->query($q);

		$jumlah_file = mysqli_num_rows($rd);	

		if ($jumlah_file > 0) {
			while ($data = $rd->fetch_assoc()) { 
			?>
			<div class="col-md-3 col-sm-4" style="padding: 6px;">
				<div class="content">
					<div class="content-overlay"></div>
					<img class="cont-img img-responsive" src="images/foto_galeri/<?= $data['nama_foto'] ?>" style="border-radius: 4px;">
					<div class="content-details fadeIn-right">
						<button class="eye-button hidden-xs" data-toggle="modal" data-target="#tampil" data-id="<?= $data['nama_foto']?>"><i class="far fa-eye"></i></button>
					</div>
				</div>
			</div>
  		<?php } ?>
			<!--  -->
<!-- <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> -->
<div class="modal fade bs-example-modal-lg" id="tampil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="col-md-12" style="padding: 4px;">
				<p class="text-center fas-nama">Galeri</p>
			</div>	
			<button class="d" data-dismiss="modal"><i class="fas fa-times"></i></button>
		<div class="modal-data">		
		</div>
		</div>
	</div>
</div>
	<!-- /modal -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#tampil').on('show.bs.modal', function (e) {
            var getDetail = $(e.relatedTarget).data('id');
            /* fungsi AJAX untuk melakukan fetch data */
            $.ajax({
                type : 'post',
                url : 'view/dtgal.php',
                /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                data :  'getDetail='+ getDetail,
                /* memanggil fungsi getDetail dan mengirimkannya */
                success : function(data){
                $('.modal-data').html(data);
                /* menampilkan data dalam bentuk dokumen HTML */
                }
            });
         });
    });
  </script>
  <script>
  	setTimeout(function(){
           $("[data-dismiss=modal]").trigger({ type: "click" });
 	},100)
  </script>	
		<?php
	} 
}

	function tampil_galeri_adm()
	{
		include 'config/db.php';

		$q = "SELECT id_foto FROM galeri";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 3;

		if ($jumlah_berita < 3) {
			$jumlah_halaman = 1;
		}else {
			$jumlah_halaman = ceil($jumlah_berita / $jumlah_data_halaman);
		}
		
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		$q = "SELECT * FROM galeri ORDER BY id_foto DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_file = mysqli_num_rows($rd);

		if ($jumlah_file > 0) {
			while ($data = $rd->fetch_assoc()) { 
			?>
			<div class=" col-md-6 perintah">
          <p align="right" class="button-backup">
            <a href="sys/sys_hapus_galeri.php?id=<?= $data['id_foto'] ?>" onclick="myfunc()" class="d button-close">
              <i class="far fa-trash-alt"></i></a>
            </p>
            <div class="backup-list">
              <div class="col-md-12 data-gambar">
                <img src="images/foto_galeri/<?= $data['nama_foto'] ?>" class="img-responsive" alt="">
              </div>
            </div>
          </div>
		<?php } ?>
			</tbody>
    	</table>
		<?php } 	
	}
	// tampil_galeri_adm

	function tampil_data_download()
	{
		include 'config/db.php';

		$q = "SELECT id_download FROM download";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 3;

		if ($jumlah_berita < 3) {
			$jumlah_halaman = 1;
		}else {
			$jumlah_halaman = ceil($jumlah_berita / $jumlah_data_halaman);
		}
		
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		$q = "SELECT * FROM download ORDER BY id_download DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_file = mysqli_num_rows($rd);

		if ($jumlah_file > 0) {
			while ($data = $rd->fetch_assoc()) { 
				if (!function_exists('tanggal')) {
						include 'sys/tanggal.php';
					}
			?>
			<tr align="center">
            	<td><?= $data['judul'] ?></td>
            	<td><a href="file/<?= $data['file'] ?>"><?= $data['file'] ?></a></td>
            	<td><?= tanggal(date('d-m-Y',strtotime($data['tanggal']))) ?></td>
            	<td>
              		<a href="sys/sys_hapus_data.php?id=<?= $data['id_download'] ?>" class="btn-delete">Hapus</a>
            	</td>
          	</tr>
		<?php } ?>
			</tbody>
    	</table>
	    <div class="text-center">
	      <ul class="pagination text-center">
	          <?php if ($halaman_actf > 1) : ?>
	            <li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
	            <span aria-hidden="true">&laquo;</span></a></li>
	          <?php endif; ?>

	          <?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
	            
	            <?php if ($i == $halaman_actf) : ?>
	            <li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>     
	            <?php else : ?>
	            <li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
	            <?php endif; ?>

	          <?php } ?>

	          <?php if ($halaman_actf < $jumlah_halaman) : ?>
	            <li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
	            <span aria-hidden="true">&raquo;</span></a></li>
	          <?php endif; ?>
	          </ul>
	    </div>
		<?php }
	}

	function tampil_download()
	{
		include 'config/db.php';

		$q = "SELECT id_download FROM download";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 3;

		if ($jumlah_berita < 3) {
			$jumlah_halaman = 1;
		}else {
			$jumlah_halaman = ceil($jumlah_berita / $jumlah_data_halaman);
		}
		
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		$q = "SELECT * FROM download ORDER BY id_download DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_file = mysqli_num_rows($rd);

		if ($jumlah_file > 0) {
			while ($data = $rd->fetch_assoc()) { 
				if (!function_exists('tanggal')) {
						include 'sys/tanggal.php';
					}
			?>
			<div class="tambah">
				<i class="far fa-file logo"></i>&nbsp;<span class="tanggal"><?= tanggal(date('d-m-Y',strtotime($data['tanggal']))) ?></span>
				<p class="isi"><a href="file/<?= $data['file'] ?>"><?= $data['judul'] ?></a></p>
				<div class="border"></div>
			</div>		
		<?php } ?>
			<div class="text-center">
		      <ul class="pagination text-center">
		          <?php if ($halaman_actf > 1) : ?>
		            <li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
		            <span aria-hidden="true">&laquo;</span></a></li>
		          <?php endif; ?>

		          <?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
		            
		            <?php if ($i == $halaman_actf) : ?>
		            <li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>     
		            <?php else : ?>
		            <li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
		            <?php endif; ?>

		          <?php } ?>

		          <?php if ($halaman_actf < $jumlah_halaman) : ?>
		            <li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
		            <span aria-hidden="true">&raquo;</span></a></li>
		          <?php endif; ?>
		      </ul>
	    	</div>
		<?php }
	}

	function Tampil_Berita()
	{
		include 'config/db.php';

		$q = "SELECT id_berita FROM berita";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 3;
		$jumlah_halaman = ceil($jumlah_berita / $jumlah_data_halaman);
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		$q = "SELECT * FROM berita INNER JOIN tag ON berita.id_kategori = tag.id_kategori ORDER BY id_berita DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		class berita
		{
			public $id_berita,
				   $id_kategori,
				   $kategori,
				   $id_user,
				   $judul_berita,
				   $isi_berita,
				   $tanggal_post,
				   $dilihat;
		}

		if ($jumlah_berita > 0) {
			while ($data_berita = $rd->fetch_assoc()) {
				$berita = new berita();

				$berita->id_berita = $data_berita['id_berita'];
				$berita->judul_berita = $data_berita['judul'];
				$berita->isi_berita = $data_berita['isi'];
				$berita->tanggal_post = $data_berita['tgl_post'];
				$berita->dilihat = $data_berita['dilihat'];

				if ($berita->kategori == "Pilih Kategori") {
					$berita->kategori = "Tidak Ada Kategori";
				}else{
					$berita->kategori = $data_berita['kategori'];
				}

				if (!function_exists('tanggal')) {
						include 'sys/tanggal.php';
					}
			?>
			<!-- <div class="col-md-8"> -->
				<div class="col-md-12 berita">
					<span class="kat-berita"><?= $berita->kategori ?></span>
					<a href ="#" class="judul-berita"><h3><?= $berita->judul_berita ?></h3></a>
					<p class="list-berita">
						<i class="far fa-calendar-alt"></i>&nbsp; <span><?= tanggal(date('d-m-Y',strtotime($berita->tanggal_post))) ?></span>
						&nbsp;<i class="fa fa-user"></i>&nbsp; <span>Admin</span>
						&nbsp;<i class="far fa-eye"></i>&nbsp;<span><?= $berita->dilihat ?></span>
					</p>
					<p class="isi-berita">
						<?= substr($berita->isi_berita, 0,1000) . '...'; ?>
					</p>
					<div style="padding-top:9px;">
					<a href="sys/sys_tambah_view.php?id=<?= $berita->id_berita ?>" class="read-more">Baca Selengkapnya</a></div>
				</div>
			<!-- </div> -->
			<?php	
			}
			?>
				<nav aria-label="..." class="pagi-nation text-center">
					<ul class="pagination text-center">
					<?php if ($halaman_actf > 1) : ?>
						<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span></a></li>
					<?php endif; ?>

					<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
						
						<?php if ($i == $halaman_actf) : ?>
						<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
						<?php else : ?>
						<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
						<?php endif; ?>

					<?php } ?>

					<?php if ($halaman_actf < $jumlah_halaman) : ?>
						<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
						<span aria-hidden="true">&raquo;</span></a></li>
					<?php endif; ?>
					</ul>
				</nav>
				<style type="text/css">
					.aktif{
						font-weight: bold;
					}
				</style>
			<?php
		}
	}
	// Akhir Func Tampil Berita

	function cari_berita($judul)
	{
		include 'config/db.php';

		$q = "SELECT * FROM berita INNER JOIN tag ON berita.id_kategori = tag.id_kategori WHERE judul LIKE '%$judul%' ORDER BY id_berita DESC";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		class berita
		{
			public $id_berita,
				   $id_kategori,
				   $kategori,
				   $id_user,
				   $judul_berita,
				   $isi_berita,
				   $tanggal_post,
				   $dilihat;
		}

		if ($jumlah_berita > 0) {
			while ($data_berita = $rd->fetch_assoc()) {
				$berita = new berita();

				$berita->id_berita = $data_berita['id_berita'];
				$berita->kategori = $data_berita['kategori'];
				$berita->judul_berita = $data_berita['judul'];
				$berita->isi_berita = $data_berita['isi'];
				$berita->tanggal_post = $data_berita['tgl_post'];
				$berita->dilihat = $data_berita['dilihat'];

				if (!function_exists('tanggal')) {
						include 'sys/tanggal.php';
					}
			?>
			<div class="col-md-8">
				<div class="col-md-12 berita">
					<span class="kat-berita"><?= $berita->kategori ?></span>
					<a href ="#" class="judul-berita"><h3><?= $berita->judul_berita ?></h3></a>
					<p class="list-berita">
						<i class="far fa-calendar-alt"></i>&nbsp; <span><?= tanggal(date('d-m-Y',strtotime($berita->tanggal_post))) ?></span>
						&nbsp;<i class="fa fa-user"></i>&nbsp; <span>Admin</span>
						&nbsp;<i class="far fa-eye"></i>&nbsp;<span><?= $berita->dilihat ?></span>
					</p>
					<p class="isi-berita">
						<?= substr($berita->isi_berita, 0,1000) . '...'; ?>
					</p>
					<br>
					<p>
					<a href="sys/sys_tambah_view.php?id=<?= $berita->id_berita ?>" class="read-more">Baca Selengkapnya</a>
				</p>
				</div>
			</div>
			<?php	
			}
		}
	}
	// Akhir Func Cari Berita

	function berita_kategori($kategori)
	{
		include 'config/db.php';

		$q = "SELECT * FROM berita WHERE id_kategori = $kategori ORDER BY id_berita DESC";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		class berita
		{
			public $id_berita,
				   $id_kategori,
				   $kategori,
				   $id_user,
				   $judul_berita,
				   $isi_berita,
				   $tanggal_post,
				   $dilihat;
		}

		if ($jumlah_berita > 0) {
			while ($data_berita = $rd->fetch_assoc()) {
				$berita = new berita();

				$berita->id_berita = $data_berita['id_berita'];
				$berita->judul_berita = $data_berita['judul'];
				$berita->isi_berita = $data_berita['isi'];
				$berita->tanggal_post = $data_berita['tgl_post'];
				$berita->dilihat = $data_berita['dilihat'];

				if (!function_exists('tanggal')) {
						include 'sys/tanggal.php';
					}

				$q_kat = "SELECT * FROM tag WHERE id_kategori = $kategori";
				$rd_kat = $conn->query($q_kat);

				$data_kat = $rd_kat->fetch_assoc();

				$berita->kategori = $data_kat['kategori'];

			?>
			<div class="col-md-8">
				<div class="col-md-12 berita">
					<span class="kat-berita"><?= $berita->kategori ?></span>
					<a href ="#" class="judul-berita"><h3><?= $berita->judul_berita ?></h3></a>
					<p class="list-berita">
						<i class="far fa-calendar-alt"></i>&nbsp; <span><?= tanggal(date('d-m-Y',strtotime($berita->tanggal_post))) ?></span>
						&nbsp;<i class="fa fa-user"></i>&nbsp; <span>Admin</span>
						&nbsp;<i class="far fa-eye"></i>&nbsp;<span><?= $berita->dilihat ?></span>
					</p>
					<p class="isi-berita">
						<?= substr($berita->isi_berita, 0,1000) . '...'; ?>
					</p>
					<a href="sys/sys_tambah_view.php?id=<?= $berita->id_berita ?>" class="read-more">Baca Selengkapnya</a>
				</div>
			</div>
			<?php	
			}
		}
	}
	// Akhir Func Kategori Berita
	
	function tampil_berita_terbaru()
	{
		include 'config/db.php';

		$q = "SELECT * FROM berita ORDER BY id_berita DESC LIMIT 0,3";
		$rd = $conn->query($q);

		$berita_terbaru = mysqli_num_rows($rd);

		class berita_terbaru
		{	
			public $foto_berita,
			 	   $judul_berita,
			 	   $id_berita,
			 	   $tanggal_berita;
		}

		if ($berita_terbaru > 0){
			while ($data_berita_terbaru = $rd->fetch_assoc()) {

					$berita = new berita_terbaru();

					$berita->id_berita = $data_berita_terbaru['id_berita'];
					$berita->judul_berita = $data_berita_terbaru['judul'];
					$berita->foto_berita = $data_berita_terbaru['gambar'];
					$berita->tanggal_berita = $data_berita_terbaru['tgl_post'];
					
					if (!function_exists('tanggal')) {
						include 'sys/tanggal.php';
					}

		?>
			<div class="hawhh">
				<div class="col-md-4 col-sm-4 col-xs-4 content-image">
					<img srimg src="images/foto_berita/<?= $berita->foto_berita ?>" class="img-responsive">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-8">
					<p class="content-paragrap"><a href="sys/sys_tambah_view.php?id=<?= $berita->id_berita ?>"><?= $berita->judul_berita ?></a></p>
					<p class="contents"><?= tanggal(date('d-m-Y',strtotime($berita->tanggal_berita))) ?></p>
				</div>
			</div>
			<?php
			}
		}
	}
	// akhir func tampil berita terbaru

	function tampil_berita_terpopuler()
	{
		include 'config/db.php';

		$q = "SELECT * FROM berita ORDER BY dilihat DESC LIMIT 0,2";
		$rd = $conn->query($q);

		$berita_terpopuler = mysqli_num_rows($rd);

		class berita_terpopuler
		{	
			public $foto_berita,
			 	   $judul_berita,
			 	   $id_berita,
			 	   $isi_berita,
			 	   $dilihat,
			 	   $tanggal_berita;
		}

		if ($berita_terpopuler > 0){
			while ($data_berita_terpopuler = $rd->fetch_assoc()) {

					$berita = new berita_terpopuler();

					$berita->id_berita = $data_berita_terpopuler['id_berita'];
					$berita->judul_berita = $data_berita_terpopuler['judul'];
					$berita->foto_berita = $data_berita_terpopuler['gambar'];
					$berita->tanggal_berita = $data_berita_terpopuler['tgl_post'];
					$berita->isi_berita = $data_berita_terpopuler['isi'];
					$berita->dilihat = $data_berita_terpopuler['dilihat'];
					
					if (!function_exists('tanggal')) {
						include 'sys/tanggal.php';
					}

		?>

		<div class="col-md-6 col-sm-6 eskul-card">
			<div class="backup">
				<img src="images/foto_berita/<?= $berita->foto_berita ?>" class="img-responsive news-photo">
				<div class="post-content">
				<div class="tittle-tools ti-tol">
					<h2 class="nama-guru"><?= $berita->judul_berita ?></h2>
					<p class="list-berita">
						<i class="fa fa-user"></i>&nbsp; <span>Admin</span>
						&nbsp;<i class="far fa-calendar-alt"></i>&nbsp; <span><?= tanggal(date('d-m-Y',strtotime($berita->tanggal_berita))) ?></span>
						&nbsp;<i class="far fa-eye"></i>&nbsp;<span><?= $berita->dilihat ?></span>
					</p>
				</div>
				<div class="isi-content">
					<p align="justify">
						<?= substr($berita->isi_berita ,0,300) ?>
					</p>
				</div>
				<a href="sys/sys_tambah_view.php?id=<?= $berita->id_berita ?>" class="read-more">Selengkapnya..</a>
			</div>
		</div>
	</div>
			<?php
			}
		}
	}
	// akhir func tampil berita terpopuler

	function tampil_agenda_terbaru()
	{
		include 'config/db.php';

		$q = "SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT 0,3";
		$rd = $conn->query($q);

		$agenda_terbaru = mysqli_num_rows($rd);

		class agenda_terbaru
		{
			public $id_agenda,
				   $nama_agenda,
				   $tanggal_agenda,
				   $lokasi_agenda,
				   $deskripsi;
		}

		if ($agenda_terbaru > 0) {
			while ($data_agenda_terbaru = $rd->fetch_assoc()) {
				
				$agenda = new agenda_terbaru();

				$agenda->id_agenda = $data_agenda_terbaru['id_agenda'];
				$agenda->nama_agenda = $data_agenda_terbaru['nama_agenda'];
				$agenda->tanggal_agenda = $data_agenda_terbaru['tgl'];
				$agenda->lokasi_agenda = $data_agenda_terbaru['lokasi'];
				$agenda->deskripsi = $data_agenda_terbaru['deskripsi'];

				if (!function_exists('tanggal')) {
					include 'sys/tanggal.php';
				}

		?>
			<div class="hawhh">
				<div class="col-md-4 col-sm-4 col-xs-4 content-image">
					<img srimg src="images/agenda.jpg" class="img-responsive">
				</div>
				<div class="col-md-8 col-sm-8 col-xs-8">
					<p class="content-paragrap"><a href="detail-kegiatan?id_agenda=<?= $agenda->id_agenda ?>"><?= $agenda->nama_agenda ?></a></p>
					<p class="contents"><i class="far fa-calendar-alt"></i>&nbsp;<span><?= tanggal(date('d-m-Y',strtotime($agenda->tanggal_agenda))) ?></span> &nbsp;
					<br> 
					<i class="fas fa-map-marker-alt"></i>&nbsp;<span><?= $agenda->lokasi_agenda ?></span></p>
				</div> 	
			</div>
			<?php
			}
		}
	}
	// Akhir Func Agenda Terbaru

	function Tampil_kategori()
	{
		include 'config/db.php';

		$q = "SELECT * FROM tag";
		$rd = $conn->query($q);

		$jumlah_kategori = mysqli_num_rows($rd);

		class kategori
		{
			public $id_kategori,
				   $nama_kategori;
		}

		if ($jumlah_kategori > 0) {
			while ($data_kategori = $rd->fetch_assoc()) {
				
				$kategori = new kategori();

				$kategori->id_kategori = $data_kategori['id_kategori'];
				$kategori->nama_kategori = $data_kategori['kategori'];
			?>
			<a href="informasi?kategori=<?= $kategori->id_kategori ?>"><span class="tags"> <?= $kategori->nama_kategori ?> </span></a>
			<?php
			}
		}
	}
	// Tampil Kategori

	function detail_berita($id)
	{
		include 'config/db.php';

		$q = "SELECT * FROM berita INNER JOIN tag ON berita.id_kategori = tag.id_kategori WHERE id_berita = $id";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if ($jumlah_berita > 0) {

			include 'sys/tanggal.php';
			$data_berita = $rd->fetch_assoc();
			
			class detail_berita
			{
				public $id_berita,
					   $id_kategori,
					   $kategori,
					   $id_user,
					   $judul_berita,
					   $isi_berita,
					   $foto_berita,
					   $tanggal_post,
					   $dilihat;
			}

			$detail_berita = new detail_berita();

			$detail_berita->id_berita = $data_berita['id_berita'];
			$detail_berita->judul_berita = $data_berita['judul'];
			$detail_berita->isi = $data_berita['isi'];
			$detail_berita->foto_berita = $data_berita['gambar'];
			$detail_berita->tanggal_berita = tanggal(date('d-m-Y',strtotime($data_berita['tgl_post'])));
			$detail_berita->dilihat = $data_berita['dilihat'];

// 			if ($detail_berita->kategori = "Pilih Kategori") {
// 				$detail_berita->kategori = "Tidak Ada Kategori";
// 			}else{
			$detail_berita->kategori = $data_berita['kategori'];
// 			}
			// $id_kat = $detail_berita->id_kategori;

			// $q = "SELECT * FROM tag WHERE id_kategori = $id_kat";
			// $rd = $conn->query($q);

			// $jumlah_kategori = mysqli_num_rows($rd);

			// if ($jumlah_kategori > 0) {
			// 	$data_kategori = $rd->fetch_assoc();
			// 	$detail_berita->nama_kategori = $data_kategori['kategori'];
			// }else{
			// 	$detail_berita->nama_kategori = "";
			// }
			?>
			<div class="col-md-12 berita">
				<div class="atass">
					<span class="kat-berita"><?= $detail_berita->kategori ?></span>
					<a href ="#" class="judul-berita"><h3><?= $detail_berita->judul_berita ?></h3></a>
					<p class="list-berita">
						<i class="far fa-calendar-alt"></i>&nbsp; <span><?= $detail_berita->tanggal_berita ?></span>&nbsp;
						<i class="fa fa-user"></i>&nbsp; <span>Admin</span>
						&nbsp;<i class="far fa-eye"></i>&nbsp;<span><?= $detail_berita->dilihat ?></span>
					</p>
				</div>
				<!-- gambar-berita -->
				<img src="images/foto_berita/<?= $detail_berita->foto_berita ?>" class="img-responsive">
				<!-- gambar-beria -->
				<p class="isi-berita">
					<?= $detail_berita->isi ?>
				</p>
			</div>
			<?php $id_nxt = $detail_berita->id_berita + 1?>
			<p class="next-post"><a href="detail-berita?id=<?= berita_next($id_nxt); ?>"><span>Next Post</span>&nbsp; <i class="fas fa-arrow-right"></i></a></p>
			<?php
			// include 'assets/css/detail_berita.css';
		}
	}
	// Akhir Func detail berita

	function berita_next($id_next)
	{
		include 'config/db.php';

		$q = "SELECT id_berita FROM berita WHERE id_berita = $id_next";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if ($jumlah_berita === 1) {
			$id_next = $id_next;
		}else {
			$id_next = 1;
		}

		return $id_next;
	}
	// Akhir Berita Next

	function komentar()
	{
		include 'config/db.php';

		$q = "SELECT foto,email,nama,isi,tanggal FROM komen WHERE status = 'diterima' ORDER BY id_komen DESC";
		$rd = $conn->query($q);

		$jumlah_komen = mysqli_num_rows($rd);

		class komen
		{
			public $foto,
			       $email,
			       $nama,
			       $isi,
			       $tanggal;
		}

		if ($jumlah_komen > 0) {
			while ($data_komen = $rd->fetch_assoc()) {
				
				$komen = new komen();

				$komen->nama = $data_komen['nama'];
				$komen->foto = $data_komen['foto'];
				$komen->email = $data_komen['email'];
				$komen->isi = $data_komen['isi'];
				$komen->tanggal = $data_komen['tanggal'];

				if (!function_exists('tanggal')) {
					include 'tanggal.php';
				}

			?>
			<div class="col-md-12 komen">
			<img src="images/profil_komen/<?= $komen->foto ?>" class="gambar">
			<div class="box2 sb11 col-md-3">
				<p class="user"><?= $komen->nama ?></p>	
				<span class="konten"><?= $komen->isi ?></span>
				<br>
				<span class="jam"><?= tanggal(date('d-m-Y',strtotime($komen->tanggal))) ?></span></div>
			</div>
			<?php
			}
		}
	}
	// Akhir Func Komentar

	function data_admin($id)
	{
		include 'config/db.php';

		$id = $_SESSION['id'];

		$q = "SELECT * FROM user WHERE id_user = $id";
		$rd = $conn->query($q);

		$jumlah_user = mysqli_num_rows($rd);
		$data_user = $rd->fetch_assoc();

		class admin
		{
			public $nama_adm,
				   $id_adm,
				   $foto_adm;
		}

		if ($jumlah_user == 1) {
			
			$admin = new admin();

			$admin->id_adm = $data_user['id_user'];
			$admin->nama_adm = $data_user['nama'];
			$admin->foto_adm = $data_user['foto'];

		}

		return $admin->id_adm . ',' . $admin->nama_adm . ',' . $admin->foto_adm;
	}
	// Data Admin

	function tampil_kategori_loop()
	{
		include 'config/db.php';

		$q = "SELECT * FROM tag ORDER BY id_kategori ASC";
		$rd = $conn->query($q);

		$jumlah_komen = mysqli_num_rows($rd);

		class kategori
		{
			public $id_kategori,
				   $nama_kategori;
		}

		if ($jumlah_komen > 0) {
			while ($data_kategori = $rd->fetch_assoc()) {
			
				$kategori = new kategori();

				$kategori->id_kategori = $data_kategori['id_kategori'];
				$kategori->nama_kategori = $data_kategori['kategori'];
			?>
				<option value="<?= $kategori->id_kategori ?>">
					<?= $kategori->nama_kategori ?>
				</option>
			<?php
			}
		}
	}
	// Akhir Kategori LOOP

	function tampil_berita_admin()
	{
		include 'config/db.php';

		$q = "SELECT id_berita FROM berita";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}
		
		$jumlah_data_halaman = 3;
		$jumlah_halaman = ceil($jumlah_berita / $jumlah_data_halaman);
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		?>
		<nav aria-label="...">
			<ul class="pagination">
				<?php if ($halaman_actf > 1) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span></a></li>
				<?php endif; ?>

				<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
					
					<?php if ($i == $halaman_actf) : ?>
					<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
					<?php else : ?>
					<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>

				<?php } ?>

				<?php if ($halaman_actf < $jumlah_halaman) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&raquo;</span></a></li>
				<?php endif; ?>
			</ul>
		</nav>
		<style type="text/css">
			.aktif{
				font-weight: bold;
			}
		</style>
		
		<?php

		class berita
		{
			public $id_berita,
				   $judul,
				   $tanggal,
				   $kategori;
		}

		$q = "SELECT id_berita,kategori,judul,tgl_post FROM berita INNER JOIN tag ON berita.id_kategori = tag.id_kategori ORDER BY id_berita DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if ($jumlah_berita > 0) {
			while ($data_berita = $rd->fetch_assoc()) {

				$berita = new berita();

				$berita->id_berita = $data_berita['id_berita'];
				$berita->judul = $data_berita['judul'];
				$berita->tanggal = $data_berita['tgl_post'];
				$berita->kategori = $data_berita['kategori'];

				if (!function_exists('tanggal')) {
					include 'sys/tanggal.php';
				}

			?>
			<tr align="center">
				<td>
					<a href="detail-berita?id=<?= $berita->id_berita ?>" target="_blank">
					<?= $berita->judul ?>
					</a>
				</td>
				<td><?= $berita->kategori ?></td>
				<td><?= tanggal(date('d-m-Y',strtotime($berita->tanggal))) ?></td>
				<td> 
					<a href="sys/sys_session_edt_berita.php?id_berita=<?= $berita->id_berita ?>" class="edit">edit</a> &nbsp; 
					<a href="sys/sys_hapus_berita.php?id_berita=<?= $berita->id_berita ?>" class="delete" onclick="javascript: return confirm('yakin?')">hapus</a>
				</td>
			</tr>
			<?php
			}
		}		
	}
	//Tampil Berita Admin

	function tampil_berita_adminsu()
	{
		include 'config/db.php';

		$q = "SELECT id_berita FROM berita";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 3;
		if ($jumlah_berita < 3) {
			$jumlah_halaman = 1;
		}else{
			$jumlah_halaman = ceil($jumlah_berita / $jumlah_data_halaman);	
		}
		
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		class berita
		{
			public $id_berita,
				   $judul,
				   $tanggal,
				   $kategori;
		}

		$q = "SELECT id_berita,kategori,judul,tgl_post FROM berita INNER JOIN tag ON berita.id_kategori = tag.id_kategori ORDER BY id_berita DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if ($jumlah_berita > 0) {
			while ($data_berita = $rd->fetch_assoc()) {

				$berita = new berita();

				$berita->id_berita = $data_berita['id_berita'];
				$berita->judul = $data_berita['judul'];
				$berita->tanggal = $data_berita['tgl_post'];
				$berita->kategori = $data_berita['kategori'];

				if (!function_exists('tanggal')) {
					include 'sys/tanggal.php';
				}

			?>
			<tr align="center">
				<td><a href="detail-berita?id=<?= $berita->id_berita ?>" target="_blank">
					<?= $berita->judul ?>
					</a></td>
				<td><?= $berita->kategori ?></td>
				<td><?= tanggal(date('d-m-Y',strtotime($berita->tanggal))) ?></td>
				<td>
					<a href="sys/sys_session_edt_berita.php?id_berita=<?= $berita->id_berita ?>" class="btn-edit">Edit</a>
					<a href="sys/sys_hapus_berita_su.php?id_berita=<?= $berita->id_berita ?>" class="btn-delete" onclick="javascript: return confirm('yakin?')">hapus</a>
				</td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
			<div class="text-center">
			<ul class="pagination">
				<?php if ($halaman_actf > 1) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf - 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span></a></li>
				<?php endif; ?>

				<?php for ($i=1; $i <= $jumlah_halaman ; $i++) { ?> 
					
					<?php if ($i == $halaman_actf) : ?>
					<li><a href="?hal=<?= $i ?>" class="aktif"><?php echo $i; ?></a></li>			
					<?php else : ?>
					<li><a href="?hal=<?= $i ?>"><?php echo $i; ?></a></li>
					<?php endif; ?>

				<?php } ?>

				<?php if ($halaman_actf < $jumlah_halaman) : ?>
					<li class=""><a href="?hal=<?= $halaman_actf + 1 ?>" aria-label="Previous">
					<span aria-hidden="true">&raquo;</span></a></li>
				<?php endif; ?>
			</ul>
		<?php 
		}		
	}
	//Tampil Berita Adminsu

	function tampil_berita_adminsu_awal(){

		include 'config/db.php';

		class berita
		{
			public $id_berita,
				   $judul,
				   $tanggal,
				   $kategori;
		}

		$q = "SELECT id_berita,kategori,judul,tgl_post FROM berita INNER JOIN tag ON berita.id_kategori = tag.id_kategori ORDER BY id_berita DESC LIMIT 0,3";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if ($jumlah_berita > 0) {
			$i = 1;
			while ($data_berita = $rd->fetch_assoc()) {

				$berita = new berita();

				$berita->id_berita = $data_berita['id_berita'];
				$berita->judul = $data_berita['judul'];
				$berita->tanggal = $data_berita['tgl_post'];
				$berita->kategori = $data_berita['kategori'];

				if (!function_exists('tanggal')) {
					include 'sys/tanggal.php';
				}

			?>
			<tr align="center">
            	<td><?= $i ?></td>
            	<td><a href="detail-berita?id=<?= $berita->id_berita ?>" target="_blank">
					<?= $berita->judul ?>
					</a></td>
            	<td><?= $berita->kategori ?></td>
            	<td><?= tanggal(date('d-m-Y',strtotime($berita->tanggal))) ?></td>
          	</tr>
			<?php
			$i++;
			}
		}
	}
	// tampil_berita_adminsu_awal

	function tampil_log_admin()
	{
		include 'config/db.php';

// 		$q_log = "SELECT
// web_sekolah2.log.aktivitas,
// web_sekolah2.log.jam,
// web_sekolah2.log.tanggal,
// web_sekolah2.`user`.nama
// FROM
// web_sekolah2.log
// INNER JOIN web_sekolah2.`user` ON web_sekolah2.log.user_id = web_sekolah2.`user`.id_user ORDER BY id_user DESC
// ";
        
        $q_log = "SELECT * FROM log INNER JOIN user ON log.user_id = user.id_user ORDER BY id_user DESC";
        
		$rd = $conn->query($q_log);

		$jumlah_data_log = mysqli_num_rows($rd);

		if ($jumlah_data_log > 0) {
			while ($data_log = $rd->fetch_assoc()) { 
				if (!function_exists('tanggal')) {
					include 'sys/tanggal.php';
				}
				?>
				<div class="riwayat">
            		<div class="riwayat-head">
              			<span><i class="far fa-user"></i>&nbsp;<?= $data_log['nama'] ?></span>
            		</div>
		            <div class="riwayat-body">
		              <p class="log-activity"><?= $data_log['aktivitas'] ?></p>
		              <span class="log-history"><?= tanggal(date('d-m-Y',strtotime($data_log['tanggal']))) ?> , <?= $data_log['jam'] ?></span>
		        	</div>
		        </div>				
			<?php
			}
		}
	}

	function tampil_kategori_adm()
	{
		include 'config/db.php';

		class kategori
		{
			public $id_kategori,
				   $kategori;
		}

		$q = "SELECT * FROM tag ORDER BY id_kategori DESC";
		$rd = $conn->query($q);

		$jumlah_kategori = mysqli_num_rows($rd);

		if ($jumlah_kategori > 0) {
			while ($data_kategori = $rd->fetch_assoc()) {
				
				$kategori = new kategori();

				$kategori->id_kategori = $data_kategori['id_kategori'];
				$kategori->kategori = $data_kategori['kategori'];
			?>
				<tr align="center">
					<td><?= $kategori->id_kategori ?></td>
					<td><?= $kategori->kategori ?></td>
					<td>
						<?php 
							$link = "sys_hapus_kategori.php?id_kategori=$kategori->id_kategori";
							if (!$kategori->id_kategori == 0) {?>
								<a href="sys/<?= $link ?>" class="delete" onclick="javascript: return confirm('yakin?')">		Delete
								</a>
						<?php
							}
						?>
					</td>
				</tr>
			<?php
			}
		}
	}
	//Kategori ADM

	function tampil_jumlah_berita()
	{
		include 'config/db.php';

		$q = "SELECT id_berita FROM berita";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		return $jumlah_berita;
	}
	//jumlah berita

	function berita_terakhir()
	{
		include 'config/db.php';

		$q = "SELECT tgl_post FROM berita";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if ($jumlah_berita > 0) {
			$data = $rd->fetch_assoc();

			return $data['tgl_post'];
		}
	}
	// berita terakhir

	function tampil_jumlah_komentar()
	{
		include 'config/db.php';

		$q = "SELECT id_komen FROM komen WHERE status='diproses'";
		$rd = $conn->query($q);

		$jumlah_komen = mysqli_num_rows($rd);
		
		return $jumlah_komen;
	}
	// tampil_jumlah_komentar

	function tampil_jumlah_agenda()
	{
		include 'config/db.php';

		$q = "SELECT id_agenda FROM agenda";
		$rd = $conn->query($q);

		$jumlah_agenda = mysqli_num_rows($rd);

		return $jumlah_agenda;
	}
	// tampil_jumlah_agenda

	function tampil_terima_komen_adm()
	{
		include 'config/db.php';

		class komen
		{
			public $id_komen,
				   $foto,
				   $email,
				   $nama,
				   $isi,
				   $tanggal,
				   $status;
		}

		$q_terima = "SELECT * FROM komen WHERE status='diproses'";
		$rd = $conn->query($q_terima);

		$jumlah_komen = mysqli_num_rows($rd);

		if ($jumlah_komen > 0) {
			while ($data_komen = $rd->fetch_assoc()) {
				
				$komen = new komen();

				$komen->id_komen = $data_komen['id_komen'];
				$komen->foto = $data_komen['foto'];
				$komen->email = $data_komen['email'];
				$komen->nama = $data_komen['nama'];
				$komen->isi = $data_komen['isi'];
				$komen->tanggal = $data_komen['tanggal'];
				$komen->status = $data_komen['status'];

				$link = "sys/sys_terima_komen.php?id_komen=$komen->id_komen";

				if (!function_exists('tanggal')) {
					include 'tanggal.php';
				}
			?>
				<tr align="center">
					<td><img src="images/profil_komen/<?= $komen->foto ?>" class="img-profile"></td>
					<td><?= $komen->email ?></td>
					<td><?= $komen->nama ?></td>
					<td><?= $komen->isi ?></td>
					<td><?= tanggal(date('d-m-Y',strtotime($komen->tanggal))) ?></td>
					<td>
						<a href="<?= $link ?>" class="edit" onclick="javascript: return confirm('Tampilkan Komentar?')">Tampilkan</a><br>
						<!-- <button class="delete" onclick="myfunction()">Tolak</button> -->
					</td>
				</tr>
			<?php
			}
		}
	}
	//Tampil Terima Komen ADM

	function tampil_tolak_komen_adm()
	{
		include 'config/db.php';

		class komen_tolak
		{
			public $id_komen,
				   $foto,
				   $email,
				   $nama,
				   $isi,
				   $tanggal,
				   $status;
		}

		$q_terima = "SELECT * FROM komen WHERE status='diterima'";
		$rd = $conn->query($q_terima);

		$jumlah_komen = mysqli_num_rows($rd);

		if ($jumlah_komen > 0) {
			while ($data_komen = $rd->fetch_assoc()) {
				
				$komen = new komen_tolak();

				$komen->id_komen = $data_komen['id_komen'];
				$komen->foto = $data_komen['foto'];
				$komen->email = $data_komen['email'];
				$komen->nama = $data_komen['nama'];
				$komen->isi = $data_komen['isi'];
				$komen->tanggal = $data_komen['tanggal'];
				$komen->status = $data_komen['status'];

				$link = "sys/sys_tarik_komen.php?id_komen=$komen->id_komen";

				if (!function_exists('tanggal')) {
					include 'tanggal.php';
				}
			?>
				<tr align="center">
					<td><img src="images/profil_komen/<?= $komen->foto ?>" class="img-profile"></td>
					<td><?= $komen->email ?></td>
					<td><?= $komen->nama ?></td>
					<td><?= $komen->isi ?></td>
					<td><?= tanggal(date('d-m-Y',strtotime($komen->tanggal))) ?></td>
					<td>
						<!-- <a href="" class="edit" onclick="myfunction()">Tampilkan</a><br> -->
						<a href="<?= $link ?>" class="delete" onclick="javascript: return confirm('Tarik Komentar?')">Tarik</a>
					</td>
				</tr>
			<?php
			}
		}
	} 
	// Tolak Komen Adm

	function agenda_adm()
	{
		include 'config/db.php';

		class agenda
		{
			public $id_agenda,
				   $nama_agenda,
				   $tanggal_agenda,
				   $lokasi_agenda,
				   $deskripsi_agenda;
		}

		$q = "SELECT * FROM agenda";
		$rd = $conn->query($q);

		$jumlah_agenda = mysqli_num_rows($rd);

		if ($jumlah_agenda > 0) {
			while ($data_agenda = $rd->fetch_assoc()) {
				
				$agenda = new agenda();

				$agenda->id_agenda = $data_agenda['id_agenda'];
				$agenda->nama_agenda = $data_agenda['nama_agenda'];
				$agenda->tanggal_agenda = $data_agenda['tgl'];
				$agenda->lokasi_agenda = $data_agenda['lokasi'];
				$agenda->deskripsi_agenda = $data_agenda['deskripsi'];

				if (!function_exists('tanggal')) {
					include 'tanggal.php';
				}
			?>
				<tr align="center">
					<td><?= $agenda->nama_agenda ?></td>
	            	<td><?= tanggal(date('d-m-Y',strtotime($agenda->tanggal_agenda))) ?></td>
	            	<td><?= $agenda->lokasi_agenda ?></td>
	            	<td><?= $agenda->deskripsi_agenda ?></td>
		            <td>
		              <a href="sys/sys_session_edt_agenda.php?id_agenda=<?= $agenda->id_agenda ?>" class="edit">Edit</a>
		              <a href="sys/sys_hapus_agenda.php?id_agenda=<?= $agenda->id_agenda ?>" class="delete" onclick="javascript: return confirm('yakin?')">Hapus</a>
		            </td>
		        </tr>
			<?php
			}
		}
	}
	// tampil_agenda_adm

	function tampil_pimpinan_adm()
	{ 
		include 'config/db.php';

		$q = "SELECT * FROM kepemimpinan";
		$rd = $conn->query($q);

		$jumlah_kepemimpinan = mysqli_num_rows($rd);

		if ($jumlah_kepemimpinan > 0) 
			{
				while ($data_pemimpin = $rd->fetch_assoc()) {
					echo '<tr align="center">
						<td><img src="images/foto_kepemimpinan/'. $data_pemimpin['foto'] .'" class="img-profile"></td>
						<td>'. $data_pemimpin['nama'] .'</td>
						<td>'. $data_pemimpin['jabatan'] .'</td>
						<td>'. $data_pemimpin['facebook'] .'</td>
						<td>'. $data_pemimpin['instagram'] .'</td>
						<td> 
							<div class="dsd">
							<a href="sys/sys_session_edt_kepemimpinan.php?id_kepemimpinan='. $data_pemimpin['id_kepemimpinan'] .'" class="edit">Edit</a><br>
						'?>
						<a href="sys/sys_hapus_kepemimpinan.php?id_kepemimpinan=<?= $data_pemimpin['id_kepemimpinan'] ?>" class="delete" onclick="javascript: return confirm('yakin?')">Hapus</a>
						</div>
						</td>
					</tr>		
			<?php
				}
			}		
	}

	function tampil_pimpinan()
	{ 
		include 'config/db.php';

		$q = "SELECT * FROM kepemimpinan";
		$rd = $conn->query($q);

		$jumlah_kepemimpinan = mysqli_num_rows($rd);

		if ($jumlah_kepemimpinan > 0) 
			{
				while ($data_pemimpin = $rd->fetch_assoc()) {
					echo '<div class="col-md-4 col-sm-4">
				<div class="backup">
					<img src="foto_kepemimpinan/'. $data_pemimpin['foto'] .'" class="img-responsive">
					<div class="post-content">
						<h2 class="nama-guru">'. $data_pemimpin['nama'] .'</h2>
						<p class="jabatan">'. $data_pemimpin['jabatan'] .'</p>
						<div class="">
							<a href="'. $data_pemimpin['instagram'] .'"><i class="fab fa-instagram" id="ig"></i></a>
							<a href="'. $data_pemimpin['facebook'] .'"><i class="fab fa-facebook-f" id="fb"></i></a>
						</div>
					</div>
					</div>
				</div>';		
				}
			}		
	}
?>