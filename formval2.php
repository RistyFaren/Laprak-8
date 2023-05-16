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
    <div class="textcenter">
        <p>DATA PRIBADI</p>
    </div>
        <form class="form" method="post" action="pform2.php">   
        <table>
                <tr><td>Nama Lengkap </td><td><input type="text" name="nama"></td></tr>
                <tr><td>JENIS KELAMIN </td><td>
                    <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan
                </td></tr>
                <tr><td>NISN         </td><td><input type="text" name="nisn"></td></tr>
                <tr><td>NIK          </td><td><input type="text" name="nik"></td></tr>
                <tr><td>Tempat Lahir </td><td><input type="text" name="tmptlahir"></td></tr>
                <tr><td>Tanggal Lahir </td><td><input type="text" name="tgllahir"></td></tr>
                <tr><td>Agama </td><td>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen/Protestan</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kong Hu Chu">Khong Hu Chu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </td></tr>
                <tr><td>Berkebutuhan Khusus </td><td>
                    <select name="BK">
                        <option value="tidak">Tidak</option>
                        <option value="Netra">Netra</option>
                        <option value="Rungu">Rungu</option>
                        <option value="Gringan">Grahita Ringan</option>
                        <option value="Gsedang">Grahita sedang</option>
                        <option value="Daksa">Daksa Ringan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                <tr><td>Alamat Jalan </td><td><input type="text" name="alamat"></td></tr>
                <tr><td>RT </td><td><input type="text" name="rt"></td></tr>
                <tr><td>RW </td><td><input type="text" name="rw"></td></tr>
                <tr><td>Nama Dusun </td><td><input type="text" name="dusun"></td></tr>
                </td></tr>
                <tr><td>Nama Kelurahan</td><td><input type="text" name="kelurahan"></td></tr>
                <tr><td>Kecamatan</td><td><input type="text" name="kecamatan"></td></tr>
                <tr><td>Kode Pos </td><td><input type="text" name="kodepos"></td></tr>
                <tr><td>Tempat Tinggal </td><td>
                    <select name="tmpttinggal">
                        <option value="bersama_ortu">Bersama Orangtua</option>
                        <option value="wali">Wali</option>
                        <option value="kos">Kos</option>
                        <option value="asrama">Asrama</option>
                        <option value="panti">Panti Asuhan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                <tr><td>Moda Transportasi </td><td>
                    <select name="transport">
                        <option value="jalan kaki">Jalan Kaki</option>
                        <option value="kendaraan_pribadi">Kendaraan Pribadi</option>
                        <option value="kendaraan_umum">Kendaraan Umum</option>
                        <option value="jemputan">Jemputan Sekolah</option>
                        <option value="andong">Andong</option>
                        <option value="perahu">Perahu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                <tr><td>Nomor HP </td><td><input type="text" name="nohp"></td></tr>
                <tr><td>Nomor Telepon </td><td><input type="text" name="notlp"></td></tr>
                <tr><td>Email </td><td><input type="text" name="email"></td></tr>
                <tr><td>Penerima KPS/KKS/PKH/KIP</td><td>
                    <input type="radio" name="penerima_kip" value="Y">Ya
                    <input type="radio" name="penerima_kip" value="T">Tidak
                </td></tr>
                <tr><td>No. KPS/KKS/PKH/KIP </td><td><input type="text" name="nokip"></td></tr>
                <tr><td>Kewarganegaraan </td><td>
                    <input type="radio" name="kwn" value="wni">Indonesia (WNI)
                    <input type="radio" name="kwn" value="wna">Aing (WNA)
                    <tr><td>Nama Negara </td><td><input type="text" name="negara"></td></tr>
                </td></tr>
                <tr><td colspan="2"><button type="submit" value="submit">Next</button></td></tr>
            </table>
        </form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>