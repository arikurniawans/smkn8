<?php

include '../sys/config/db.php';

if(isset($_POST['getDetail'])) {
    $id = $_POST['getDetail'];

    $q = "SELECT nama_foto FROM galeri WHERE id_foto='$id'";
    $rd = $conn->query($q);

    while ($data = $rd->fetch_assoc()) { ?>
    	<img src="images/foto_galeri/<?= $data['nama_foto'] ?>" class="img-responsive img-detail" style="padding: 4px;">
<?php }
}       
?>