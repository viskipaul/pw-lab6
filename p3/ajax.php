<?php
    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "p3");
    
    $id=$_GET["id"];
    
    if($id!=""){
        $res=mysqli_query($link, "SELECT * FROM Masini WHERE id='$id'");
        while($row=mysqli_fetch_array($res))
        {
            echo $row["marca"]; echo " "; 
            echo $row["model"]; echo " ";
            echo $row["an_fabricatie"];
        }
    }

?>