<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $titlepage ?> </title>
    <link rel="stylesheet" href="./src/style.css">
</head>

<style>
    form{
        width: 55%;
        margin: 70px auto;
        background-color: blue;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        box-sizing: border-box;
        padding: 25px;
    }

    form > h2{
        margin-bottom: 15px;
    }

    form > div{
        width: 100%;
    }

    form input{
        width: 100%;
        height: 40px;
    }
</style>

<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    session_start();

    if($_SERVER['QUERY_STRING'] == 'noname') {
        unset($_SESSION['name']);
    }

    $name = $_SESSION['name'] ?? 'Guest';
    $gender = $_COOKIE['gender'] ?? 'rand';

?>

<body>
    <header>
        <div class="logo">
            Logo
        </div>
        <nav style="display: flex; justify-content: center; align-items: center;">
            <h4> <?= "Hello $name ($gender)" ?> </h4> |
            <a href="add.php">add a pizza</a>
        </nav>
    </header>
</html>