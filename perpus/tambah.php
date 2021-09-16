<?php
require 'function.php';

if( isset($_POST["submit"] ) ){

    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "            
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php'
        </script";
    }

}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa </h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="kode">Kode :</label>
                <input type="text" name="kode" id="kode" required>
            </li>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="jenis">Jenis :</label>
                <input type="text" name="jenis" id="jenis" required>
            </li>
            <li>
                <label for="jpengarang">Pengarang :</label>
                <input type="text" name="pengarang" id="pengarang" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

</body>
</html>