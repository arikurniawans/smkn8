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
      <p class="all-info"><i class="far fa-edit"></i>&nbsp;Edit Kerjasama Industri :</p>
    </div>
  </div>
  <div class="col-md-5 col-sm-5 mb"> 
    <p class="add-news">Edit Data Industri Baru</p>
    <?php $id = $_GET['id'] ?>
    <?php  
      include 'sys/config/db.php';

      $q = "SELECT * FROM mou";
      $rd = $conn->query($q);

      $jumlah = mysqli_num_rows($rd);
      if ($jumlah > 0) {
          $data = $rd->fetch_assoc(); ?>
      
    <form action="sys/sys_edit_mou.php?id=<?= $id ?>" method="POST" class="perintah" enctype="multipart/form-data">
      <p>Foto Industri:</p>
      <input type="file" class="loking" multiple accept='image/*' name="foto">
      <br>
      <p>Nama Industri :</p>
      <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
      <br>
      <p>Alamat Industri :</p>
      <textarea class="form-control" rows="3" name="alamat"><?= $data['alamat'] ?></textarea>
      <br>
      <button class="button-add" name="upload">Unggah</button>
    </form>
    <?php }
    ?>
  </div>
  <div class="col-md-8 col-sm-7"><!-- biar saja kosong --></div>
  <!--  -->
    </body>
    </html>