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
  <link rel="stylesheet" href="assets2/css/adminsu/upload-file-su.css">
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
      <p class="all-info"><i class="far fa-handshake"></i>&nbsp;Daftar Kerjasama Industri :</p>
    </div>
  </div>
  <div class="col-md-5 col-sm-5"> 
    <p class="add-news">Tambah Data Industri Baru</p>
    <form action="sys/sys_tambah_mou.php" method="POST" class="perintah" enctype="multipart/form-data">
      <p>Foto Industri:</p>
      <input type="file" class="loking" multiple accept='image/*' name="foto">
      <br>
      <p>Nama Industri :</p>
      <input type="text" class="form-control" name="nama">
      <br>
      <p>Alamat Industri :</p>
      <textarea class="form-control" rows="3" name="alamat"></textarea>
      <br>
      <button class="button-add" name="upload">Unggah</button>
    </form>
  </div>
  <div class="col-md-8 col-sm-7"><!-- biar saja kosong --></div>
  <!--  -->
  <div class="col-md-12 page-backup">
    <p class="all-info"><i class="far fa-handshake"></i>&nbsp;Daftar kerjasama Industri</p>
    <span>Show</span>&nbsp;
    <select class="select">
      <option>10</option>
      <option>50</option>
      <option>100</option>
    </select>
    <table class="table table-bordered">
      <thead>
        <tr align="center">
          <td>Foto Industri</td>
          <td>Nama Industri</td>
          <td>Alamat Industri</td>
          <td>Tindakan</td>
        </tr>
      </thead>
      <tbody>
          <?php  
            include 'sys/config/db.php';

            $q = "SELECT * FROM mou ORDER BY id_mou DESC";
            $rd = $conn->query($q);

            $jumlah = mysqli_num_rows($rd);
            if ($jumlah > 0) {
               while ($data = $rd->fetch_assoc()) { ?>
                    <tr align="center">
                      <td><img src="images/foto_mou/<?= $data['foto'] ?>" class="img-fasilitas" alt=""></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?= $data['alamat'] ?></td>
                      <td>
                        <a href="edit-mou?id=<?= $data['id_mou'] ?>" class="btn-edit">Edit</a>
                        <a href="sys/sys_hapus_mou.php?id=<?= $data['id_mou'] ?>" class="btn-delete">Hapus</a>
                      </td>
                    </tr>     
               <?php }
            }
          ?>
        </tbody>
      </table>
    </body>
    </html>