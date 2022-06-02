<?php  
function tanggal($tgl)
{

  $hari = array(
    1 => 'Senin',
    'Selasa',
    'Rabu',
    'Kamis',
    'Jumat',
    'Sabtu',
    'Minggu',
  );
  $day = date("N",strtotime($tgl));

  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember',
  );
  $pecah = explode('-',$tgl);
  return $hari[$day] . ',' . $pecah[0] . ' ' . $bulan[(int)$pecah[1]] . ' ' . $pecah[2];
  
}
?>