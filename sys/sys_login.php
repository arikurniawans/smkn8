<?php

  $email = isset($_POST['email']) ? $_POST['email']: '';
  $password = isset($_POST['password']) ? $_POST['password']: '';

  if (isset($_POST['login'])) {

  session_start();
  include 'config/db.php';

    if (empty($email) OR empty($password)) {
      echo "Lengkapi Email Dan Password Anda";
      header("location:../login?pesan=lengkapi");
    }else {
      // Admin
      // $rd = mysqli_query($conn,"SELECT * FROM user Where email='$email'");
      $q = "SELECT * FROM user Where email='$email'";
      $rd = $conn->query($q);

      $jumlah_user = mysqli_num_rows($rd);
      $data_user = $rd->fetch_assoc();

      if ($data_user > 0) {

        if (password_verify($password,$data_user['password'])) {

          if (isset($_POST['cek'])) {
            // setcookie('key',hash('sha256',$data_user['email']),strtotime('+1year'));
            // setcookie('id',$data_user['id_user'],strtotime('+1year'));
            // setcookie('nama',$data_user['nama'],strtotime('+1year'));
            // setcookie('foto',$data_user['foto'],strtotime('+1year'));
            $_SESSION['key'] = hash('sha256',$data_user['email']);
            $_SESSION['ingat'] = true;
            $_SESSION['masuk'] = true;
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['id'] = $data_user['id_user'];
            $_SESSION['status'] = "Admin";
            $_SESSION['foto'] = $data_user['foto'];
          }else {
            $_SESSION['nama'] = $data_user['nama'];
            $_SESSION['id'] = $data_user['id_user'];
            $_SESSION['masuk'] = true;
            $_SESSION['ingat'] = false;
            $_SESSION['status'] = "Admin";
            $_SESSION['foto'] = $data_user['foto'];
          }
          
          include 'config/db.php';

              $id_user = $_SESSION['id'];
              $jam = date("h:i:sa");
              $tgl = date("Y-m-d");

              $q_log = "INSERT INTO log VALUES('','$id_user','Login','$jam','$tgl')";
              $log = $conn->query($q_log);

          header("location:../admin");

        }else {
          header("location:../login?pesan=pass_salah");
        }

      }else {
        // Admin SU
        // $rd = mysqli_query($conn,"SELECT * FROM user_su Where email='$email'");

        $q = "SELECT * FROM user_su Where email='$email'";
        $rd = $conn->query($q);

        $jumlah_user_su = mysqli_num_rows($rd);
        $data_user_su = $rd->fetch_assoc();

        if ($jumlah_user_su > 0) {

          if (password_verify($password,$data_user_su['password'])) {

            if (isset($_POST['cek'])) {
              $_SESSION['key'] = hash('sha256',$data_user_su['email']);
              $_SESSION['masuk'] = true;
              $_SESSION['ingat'] = true;
              $_SESSION['nama'] = $data_user_su['nama'];
              $_SESSION['id'] = $data_user_su['id_user'];
              $_SESSION['status'] = "Admin_SU";
              $_SESSION['foto'] = $data_user_su['foto'];
              // setcookie('key',hash('sha256',$data_user_su['email']),strtotime('+1year'));
              // setcookie('id',$data_user_su['id_user'],strtotime('+1year'));
              // setcookie('nama',$data_user_su['nama'],strtotime('+1year'));
              // $_SESSION['masuk'] = true;
              // $_SESSION['id'] = $data_user_su['id_user'];
              // $_SESSION['status'] = "Admin_SU";
            }else {
              $_SESSION['nama'] = $data_user_su['nama'];
              $_SESSION['id'] = $data_user_su['id_user'];
              $_SESSION['masuk'] = true;
              $_SESSION['ingat'] = false;
              $_SESSION['status'] = "Admin_SU";
            }
            header("location:../adminsu");

          }else {
            header("location:../login?pesan=pass_salah");
          }

        }else {
          header("location:../login?pesan=email_belum_terdaftar");
        }

      }
    }

  }
?>
