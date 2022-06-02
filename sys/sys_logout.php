<?php
session_start();
include 'config/db.php';

    $id_user = $_SESSION['id'];
    $jam = date("h:i:sa");
    $tgl = date("Y-m-d");

    $q_log = "INSERT INTO log VALUES('','$id_user','Logout','$jam','$tgl')";
    $log = $conn->query($q_log);

    $_SESSION['logout'] = true;

    session_unset();
    session_destroy();

    setcookie('id','',strtotime('-1year'));
    setcookie('key','',strtotime('-1year'));
    setcookie('nama','',strtotime('-1year'));
    setcookie('foto','',strtotime('-1year'));

    header('location:login');    
?>
