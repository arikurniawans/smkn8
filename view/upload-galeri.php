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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/css/adminsu/list-admin.css">
  <link rel="stylesheet" href="assets2/css/adminsu/adminsu.css">
  <link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
  <script src="assets2/js/jquery.min.js"></script>
  <script src="assets2/js/bootstrap.min.js"></script>
  <script src="assets2/js/tog-admin.js"></script>
</head>
<body>
  <?php include 'template/adminsu.php';?>
  <div class="page-backup">
    <div class="col-md-12">
      <p class="all-info"><i class="far fa-image"></i>&nbsp;Upload Foto Galeri :</p>
    </div>
  </div>

  <div class="col-md-4 col-sm-5 page-backup-1"> 
    <p class="add-news">Tambahkan Foto Baru</p>
    <form action="sys/sys_tambah_galeri.php" method="Post" enctype="multipart/form-data" class="perintah">
      <p>Tambah Foto:</p>
      <input type="file" name="data" class="loking form-control upload-file">
      <br>
      <button class="button-add" name="tambah">Unggah</button>
    </form>
  </div>
  <div class="col-md-12 col-sm-7 page-backup mb"> 
    <p class="add-news">Daftar Semua Foto</p>
    <div class="container-fluid perintah scroll">
      
        <?php  
          if (!function_exists('tampil_galeri_adm')) {
             include 'sys/function.php';
          }
          tampil_galeri_adm();
        ?>
        
      </div>
    </div>
  </body>
  </html>
  <script>  
    function myfunc() {
      var txt;
      if (confirm("anda yakin untuk menghapus foto ini ?")) {
        alert('foto berhasil dihapus !');
      }else {
        alert('foto gagal dihapus');
      }
    }
  </script>