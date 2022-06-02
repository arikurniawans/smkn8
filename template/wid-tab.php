<div class="coba">
	<ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
		<li class="active"><a href="#Commentary" data-toggle="tab">Terbaru</a></li>
		<li><a href="#Videos" data-toggle="tab">Agenda</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade content in active" id="Commentary">
				<!-- <div class="hawhh">
					<div class="col-md-4 col-sm-4 col-xs-4 content-image">
						<img src="images/exam-berita.jpg" class="img-responsive">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8">
						<p class="content-paragrap"><a href="detail-informasi">Pengumuman CPNS BPK RI Tahun 2018</a></p>
						<p class="contents">Rabu , 30 september 2018</p>
					</div>
				</div> -->
			<?php 
				if (!function_exists('tampil_berita_terbaru')) {
					include 'sys/function.php';
				}

				tampil_berita_terbaru();
			?>
		</div>
		<div role="tabpanel" class="tab-pane fade content" id="Videos">
				<!-- <div class="hawhh">
					<div class="col-md-4 col-sm-4 col-xs-4 content-image">
						<img src="images/agenda.jpg" class="img-responsive">
					</div>
					<div class="col-md-8 col-sm-8 col-xs-8">
						<p class="content-paragrap"><a href="detail-kegiatan">Upacara Peringatan hari besar</a></p>
						<p class="contents">
							<i class="far fa-calendar-alt"></i>&nbsp;<span>26-03-2019</span>&nbsp;
							<i class="fas fa-map-marker-alt"></i>&nbsp;<span>Lapangan</span>
						</p>
					</div> 	
				</div> -->
			<!-- Agenda terbaru -->
			<?php 
				tampil_agenda_terbaru();
			?>
		</div> 
	</div>
</div>
</div>
<style type="text/css">
.coba {
	
}
.hawhh {
	margin-top: 1px;
	display: inline-block;
}
</style>