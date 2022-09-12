<div class="titulo">Foreach</div>

<?php

$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado']; 

foreach($array as $dias){
    echo "$dias <br>"; 
}

echo '<hr>'; 
foreach($array as $indice => $dias){
    echo "$indice => $dias <br>"; 
}

$matrix = [
        ['a', 'e', 'i', 'o', 'u'], 
        ['b', 'c', 'd']
    ]; 
echo '<hr>'; 
foreach ($matrix as $linha) {
    foreach ($linha as $letra) {
        echo "$letra"; 
    }
    echo "<br>"; 
}

$numeros = [1, 2, 3, 4, 5]; 

foreach ($numeros as &$dobrar) {
    $dobrar *=2; 
    echo "$dobrar"; 
}

echo "<br>"; 
print_r($numeros);  

foreach ($variable as $key => $value) {
    # code...
}