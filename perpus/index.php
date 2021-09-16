<?php

require 'function.php';
$buku = query("SELECT * FROM perpus");


?>
<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>

	<h1>Daftar Buku</h1>

    <a href="tambah.php">Tambah Data mahasiswa</a>
    <br></br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>NO.</th>
			<th>aksi</th>
			<th>Kode Buku</th>
			<th>Judul</th>
            <th>Jenis Buku</th>
			<th>Pengarang</th>
		</tr>
        <?php $i = 1; ?>
        <?php foreach( $buku as $row): ?>
        <tr>
            <td><?= $i ?></td>
            <td><a href="">Simpan</a>
                <a href="hapus.php?id<?= $row["id"] ?>"
                oneclick="return confirm('yakin?');" >hapus</a>
            
            </td>
            <td><?= $row["kode"] ?></td>
            <td><?= $row["judul"] ?></td>
            <td><?= $row["jenis"]?></td>
            <td><?= $row["pengarang"] ?></td>


        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        

	</table>

</body>
</html>

