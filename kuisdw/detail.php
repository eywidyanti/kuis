<!DOCTYPE html>
<html>
<head>
    <title> PHP MySQL</title>
    <link rel = "stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="container">
    <div class="header">
       <h2>Toko Buku MI</h2>
    </div>
    <h2>Detail Buku</h2>
    <?php
        include "myconnec.php";
        $id_buku = $_GET['id_buku'];
        $query = "SELECT * FROM buku WHERE id_buku='$id_buku' ";
        $result = mysqli_query($connect, $query);
    ?>
        <table>
        <?php
            while($row=mysqli_fetch_array($result)){
        ?>
        <tr > 
            <td width="100px" height="40px"> Kode Buku </td>
            <td><?php echo $row['id_buku'];?></td>
        </tr>
        <tr>
            <td width="100px" height="40px"> Judul </td>
            <td><?php echo $row['judul'];?></td>
        </tr>
        <tr>
            <td width="100px" height="40px"> Pengarang </td>
            <td><?php echo $row['Pengarang'];?></td>
        </tr>
        <tr>
            <td width="100px" height="40px"> Penerbit </td>
            <td><?php echo $row['Penerbit'];?></td>
        </tr>
        <tr>
            <td width="100px" height="40px"> Deskripsi </td>
            <td><?php echo $row['Deskripsi'];?></td>
        </tr>
        <?php
            }
        ?>
        </table>
        <br>
        <a href="home.php"><button>Kembali ke Home</button></a>
    <div class="footer">
        MANAJEMEN INFORMATIKA
    </div>    
    </div>
    </body>
</html>