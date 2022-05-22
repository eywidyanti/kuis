<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <link rel = "stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="container">
    <div class="header">
    <h1>-Toko Buku MI- </h1>
    <div class="a">
    <a href="CRUD.php">CRUD</a>
        <a href="formLogin.php">logout</a>
    </div>
    </div>
    <h3>Selamat Datang Administrator </h3>
    <br>
    <div class="a">
    <a href="TambahData.html"><button >Tambah Data</button></a>
    </div>
    <br>   
    <table>
            <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th>  </th>
                
            </tr>
            <?php
            include "myconnec.php";
            $query = "SELECT * FROM buku";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["id_buku"]; ?></td>
                <td><?php echo $row["judul"]; ?></td>
                <td><?php echo $row["Pengarang"]; ?></td>
                <td> 
                    <a href="detail.php?id_buku=<?php echo $row["id_buku"];?>">
                    <button>Detail</button></a>
                    <a href="editForm.php?id_buku=<?php echo $row["id_buku"];?>">
                    <button>Edit</button></a>
                    <a href="delete.php?id_buku=<?php echo $row["id_buku"];?>">
                    <button>Delete</button></a>
                </td>
                
                </tr>
            <?php
                }
            }else {
                echo "0 result";
            }
            ?>

        </table>
        <br>
        <div class="footer">
            MANAJEMEN INFORMATIKA
        </div>
        </div>
</body>
</html>

