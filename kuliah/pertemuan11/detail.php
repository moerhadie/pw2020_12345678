<?php
require 'functions.php';

//jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header ("Location: index.php");
  exit;
}

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Data Mahasiswa Lengkap</h3>
  <ul>
  <li><img src="img/<?= $mhs['gambar']; ?>"></li>
  <li>NRP: <?= $mhs ['nrp']; ?></li>
  <li>Nama: <?= $mhs['nama']; ?></li>
  <li>Email: <?= $mhs['email']; ?></li>
  <li>Jurusan: <?= $mhs['jurusan']; ?></li>
  <li><a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('yakin menghapus data?');">Hapus</a></li>
  <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>
</html>