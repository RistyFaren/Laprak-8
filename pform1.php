<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$Jenis_Pendaftaran = $_POST['jenispend'];
$Tanggal_masuk = $_POST['tanggal'];
$NIS = $_POST['nis'];
$No_ujian = $_POST['noujian'];
$Status_paud = $_POST['status_paud'];
$Status_tk = $_POST['status_tk'];
$No_SKHUN = $_POST['noskhun'];
$No_Ijazah = $_POST['noijazah'];
$Hobi = $_POST['hobi'];
$Cita_Cita = $_POST['cita'];
// query SQL untuk insert data
$query="INSERT INTO registrasi SET jenispend='$Jenis_Pendaftaran' ,Tanggal='$Tanggal_masuk' ,nis='$NIS' ,
noujian='$No_Ujian' ,status_paud='$Status_paud', status_tk='$Status_tk', noskhun='$No_SKHUN', noijazah='$No_Ijazah', hobi='$Hobi', cita='$Cita_Cita'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:formval2.php");

?>