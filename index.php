<?php
session_start();
require 'settings.php';
$file = 'simpan_data.json';
$datapeminjam = fungsi::bacadata($file);

// if (!isset($_SESSION['username'])) {
//     header('Location: login.php');
//     exit;
// }

// Ambil pesan jika ada
$message = $_SESSION['message'] ?? '';
unset($_SESSION['message']); // Hapus pesan yang sudah ditampilkan

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Halaman daftar orang yang meminjam Uang$</title>
</head>
<body>
    <h1>Daftar Peminjam Nasabah Keuangan</h1>
    <a href="tambah.php">Tambah Nasabah</a><br>
    <table border="2" cellspacing="5">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Jumlah Peminjaman</td>
                <td>Tanggal</td>
                <td>aksi</td>
            </tr>
        </thead>
            <?php if(!empty($datapeminjam)) : ?>
                <?php foreach  ($datapeminjam as $data) : ?>
                    <tr>
                        <td><?= htmlspecialchars($data['id']); ?></td>
                        <td><?= htmlspecialchars($data['nama']); ?></td>
                        <td><?= htmlspecialchars($data['email']); ?></td>
                        <td><?= htmlspecialchars($data['uang']); ?></td>
                        <td><?= htmlspecialchars($data['tanggal']); ?></td>
                        <td><a href="?hapus=<?= urlencode($data['id']) ?>" onclick="return confirm('yakin udah bayar utang')">Hapus</a></td>
                    </tr>
                <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td collspan="5">Belum ada data peminjam yang</td>
                    </tr>
                <?php endif ; ?>
    </table>
</body>
</html>