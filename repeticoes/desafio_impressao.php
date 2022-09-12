<div class="titulo">Desafio - Impressão</div>

<!-- 
- Imprima apenas os valores do array que contém índice par
- Desafio: resolver com For e Foreach
- Valores esperados: AAA, CCC, EEE
-->

<?php

    $array = [
        "AAA", 
        "BBB", 
        "CCC",
        "DDD",
        "EEE",
        "FFF"    
    ]; 


for ($i=0;$i < count($array); $i++){
    if($i % 2 === 1) continue; 
        echo"{$array[$i]} ";
}
echo "<br>"; 
echo"<hr>";
foreach ($array as $key => $value) {
    if($key % 2 !== 0) continue; 
        echo"$value "; 
}