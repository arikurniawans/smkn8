<div class="slider variable-width">
    <?php  
        include 'sys/config/db.php';

        $q = "SELECT * FROM mou ORDER BY id_mou DESC";
        $rd = $conn->query($q);

        $jumlah = mysqli_num_rows($rd);
        if ($jumlah > 0) {
            while ($data = $rd->fetch_assoc()) { ?>
                <div class="img-tem" style="margin-right: 10px;padding: 8px;">
                    <div class="content">
                    <div class="content-overlay"></div>
                    <img class="cont-img img-responsive" src="images/foto_mou/<?= $data['foto'] ?>">
                    <div class="content-details fadeIn-right">
                        <p><?= $data['nama'] ?></p>
                    <span><?= $data['alamat'] ?></span>
                    </div>
                </div>
            </div>          
        <?php }
        }
    ?>
</div>
<div class="sli-de text-center">
    <ul>
        <li class="ic-on prev"><i class="fas fa-chevron-left icon-left"></i></li>
        <li class="ic-on next"><i class="fas fa-chevron-right icon-right"></i></li>
    </ul>
</div>
<style>
  .ic-on{
    display: inline;
    color: #000;
    list-style: none;
    margin-right: 20px;
}
.sli-de {
    margin-top: 40px;
    position: relative;
    margin-bottom: 0px !important;
}
.sli-de i {
    margin-right: -12px;
}
.icon-left , .icon-right {
    color: #000;
    background-color: #f8f8f8;
    border: 1.5px solid #f8f8f8;
    padding: 9px 12px;
    border-radius: 3px;
    font-size: 16px;
}
</style>
<script type="text/javascript">

    $('.variable-width').slick({
        arrows: true,
        dots: false,
        infinite: true,
        speed:300,
        slidesToShow: 1,
        centerMode: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
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