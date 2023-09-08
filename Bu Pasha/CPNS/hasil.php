<?php
$conn=mysqli_connect('localhost','root','','cpns');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$NIK = $_POST['NIK'];
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$Tempat_Lahir = $_POST['Tempat_Lahir'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Instansi = $_POST['Instansi'];
$Password = $_POST['Password'];
$CPassword= $_POST['CPassword'];
if($Password!=$CPassword) {
    
    echo "<script>alert('Password tidak sama');</script>";
} else{
    $insert=mysqli_query($conn, "INSERT INTO `pendaftar` ( `NIK`, `Nama_Lengkap`, `Email`, `Tempat_Lahir`, `Tanggal_Lahir`, `Instansi`, `Password`) VALUES ( '$NIK', '$Nama', '$Email', '$Tempat_Lahir', '$Tanggal_Lahir', '$Instansi', '$Password');");
}
?>