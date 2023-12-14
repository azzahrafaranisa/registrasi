<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("koneksi.php");
    $id = $_GET['id'];

    $data = mysqli_query($koneksi,"select * from siswa where id='$id'");
    while($tampil = mysqli_fetch_array($data)){
        $nama = $tampil['nama'];
        $email = $tampil['email'];
        $gender = $tampil['gender'];
        $ttl = $tampil['ttl'];
        $agama = $tampil['agama'];
        $alamat = $tampil['alamat'];
        
    }

    
    ?>
        <?php
    include("koneksi.php");
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $ttl = $_POST["ttl"];
        $agama = $_POST["agama"];
        $alamat = $_POST["alamat"];

        $tambah = mysqli_query($koneksi,"update siswa set nama='$nama',email='$email',gender='$gender',ttl='$ttl',agama='$agama',alamat='$alamat' where id='$id'");
        header("location:index.php");
    }
    ?>
    <h1>edit data</h1>
    <form action="edit.php" method="post">
        <label for="">masukkan nama</label><br>
        <input type="text" name="nama" value="<?php echo $nama?>"><br>
        <label for="">masukkan email</label><br>
        <input type="text" name="email" value="<?php echo $email?>"><br>
        <label for="">masukkan gender</label><br>
        <input type="text" name="gender" value="<?php echo $gender?>"><br>
        <label for="">masukkan ttl</label><br>
        <input type="text" name="ttl" value="<?php echo $ttl?>"><br>
        <label for="">masukkan agama</label><br>
        <input type="text" name="agama" value="<?php echo $agama?>"><br>
        <label for="">masukkan alamat</label><br>
        <input type="text" name="alamat" value="<?php echo $alamat?>"><br>
        <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        <input type="submit" name="update" value="update">
    </form>

    <a href="index.php">lihat data</a>
</body>
</html>