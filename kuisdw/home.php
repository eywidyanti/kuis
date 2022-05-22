<!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <link rel = "stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="container">
	<div class ="header">
	<h2>Selamat Datang Di Toko Buku MI</h2>
    <div class="a">
    <a href="home.php">HOME</a>
    <a href="formLogin.php">Login</a>
    </div>
	</div>
    <br>

    <div class="a">
    <form action="search.php" method="get" >
        Cari Judul Buku:
        <input type="text" name="cari">
        <input type="submit" value="Cari">
    </form>
    <br>
    </div>
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
                </td>
                
                </tr>
            <?php
                }
            }else {
                echo "0 result";
            }
            ?>

        </table>
        <div class="footer">
            MANAJEMEN INFORMATIKA
        </div>
        </div>
</body>
</html>

