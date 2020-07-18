<?php

$gameString = $_GET["gamestring"];

$continue = true;

//verificam daca a castigat o
if($continue == true){
    for($i = 0; $i < 3; $i++){
        if(substr($gameString, ($i * 3), 1) == substr($gameString, ($i * 3 + 1), 1) && substr($gameString, ($i * 3 + 1), 1) == substr($gameString, ($i * 3 + 2), 1)){
            if(substr($gameString, ($i * 3), 1) != '-'){
                $continue = false;
                $castigator = substr($gameString, ($i*3), 1);
            }
        }
    }

    if($continue == true){
        for($i = 0; $i < 3; $i++){
            if(substr($gameString, $i, 1) == substr($gameString, ($i + 3), 1) && substr($gameString, $i, 1) == substr($gameString, ($i + 6), 1)){
                if(substr($gameString, $i, 1) != '-'){
                    $continue = false;
                    $castigator = substr($gameString, $i, 1);
                }
            }
        }
    }
}

if($continue == false){
    if($castigator == 'O'){
        echo 'terminat-o';
    }
}
else{
    echo 'ok';
}
?>