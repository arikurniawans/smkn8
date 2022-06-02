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
      <p class="all-info"><i class="fas fa-store-alt"></i>&nbsp;Fasilitas Sekolah :</p>
    </div>
  </div>
  <div class="col-md-4 col-sm-5"> 
    <p class="add-news">Tambah Fasilitas Baru</p>
    <form action="sys/sys_tambah_fasilitas.php" method="POST" enctype="multipart/form-data" class="perintah">
      <p>Nama Fasilitas:</p>
      <input type="text" class="form-control" name="nama">
      <br>
      <p>Foto Fasilitas:</p>
      <input type="file" class="loking" multiple accept='image/*' name="foto">
      <br>
      <button class="button-add" name="tambah">Unggah</button>
    </form>
  </div>
  <div class="col-md-8"><!-- biar saja kosong --></div>
  <!--  -->
  <div class="col-md-12 page-backup">
    <p class="all-info"><i class="fas fa-store-alt"></i>&nbsp;Daftar Unggahan Foto</p>
    <span>Show</span>&nbsp;
    <select class="select">
      <option>10</option>
      <option>50</option>
      <option>100</option>
    </select>
    <table class="table table-bordered">
      <thead>
        <tr align="center">
          <td>Foto Fasilitas</td>
          <td>Nama Fasilitas</td>
          <td>Tindakan</td>
        </tr>
      </thead>
      <tbody>
        
          <?php  
              if (!function_exists('tampil_fasilitas_su')) {
                  include 'sys/function.php';
              }
              tampil_fasilitas_su();
          ?>

      </tbody>
    </table>
    <!-- edit-Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="col-md-6 col-md-offset-4">
          <div class="modal-content">
            <p align="right">
            <button data-dismiss="modal" class="d">X</button></p>
            <div class="modal-body">
              <div class="test" style="margin-top: -13px;">
                <p class="add-news">Edit Fasilitas</p>
                <form action="" class="perintah">
                  <p> Edit Nama Fasilitas :</p>
                  <input type="text" class="form-control">
                  <br>
                  <p>Edit Foto Fasilitas :</p>
                  <input type="file" class="loking" multiple accept='image/*'>
                  <br>
                  <button class="button-add">Unggah</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- edit-modal -->
  </body>
  </html>