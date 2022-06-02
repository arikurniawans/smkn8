		<h2 class="fasilitas">Fasilitas</h2>
		<!--  -->
		<div class="jar-as">
		<?php  
			include 'sys/config/db.php';

            $q = "SELECT * FROM fasilitas";
            $rd = $conn->query($q);

            $jumlah = mysqli_num_rows($rd);

            if ($jumlah > 0) {
                while ($data = $rd->fetch_assoc()) { ?>
                    
                <div class="col-md-4 col-sm-4 fas-grid">
				<div class="content">
					<div class="content-overlay"></div>
					<img class="cont-img img-responsive" src="images/foto_fasilitas/<?= $data['foto'] ?>">
					<div class="content-details fadeIn-right">
						<p><?= $data['nama'] ?></p>
						<button class="detail-button hidden-xs" data-toggle="modal" data-target="#tampil" data-id=<?= $data['id'] ?>>Detail</button>
					</div>
				</a>
				</div>
				</div>
		<?php } } ?>
	</div>
<!--  -->
<!-- <script src="assets2/js/jquery.min.js"></script>
<script src="assets2/js/bootstrap.min.js"></script> -->
<div class="modal fade bs-example-modal-lg" id="tampil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg modal-data" role="document">
		<!-- <div class="modal-data"></div> -->
	</div>
</div>
<!-- //ajx -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#tampil').on('show.bs.modal', function (e) {
            var getDetail = $(e.relatedTarget).data('id');
            /* fungsi AJAX untuk melakukan fetch data */
            $.ajax({
                type : 'post',
                url : 'view/dtfas.php',
                /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                data :  'getDetail='+ getDetail,
                /* memanggil fungsi getDetail dan mengirimkannya */
                success : function(data){
                $('.modal-data').html(data);
                /* menampilkan data dalam bentuk dokumen HTML */
                }
            });
         });
    });
 </script>