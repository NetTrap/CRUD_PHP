<?php
include('Koneksi.php');

$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$jk = $_POST['Jenis_kelamin'];
$agama = $_POST['Agama'];
$asal = $_POST['Asal_sekolah'];

$sql = "INSERT INTO data_siswa (nama, kelas) VALUES ('$nama', '$alamat', '$jk', '$agama', '$asal')";

if ($koneksi->query($sql) === TRUE) {
    header("Location: Data_siswa.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>