<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        /* Override Bootstrap table cell and row spacing */
        .table td,
        .table th {
            padding: 0.5rem;
            /* Adjust the padding as needed */
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apaya</title>
</head>

<body>
    <h3>Tampil Pendaftar</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>NAMA Pendaftar</th>
                <th>Email</th>
                <th>Tempat Lahir</th>
                <th>TANGGAL LAHIR</th>
                <th>Instansi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conn.php";
            $qry_pendaftar = mysqli_query($conn, "select * from pendaftar");
            $no = 0;
            while ($data_pendaftar = mysqli_fetch_array($qry_pendaftar)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_pendaftar['NIK'] ?></td>
                    <td><?= $data_pendaftar['Nama_Lengkap'] ?></td>
                    <td><?= $data_pendaftar['Email'] ?></td>
                    <td><?= $data_pendaftar['Tempat_Lahir'] ?></td>
                    <td><?= $data_pendaftar['Tanggal_Lahir'] ?></td>
                    <td><?= $data_pendaftar['Instansi'] ?></td>
                    <td>
                        <a href="ubah_pendaftar.php?id_pendaftar=<?= $data_pendaftar['id_user'] ?>" class="btn btn-success">Ubah</a>
                        <a href="hapus.php?id_pendaftar=<?= $data_pendaftar['id_user'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>