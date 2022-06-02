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
      <p class="all-info"><i class="fas fa-user-cog"></i>&nbsp;Pengaturan Admin:</p>
    </div>
  </div>

  <div class="col-md-5 col-sm-5 page-backup-1"> 
    <p class="add-news">Daftar Admin Baru</p>
    <form action="sys/sys_daftar_admin.php" method="POST" class="perintah" enctype="multipart/form-data">
      <p>Nama:</p>
      <input type="text" class="form-control" name="nama">
      <br>
      <p>Email:</p>
      <input type="email" class="form-control" name="email">
      <br>
      <p>Password:</p>
      <input type="password" class="form-control" name="password">
      <br>
      <p>Foto:</p>
      <input type="file" class="loking form-control upload-file" name="foto">
      <br>
      <button class="button-add" name="daftar">Daftar</button>
    </form>
  </div>
  <div class="col-md-7 col-sm-7 page-backup-1"> 
    <p class="add-news">List Admin yang terdaftar</p>
    <div class="container-fluid perintah scroll">
        <?php  
          include 'sys/config/db.php';

          $q = "SELECT * FROM user";
          $rd = $conn->query($q);

          $jumlah = mysqli_num_rows($rd);

          if ($jumlah > 0) {
             while ($data = $rd->fetch_assoc()) { ?>
               
        <div class=" col-md-12 perintah">
          <p align="right" class="button-backup">
            <a href="sys/sys_hapus_admin.php?id=<?= $data['id_user'] ?>" onclick="myfunc()" class="d button-close"></a>
            <i class="far fa-trash-alt"></i></button>
          </p>
            <div class="backup-list">
              <div class="col-md-4 data-gambar">
                <img src="images/profil_admin/<?= $data['foto'] ?>" class="img-responsive" alt="">
              </div>
              <div class="col-md-8 data-login">
                <p>Nama : <span><?= $data['nama'] ?></span></p>
                <p>Email : <span><?= $data['email'] ?></span></p>
              </div>
            </div>
          </div>
        
         <?php }
          }
        ?>
      </div>
    </div>
  </body>
  </html>
  <script>  
    function myfunc() {
      var txt;
      if (confirm("anda yakin untuk menghapus data ini ?")) {
        alert('data berhasil dihapus !');
      }else {
        alert('data gagal dihapus');
      }
    }
  </script>