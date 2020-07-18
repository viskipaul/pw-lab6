
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <title>Problema 4</title>
    </head>
    <body>
        <h1>Problema 4</h1>
        <table id="tabel">
            <tr>
                <td id="c1"></td>
                <td id="c2"></td>
                <td id="c3"></td>
            </tr>
            <tr>
                <td id="c4"></td>
                <td id="c5"></td>
                <td id="c6"></td>
            </tr>
            <tr>
                <td id="c7"></td>
                <td id="c8"></td>
                <td id="c9"></td>
            </tr>
        </table>
    </body>
</html>


<script type="text/javascript">
    var mutare = 1;
    var desf = true;
    var gameString = "---------";

    $('document').ready(function(){
        $('td').click(function(){
            if($(this).text() == '')
                cellClick(this.id);
        });
    });

    function cellClick(id){
        $("#" + id).text('X');
        var nrCelula = id[1];
        gameString = replaceCharX(gameString, nrCelula-1);
        mutare += 1;
        computerMove();
        mutare += 1;
    }

    function replaceCharX(str, index){
        return str.substring(0, index) + 'X' + str.substring(index + 1);
    }

    function replaceChar0(str, index){
        return str.substring(0, index) + 'O' + str.substring(index + 1);
    }

    function computerMove(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "ajax.php?gamestring=" + gameString + "&mutare=" + mutare, false);
        xmlhttp.send(null);
        var response = xmlhttp.responseText;
        alert(response);
        if(response == 'terminat-x'){
            alert('Ati castigat. Jocul s-a terminat.');
        }
        else if(response == 'terminat-o'){
            alert('Ati pierdut. Jocul s-a terminat.');
        }
        else if(response=='remiza'){
            alert('Remiza.');
        }
        else{
            var id = parseInt(response) + 1;
            gameString = replaceChar0(gameString, parseInt(response));
            $("#c" + id).text("O");
        }
    }

</script>