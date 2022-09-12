<div class="titulo">Desafio - For</div>

<!-- 
Usar o For...

#
##
###
####
#####
1) versão Pode utilizar incremento $i++ 
2) versão Não pode utilizar incremento 

-->

<?php

// $hastag = [1 =>'#', '##', '###', '####', '#####']; 
// // var_dump($hastag); 
// print_r($hastag); 
// echo '<br>'; 
// echo '<br>'; 
// echo '<hr>';  

// for ($i=1; $i <= count($hastag) ; $i++) { 
//     echo "$hastag[$i] <br>"; 
// }

// for ($i=1; $i <= count($hastag) ; $i++) { 
//     echo "$hastag[$i] <br>"; 
// }

$impressao = ''; 
for ($i=1; $i <=5 ; $i++) { 
    $impressao .= '#'; 
    echo "$impressao <br>"; 
}

$impressao2 = ''; 
$hastag = [1 =>'#', '##', '###', '####', '#####'];
for ($i=1; $i <=5 ; $i++) { 
    $impressao2 = $hastag[$i]; 
    echo "$impressao2 <br>"; 
}