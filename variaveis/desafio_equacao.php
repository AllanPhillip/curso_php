<div class="titulo">Desafio Equação</div>

<?php
    // Fazer esse mesmo desafio quebrando o problema em partes menores e utilizando variáveis para a chegar ao resultado final. 
    $numA = (6 * (3 + 2)) ** 2;
    $denA = (3 * 2); 
    $parteA = $numA / $denA; 

    $numB = ((1 - 5) * (2 - 7)) ** 2; 
    $denB = 2 ** 2; 
    $parteB = $numB / $denB; 

    $den = 10 ** 3; 

    $desafio = ($parteA - $parteB) ** 3 / $den; 
    
    echo $parteA; 
    echo '<br>'; 
    echo $parteB; 
    echo '<br>'; 
    echo $den;  
    echo '<br>'; 
    echo "O resultado do desafio é: " . $desafio . "."; 