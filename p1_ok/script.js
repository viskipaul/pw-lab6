function getDestinatii(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "ajax.php?plecare=" + document.getElementById("trenuris").value, false );
    xmlhttp.send(null);
    document.getElementById("sosired").innerHTML=xmlhttp.responseText;
}

function getDestinatiiJQuery(){
    $.ajax({
        type: 'GET',
        url: 'ajax.php',
        data: 'plecare=' + $("#trenuris").val(),
        success: function(response){
            $("#sosired").html(response);
        }
    });
}