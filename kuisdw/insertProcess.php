<?php
    
    include "myconnec.php";

    $id = $_GET["myid"];
    $judul = $_GET["myname"];
    $pengarang = $_GET["mypengarang"];
    $penerbit = $_GET["mypenerbit"];
    $deskripsi = $_GET["mydes"];
    
    $query = "INSERT INTO buku (id_buku,judul,Pengarang, Penerbit, Deskripsi) VALUES ('$id', '$judul', '$pengarang', '$penerbit', '$deskripsi')";
    if(mysqli_query($connect, $query)){
        header("Location:CRUD.php");
    } else {
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>