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
      <p class="all-info"><i class="fas fa-list"></i>&nbsp;Identitas Sekolah :</p>
    </div>
  </div>
  <div class="col-md-4 col-sm-5"> 
    <p class="add-news">Tambah Indentitas Baru</p>
    <form action="sys/sys_tambah_identitas.php" method="POST" class="perintah">
      <p>Tambah Kategori :</p>
      <input type="text" class="form-control" name="kategori">
      <br>
      <p>Tambah Identitas :</p>
      <input type="text" class="form-control" name="isi">
      <br>
      <button class="button-add" name="tambah">Unggah</button>
    </form>
  </div>
  <div class="col-md-8"><!-- biar saja kosong --></div>
  <!--  -->
  <div class="col-md-12 page-backup">
    <p class="all-info"><i class="fas fa-list"></i>&nbsp;Daftar Identitas Sekolah</p>
    <span>Show</span>&nbsp;
    <select class="select">
      <option>10</option>
      <option>50</option>
      <option>100</option>
    </select>
    <table class="table table-bordered">
      <thead>
        <tr align="center">
          <td>Kategori</td>
          <td>Identitas</td>
          <td>Tindakan</td>
        </tr>
      </thead>
      <tbody>
        
          <!-- <tr align="center">
            <td>Pengumuman kelulusan</td>
            <td>a.doc</td>
            <td>
              <a href="edit-id" class="btn-edit">Edit</a>
              <button class="btn-delete">Hapus</button>
            </td>
          </tr> -->
          <?php  

            if (!function_exists('tampil_identitas_sekolah_su')) {
                include 'sys/function.php';
            }
            tampil_identitas_sekolah_su();

          ?>
        
      </tbody>
    </table>
  </body>
  </html>