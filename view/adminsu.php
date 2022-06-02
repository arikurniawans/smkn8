<?php

  if (!function_exists('cek')) {
    include 'sys/sys_cek_login.php';
  } 
  cek_ingat();

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
  <title>Document</title>
  <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
  <link rel="stylesheet" href="assets2/css/adminsu/stylesu.css">
  <script src="assets2/js/jquery.min.js"></script>
  <script src="assets2/js/bootstrap.min.js"></script>
  <script src="assets2/js/tog-admin.js"></script>
</head>
<body>
  <?php include 'template/adminsu.php'; ?>
  <div class="license">
    <i class="fas fa-home" ></i> &nbsp;<span>Simetriz Dashboard Vol 1.0</span>
  </div>
  <!--  -->
  <div class="page-backup">
    <!--  -->
    <div class="col-md-4 col-sm-4">  
      <div class="card">
        <i class="far fa-newspaper item1 color1"></i>
        <span class="jumlah"><?= tampil_jumlah_berita(); ?></span>
        <span class="detail">Informasi</span>
      </div>
    </div>
    <!--  -->
    <div class="col-md-4 col-sm-4">  
      <div class="card">
        <i class="far fa-calendar-alt item1"></i>
        <span class="jumlah"><?= tampil_jumlah_agenda(); ?></span>
        <span class="detail">Agenda</span>
      </div>
    </div>
    <!--  -->
    <div class="col-md-4 col-sm-4">  
      <div class="card">
        <i class="far fa-comment-alt item1 color2"></i>
        <span class="jumlah"><?= tampil_jumlah_komentar(); ?></span>
        <span class="detail">Komentar</span>
      </div>
    </div>
    <!--  -->
  </div>
  <div class="page-backup">
    <div class="col-md-8">
      <span class="all-info"><i class="far fa-newspaper"></i>&nbsp;Daftar Semua Informasi</span>
      <p class="in-info">
        <a href="tambah-info-su" class="insert-info">Tambah Informasi</a>
      </p>
      <table class="table table-bordered">
        <thead>
          <tr align="center">
            <td>No</td>
            <td>Judul</td>
            <td>Kategori</td>
            <td>Tanggal Unggah</td>
          </tr>
        </thead>
        <tbody>
          <?php

            if (!function_exists('tampil_berita_adminsu_awal')) {  
               include 'sys/function.php';
            }
            tampil_berita_adminsu_awal();

          ?>
        </tbody>
      </table>
      <p class="in-info">
        <a href="semua-info-su?hal=1" class="insert-info">Lihat Berita Lainnya</a>
      </p>
    </div>
    <div class="col-md-4 col-sm-12">
      <span class="all-info"><i class="fas fa-history"></i>&nbsp;Log Admin</span> 
      <div class="card log-card">
        <?php  
           if (!function_exists('tampil_log_admin')) {  
               include 'sys/function.php';
            }
            tampil_log_admin();
        ?>
      </div>
    </div>
  </div>
</body>
</html>