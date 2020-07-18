var changed = false;

$(document).ready(function(){
    
    
    $("#saveBtn").prop('disabled', true);
    $("#cars").change(function(){
        if(changed == true){
            alert('Datele au fost modificate.');
        }
        else{
            getData();
        }
    });
    $("#saveBtn").click(function(){
        saveData();
        alert("Datele au fost modificate.");
        $("#saveBtn").prop('disabled', true);
    });
    $('input').change(function(){
        $("#saveBtn").prop('disabled', false);
        changed = true;
    });
});

function getData(){
    /*
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "ajax.php?id=" + $("#cars option:selected").text(), false);
    xmlhttp.send(null);
    var response = xmlhttp.responseText;
    var spl = response.split(" ");
    */
   
   $.ajax({
        type: 'GET',
        url: 'ajax.php',
        data: 'id=' + $("#cars option:selected").text(),
        success: function(response){
            var spl = response.split(" ");
            $("#inputMarca").val(spl[0]);
            $("#inputModel").val(spl[1]);
            $("#inputAn").val(spl[2]);
        }
   });
}

function saveData(){
    var xmlhttp = new XMLHttpRequest();
    var id = $("#cars option:selected").text();
    var marca = $("#inputMarca").val();
    var model = $("#inputModel").val();
    var an_fabricatie = $("#inputAn").val();
    xmlhttp.open("GET", "put.php?id=" + id + "&marca=" + marca + "&model=" + model + "&an_fabricatie=" + an_fabricatie);
    xmlhttp.send(null);
    var response = xmlhttp.responseText;
}