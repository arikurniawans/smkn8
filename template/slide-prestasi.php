<div class="judul-jurusan">
    <h2 class="jd-jurusan-1">Prestasi</h2>
</div>
<div class="slider variable-width">
    <?php for ($i=0; $i < 5 ; $i++) { ?>
        <div class="img-tem">
            <img class="img-responsive" img src="images/prestasi.jpg" style="width: 310px;box-shadow: none;">
        </div>
        <?php } ?>
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