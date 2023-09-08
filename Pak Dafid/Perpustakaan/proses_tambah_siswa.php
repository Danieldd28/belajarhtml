<?php
include "koneksi.php";

if ($_POST) {
    $nama_siswa = $_POST['nama_siswa'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_kelas = $_POST['id_kelas'];

    if (empty($nama_siswa) || empty($username) || empty($password)) {
        echo "<script>alert('Nama siswa, username, dan password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO siswa (nama_siswa, tanggal_lahir, gender, alamat, username, password, id_kelas) VALUES ('$nama_siswa','$tanggal_lahir','$gender','$alamat','$username','" .$password. "','$id_kelas')");
        if ($insert) {
            echo "<script>alert('Sukses menambahkan siswa');location.href='tambah_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa: " . mysqli_error($koneksi) . "');location.href='tambah_siswa.php';</script>";
        }
    }
    
}
?>
