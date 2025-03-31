<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

?>


<?php

    require('./src/config/db_connect.php');

    if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "SELECT * FROM pizza WHERE id = $id";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        mysqli_close($conn);
    }


?>




<main>
    <div>
        <?php if($row) { ?>
            <div style="display: flex; flex-direction: column; gap: 20px;margin: 0 auto;width: 50%;background-color: aqua;align-items: center;">
                <h3> <?= $row['title'] ?> </h3>
                <p> Created by : <?= $row['email'] ?> </p>
                <p> <?= $row['ingredients'] ?> </p>
                <p> <?= $row['created_at'] ?> </p>
            </div>

        <?php } ?>
    </div>
</main>