<?php 
    // $titlepage = "Home Page";
    // define('NAME','value');
    // require_once('./src/header.php');
    // echo NAME
?>

<?php
    // $name = 'promise';
    // echo str_replace('pmi', 'b', $name);

    // $people = ['promise', 'edwin', 'prosper'];
    // echo $people[1][0];

    // $promise = array('red', 'blue', 'black', 'purple');
    // print_r($promise);

    // echo '</br>';

    // $associative = array('promise' => 'red', 'pascal' => 'blue', 'prosper' => 'black');
    // print_r($associative) ;

    // $blogs = [
    //     ['first blog', 'promise', 20],
    //     ['second blog', 'prosper', 2100],
    //     ['third blog', 'pascal', 30]
    // ];
    // echo count($blogs);

    // echo '</br>';
    // print_r("$blogs");

    // echo '</br>';

    // $list = ['promise', 'ebuka', 'pascal', 'prosper'];
    // for ( $i = 0 ; $i < count($list); $i++){
    //     print_r($list[$i].'</br>');
    // }
?>


<?php 
    // $products = [
    //     ['name' => 'phone', 'price' => '200'],
    //     ['name' => 'laptop', 'price' => '10'],
    //     ['name' => 'book', 'price' => '5'],
    //     ['name' => 'ps4', 'price' => '300']
    // ];

    // include('./src/header.php');
    // require('./src/header.php');
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Products</h2>
    <ul>
        <?php 
            // foreach( $products as $product ){
            //     echo "<h3> {$product['name']} </h3> <p> {$product['price']} </p>";
            // } 
        ?> 
    </ul>
</body>
<script src="script.js"></script>
</html> -->


<?php 

    //using mySQLi(procedural style)
    $conn = mysqli_connect('localhost', 'promise', 'Pro1234,', 'netninja_db');



    //check connection
    if(!$conn) {
        echo 'connection error' . mysqli_connect_error();
    }

    //query database
    $sql = 'SELECT * FROM pizza';

    //make query and get result
    $result = mysqli_query($conn, $sql);

    //making the result an associative array
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    print_r($rows);

?>

<?php
    $titlepage = 'Home page';
    include('./src/header.php');

?>



<main>
    <form action="">Register</form>
</main>

<?php
    include('./src/footer.php');
?>