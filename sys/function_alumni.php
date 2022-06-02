<?php  

	function table_alumni()
	{ ?>
		<table style="" class="table-margin">
					<thead>
						<tr>
							<th>No</th>
							<th>NISN</th>				
							<th>Nama</th>
							<th>Jurusan</th>
							<th>Tahun Lulus</th>
							<th>Status</th>
							<th>Nomor telepon</th>
							<th>Email</th> 
						</tr>
					</thead>
				<tbody>
		<?php 
		include 'config/db.php';

		$q = "SELECT id_alumni FROM alumni";
		$rd = $conn->query($q);

		$jumlah_berita = mysqli_num_rows($rd);

		if (isset($_GET['hal'])) {
			$halaman_actf = $_GET['hal'];
		}else {
			$halaman_actf = 1;
		}
		
		$jumlah_data_halaman = 10;

		if ($jumlah_berita < 3) {
			$jumlah_halaman = 1;
		}else {
			$jumlah_halaman = ceil($jumlah_berita / $jumlah_data_halaman);
		}
		
		$awal_data = ($jumlah_data_halaman * $halaman_actf) - $jumlah_data_halaman;

		if (isset($_GET['nama'])) {
			
			$nama = $_GET['nama'];

			$q = "SELECT nisn,nama,tahun_lulus,status,nomor_telepon,email,nama_jurusan,tampilkan FROM alumni INNER JOIN jurusan ON alumni.jurusan = jurusan.id_jurusan WHERE nama LIKE '%$nama%' ORDER BY id_alumni DESC LIMIT $awal_data,$jumlah_data_halaman";

		}else{
			$q = "SELECT nisn,nama,tahun_lulus,status,nomor_telepon,email,nama_jurusan,tampilkan FROM alumni INNER JOIN jurusan ON alumni.jurusan = jurusan.id_jurusan ORDER BY id_alumni DESC LIMIT $awal_data,$jumlah_data_halaman";
		}

		$rd = $conn->query($q);

		$jumlah_file = mysqli_num_rows($rd);

		if ($jumlah_file > 0) {
			$no = 1; 
			while ($data = $rd->fetch_assoc()) { 
			?>
			<tr>
				<td data-column="No" class="first"><?= $no ?></td>
				<td data-column="Nisn"><?= $data['nisn'] ?></td>
				<td data-column="Nama"><?= $data['nama'] ?></td>
				<td data-column="Jurusan"><?= $data['nama_jurusan'] ?></td>
				<td data-column="Tahun Lulus"><?= $data['tahun_lulus'] ?></td>
				<td data-column="Status"><?= $data['status'] ?></td>
				<td data-column="Nomor">
				    <?php
				        if ($data['tampilkan'] == "ya"){
				            echo $data['nomor_telepon'];
				        }else{
				            echo substr($data['nomor_telepon'], 0,10) . "xxx";
				        }
				    ?>
				</td>
				<td data-column="Email"><?= $data['email'] ?></td>
			</tr>
		<?php $no++ ?>
		<?php } } ?>
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
	    <style type="text/css">
			.aktif{
				font-weight: bold;
			}
		</style>
		<?php 
	}
	// tampil table alumni

	function table_lowongan()
	{ ?>
		<table class="table table-bordered">
			<thead class="table-head">
				<tr align="center">
					<td>Logo Industri</td>
					<td>Nama Industri</td>
					<td>Jabatan Yang Dicari</td>
					<td>Kategori Pekerjaan</td>
					<td>Tanggal Unggah</td>
					<td>tindakan</td>
				</tr>
			</thead>
			<tbody>
		<?php 
		include 'sys/config/db.php';

		$q = "SELECT id_alumni FROM alumni";
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

		$q = "SELECT id_lowongan,foto_industri,nama_industri,profesi,Kategori_kerja,tanggal FROM lowongan_pekerjaan INNER JOIN kategori_pekerjaan ON lowongan_pekerjaan.kategori_pekerjaan = kategori_pekerjaan.id_kategori ORDER BY id_lowongan DESC LIMIT $awal_data,$jumlah_data_halaman";
		$rd = $conn->query($q);

		$jumlah_file = mysqli_num_rows($rd);

		if ($jumlah_file > 0) { 
			while ($data = $rd->fetch_assoc()) { 
				if (!function_exists('tanggal')) {
					include 'tanggal.php';
				}
			?>
			<tr align="center">
					<td><img src="images/foto_lowongan/<?= $data['foto_industri'] ?>" class="img-profile"></td>
					<td><?= $data['nama_industri'] ?></td>
					<td><?= $data['profesi'] ?></td>
					<td>Office</td>
					<td><?= tanggal(date('d-m-Y',strtotime($data['tanggal']))) ?></td>
					<td>
						<a href="edit-lowongan-su?id_lowongan=<?= $data['id_lowongan'] ?>" class="btn-edit">Edit</a>
						
						<a href="sys/sys_hapus_lowongan.php?id_lowongan=<?= $data['id_lowongan'] ?>" class="btn-delete">Hapus</a>
					</td>
				</tr>
		<?php } } ?>
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
		<?php
	}
?>