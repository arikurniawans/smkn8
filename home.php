<?php
    session_start();

    $_SESSION['urlroot']=$_SERVER['DOCUMENT_ROOT'].'/fidak/';
    $pages_dir = "view/";
    if (!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if (in_array($p . '.php', $pages)) {
            include($pages_dir . $p . '.php');
        } else {
            include($pages_dir . '404.php');
        }
    } else {
        include($pages_dir . '404.php');
    }
?>