<?php
session_start();

if(!isset($_GET["id"])){
    header("location:home.php");
    exit();
}

include 'connect.php';

$id = $_GET["id"];

$getData = $connect->query("SELECT * FROM wisata WHERE Id_wisata = ".$id);

if($getData->num_rows==0){
    header("location:home.php");
    exit();
}

$getData = $getData->fetch_assoc();

?>
<!DOCTYPE html>
<html>

<head>
    <title>Simple CRUD - Update</title>
</head>

<body>
    <h1>Update Wisata </h1>
    <form action="doUpdateWisata.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$_GET["id"]?>">
        <table>
            <tr>
                <td>Judul wisata</td>
                <td>:</td>
                <td><input type="text" name="Judul_wisata" value="<?=$getData["Judul_wisata"]?>"></td>
            </tr>
            <tr>
                <td>info wisata</td>
                <td>:</td>
                <td><textarea name="info_wisata"><?=$getData["Judul_wisata"]?></textarea></td>
            </tr>
            <tr>
                <td>alamat wisata</td>
                <td>:</td>
                <td><input type="text" name="alamat_wisata" value="<?=$getData["alamat_wisata"]?>"></td>
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
    if (isset($_SESSION["message"])) {
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }
    ?>
</body>

</html>