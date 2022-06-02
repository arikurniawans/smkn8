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
  <link rel="stylesheet" href="assets2/css/adminsu/stylesu.css">
  <link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
  <script src="assets2/js/jquery.min.js"></script>
  <script src="assets2/js/bootstrap.min.js"></script>
  <script src="assets2/js/tog-admin.js"></script>
</head>
<body>
  <?php include 'template/adminsu.php';?>
  <div class="page-backup">
    <div class="col-md-12">
      <p class="all-info"><i class="fas fa-history"></i>&nbsp;Riwayat Admin :</p>
    </div>
  </div>

  <div class="col-md-5 col-sm-5 page-backup-1"> 
    <p class="add-news">Riwayat Admin</p>
    <div class="perintah">
      <p>Ini adalah halaman riwayat admin.Jadi, anda dapat memantau segala aktivitas yang dilakukan oleh admin</p>
    </div>
  </div>
  <div class="col-md-7 col-sm-7 page-backup-1">
        <p class="add-news">Daftar Riwayat Admin</p>
    <div class="card log-card">
      
    <?php  
        if (!function_exists('tampil_log_admin')) {
            include 'sys/function.php'; 
        }
        tampil_log_admin();
    ?>

    </div>
  </div>
