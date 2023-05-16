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
        <strong>DATA AYAH</strong>
    </div>
        <form class="form" method="post" action="pform3.php">   
        <table>
                <tr><td>Nama Ayah Kandung </td><td><input type="text" name="namaayah"></td></tr>
                <tr><td>Tahun Lahir         </td><td><input type="text" name="thnlahir"></td></tr>
                <tr><td>Pendidikan </td><td>
                    <select name="pendidikan">
                        <option value="TDKSEKOLAH">Tidak Sekolah</option>
                        <option value="PUTUS SD">Putus SD</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </td></tr>
                <tr><td>Pekerjaan </td><td>
                    <select name="pekerjaan">
                        <option value="TDKBekerja">Tidak Bekerja</option>
                        <option value="Nelayan">Nelayan</option>
                        <option value="Petani">petani</option>
                        <option value="Peternak">Peternak</option>
                        <option value="PNS">PNS</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Pedadang kecil">Pedagang kecil</option>
                        <option value="Wirausaha">Wirausaha</option>
                    </select>
                </td></tr>
                <tr><td>Penghasilan Bulanan </td><td>
                    <select name="penghasilan">
                        <option value="kurang500.000">Kurang dari 500,000</option>
                        <option value="500.000-999.9999">500.000-999.9999</option>
                        <option value="1 Juta-1.999.999">1 Juta-1.999.999</option>
                        <option value="2 Juta- 4.999.999">2 Juta- 4.999.999</option>
                        <option value="5 Juta-20 Juta">5 Juta-20 Juta</option>
                        <option value="lebih dari 20 Juta">lebih dari 20 Juta</option>
                    </select>
                </td></tr>
                
                <tr><td>Berkebutuhan Khusus </td><td>
                    <select name="BK2">
                        <option value="tidak">Tidak</option>
                        <option value="Netra">Netra</option>
                        <option value="Rungu">Rungu</option>
                        <option value="Gringan">Grahita Ringan</option>
                        <option value="Gsedang">Grahita sedang</option>
                        <option value="Daksa">Daksa Ringan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
               
                    <tr><td colspan="2"><button type="submit" value="submit">Next</button></td></tr>
            </table>
        </form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>