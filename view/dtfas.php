<?php

include '../sys/config/db.php';

if(isset($_POST['getDetail'])) {
    $id = $_POST['getDetail'];

    $q = "SELECT foto FROM fasilitas WHERE id='$id'";
    $rd = $conn->query($q);

    while ($data = $rd->fetch_assoc()) { ?>
    	<div class="modal-content">
			<div class="col-md-12" style="padding: 4px;">
				<p class="text-center fas-nama">Fasilitas</p>
			</div>	
			<button class="d" id="#tampil" data-dismiss="modal"><i class="fas fa-times"></i></button>
			<img src="images/foto_fasilitas/<?= $data['foto'] ?>" class="img-responsive img-detail" style="padding: 4px;">
		</div>
		<div class="modal-data">		
		</div>	
<?php }
}       
?>