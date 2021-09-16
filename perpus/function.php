<?php
$conn = mysqli_connect("localhost", "root","","perpus");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM buku" );
        $rows = [];

        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
    return $rows;
}

function tambah($data){
    global $conn;
    $kode = htmlspecialchars($data["kode"]);
    $judul = htmlspecialchars($data["judul"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $pengarang = htmlspecialchars($data["pengarang"]);

    $query = "INSERT INTO buku 
    VALUES
        (' ', '$kode', '$judul', '$jenis', '$pengarang' )
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
    
    return mysqli_affected_rows($conn);
}



?>