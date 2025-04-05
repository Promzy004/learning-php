<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

// //ternary operators

    // $amount = 500;

    // $val = ($amount > 500) ?  'greater' :   'lesser';
    // echo $val;


// //superglobals

//     echo $_SERVER['SERVER_NAME'] . '</br>';
//     echo $_SERVER['REQUEST_METHOD'] . '</br>';  
//     echo $_SERVER['SCRIPT_FILENAME'] . '</br>';  
//     echo $_SERVER['PHP_SELF'] . '</br>';  

if(isset($_POST['submit'])) {

    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['username'];
    header('Location: index.php');
}


?>

<main>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="username" >
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="submit" name="submit">
    </form>
</main>

<script src="script.js"></script>