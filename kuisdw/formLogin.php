<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel = "stylesheet" type="text/css" href="style1.css"/>
    </head>
    <body>
        <div class="container">
            <div class="header"><h2>-Toko Buku MI-</h2></div>
        <?php
            if (isset($_GET["error"])){
                $error = $_GET["error"];
            }
            else{
                $error = "";
            }
            $message = "";
            if ($error == "gagal"){
                $message = "Gagal login, silahkan coba kembali";
            }
        ?>
        <p style ="color:red"><?php echo $message;?></p>
        <div class="kolom">
        <form action="Proses.php" method="post">
        <br>
            Mohon Login Terlebih dahulu
            <br>
            <br>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type ="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type ="password" name="password" size="20"></td>
                </tr>
                <tr>
                    <td height ="20px"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type ="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
        </div>
        </div>
    </body>
</html>