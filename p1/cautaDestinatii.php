<?php
    error_reporting(0);
    require_once("dbConfig.php");

    $plecare = mysqli_real_escape_string($_GET['plecare']);
    $result = mysqli_query("SELECT sosire FROM destinatii where plecare=\"$plecare\" group by sosire order by sosire");

    printf("{\"sosiri\": [ ");
    while ($row = mysqli_fetch_array($result))
        printf("\"%s\",", $row['sosire']);
    printf(" ] }");

    // se poate folosi de asemenea si json_encode pentru a genera JSON-ul trimis client-ului
