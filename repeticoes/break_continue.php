<div class="titulo">Break/Continue </div>

<?php

$cont = 15;

for(;;){
    echo "$cont  ";
    $cont++; 
    if($cont > 20){
        break; 
    } 
}
echo "<br><hr>"; 
for (;;) { 
    $cont++; 
    if($cont % 2 === 1) continue; 
    echo "$cont  "; 
    if($cont >= 30) {
        break; 
    }
}

echo "<br><hr>"; 
foreach (array(1,2,3,4,5,6) as $valor) {
    if($valor === 6) break; 
    if($valor % 2 === 0) continue; 
    echo "$valor  "; 
}
echo "<hr>FIM!"; 
