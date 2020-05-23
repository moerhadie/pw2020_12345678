<?php 
//Koneksi ke database dan pilih
$conn = mysqli_connect('localhost', 'root', '', 'pw_12345678');

// Query isi tabel mahasiswa
$result= mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke query
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array assoc
$rows = [];
while ($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}

// tamoung ke variable mahasiswa
$mahasiswa = $rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
<h3>Daftar Mahasiswa</h3>

<table border = "1" cellpadding ="10" cellspacing = "0">
<tr>
  <th>#</th>
  <th>Foto</th>
  <th>NRP</th>
  <th>Nama</th>
  <th>Email</th>
  <th>Jurusan</th>
  <th>Aksi</th>
  </tr>
  <?php $i = 1;
  foreach($mahasiswa as $mhs) : ?>
  <tr>
  <td><?= $i++; ?></td>
  <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
  <td><?= $mhs['nrp']; ?></td>
  <td><?= $mhs['nama']; ?></td>
  <td><?= $mhs['email']; ?></td>
  <td><?= $mhs['jurusan']; ?></td>
  <td>
  <a href="">Ubah</a> | <a href="">Hapus</a>
  </td>
  </tr>
  <?php endforeach; ?>
</table>
  
</body>
</html>