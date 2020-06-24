<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Simple CRUD - CREATE</title>
</head>

<body>
    <h1>Create </h1>
    <form action="doAddWisata.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Judul wisata</td>
                <td>:</td>
                <td><input type="text" name="Judul_wisata"></td>
            </tr>
            <tr>
                <td>info wisata</td>
                <td>:</td>
                <td><textarea name="info_wisata"></textarea></td>
            </tr>
            <tr>
                <td>alamat wisata</td>
                <td>:</td>
                <td><input type="text" name="alamat_wisata"></td>
            </tr>
            <tr>
                <td>wisata image</td>
                <td>:</td>
                <td><input type="file" name="wisata_image"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>Save Wisata</button></td>
            </tr>
        </table>
    </form>
    <?php
        if (isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
</body>
</html>