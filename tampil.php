<?php
// menangkap data nama dengan method get
$nama = $_POST['nama'];
// menangkap data usia dengan method get
$usia = $_POST['usia'];
// menangkap data jenis kelamin dengan method get
$jenis_kelamin = $_POST['jenis_kelamin'];
// menangkap data agama dengan method get
$agama = $_POST['agama'];
// menangkap data alamat dengan method get
$tempat_lahir = $_POST['tempat_lahir'];
// menangkap data alamat dengan method get
$tanggal_lahir = $_POST['tanggal_lahir'];
// menangkap data hobi dengan method get
$hobi = $_POST['hobi'];
// menangkap data usia dengan method get
$cita_cita = $_POST['cita_cita'];
// menangkap data asal sekolah dengan method get
$asal_sekolah = $_POST['asal_sekolah'];




// menampilkan data nama
echo "Nama : " . $nama;
echo "<br/>";
// menampilkan data usia
echo "Usia : " . $usia;
echo "<br/>";
// menampilkan data jenis kelamin
echo "Jenis Kelamin : " . $jenis_kelamin;
echo "<br/>";
// menampilkan data agama
echo "Agama : " . $agama;
echo "<br/>";
// menampilkan data ttl
echo "Tempat Lahir : " . $tempat_lahir;
echo "<br/>";
// menampilkan data ttl
echo "Tanggal Lahir : " . $tanggal_lahir;
echo "<br/>";
// menampilkan data hobi
echo "Hobi : " . $hobi;
echo "<br/>";
// menampilkan data usia
echo "Cita - Cita : " . $cita_cita;
echo "<br/>";
// menampilkan data usia
echo "Asal Sekolah : " . $asal_sekolah;
echo "<br/>";
?>