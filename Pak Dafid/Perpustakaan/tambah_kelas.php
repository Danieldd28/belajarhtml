<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tambah Kelas</title>
</head>
<body>
    <h3>Tambah Kelas</h3>
    <form action="proses_tambah_kelas.php" method="post">
        nama kelas :
        <input type="text" name="nama_kelas" value="" class="form-control">
        kelompok : 
        <input type="text" name="kelompok" value="" class="form-control">
        angkatan :
        <input type="text" name="angkatan" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary">
    </form>
</body>
</html>
