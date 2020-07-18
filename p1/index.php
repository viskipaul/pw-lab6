<!DOCTYPE HTML>
<html>
<head>
    <title>Un alt exemplu cu AJAX si PHP</title>
    <script type="text/javascript" src="ajaxCalls.js">
    </script>
</head>
<?php
    error_reporting(0);
    require_once("dbConfig.php");
?>
<body>
    Statie de plecare:
    <select id="plecare" name="plecare" onChange="getArrivals()">
    <option selected="selected">Plecare</option>
    <option value="Cluj-Napoca">Cluj-Napoca</option>
    <option value="Bucuresti">Constanta</option>
    <option value="Arad">Iasi</option>
    </select>
    <br>
    <br>
    Statie de sosire:
    <select id="sosire" name="sosire">
    </select>
    <br>
    <br>
</body>
</html>
