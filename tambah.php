<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-color: #F0F8FF;
    
        }
    </style>
</head>

<body>
<div class="kotak">
            <center>
            <h1>Registrasi Duta IT Kominfo</h1>
    <form action="tambah.php" method="post">
    <label for="">Masukkan nama lengkap</label> <br>
    <input type="text" name="nama"><br> <br>
    <label for="">Masukkan email</label> <br>
    <input type="" name="email"><br> <br>
    <label for="">Jenis Kelamin</label> <br>
    <input type="text" name="gender"><br> <br>
    <label for="">Tempat,Tanggal Lahir </label> <br>
    <input type="text" name="ttl"><br> <br>
    <label for="">Agama</label> <br>
    <input type="text" name="agama"><br> <br>
    <label for="">Alamat Lengkap</label> <br>
    <input type="text" name="alamat"><br> <br>
    <label for="">Prestasi Yang Dimiliki</label> <br>
    <input type="text" name="prestasi"><br> <br>
    <label for="">Motivasi Mengikuti Duta IT Kominfo</label> <br>
    <input type="text" name="motivasi"><br> <br>


    <input type="submit" name="Submit" value="Submit">
    </form>

    </div>
      
      <style>
        .kotak{
            background-color: #F0FFFF;
            margin: 20px auto;
            padding: 20px;
            border: solid;
            border-radius: 8px;
            width: 300px
        }
      </style>

            

    <?php
    include("koneksi.php");
    if(isset($_POST['Submit'])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $ttl = $_POST["ttl"];
        $agama = $_POST["agama"];
        $alamat= $_POST["alamat"];
        $prestasi= $_POST["prestasi"];
        $motivasi= $_POST["motivasi"];

        $tambah = mysqli_query($koneksi,"insert into siswa(nama, email, gender, ttl, agama, alamat, prestasi, motivasi)
        values('$nama','$email','$gender','$ttl','$agama','$alamat','$prestasi','$motivasi')");


    }
    ?>
    <center>
    <a href="index.php">lihat data</a>
    </center>
    <center>
 <a href="informasi.php">lihat informasi</a>
    </center>
   
</body>
</html>