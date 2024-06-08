<?php

    include "Mysql/koneksi.php";

    if(isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $level = $_POST["level"];

        $sql = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', '$level')";

        if($db->query($sql)) {
            echo "Data MASUK";
        }else {
            echo "Data tidak MASUK";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>register only</title>
    </head>
    </head>
<body>
    
    <?php
    include "Mysql/layout/header.html"
    ?>
    <h3>Daftar Akun</h3>
    <form action="" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="password" name="password"/>
        <input type="level" placeholder="level" name="level"/>
        <button type="submit" name="register">Daftar Sekarang</button>
    </form>

</body>
</html>