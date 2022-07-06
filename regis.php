<?php
include ('koneksi.php');
// global $db ;

if(isset($_POST['register'])){
$nik=$_POST['nik'];
$namaot=$_POST['namao'];
$job=$_POST['pekerjaan'];

$query="INSERT INTO walimurid VALUES('$nik','$namaot','$job')";

mysqli_query($db, $query);

$nama=$_POST['namas'];
$gender=$_POST['jk'];
$tgl=$_POST['tanggal'];
$anke=$_POST['anakke'];
$alamt=$_POST['alamat'];
$pass=$_POST['pass'];

mysqli_query($db, "INSERT INTO siswa VALUES('','$nik','$nama', '$gender', '$tgl',CURDATE(), NULL, '$alamt','$anke', '$pass')");

header('location: log-in.php');

}


?>