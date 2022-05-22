<!DOCTYPE html>
<html>
<head>
    <title> PHP MySQL</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="container">
    <div class="header">
            <h2>-Toko Buku MI-</h2>
            </div>
        <div class="tambah">
            <h2>Edit Data</h2>
        </div>
    <?php
        include "myconnec.php";
        $id = $_GET['id_buku'];
        $query = "SELECT * FROM buku WHERE id_buku = '$id'";
        $result = mysqli_query($connect, $query);
    ?>
    <form enctype="multipart/form-data" action="editProses.php" method="gett">
        <table>
        <?php
            while($row=mysqli_fetch_array($result)){
        ?>
        <tr> 
            <td> Kode Buku: </td>
            <td><input type="text" name="myid" value="<?php echo $row['id_buku'];?>" readonly></td>
        </tr>
        <tr>
            <td> Judul: </td>
            <td> <input type="text" name="myname" value="<?php echo $row['judul'];?>"></td>
        </tr>
        <tr>
            <td> Pengarang: </td>
            <td> <input type="text" name="mypengarang" value="<?php echo $row['Pengarang'];?>"></td>
        </tr>
        <tr>
            <td> Penerbit: </td>
            <td> <input type="text" name="mypenerbit" value="<?php echo $row['Penerbit'];?>"></td>
        </tr>
        <tr>
            <td> Deskripsi: </td>
            <td> <textarea name="mydes" rows="5" cols="20"><?php echo $row['Deskripsi'];?></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="save" value="Simpan"></td>
        </tr>
        <?php
            }
        ?>
        </table>
        </form>
        <div class="footer">
        MANAJEMEN INFORMATIKA
        </div>
        </div>
</body>
</html>