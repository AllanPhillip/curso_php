<div class="titulo">Desafio PI</div>

<?php

echo pi(); 
$pi = 3.14; 
$piErrado = 2.8; 


if($pi !== pi()){
    echo "<br>Iguais!"; 
} else{
    echo "<br>Diferentes!"; 
}

if($piErrado != pi()){
    echo "<br>Iguais!"; 
} else{
    echo "<br>Diferentes!"; 
}

// Operador Relacional

echo '<br>' . (pi() - $pi); 
echo '<br>' . (pi() - $piErrado); 

if(pi() - $pi <= 0.01){
    echo '<br>Praticamente iguais!'; 
} else{
    echo '<br>Não são iguais!'; 
}

if (pi() - $piErrado <= 0.01) {
    echo '<br>Praticamente iguais!'; 
} else{
    echo '<br>Não são iguais!'; 
}


