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
  <title>Beranda - Web sekulah</title>
  <link href="assets22/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets22/css/admin/admin.css">  
  <link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
  <script src="assets2/js/jquery.min.js"></script>
  <script src="assets2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets2/js/tog-admin.js"></script>
</head>
<body>
  <?php include 'template/adm-menu.php'; ?>
  <!--  -->
  <div id="page-content-container">
    <div class="container-fluid admin-tool">
      <div class="row">
        <div class="col-lg-12">
          <p class="opening">Selamat datang di halaman Admin</p>
          <!--  -->
          <div class="col-md-4 content-open">
            <p class="title-opening">Segera Mulai : </p>
            <a href="tambah-info" class="get-started">Tambah Informasi</a>
          </div>
          <!--  -->
          <!--  -->
          <div class="col-md-4 content-open">
            <p class="title-opening">Langkah Selanjutnya : </p>
            <p class="list-feature"><a href="tambah-agenda"><i class="fas fa-plus ic-feature"></i>&nbsp; <span>Tambah Agenda Baru</span></a></p>
            <p class="list-feature"><a href="semua-info"><i class="fa fa-pencil-alt ic-feature"></i>&nbsp; <span>Ubah Informasi</span></a></p>
            <p class="list-feature"><a href=""><i class="fas fa-list-alt ic-feature"></i>&nbsp; <span>Lihat websitemu</span></a></p>
          </div>
          <!--  -->
          <!--  -->
          <div class="col-md-4 content-open">
            <p class="title-opening">Lainnya : </p>
            <p class="list-feature"><a href=""><i class="fas fa-book ic-feature"></i>&nbsp; <span>Baca tentang Panduan</span></a></p>
          </div>
          <!--  -->
        </div>
      </div>
    </div>
  </div>
  <!-- akhir -->
  <div id="page-content-container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 admin-tool">
          <p class="title-opening">Notifikasi : </p>
          <!-- nontofikasi -->
          <div class="col-md-6">
            <p class="list-feature">
              <a href="semua-info"><i class="fas fa-table ic-feature"></i>&nbsp; 
                <span>
                  <?php 
                    if (!function_exists('tampil_jumlah_berita')) {
                      include 'sys/function.php';
                    }
                    echo tampil_jumlah_berita();
                  ?> Post
                </span>
              </a>
            </p>
          </div>
          <div class="col-md-6">
            <p class="list-feature"><a href="komen"><i class="far fa-comment-alt ic-feature"></i></i>&nbsp; <span>
              <?php

                if (!function_exists('tampil_jumlah_komentar')) {
                    include 'sys/function.php';
                }
                echo tampil_jumlah_komentar();
              ?>
               Komentar
            </span>
            </a>
            </p>
          </div>
        </div>
        <!-- akhir-nontifikasi -->
        <div class="col-md-5 upload admin-tool" style="margin-left: 10px;">
          <p class="title-opening">Baru-Baru ini Diunggah : </p>
          <p class="list-feature">
            <a href="semua-info"><i class="far fa-newspaper ic-feature"></i>&nbsp; Berita terbaru<span class="date-news">
             <?php

                if (!function_exists('berita_terakhir')) {
                    include 'sys/function.php';
                }
                echo berita_terakhir();
              ?>
              </span></a></p>
            <!-- <a href="semua-info"><i class="far fa-newspaper ic-feature"></i>&nbsp; Berita terbaru<span class="date-news">20 Sep, 8:16 am</span></a></p> -->
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>