<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda - Web sekulah</title>
  <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/css/admin/admin.css">
  <link rel="stylesheet" href="assets2/css/admin/informasi.css">
  <link rel="stylesheet" href="assets2/web-fonts-with-css/css/fontawesome-all.min.css">
  <script src="assets2/js/jquery.min.js"></script>
  <script src="assets2/js/bootstrap.min.js"></script>
  <script src="assets2/js/tog-admin.js"></script>
</head>
<body>
  <?php  include 'template/adm-menu.php';  ?>
  <div class="container-fluid">
    <div class="col-md-4" style="padding: 0px;">
      <p><span class="post">Post</span>&nbsp;<a href="tambah-agenda" class="btn-add">Add New</a></p>
      <p class="clue">Dengan menekan tombol diatas,anda akan diarahkan untuk menambah Agenda baru.</p>
    </div>
    <div class="col-md-12" style="padding: 0px;">
      <h2>Semua Agenda</h2>
      <table class="table table-bordered">
        <thead>
          <tr align="center">
            <td>Nama Agenda</td>
            <td>Tanggal Agenda</td>       
            <td>Lokasi Agenda</td>
            <td>Deskripsi Agenda</td>
            <td>Tindakan</td>
          </tr>
        </thead>
        <tbody>
          <?php
            agenda_adm();
          ?>
        </tbody>
      </table>
    </div>
  </div>

 <!--  <script type="text/javascript">
    function myfunction() {
      var txt;
      if (confirm("anda yakin untuk menghapus Agenda ini ?")) {
        alert('Agenda telah terhapus');
      }else {
        alert('Agenda tidak terhapus');
      }
    }
  </script> -->
</body>
</html>

<style type="text/css">

.edit , .edit:active{
  margin-top: 5px;
  background-color: #26baee;
  border: none;
  padding: 7px 36px;
  color: #fff;
  border-radius: 2px;
}
.edit:hover ,.edit:focus  {
  color:#fff; 
  text-decoration: none;
  background-color: #005792;
  margin-bottom: 30px;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out; 
}
.delete , .delete:active , .delete:focus {
  margin-top: 40px;
  background-color: #db2d43;
  border:none;
  color:#fff; 
  border-radius: 2px;
  padding: 7px 28px;
  outline: none;
}
.delete:hover {
  color: #fff;
  text-decoration: none;
  background-color: #c1224f;
  -webkit-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out; 
}
</style>
</body>
</html>