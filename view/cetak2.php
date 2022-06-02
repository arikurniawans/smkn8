<?php  

	
		include 'sys/config/db.php';

		$no = $_POST['no_pes'];

		$q = "SELECT nisn,no_pes,nama_pes,keterangan,nama_jurusan FROM kelulusan INNER JOIN jurusan ON kelulusan.jurusan = jurusan.id_jurusan WHERE nisn = '".$_GET['nisn']."'";
		$rd = $conn->query($q);

		$jumlah = mysqli_num_rows($rd);
		if ($jumlah == 1) {
			$data = $rd->fetch_assoc(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="assets2/format/base.min.css"/>
<link rel="stylesheet" href="assets2/format/fancy.min.css"/>
<link rel="stylesheet" href="assets2/format/main.css"/>
<script src="assets2/format/compatibility.min.js"></script>
<script src="assets2/format/theViewer.min.js"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title></title>
</head>
<body>
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><img class="bi x0 y0 w1 h1" alt="" src="assets2/format/bg1.png"/><div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH PROVINSI LAMPUNG</div><div class="t m0 x2 h2 y2 ff2 fs0 fc0 sc0 ls0 ws0">DINAS PENDIDIKAN DAN KEBUDAYAAN</div><div class="t m0 x3 h3 y3 ff3 fs0 fc1 sc0 ls0 ws0">SMK NEGERI 8 BANDAR LAMPUNG</div><div class="t m0 x4 h4 y4 ff4 fs1 fc0 sc0 ls0 ws0">Jalan Imam Bonjol No. 52 Kemiling, Telp. 0721-8019297 email: smkn8bl@yahoo.co.id, web: smkn8bdl.sch.id</div><div class="t m0 x5 h5 y5 ff5 fs0 fc0 sc0 ls0 ws0">BANDAR LAMPUNG 35153</div><div class="t m0 x6 h6 y6 ff6 fs2 fc0 sc0 ls0 ws0">PENGUMUMAN</div><div class="t m0 x7 h6 y7 ff6 fs2 fc0 sc0 ls0 ws0">No.  421.5/  …….. /V.01/SMKN8BL/2022</div><div class="t m0 x8 h6 y8 ff6 fs2 fc0 sc0 ls0 ws0">Berdasar <span class="_ _0"> </span>Rapat <span class="_ _0"> </span>Penentuan <span class="_ _0"> </span>Kelulusan <span class="_ _0"> </span>dan <span class="_ _0"> </span>mengacu <span class="_ _0"> </span>SURAT <span class="_ _0"> </span>EDARAN <span class="_ _0"> </span>MENDIKBUD </div><div class="t m0 x8 h6 y9 ff6 fs2 fc0 sc0 ls0 ws0">Nomor 1 Tahun 2021, Kepala SMKN 8  Bandar Lampung. Dengan ini Menyatakan : </div><div class="t m0 x8 h6 ya ff6 fs2 fc0 sc0 ls0 ws0"> <span class="_ _1"> </span>Nama<span class="_ _2"> </span>: <?= $data['nama_pes'] ?></div><div class="t m0 x9 h6 yb ff6 fs2 fc0 sc0 ls0 ws0">NISN<span class="_ _3"> </span>: <?= $data['nisn'] ?></div><div class="t m0 x9 h6 yc ff6 fs2 fc0 sc0 ls0 ws0">Kelas<span class="_ _4"> </span>:</div><div class="t m0 x8 h6 yd ff6 fs2 fc0 sc0 ls0 ws0">Dinyatakan <span class="_ _5"> </span><span class="ff7"><?= $data['keterangan'] ?></span> <span class="_ _5"> </span>dari <span class="_ _5"> </span>Satuan <span class="_ _5"> </span>Pendidikan <span class="_ _5"> </span>SMKN <span class="_ _5"> </span>8 <span class="_ _5"> </span>Bandar <span class="_ _5"> </span>Lampung <span class="_ _5"> </span>Tahun <span class="_ _5"> </span>Pelajaran </div><div class="t m0 x8 h6 ye ff6 fs2 fc0 sc0 ls0 ws0">2021/2022. </div><div class="t m0 x8 h6 yf ff6 fs2 fc0 sc0 ls0 ws0">Demikian Pengumuman ini kami sampaikan, Atas Perhatiannya diucapkan terima kasih.</div><div class="t m0 xa h7 y10 ff8 fs2 fc0 sc0 ls0 ws0">Kepala SMK Negeri 8 Bandar Lampung</div><div class="t m0 xa h8 y11 ff9 fs2 fc0 sc0 ls0 ws0">Drs. FIRDAUS, M. M</div><div class="t m0 xa h7 y12 ff8 fs2 fc0 sc0 ls0 ws0">NIP. 196708087 199403 1 008</div><a class="l" href="mailto:smkn8bl@yahoo.co.id"><div class="d m1" style="border-style:none;position:absolute;left:332.381012px;bottom:748.473022px;width:72.402008px;height:11.973022px;background-color:rgba(255,255,255,0.000001);"></div></a></div><div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>
</div>
<div class="loading-indicator">

</div>
</body>
</html>
<script src="assets2/js/back-top.js"></script>
		<?php 
		}

	
	//echo"<script>alert('Bukti kelulusan akan diprint')</script>";
	echo"<script>window.print();
        window.onafterprint = back;

        function back() {
            window.history.back();
        }</script>";

?>
