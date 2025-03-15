<?php
    $titlepage = 'add item';
    require('./src/header.php');

    if (isset($_GET['submit'])) {

        //email check
        if(empty($_GET['email'])){
            echo 'please enter an email' . '</br>';
        } else {
            // $email = $_POST['email'];
            // if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            //     echo 'enter a valid email address';
            // };
        }

        //title check
        if(empty($_GET['title'])){
            echo 'please enter a title' . '</br>';
        } else {
            echo htmlspecialchars($_GET['title']);
        }

        //ingredients check
        if(empty($_GET['ingredients'])){
            echo 'please enter ingredients' . '</br>';
        } else {
            echo htmlspecialchars($_GET['ingredients']);
        }
        

    } else{
        echo 'not set';
    }
?>

<div>
    <form action="add.php" method="GET">
        <h2>Add a Pizza</h2>
        <input type="email" name="email" placeholder="Enter email">
        <input type="text" name="title" placeholder="Enter pizza title">
        <input type="text" name="ingredients" placeholder="Enter Ingredients">
        <div>
            <input type="submit" name="submit">
        </div>
    </form>
</div>