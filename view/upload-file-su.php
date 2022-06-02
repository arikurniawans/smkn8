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
      <p class="all-info"><i class="fas fa-upload"></i>&nbsp;Upload File :</p>
    </div>
  </div>
  <div class="col-md-4 col-sm-5"> 
    <p class="add-news">Upload File Baru</p>
    <form action="sys/sys_upload_file.php" method="POST" class="perintah" enctype="multipart/form-data">
      <p>Nama File:</p>
      <input type="text" class="form-control" name="judul">
      <br>
      <p>File yang akan diunggah:</p>
      <input type="file" class="loking" name="data">
      <br>
      <button class="button-add" name="tambah">Unggah</button>
    </form>
  </div>
  <div class="col-md-8"><!-- biar saja kosong --></div>
  <!--  -->
  <div class="col-md-12 page-backup">
    <p class="all-info"><i class="fas fa-upload"></i>&nbsp;Daftar Semua Unggahan File</p>
    <span>Show</span>&nbsp;
    <select class="select">
      <option>10</option>
      <option>50</option>
      <option>100</option>
    </select>
    <table class="table table-bordered">
      <thead>
        <tr align="center">
          <td>Judul File</td>
          <td>File</td>
          <td>Tanggal Unggah</td>
          <td>Tindakan</td>
        </tr>
      </thead>
      <tbody>
        
          <?php  
            if (!function_exists('tampil_data_download')) {
                include 'sys/function.php';
            }
            tampil_data_download();
          ?>
        
      

    <!-- edit-Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="col-md-6 col-md-offset-4">
          <div class="modal-content">
            <p align="right">
            <button data-dismiss="modal" class="d">X</button></p>
            <div class="modal-body">
              <div class="test" style="margin-top: -13px;">
                <p class="add-news">Edit File</p>
                <form action="" class="perintah">
                  <p> Edit Nama File:</p>
                  <input type="text" class="form-control">
                  <br>
                  <p>Ubah File yang akan diunggah:</p>
                  <input type="file" class="loking">
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