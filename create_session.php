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
   

        if(!isset($_SESSION['views'])){
            $_SESSION['views'] = 0;
        }
        if(!isset($_SESSION['browser'])){
            $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
        }
        if(!isset($_SESSION['role'])){
            $_SESSION['role'] = 'admin';
        }

        $_SESSION['views'] += 1;

        echo '<p>Views: ' . $_SESSION['views'] . '</p>';
        echo '<p>Brower: ' . $_SESSION['browser'] . '</p>';
        echo '<p>Role: ' . $_SESSION['role'] . '</p>';
    ?>

    <ul>
        <li><a href="read_session.php">read_session</a></li>
        <li><a href="destroy_all_session.php">destroy_all_session</a></li>
        <li><a href="destroy_session.php">destroy_session</a></li>
    </ul>

    
</body>
</html>