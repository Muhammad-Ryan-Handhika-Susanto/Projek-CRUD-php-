<?php
// koneksi ke database
require "koneksi.php";

// cek apakah tombol submit sudah dipencet atau belum
if(isset($_POST['submit']) ) {
   
    // cek apakah data berhasil di masukan atau gagal
    if(tambah($_POST) > 0 ) {
        echo "
        <script>
            alert('Data berhasil di tambahkan');
            document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data berhasil di tambahkan');
            document.location.href='index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: saddlebrown;
        }

        div {
            width: 350px;
            height: 400px;
            background-color: lightblue;
            position: relative;
            left: 510px;
        }
        h1 {
            color: cyan;
            text-align: center;
            font-family: cursive;
            text-shadow: 1px 1px 2px black, 0 0 25px greenyellow, 0 0 5px black;
            margin-top: 50px;
        }
        button {
            margin-left: 120px;
        }
        div ul li {
            margin-left: 10px;
        }
        div ul li input {
            width: 280px;
        }
    </style>
</head>

<body>
    <h1>Tambah Data Siswa</h1>
    <br>
    <form action="" method="POST">
        <div>
        <ul>
            <li>
                <label for="nik">NIK : </label>
                <br>
                <input type="text" name="nik" id="nik" required>
            </li>
            <li>
                <label for="nama">NAMA : </label>
                <br>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="kelas">KELAS : </label>
                <br>
                <input type="text" name="kelas" id="kelas" required>
            </li>
            <li>
                <label for="jurusan">JURUSAN : </label>
                <br>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="email">EMAIL : </label>
                <br>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="gambar">FOTO SISWA : </label>
                <br>
                <input type="text" name="gambar" id="gambar" required>
            </li>
        </ul>
                <button type="submit" name="submit" class="btn btn-outline-success">Tambah Data</button>
        </div>
    </form>
</body>
</html>