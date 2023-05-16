<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$Nama_ibu = $_POST['namaibu'];
$TahunLahir = $_POST['thnlahiribu'];
$Pendidikan_ibu = $_POST['pendidikanibu'];
$Pekerjaan_ibu = $_POST['pekerjaanibu'];
$Penghasilan_ibu = $_POST['penghasilanibu'];
$Berkebutuhan_ibu = $_POST['BK3'];
// query SQL untuk insert data
$query="INSERT INTO data_ibu SET namaibu='$Nama_ibu' ,thnlahiribu='$TahunLahir' ,pendidikanibu='$Pendidikan_ibu' ,
pekerjaanibu='$Pekerjaan_ibu' ,penghasilanibu='$Penghasilan_ibu', BK3='$Berkebutuhan_ibu'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:Tersimpan.php");

?>