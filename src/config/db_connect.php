<?php 

    //using mySQLi(procedural style)
    $conn = mysqli_connect('localhost', 'promise', 'Pro1234,', 'netninja_db');



    //check connection
    if(!$conn) {
        echo 'connection error' . mysqli_connect_error();
    }

?>