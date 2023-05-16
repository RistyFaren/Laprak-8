<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$Nama= $_POST['nama'];
$JKel = $_POST['jenis_kelamin'];
$NISN = $_POST['nisn'];
$NIK = $_POST['nik'];
$Tempat_lahir = $_POST['tmptlahir'];
$Tgl_lahir = $_POST['tgllahir'];
$Agama = $_POST['agama'];
$Berkebutuhan = $_POST['BK'];
$Alamat = $_POST['alamat'];
$RT = $_POST['rt'];
$RW = $_POST['rw'];
$Dusun = $_POST['dusun'];
$Desa = $_POST['kelurahan'];
$Kecamatan = $_POST['kecamatan'];
$Kodepos = $_POST['kodepos'];
$Tmpt_tinggal = $_POST['tmpttinggal'];
$Transport = $_POST['transport'];
$NoHP = $_POST['nohp'];
$NoTelp = $_POST['notlp'];
$Email = $_POST['email'];
$Penerima_KIP = $_POST['penerima_kip'];
$NoKIP = $_POST['nokip'];
$KWN = $_POST['kwn'];
$Negara = $_POST['negara'];
// query SQL untuk insert data
$query="INSERT INTO data_pribadi SET nama='$Nama' ,jenis_kelamin='$Jkel' ,nisn='$NISN' , nik='$NIK', tmptlahir='$Tempat_lahir'
tgllahir='$Tgl_lahir' ,agama='$Agama', BK='$Berkebutuhan', alamat='$Alamat', rt='$RT', rw='$RW', dusun='$Dusun', kelurahan='$Desa'
kecamatan='$Kecamatan', kodepos='$Kodepos', tmpttinggal='$Tmpt_tinggal', transport='$Transport', nohp='$NoHP', notlp='$NoTelp', email='$Email'
penerima_kip='$Penerima_KIP', nokip='$NoKIP', kwn='$KWN', negara='$Negara'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:formval3.php");
?>