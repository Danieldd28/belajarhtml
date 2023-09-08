<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Siswa</title>
</head>

<body>
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
        <label for="nama_siswa">Nama Siswa</label>
        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value=""></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control" rows="4"></textarea>
        <label for="id_kelas">Kelas</label>
        <select name="id_kelas" id="id_kelas" class="form-control">
            <option value=""></option>
            <?php
            include "koneksi.php";
            $qry_kelas = mysqli_query($koneksi, "select * from kelas");
            while ($data_kelas = mysqli_fetch_array($qry_kelas)) {
                echo '<option value="' . $data_kelas['id_kelas'] . '">' . $data_kelas['nama_kelas'] . '</option>';
            }
            ?>
        </select>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
        <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
    </form>
</body>

</html>