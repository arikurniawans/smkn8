<?php include 'sys/function.php'; ?>
<div id="container">
  <div id="sidebar">
    <ul class="sidebar-nav">
      <div class="profile-admin">
        <center>
          <img src="images/404.jpg" class="image-admin">
          <p class="name-admin"><i class="fas fa-circle-notch"></i>&nbsp;
            <span><?= $_SESSION['nama'] ?></span></p>
          </center>
        </div>
        <!--  -->
        <li>
          <a href="adminsu"><i class="fas fa-home"></i> &nbsp;<span>Dashboard</span></a>
        </li>
        <!--  -->
        <li>
          <a data-toggle="collapse" href="#collapseExample">
            <i class="far fa-newspaper"></i>&nbsp;Publish Informasi
            <span class="caret"></span>
          </a>
          <div class="collapse drop-menu" id="collapseExample">
            <div class="well">
              <a href="semua-info-su?hal=1"><i class="far fa-list-alt"></i>&nbsp;Semua Informasi</a>
              <a href="tambah-info-su"><i class="fas fa-plus"></i>&nbsp;Tambah Baru</a>
              <a href="tambah-kategori-su"><i class="fas fa-plus"></i>&nbsp;Tambah kategori berita</a>
            </div>
          </div>
        </li>
        <!--  -->
        <li>
          <a href="upload-file-su"><i class="fas fa-upload"></i>&nbsp;Upload File</a>
        </li>
        <!--  -->
        <li>
          <a href="upload-galeri"><i class="far fa-image"></i>&nbsp;Upload Foto Galeri</a>
        </li>
        <!--  -->
        <li>
          <a data-toggle="collapse" href="#collapseExample1">
            <i class="far fa-calendar-alt"></i>&nbsp;Publish Agenda
            <span class="caret"></span>
          </a>
          <div class="collapse drop-menu" id="collapseExample1">
            <div class="well">
              <a href="semua-agenda-su"><i class="far fa-list-alt"></i>&nbsp;Semua Agenda</a>
              <a href="tambah-agenda-su"><i class="fas fa-plus"></i>&nbsp;Tambah Baru</a>
            </div>
          </div>
        </li>
        <!--  -->
        <li>
          <a data-toggle="collapse" href="#collapseExample2">
           <i class="fas fa-book"></i>&nbsp;Paket Keahlian
           <span class="caret"></span>
         </a>
         <div class="collapse drop-menu" id="collapseExample2">
          <div class="well">
            <a href="semua-jurusan-su"><i class="far fa-list-alt"></i>&nbsp;Semua Paket keahlian</a>
            <a href="tambah-jurusan-su"><i class="fas fa-plus"></i>&nbsp;Tambah Baru</a>
          </div>
        </div>
      </li>
      <!--  -->
      <li>
        <a data-toggle="collapse" href="#collapseExample5">
          <i class="fa fa-users"></i>&nbsp;Ekstrakurikuler
          <span class="caret"></span>
        </a>
        <div class="collapse drop-menu" id="collapseExample5">
          <div class="well">
            <a href="semua-eskul"><i class="far fa-list-alt"></i>&nbsp;Semua Ekstrakuriler</a>
            <a href="tambah-eskul"><i class="fas fa-plus"></i>&nbsp;Tambah Baru</a>
          </div>
        </div>
      </li>
      <!--  -->
      <li>
        <a data-toggle="collapse" href="#collapseExample3">
         <i class="fas fa-columns"></i>&nbsp;Edit Halaman Lainnya
         <span class="caret"></span>
       </a>
       <div class="collapse drop-menu" id="collapseExample3">
        <div class="well">
          <a href="daftar-kepemimpinan"><i class="far fa-circle ic-page"></i>&nbsp;Kepemimpinan Sekolah</a>
          <a href="list-periode-kepsek"><i class="far fa-circle ic-page"></i>&nbsp;Periode Kepala Sekolah</a>
          <a href="halaman-identitas"><i class="far fa-circle ic-page"></i>&nbsp;Identitas Sekolah</a>
          <a href="halaman-sejarah"><i class="far fa-circle ic-page"></i>&nbsp;Sejarah</a>
          <a href="halaman-visi-misi"><i class="far fa-circle ic-page"></i>&nbsp;Visi Misi</a>
          <a href="halaman-tujuan"><i class="far fa-circle ic-page"></i>&nbsp;Tujuan</a>
          <a href="halaman-so"><i class="far fa-circle ic-page"></i>&nbsp;Struktur Organisasi</a>
          <a href="menu-fasilitas"><i class="far fa-circle ic-page"></i>&nbsp;Fasilitas Sekolah</a>
        </div>
      </div>
    </li>
    <!--  -->
    <li>
      <a href="komentar-su">
        <i class="far fa-comment-alt"></i>&nbsp;Komentar&nbsp;<span class="badge"><?= tampil_jumlah_komentar(); ?></span>
      </a>
    </li>
    <!--  -->
    <li>
      <a href="halaman-alumni">
        <i class="fas fa-user-graduate"></i>&nbsp;Alumni
      </a>
    </li>
    <!--  -->
    <li>
      <a data-toggle="collapse" href="#collapseExample4">
       <i class="fas fa-briefcase"></i>&nbsp;Bursa Kerja Khusus
       <span class="caret"></span>
     </a>
     <div class="collapse drop-menu" id="collapseExample4">
      <div class="well">
        <a href="bursa-kerja"><i class="far fa-list-alt"></i>&nbsp;Semua Lowongan</a>
        <a href="tambah-lowongan-su"><i class="fas fa-plus"></i>&nbsp;Tambah Lowongan Baru</a>
        <a href="tambah-kategori-lowongan"><i class="fas fa-plus"></i>&nbsp;Tambah Kategori Pekerjaan</a>
        <a href="daftar-mou"><i class="fas fa-list"></i>&nbsp;Daftar Kerjasama Industri</a>
      </div>
    </div>
  </li>
  <!--  -->
  <li>
    <a data-toggle="collapse" href="#collapseExample6">
      <i class="fas fa-cogs"></i>&nbsp;Pengaturan Slider
      <span class="caret"></span>
    </a>
    <div class="collapse drop-menu" id="collapseExample6">
      <div class="well">
        <a href="menu-slide-utama"><i class="fas fa-cog"></i>&nbsp;Slider Utama</a>
        <a href="menu-slide-jurusan"><i class="fas fa-cog"></i>&nbsp;Slider Prestasi Jurusan</a>
        <a href="menu-slide-eskul"><i class="fas fa-cog"></i>&nbsp;Slider Prestasi Eskul</a>
      </div>
    </div>
  </li>
  <!--  -->
  <li>
    <a href="upload-pengumuman-kelulusan">
      <i class="fas fa-book"></i>&nbsp;Pengumuman kelulusan
    </a>
  </li>
  <!--  -->
  <li>
    <a href="log-admin">
      <i class="fas fa-history"></i>&nbsp;Riwayat Admin
    </a>
  </li>
  <!--  -->
  <li>
    <a href="list-admin">
      <i class="fas fa-user-cog"></i>&nbsp;Pengaturan Admin
    </a>
  </li>
  <!--  -->
  <li>
    <a href="#myModal1" data-toggle="modal" data-target="#myModal1"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
  </li>
  <!--  -->
</ul>
</div>
<div class="container-fluid admin-tool navbar-fixed-top">
  <div class="row">
    <div class="col-md-12">
      <a href="#menu" class="toogle" id="menu"><i class="fas fa-bars icon"></i></a>
      <!--  -->
      <div class="nontifikasi">
        <a href="list-admin" class="notif">
          <i class="fas fa-cog item-nontifikasi"></i>&nbsp;
        </a>
      </div>
      <!--  -->
      <span class="name-admin-tool hidden-xs"><?= $_SESSION['nama'] ?></span>
      <img src="images/404.jpg" alt="" class="img-admin-tool">
      <p class="online"></p>
      <div>
        <!--  -->
      </div>
    </div>
  </div>
</div>
<div class="container-fluid welcome-admin" style="margin-top: 45px;">
  <div class="row">
    <div class="col-md-12">
      <a href="list-admin" class="create-new">Create new admin</a>
      <p class="welcome">Selamat datang di halaman super user</p>
      <div>
      </div>
    </div>
  </div>
</div>

<!-- logout -->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="col-md-7 col-md-offset-4">
      <div class="modal-content content-popup">
        <div class="modal-body">
         <center>
          <img src="images/404.jpg" class="image-admin-logout">
          <p class="name-admin-logout"><i class="fas fa-circle-notch"></i>&nbsp;
            <span><?= $_SESSION['nama'] ?></span></p>
            <p class="name-admin-logout">Apakah anda yakin untuk logout ?</p>
            <a href="login?logout=True" class="OK">OK</a> &nbsp;
            <button class="cancel" data-dismiss="modal">Cancel</button>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- logout -->