<?php
    include "myconnec.php";

    $id = $_GET["id_buku"];

    $query = "DELETE FROM buku WHERE id_buku = '$id'";

    if(mysqli_query($connect, $query)){
        header('Location:CRUD.php');
    } else {
        echo "Data gagal dihapus <br>". mysqli_error($connect);
    }
    mysqli_close();
?>