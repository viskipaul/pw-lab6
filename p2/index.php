<?php
include "connection.php";
?>

<html>
    <head>
        <title>Problema 2</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Problema 2</h1>
        <table id="tabel">
        </table>
        <br>
        <button id="prevBtn" onClick="getPrevPage(); onPageChanged()">Previous</button>
        <p id="pageNumber" style="display: inline">1</p>
        <button id="nextBtn" onClick="getNextPage(); onPageChanged()">Next</button>
    </body>
</html>

<script type="text/javascript">
    var actualPage = 0;
    var count = 0;
    var prevBtn = document.getElementById("prevBtn");
    var nextBtn = document.getElementById("nextBtn");
    getNextPage();
    setDataCount();
    var pages = Math.ceil(count/3);
    onPageChanged();

    function onPageChanged(){

        if(actualPage != 1){
            prevBtn.disabled = false;
        }
        else{
            prevBtn.disabled = true;
        }

        if(actualPage == pages){
            nextBtn.disabled = true;
        }
        else{
            nextBtn.disabled = false;
        }
    }

    function getNextPage(){
        var xmlhttp = new XMLHttpRequest();
        var nextPage = actualPage + 1;
        xmlhttp.open("GET", "ajax.php?page=" + nextPage, false);
        actualPage ++;
        xmlhttp.send(null);
        document.getElementById("tabel").innerHTML = xmlhttp.responseText;
        document.getElementById("pageNumber").innerHTML = "Pagina " + actualPage;
    }

    function getPrevPage(){
        var xmlhttp = new XMLHttpRequest();
        var prevPage = actualPage - 1;
        xmlhttp.open("GET", "ajax.php?page=" + prevPage, false);
        actualPage --;
        xmlhttp.send(null);
        document.getElementById("tabel").innerHTML = xmlhttp.responseText;
        document.getElementById("pageNumber").innerHTML = "Pagina " + actualPage;
    }

    function setDataCount(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "dataCount.php", false);
        xmlhttp.send(null);
        count = xmlhttp.responseText;
    }
</script>