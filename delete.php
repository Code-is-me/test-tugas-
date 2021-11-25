<!DOCTYPE html>
<html>
<head>
	<title>Delete Funtcion  </title>
</head>
<body>
<?php
// koneksi database
include 'konkesi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($data,"delete from $siswa where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampildata.php");
 
?>
</body>
</html>