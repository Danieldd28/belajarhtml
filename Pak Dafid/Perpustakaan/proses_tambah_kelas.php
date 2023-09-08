<?php
include "koneksi.php";

if ($_POST) {
    $nama_kelas = $_POST['nama_kelas'];
    $kelompok = $_POST['kelompok'];
    $angkatan = $_POST['angkatan'];

    if (empty($nama_kelas) || empty($kelompok)) {
        echo "<script>alert('Nama kelas dan kelompok tidak boleh kosong');location.href='tambah_kelas.php';</script>";
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO kelas (nama_kelas, kelompok, angkatan) VALUES ('$nama_kelas','$kelompok','$angkatan')");
        if ($insert) {
            echo "<script>alert('Sukses menambahkan kelas');location.href='tambah_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas');location.href='tambah_kelas.php';</script>";
        }
    }
}
?>
