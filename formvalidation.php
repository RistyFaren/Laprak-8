<!DOCTYPE html>
<html>
<head>
     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<style>
    .textHeader{
        padding: 2%;
        font-size: 28px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;           
    }
    .textcenter{
        padding: 2%;
        font-size: 15px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;           
    }
    .border-right {
    border-right: 2px solid black;
    height: 100px;
    }
    .form {
        margin: 0 auto;
        max-width: 600px;
        padding: 20px;
    }
    .label {
        display: block;
        margin-bottom: 10px;
        }


</style>
<body>

    <div class="textHeader">
    <strong> FORMULIR PESERTA DIDIK</strong>
    </div>
    <div class= "container">
    <!-- tanggal otomatis -->
    <p>Tanggal: <time datetime="<?php echo date('Y-m-d'); ?>"><?php echo date('d F Y'); ?></time></p>
    <div class="textcenter">
        <p>REGISTRASI PESERTA DIDIK</p>
    </div>
        <form class="form" method="post" action="pform1.php">   
    
            <br>
                <label for="dropdown1">Jenis Pendaftaran : </label>
                    <select class="dropdown" id="dropdown1" name="jenispend">
                    <option>Pilih</option>
                    <option value="siswa_baru">Siswa Baru</option>
                    <option value="pindahan">Pindahan</option>
                    </select>
            <br>
            <br>
                <label>Tanggal Masuk Sekolah    :</label>
                <input type="text" name="tanggal" placeholder="DD-MM-YYYY">
            <br>
            <br>
                <label>NIS               :</label>
                <input  type="text" name="nis" placeholder="002xxxxxx">
            <br>
            <br>
                <label>Nomor Peserta Ujian   :</label>
                <input  type="text" name="noujian" placeholder="2022xxxxxx">
            <br>
            <br>
                <tr><td>Apakah pernah PAUD : </td><td>
                    <input type="radio" name="status_paud" value="Y">Ya
                    <input type="radio" name="status_paud" value="T">Tidak
                </td></tr>
            <br>
            <br>
                <tr><td>Apakah pernah TK : </td><td>
                        <input type="radio" name="status_tk" value="Y">Ya
                        <input type="radio" name="status_tk" value="T">Tidak
                    </td></tr>
            <br>
            <br>
                <label>No. Seri SKHUN Sebelumnya :</label>
                <input type="text" name="noskhun" placeholder="16 digit pada SKHUN SD">
            <br>
            <br>
                <label>No. Seri Ijazah Sebelumnya :</label>
                <input type="text" name="noskhun" placeholder="16 digit pada Ijazah SD">
            
            <br>
            <br>
                <label for="dropdown2">Hobi :</label>
                    <select name="hobi">
                        <option value ="0">Pilih</option>
                        <option valuea="olahraga">Olahraga</option>
                        <option value="kesenian">Kesenian</option>
                        <option value="membaca">Membaca</option>
                        <option value="menulis">Menulis</option>
                        <option value="travelin">Travelin</option>
                        <option value="lainnya">Lainnya</option>
                        </select>
            <br>
            <br>
                <label for="dropdown3">Cita-Cita :  </label>
                        <select class="dropdown" id="dropdown3" name="cita">
                        <option value="0">Pilih</option>
                        <option value="pns">PNS</option>
                        <option value="tni/polri">TNI/POLRI</option>
                        <option value="guru/dosen">Guru/Dosen</option>
                        <option value="dokter">Dokter</option>
                        <option value="politikus">Politikus</option>
                        <option value="wirausaha">Wiraswasta</option>
                        <option value="seni">Seni/Lukis/Artis/Sejenisnya</option>
                        <option value="lainnya">Lainnya</option>
                        </select>
                        
                <br>
                <br>
                <tr><td colspan="2"><button type="submit" value="submit">Next</button></td></tr>
        </form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>