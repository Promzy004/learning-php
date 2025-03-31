<?php
    $titlepage = 'add item';
    require('./src/header.php');
    require('./src/config/db_connect.php');

    $errors = array('email' => '', 'title' => '', 'ingredients' => '');

    $email = $title = $ingredients = '';

    if (isset($_GET['submit'])) {

        //email check
        if(empty($_GET['email'])){
            $errors['email'] = 'please enter an email' . '</br>';
        } else {
            $email = $_GET['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'enter a valid email address';
            };
        }

        //title check
        if(empty($_GET['title'])){
            $errors['title'] = 'please enter a title' . '</br>';
        } else {
            $title = $_GET['title'];
        }

        //ingredients check
        if(empty($_GET['ingredients'])){
            $errors['ingredients'] = 'please enter ingredients' . '</br>';
        } else {
            $ingredients = $_GET['ingredients'];
        }

        if(array_filter($errors)) {

        } else{
            $sql = "INSERT INTO pizza(title, ingredients, email) VALUES('$title', '$ingredients', '$email')";
            if(mysqli_query($conn, $sql)){
                header("location: index.php");
            }else {
                echo 'error message : ' . mysqli_error($conn);
            }
            
        }
        

    } else{
        echo 'not set';
    }
?>

<div>
    <form action="add.php" method="GET">
        <h2>Add a Pizza</h2>
        <div>
            <input type="email" name="email" placeholder="Enter email" value="<?= $email ?>">
            <span> <?= $errors['email'] ?> </span>
        </div>
        <div>
            <input type="text" name="title" placeholder="Enter pizza title" value="<?= $title ?>">
            <span> <?= $errors['title'] ?> </span>
        </div>
        <div>
            <input type="text" name="ingredients" placeholder="Enter Ingredients" value="<?= $ingredients ?>">
            <span> <?= $errors['ingredients'] ?> </span>
        </div>
        <span>
            <input type="submit" name="submit">
        </span>
    </form>
</div>