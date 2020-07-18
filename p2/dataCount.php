<?php
    include "connection.php";

    $res = mysqli_query($link, "SELECT * FROM persoane");
    $count = mysqli_num_rows($res);

    echo $count;
?>