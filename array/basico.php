<div class="titulo">Array</div>

<?php
    $lista = array(1, 2, 3.14, "texto"); 

    echo $lista[3]; 
    var_dump($lista); 
    print_r($lista);

    echo '<br>';  

    $lista[0] = 12345; 
    print_r($lista); 

    $texto = 'Esse e um teste'; 

    var_dump($texto[-4]); 

    // var_dump($lista[32]); 

    echo mb_substr($texto, 12, 1); 