<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h1>Your Profile</h1>
    <?php
        echo 'Nama Depan : '.$_SESSION['first_name'].'<br>';
        echo 'Nama Belakang : '.$_SESSION['last_name'].'<br>';
        echo 'Email : '.$_SESSION['email'].'<br>';
        echo 'Telepon : '.$_SESSION['telepon'].'<br>';
        echo 'Username : '.$_SESSION['username'].'<br>';
        echo 'Password : '.$_SESSION['password'].'<br>';
    ?>
</body>
</html>