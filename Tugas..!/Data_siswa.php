<?php include('Koneksi.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Asal Sekolah</td>
            <td>Aksi</td>
        </tr>

        <?php
        $no = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM data_siswa");

        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no ++;?></td>
            <td><?php echo $data ['Nama']?></td>
            <td><?php echo $data ['Alamat']?></td>
            <td><?php echo $data ['Jenis_kelamin']?></td>
            <td><?php echo $data ['Agama']?></td>
            <td><?php echo $data ['Asal_Sekolah']?></td>
            <td>
                <a href="Tambah_siswa.php">Edit</a> <a href="">Hapus</a>
            </td>
        </tr>

        <?php
        }
        ?>

    </table>
</body>
</html>