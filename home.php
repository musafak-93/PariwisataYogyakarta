<?php
include("connect.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Pariwisata Home
    </title>
</head>

<body>
    <?php
    if (isset($_COOKIE["adminID"])) {
        $getUserLoggedIn = $connect->query("SELECT * FROM admin WHERE adminID = '" . $_COOKIE["adminID"] . "'")->fetch_assoc();
    ?>
        Hello <strong><?= $getUserLoggedIn["userName"] ?></strong>! <br />
        Kamu login sebagai <strong><?= $getUserLoggedIn["userRole"] ?></strong><br />
        <a href="logout.php">Logout</a>

        <a href="index.php"> Ke Halaman depan</a>
    <?php

    } else {
    ?>
        Hello Guest!, <a href="login.php">Login</a> or <a href="register.php">Register</a>
        <a href="index.php"> Ke Halaman depan</a>

    <?php
    }
    ?>
</body>

</html>