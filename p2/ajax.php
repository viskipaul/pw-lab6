<?php
    $link=mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "programare_web");

    $pageNumber = $_GET["page"] - 1;

    $index = $pageNumber * 3;

    $res = mysqli_query($link, "SELECT * FROM persoane LIMIT $index,3");
 
    echo"<tr><th>Nume</th><th>Prenume</th><th>Telefon</th><th>E-mail</th></tr>";

    while($row = mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo '<td>'; echo $row['nume']; echo '</td>';
        echo '<td>'; echo $row['prenume']; echo '</td>';
        echo '<td>'; echo $row['telefon']; echo '</td>';
        echo '<td>'; echo $row['email']; echo '</td>';
        echo "</tr>";
    }
?>