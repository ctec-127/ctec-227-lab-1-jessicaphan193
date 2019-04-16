<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        unset($_SESSION['views']);
        unset($_SESSION['browser']);
        unset($_SESSION['role']);

    
    ?>

    <ul>
        <li><a href="read_session.php">read_session</a></li>
        <li><a href="destroy_all_session.php">destroy_all_session</a></li>
        <li><a href="destroy_session.php">destroy_session</a></li>
    </ul>

    
</body>
</html>