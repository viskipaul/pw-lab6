<?php
include "connection.php";
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        <title>Problema 3</title>
    </head>
    <body>
        <h1>Problema 3</h1>
        ID masina: <select id="cars">
            <option>Select</option>
            <?php
                $res = mysqli_query($link, "SELECT id FROM Masini");
                while($row = mysqli_fetch_array($res)){
                    ?>
                    <option value="option<?php echo $row['id']; ?>"><?php echo $row['id']?></option>
                    <?php
                }
            ?>
        </select>

        <br>
        <br>

        <table>
            <tr>
                <td>Marca</td>
                <td><input type="text" id="inputMarca"></td>
            </tr>
            <tr>
                <td>Model</td>
                <td><input type="text" id="inputModel"></td>
            </tr>
            <tr>
                <td>An fabricatie</td>
                <td><input type="text" id="inputAn"></td>
            </tr>
            <tr></tr>
            <tr>
                <td colspan=2><button id="saveBtn">Save</button></td>
            </tr>
        </table>
    </body>
</html>