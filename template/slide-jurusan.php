<!--  -->
<div class="judul-jurusan">
	<h2 class="jd-jurusan">Paket <span>Keahlian</span></h2>
</div>
<div class="slider variable-width">
        <?php  
            include 'sys/config/db.php';

            $q = "SELECT foto FROM jurusan";
            $rd = $conn->query($q);

            $jumlah = mysqli_num_rows($rd);

            if ($jumlah > 0) {
                while ($data = $rd->fetch_assoc()) { ?>
                    
                <div class="img-tem">
                    <img class="img-responsive" img src="images/logo-jurusan/<?= $data['foto'] ?>">
                </div>
        
            <?php }
            }
        ?>
    </div>
    <script type="text/javascript">

        $('.variable-width').slick({
            arrows: true,
            dots: false,
            infinite: true,
            speed:300,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    </script>