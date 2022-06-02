<?php  

	if (isset($_POST['kirim'])) {

		class komentar
		{
			public $nama,
			       $email,
			       $komentar,
			       $foto,
                   $nama_foto,
                   $tmp_foto,
                   $error;
		}

		$komentar = new komentar();

    	$komentar->nama = htmlspecialchars($_POST['nama'], ENT_QUOTES, "UTF-8");
    	$komentar->email = htmlspecialchars($_POST['email'], ENT_QUOTES, "UTF-8");
    	$komentar->isi = htmlspecialchars($_POST['komentar'], ENT_QUOTES, "UTF-8");
        $komentar->nama_foto = $_FILES['foto']['name'];
        $komentar->tmp_foto = $_FILES['foto']['tmp_name'];
        $komentar->error = $_FILES['foto']['error'];
		
		if (empty($komentar->nama) OR empty($komentar->email) OR empty($komentar->isi)) {
    		header("location:../home?pesan=lengkapi_komentar");
    	}else {
    		
    		if ($komentar->error == 4) {
                // echo $komentar->nama;
                // echo "<br>";
                // echo $komentar->email;
                // echo "<br>";
                // echo $komentar->isi;
                // echo "<br>";
                // echo $komentar->error;

                include 'config/db.php';

                $tgl = date('Y-m-d');
                $q = "INSERT INTO komen VALUES('','user_default.png','$komentar->email','$komentar->nama','$komentar->isi','$tgl','diproses')";
                $tambah_komen = $conn->query($q);

                header("location:../home?pesan=Komentar-Sedang-Di-Verifikasi");
            }else{

                $dir = "../images/profil_komen/".$komentar->nama_foto;

                if (move_uploaded_file($komentar->tmp_foto, $dir)) {
                    // echo $komentar->nama;
                    // echo "<br>";
                    // echo $komentar->email;
                    // echo "<br>";
                    // echo $komentar->isi;
                    // echo "<br>";
                    // echo $komentar->nama_foto;
                    // echo "<br>";
                    // echo $komentar->tmp_foto;
                    // echo "<br>";
                    // echo $komentar->error;

                    include 'config/db.php';

                    $tgl = date('Y-m-d');
                    $q = "INSERT INTO komen VALUES('','$komentar->nama_foto','$komentar->email','$komentar->nama','$komentar->isi','$tgl','diproses')";
                    $tambah_komen = $conn->query($q);

                    header("location:../home?pesan=Komentar-Sedang-Di-Verifikasi");      
                }else{
                    echo "Gagal";
                }
                
            }
            
    	}

	}

?>