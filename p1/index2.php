<?php
include "dbConfig.php";
?>

<div>Trenuri</div>

<select id="plecari">
    <option value="0">Plecare</option>

    <?php
    $sql_plecari = "SELECT plecare FROM destinatii";
    $plecari_data = mysqli_query($con, $sql_plecari);
    while($row = mysqli_fetch_assoc($plecari_data)){
        $plecari_id = $row['id'];
        $plecari_name = $row['plecare'];
        echo "<option value='".$plecari_id."' >".$plecari_name."</option>";
    }
    ?>
</select>

<select id="sosiri">
    <option value="0">Sosire</option>
</select>