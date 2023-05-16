<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$Nama_ayah = $_POST['namaayah'];
$Tahun_lahir = $_POST['thnlahir'];
$Pendidikan = $_POST['pendidikan'];
$Pekerjaan = $_POST['pekerjaan'];
$Penghasilan = $_POST['penghasilan'];
$Berkebutuhan = $_POST['BK2'];
// query SQL untuk insert data
$query="INSERT INTO data_ayah SET namaayah='$Nama_ayah' ,thnlahir='$Tahun_lahir' ,pendidikan='$Pendidikan' ,
pekerjaan='$Pekerjaan' ,penghasilan='$Penghasilan', BK2='$Berkebutuhan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:formval4.php");

?>