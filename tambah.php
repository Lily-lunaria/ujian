<?php
require 'settings.php';
$file = 'simpan_data.json';
// $datapeminjaman = fungsi::simpandata($file, $data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Tambah data</title>
</head>
<body>
    <form action="" method="post">
    <h1>Tambah Data Nasabah</h1>
    <label for="id">ID:</label>
    <input type="text" name="id" id="id" placeholder="Id mun bang!"><br><br>
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" placeholder="Namamu ege"><br><br>
    <label for="Email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Ariz_kontz@gmail.com"><br><br>
    <label for="uang">Jumlah Pinjamannya?:</label>
    <input type="text" name="uang" id="uang" placeholder="100.000.000"><br><br>
    <label for="tanggal">Tanggal</label>
    <input type="date" name="tanggal" id="tanggal"><br><br>
    <button type="submit" name="submit">Kirim ege!</button>
        <?php if(isset($_POST['submit'])) {
            header('location: index.php') ;
        } 
        echo "<script>alert('yakin lu nambah utang lagi nieh...?');</script>"
        ?>
        <script>alert('hadeuh yah malah nambah utang lagi...');</script>
    </form>
</body>
</html>