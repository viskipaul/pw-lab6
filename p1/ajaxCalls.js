
function getArrivals(){
    var source = document.getElementById('plecare');
    var destination = document.getElementById('sosire');

    var orasPlecare = source.options[source.selectedIndex].value;
    if(orasPlecare == 'Plecare'){
        clear(destination);
        return;
    }

    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4){ //apel AJAX complet
            if(request.status == 200) //raspuns OK (200)
            {
                clear(destination);
                var array = eval('(' + request.responseText + ')');
                for(var i = 0; i < array.sosiri.length; i++){
                    var o = document.createElement('option');
                    o.text = array.sosiri[i];
                    o.value = array.sosiri[i];
                    destination.add(o, null);
                }
            }
            else alert('Eroare request.status: ' + request.status);
        } 
    };

    request.open('GET', 'cautaDestinatii.php?plecare=' + orasPlecare);
    request.send('');
}

function clear(destination){
    destination.innerHTML = '';
}
