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
      <p class="all-info"><i class="far fa-image"></i>&nbsp;Pengaturan Slider Jurusan :</p>
    </div>
  </div>
  <div class="col-md-5 col-sm-5"> 
    <p class="add-news">Tambah Gambar Baru</p>
    <form action="sys/sys_tambah_prestasi_jurusan.php" method="POST" enctype="multipart/form-data" class="perintah">
      <p>Nama Jurusan:</p>
      <select class="form-control" name="jurusan">
      <?php  
        include 'sys/config/db.php';

        $q_jurusan = "SELECT id_jurusan,nama_jurusan FROM jurusan ORDER BY id_jurusan DESC";
        $rd_j = $conn->query($q_jurusan);

        $jumlah_jurusan = mysqli_num_rows($rd_j);

        if ($jumlah_jurusan > 0) {
           while ($data_jurusan = $rd_j->fetch_assoc()) { ?>
                  <option value="<?= $data_jurusan['id_jurusan'] ?>" ><?= $data_jurusan['nama_jurusan'] ?></option>
           <?php }
        }
      ?>
      </select>     
      <br>
      <p>Tambah Gambar:</p>
      <input type="file" class="loking" multiple accept='image/*' name="foto">
      <br>
      <button class="button-add" name="tambah">Unggah</button>
    </form>
  </div>
  <div class="col-md-8 col-sm-7"><!-- biar saja kosong --></div>
  <!--  -->
  <div class="col-md-12 page-backup">
    <p class="all-info"><i class="far fa-image"></i>&nbsp;Daftar Slider Jurusan</p>
    <span>Show</span>&nbsp;
    <select class="select">
      <option>10</option>
      <option>50</option>
      <option>100</option>
    </select>
    <table class="table table-bordered">
      <thead>
        <tr align="center">
          <td>Foto Prestasi</td>
          <td>Nama Jurusan</td>
          <td>Tindakan</td>
        </tr>
      </thead>
      <tbody>
          <?php  
            include 'sys/config/db.php';

            $q = "SELECT id_foto,nama_jurusan,nama_foto FROM foto_prestasi_jurusan INNER JOIN jurusan ON foto_prestasi_jurusan.id_jurusan = jurusan.id_jurusan ORDER BY id_foto DESC";
            $rd = $conn->query($q);

            $jumlah_foto = mysqli_num_rows($rd);

            if ($jumlah_foto > 0) {
                while ($data = $rd->fetch_assoc()) { ?>
                 
            <tr align="center">
              <td><img src="images/foto_prestasi_jurusan/<?= $data['nama_foto'] ?>" class="img-fasilitas" alt=""></td>
              <td><?= $data['nama_jurusan'] ?></td>
              <td>
                <a href="sys/sys_hapus_foto_prestasi_jurusan.php?id=<?= $data['id_foto'] ?>" class="btn-delete">Hapus</a>
              </td>
            </tr>

           <?php
                }
            }
          ?>
        
      </tbody>
    </table>
  </body>
  </html>