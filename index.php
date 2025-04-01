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
    session_start();
    require('./src/config/db_connect.php');

    //query database
    $sql = 'SELECT * FROM pizza';

    //make query and get result
    $result = mysqli_query($conn, $sql);

    //making the result an associative array
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free the resource from memory
    mysqli_free_result($result);

    //close the connection
    mysqli_close($conn);

    

?>

<?php
    $titlepage = 'Home page';
    include('./src/header.php');

    if(isset($_POST['submit'])) {
        $video = $_FILES['video'];
        echo '<pre>';
            print_r($video);
        echo '</pre>';
    } else {
        echo 'not set';
    }

?>





<main>
    <form action="" method="POST" enctype="multipart/form-data">
        <div style="display: flex; flex-wrap: wrap; gap: 20px;text-align: center;">
            <h2><?= $_SESSION['name'] ?></h2>
            <?php foreach($rows as $pizza) :?>

                <div style="background-color: green; padding: 20px;">
                    <h2 style="color: red;"> <?php echo $pizza['title'] ?> </h2>
                    <ul>
                     <li><?php echo $pizza['ingredients'] ?> </li>
                    </ul>
                    <a href='details.php?id=<?= $pizza['id'] ?>'>See more</a>
                </div>
                
                
            <?php endforeach; ?>
        </div>
    </form>
</main>

<?php
    include('./src/footer.php');
?>