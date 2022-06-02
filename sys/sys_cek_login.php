<?php

  function cek_ingat()
  {
    if (isset($_SESSION['ingat'])) {
    
      if ($_SESSION['ingat'] == true) {
          setcookie('key',$_SESSION['key'],strtotime('+1year'));
          setcookie('id',$_SESSION['id'],strtotime('+1year'));
          setcookie('nama',$_SESSION['nama'],strtotime('+1year'));
          setcookie('foto',$_SESSION['foto'],strtotime('+1year'));
      }

    }
  }
  // Cek Cookie

  function cek_key()
  {
    if (!isset($_SESSION['masuk'])) {
      header("location:login?pesan=belum_login");
    }else {

      if ($_SESSION['masuk'] !== true) {
        header("location:login?pesan=belum_login");
      }else {

        if (isset($_SESSION['status'])) {

          if ($_SESSION['status'] === "Admin_SU") {
            // header("location:adminsu?pesan=Anda_Masih_Login");
          }

        }else {
          header("location:login?pesan=belum_login");
        }

      }
    }
  }

  function cek()
  {
    include 'config/db.php';
    // include 'sys_login.php';

    if (isset($_COOKIE['key']) OR isset($_COOKIE['id'])) {
      $id = $_COOKIE['id'];
      $key = $_COOKIE['key'];

      // Login Admin
      $q = "SELECT id_user,nama,email,foto FROM user WHERE id_user='$id'";
      $rd = $conn->query($q);
      $jumlah_user = mysqli_num_rows($rd);
      $data_user = $rd->fetch_assoc();

      if ($jumlah_user == 1) {

        if ($key === hash('sha256',$data_user['email'])) {
          $_SESSION['masuk'] = true;
          $_SESSION['nama'] = $data_user['nama'];
          $_SESSION['id'] = $data_user['id_user'];
          $_SESSION['foto'] = $data_user['foto'];
          $_SESSION['status'] = "Admin";

          header("location:admin?pesan=Anda_Masih_Login");
        }else {
          $_SESSION['masuk'] = "hacker";
        }

      }else {
        $id = 1;
        $key = $_COOKIE['key'];

        // Login Admin SU
        $q = "SELECT id_user,nama,email,foto FROM user_su WHERE id_user= 1";
        $rd = $conn->query($q);
        $jumlah_user_su = mysqli_num_rows($rd);
        $data_user_su = $rd->fetch_assoc();

        if ($jumlah_user_su == 1) {

          if ($key === hash('sha256',$data_user_su['email'])) {
            $_SESSION['masuk'] = true;
            $_SESSION['nama'] = $data_user_su['nama'];
            $_SESSION['id'] = $data_user_su['id_user'];
            $_SESSION['foto'] = $data_user_su['foto'];
            $_SESSION['status'] = "Admin_SU";

            header("location:adminsu?pesan=Anda_Masih_Login");
          }else {
            $_SESSION['masuk'] = "hacker";  
          }

        }else {
          $_SESSION['masuk'] = "hacker";
        }

      }

    }else {
      $_SESSION['masuk'] = "nul";
    }
  }
  // Cek Login

  function tampil_pesan()
  {
    if (isset($_SESSION['masuk'])) {

        if ($_SESSION['masuk'] === true) {

            if ($_SESSION['status'] == "Admin_SU") {
                header("location:adminsu?pesan=Anda_Masih_Login");
            }elseif ($_SESSION['status'] == "Admin") {
                header("location:admin?pesan=Anda_Masih_Login");
            }

        }elseif ($_SESSION['masuk'] === "hacker") {
            echo "Hayo Mau Ngapain???";
        }

    }

    if (isset($_GET['pesan'])) {

        if ($_GET['pesan'] == "email_belum_terdaftar") {
            echo "Email Anda Belum Terdaftar";
        }elseif ($_GET['pesan'] == "pass_salah") {
            echo "Password Anda Salah";
        }elseif ($_GET['pesan'] == "lengkapi") {
            echo "Lengkapi Email Dan Password Anda";
        }elseif ($_GET['pesan'] == "belum_login") {
            echo "Anda Harus Login";
        }

    }else {
      echo "<p></p>";
    }

  }
?>