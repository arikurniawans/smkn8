	<div class="col-md-12 " style="padding: 0px !important;">
		<div id="carousel-example-generic" class="carousel-fade carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators" style="display:none;">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/foto-slider/pas1-min.jpg" alt="...">
					<div class="carousel-caption">
					</div>
				</div>
				<?php  
					include 'sys/config/db.php';

					$q = "SELECT * FROM slider_utama ORDER BY id DESC";
          			$rd = $conn->query($q);

          			$jum = mysqli_num_rows($rd);
          			if ($jum > 0) {
          				while ($data_slide = $rd->fetch_assoc()) { ?>
          					<div class="item">
								<img src="images/foto-slider/<?= $data_slide['foto'] ?>" alt="...">
								<div class="carousel-caption"></div>
							</div>		
          			<?php }
          			}
				?> 
				
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
<!-- 	<?php //for ($i=0; $i < 3 ; $i++) { ?>  

		<div class="col-md-3 col-sm-4 fas-grid hidden-xs" style="padding: 0px;">
			<div class="liker">
				<div class="liker-overlay"></div>
				<img class="liker-image img-responsive" src="images/pas1.jpg">
				<div class="liker-details fadeIn-right">
					<p>Upacara Peringatan hari besar</p>
					<a href="#" class="bt-dtl">Selengkapnya..</a>
				</div>
			</div>
		</div>
		<?php //} ?> -->