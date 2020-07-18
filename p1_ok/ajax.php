<?php
include "connection.php";

$plecare=$_GET["plecare"];

if($plecare!=""){
    $res=mysqli_query($link, "SELECT * FROM curse WHERE plecare='$plecare'");
    echo "<select>";
    while($row=mysqli_fetch_array($res))
    {
        echo "<option>"; echo $row["sosire"]; echo "</option>";
    }
    echo "</select>";
}

?>