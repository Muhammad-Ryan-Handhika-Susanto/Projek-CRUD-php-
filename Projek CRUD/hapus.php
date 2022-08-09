<?php
require 'koneksi.php';

$id = $_GET['id'];

if( delete($id) > 0 ) {
    echo "
        <script>
            alert('Data berhasil di delete');
            document.location.href='index.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data gagal di delete');
            document.location.href='index.php';
        </script>
        ";
}
?>