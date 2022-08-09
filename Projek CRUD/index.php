<?php
require "koneksi.php";

$siswa = query("SELECT * FROM latihan");
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url(img/wk.png);
        }
        h1 {
            color: white;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
            font-family: cursive;
            margin-top: 50px;
        }
        button {
            color: white;
        }
        table {
            box-shadow: 7px 7px 3px black;
        }
    </style>
    </head>
    <body class="container-fluid">
        <center><h1>PROJEK CRUD (CREATE,READ,UPDATE,DELETE)</h1></center>
        <br>
    <a href="tambah.php"><button class="btn btn-primary mb-3" type="submit">Tambah Data</button></a>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIK</th>
                <th scope="col">NAMA</th>
                <th scope="col">KELAS</th>
                <th scope="col">JURUSAN</th>
                <th scope="col">EMAIL</th>
                <th scope="col">FOTO SISWA</th>
                <th scope="col">AKSI</th>
            </tr>
        </thead>
        <?php $i = 1; ?>
        <?php foreach( $siswa as $row ) : ?>
        <tbody>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nik"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["kelas"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["gambar"]; ?></td>
                <td>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="ubah.php?id=<?= $row["id"]; ?>"><button type="button" class="btn btn-outline-primary">UPDATE</button></a>
                        <a href="hapus.php?id=<?= $row["id"]; ?>"><button type="button" class="btn btn-outline-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">DELETE</button></a>
                    </div>
                </td>
            </tr>
        </tbody>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </body>
</html>