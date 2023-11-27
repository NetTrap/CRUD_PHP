<?php include('Koneksi.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Siswa</h2>
    <form action="proses_tambah.php" method="post">
        Nama: <input type="text" name="Nama" required><br>
        Alamat: <input type="text" name="Alamat" required><br>
        Jenis Kelamin: <input type="text" name="Jenis_kelamin" required><br>
        Agama: <input type="text" name="Agama" required><br>
        Asal Sekolah: <input type="text" name="Asal_sekolah" required><br>
        
        <input type="submit" value="Tambah">
    </form>
</body>
</html>