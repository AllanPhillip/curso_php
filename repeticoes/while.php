<div class="titulo">While/Do While</div>

<?php

const VALOR_LIMITE = 5; 

$contador = 0; 

echo "Utilizando o While<br><br>"; 
while ($contador < VALOR_LIMITE) {
    echo "while {$contador}<br>"; 
    $contador++; 
}

echo "<br><hr>"; 
echo "Utilizando o Do -> While<br>"; 
$contador = 100; 
do {
    echo "do-while {$contador}<br>"; 
} while ($contador <= VALOR_LIMITE);