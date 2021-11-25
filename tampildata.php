<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h2, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="">
    <center><h2 style="background-color: tomato" style="font-family:verdana"> Data Siswa </h2>
    <a href="tambahdata.php"></a>
    <table border="2">
        <a href="Tambahdata.php" button type="button">Tambah Data</a>
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>

    </tr>
    <?php
    include 'konkesi.php';
    $no = 1;
    $data = mysqli_query($conn,"SELECT * FROM tbl_siswa");
    while($siswa = mysqli_fetch_array ($data)){
        ?>
    
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $siswa['nis']?></td>
            <td><?php echo $siswa['nama']?></td>
            <td><?php echo $siswa['kelas']?></td>
            <td><?php echo $siswa['jurusan']?></td>
            <td><?php echo $siswa['alamat']?></td>
            <td>
                <a href="edit.php?id=<?php echo $siswa['id']?>">Edit/ </a>
                <a href="delete.php?id=<?php echo $siswa ['id']?>">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>




</body>
</html>