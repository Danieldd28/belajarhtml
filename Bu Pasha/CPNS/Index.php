<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="hasil.php" method="post">
        <div>
            <label for="NIK">NIK</label>
            <input type="text" name="NIK" id="NIK">
        </div>
        <div>
            <label for="Nama">Nama</label>
            <input type="text" name=    "Nama" id="Nama">
        </div>
        <div>
            <label for="Email">Email</label>
            <input type="text" name="Email" id="Email">
        </div>
        <div>
            <label for="Tempat_Lahir">Tempat Lahir</label>
            <input type="text" name="Tempat_Lahir" id="Tempat_Lahir">
        </div>
        <div>
            <label for="Tanggal_Lahir">Tanggal Lahir</label>
            <input type="date" name="Tanggal_Lahir" id="Tanggal_Lahir">
        </div>
        <div>
            <label for="Instansi">Instansi</label>
            <select name="Instansi" id="Instansi">
                <option value="polisi">polisi</option>
                <option value="tentara">tentara</option>
                <option value="guru">guru</option>
            </select>
        </div>
        <div>
            <label for="Password">Password</label>
            <input type="password" name="Password" id="Password">
        </div>
        <div>
            <label for="CPassword">Confirm Password</label>
            <input type="password" name="CPassword" id="CPassword">
        </div>
        <div>
            <input type="submit" name="submit" id="submit">
        </div>
    </form>
</body>

</html>