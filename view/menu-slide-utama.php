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
      <p class="all-info"><i class="far fa-image"></i>&nbsp;Pengaturan Slider Utama :</p>
    </div>
  </div>
  <div class="col-md-5 col-sm-5"> 
    <p class="add-news">Tambah Gambar Baru</p>
    <form method="POST" action="sys/sys_tambah_slider_utama.php" class="perintah" enctype="multipart/form-data">
      <p>Tambah Gambar:</p>
      <input type="file" class="loking" name="foto" multiple accept='image/*'>
      <br>
      <button class="button-add" name="tambah">Unggah</button>
    </form>
  </div>
  <div class="col-md-8 col-sm-7"><!-- biar saja kosong --></div>
  <!--  -->
  <div class="col-md-12 page-backup">
    <p class="all-info"><i class="far fa-image"></i>&nbsp;Daftar Slider Utama</p>
    <span>Show</span>&nbsp;
    <select class="select">
      <option>10</option>
      <option>50</option>
      <option>100</option>
    </select>
    <table class="table table-bordered">
      <thead>
        <tr align="center">
          <td>Foto Slider</td>
          <td>Tindakan</td>
        </tr>
      </thead>
      <tbody>
        <?php  
          include 'sys/config/db.php';
          
          $q = "SELECT * FROM slider_utama ORDER BY id DESC";
          $rd = $conn->query($q);

          $jum = mysqli_num_rows($rd);
          if ($jum > 0) {
            while ($data = $rd->fetch_assoc()) { ?>
            <tr align="center">
              <td><img src="images/foto-slider/<?= $data['foto'] ?>" class="img-fasilitas" alt=""></td>
              <td>
                <a href="sys/sys_hapus_slider.php?id=<?= $data['id'] ?>" class="btn-delete">Hapus</a>
              </td>
            </tr>      
          <?php }  
          }          
        ?>
          
        </tbody>
      </table>
      <!-- <div class="text-center">
        <ul class="pagination">
          <li><a href="#"><i class="fas fa-angle-left"></i></a></li>
               
          <li><a href="#"></a></li>   
          
          <li><a href="#"><i class="fas fa-angle-right"></i></a>
          </li>
        </ul>
      </div> -->
    </body>
    </html>