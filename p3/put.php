<?php
    include "connection.php";
    
    $id=$_GET["id"];
    
    $marca = $_GET["marca"];
    $model = $_GET["model"];
    $an_fabricatie = $_GET["an_fabricatie"];

    $sql = "UPDATE Masini SET marca='$marca', model='$model', an_fabricatie='$an_fabricatie' WHERE id='$id'";

    if(mysqli_query($link, $sql)){
        echo "OK!";
    }
    else{
        echo "Error!";
    }
    mysqli_close($link);
?>