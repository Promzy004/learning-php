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

<body>
    <header>
        <div class="logo">
            Logo
        </div>
        <nav>
            <a href="">Home</a>
            <a href="">Contact Us</a>
            <a href="add.php">add a pizza</a>
        </nav>
    </header>
</html>