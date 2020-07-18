<?php

$gameString = $_GET["gamestring"];
$mutare = $_GET["mutare"];

$continue = true;

if($mutare >= 9){
    $continue = false;
    $castigator = '-';
}

//verificam daca a castigat jucatorul
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

//if($continue == false){
    //if($castigator == 'X'){
    //    echo 'terminat-x';
    //}
    //else if($castigator == '-'){
    //    echo 'remiza';
    //}
    //else{
    //    echo 'terminat-o';
    //}
//}

if($continue == true){
    $found = false;
    while($found === false){
        $nr = rand(0,8);
        if(substr($gameString, $nr, 1) == '-'){
            $found = true;
            echo $nr;
        }
    }
}

//verificam daca dupa mutarea computerului jocul s-a terminat (a castigat calculatorul)
if($continue == true){
    for($i = 0; $i < 3; $i++){
        if(substr($gameString, ($i * 3), 1) == substr($gameString, ($i * 3 + 1), 1) && substr($gameString, ($i * 3 + 1), 1) == substr($gameString, ($i * 3 + 2), 1)){
            if(substr($gameString, ($i * 3), 1) != '-'){
                $continue = false;
                $castigator = substr($gameString, ($i*3), 1);
            }
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

if($continue == false){
    if($castigator == 'X'){
        echo 'terminat-x';
    }
    else if($castigator == '-'){
        echo 'remiza';
    }
    else{
        echo 'terminat-o';
    }
}


?>