<?php
include("koneksi.php");
$isi = mysqli_query($koneksi, "select * from siswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    a {
        display: inline-block;
        padding: 10px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px;
    }

    a:hover {
        background-color: #2980b9;
    }

    .bold{
            
    }

    </style>
</head>
<body>
    <table  border = "1">
        <tr class="bold">
            <td>nama</td>
            <td>email</td>
            <td>gender</td>
            <td>ttl</td>
            <td>agama</td>
            <td>alamat</td>
            <td>prestasi</td>
            <td>motivasi</td>
            <td>aksi</td>
        </tr>
        <tr>
            <?php
            while($data = mysqli_fetch_array($isi)){
                echo "<tr>";
                echo"<td>".$data['nama']."</td>";
                echo"<td>".$data['email']."</td>";
                echo"<td>".$data['gender']."</td>";
                echo"<td>".$data['ttl']."</td>";
                echo"<td>".$data['agama']."</td>";
                echo"<td>".$data['alamat']."</td>";
                echo"<td>".$data['prestasi']."</td>";
                echo"<td>".$data['motivasi']."</td>";
                echo"<td><a href='hapus.php?id=$data[id]'>hapus</a> | <a href='edit.php?id=$data[id]'>edit</a></td>";
                echo "</tr>";
            }    
            
            ?>
        </tr>
    </table>
    <a href="tambah.php">tambah data</a>
</body>
</html>