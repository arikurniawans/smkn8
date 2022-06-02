<!--   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/bootstrap-datetimepicker.css">
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/moment-with-locales.js"></script>
  <script src="js/bootstrap-datetimepicker.js"></script>  
  <script type="text/javascript" src="js/tog-admin.js"></script> -->
  <!--  -->
  <?php

    $id = $_SESSION['id'];
    include 'sys/function.php';
    $data = explode(',',data_admin($id));

  ?>
  <div class="container-fluid side-bar navbar-fixed-top">
    <a href="#menu" class="toogle" id="menu"><i class="fas fa-bars icon"></i></a>
    <a href= "#" class="name-user"><?= $data[1] ?></a>&nbsp;<img src="images/profil_admin/<?= $data['2'] ?>" class="user-profile">
  </div>
  <div id="container">
    <div id="sidebar">
      <ul class="sidebar-nav">
        <div class="profile-admin">
          <img src="images/profil_admin/<?= $data['2'] ?>" class="image-admin">
          <p class="name-admin"><i class="fas fa-power-off"></i>&nbsp;<span><?= $data['1'] ?></span></p>
        </div>
        <li>
          <a href="admin"><i class="fas fa-home"></i> &nbsp;<span>Dashboard</span></a>
        </li>
        <li>
          <a href="kepemimpinan"><i class="fas fa-users"></i> &nbsp;<span>Kepemimpinan Sekolah</span></a>
        </li>
        <li>
          <div class="dropdown">
            <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">
              <i class="far fa-newspaper"></i> &nbsp;<span>Publish Informasi</span>
              <span class="caret"></span></a>
              <ul class="dropdown-menu sides" aria-labelledby="dropdownMenu1">
                <li><a href="semua-info?hal=1"><i class="far fa-list-alt"></i>&nbsp;<span>Semua Informasi</span></a></li>
                <li><a href="tambah-info"><i class="fas fa-plus"></i>&nbsp;<span>Tambah Baru</span></a></li>
                <li><a href="tambah-kategori"><i class="fas fa-plus"></i>&nbsp;<span>Tambah Kategori Berita</span></a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="dropdown">
              <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#">
                <i class="fas fa-calendar-alt"></i> &nbsp;<span>Publish Agenda</span>
                <span class="caret"></span></a>
                <ul class="dropdown-menu sides" aria-labelledby="dropdownMenu1">
                  <li><a href="semua-agenda"><i class="far fa-list-alt"></i>&nbsp;<span>Semua Agenda</span></a></li>
                  <li><a href="tambah-agenda"><i class="fas fa-plus"></i>&nbsp;<span>Tambah Baru</span></a></li>
                </ul>
              </div>
            </li>
            <li>
              <a href="komen"><i class="far fa-comment-alt"></i>&nbsp;<span>Komentar</span> &nbsp; <span class="badge"><?= tampil_jumlah_komentar(); ?></span></a>
            </li>
            <li>
              <a href="lisensi"><i class="far fa-copyright"></i> &nbsp;<span>About</span></a>
            </li>
            <li>
             <div class="log-out"> <button type="button" class="btn-log" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fas fa-sign-out-alt"></i>&nbsp;<span>Logout</span></button>
             </div>
           </li>
         </ul>
       </div>
       <!--  -->
       <div id="page-content-container">

       </div>
       <!-- modal -->
       <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="col-md-12 text-center">
              <img src="images/profil_admin/<?= $data['2'] ?>" class="img-responsive profile-immg">
              <p class="name-logout"><i class="fas fa-power-off"></i>&nbsp;<span><?= $data['1'] ?></span></p>
              <p class=" caption">Apakah Anda yakin untuk Logout ? </p>
              <a href="login?logout=True" class="OK">OK</a> &nbsp; <button class="cancel" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>