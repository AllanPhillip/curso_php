<div class="titulo">Valor vs Referência</div>

<?php

// Atribuição por valor 
$variavel = 'valor inicial'; 
echo $variavel; 

$variavelValor = $variavel;
echo "<br> $variavelValor"; 

$variavelValor = 'novo valor'; 
echo "<br> $variavel  $variavelValor"; 


// Atribuição por Referência 
$variavelReferencia = &$variavel; 
$variavelReferencia = 'mesma referência'; 

echo "<br> $variavel $variavelReferencia"; 



