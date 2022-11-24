<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Session</title>
</head>
<body>
    <?php
    
        echo 'Nama Depan '.$_SESSION['first_name'].'<br>';
        echo 'Nama Belakang '.$_SESSION['last_name'].'<br>';
        echo 'Email '.$_SESSION['email'].'<br>';
        echo 'Telepon '.$_SESSION['telepon'].'<br>';
        echo 'Username '.$_SESSION['username'].'<br>';
        echo 'Password '.$_SESSION['password'].'<br>';
    ?>
    <br>
    <a href="form_submit.php">Log Out</a>
</body>
</html>