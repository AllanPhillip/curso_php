<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "José", 
    "idade" => 33
]; 

$dados2 = [
    "naturalidade" => "Fortaleza"
]; 

$dados2["endereço"] = "Rua Y"; 

$dadosCompletos = $dados1 + $dados2; 
print_r($dadosCompletos); 

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos); 
echo "$indice = $dadosCompletos[$indice]"; 
echo '<br>'; 
echo "$dadosCompletos[idade]";    
echo '<br>' . " ${dadosCompletos["idade"]}"; 
echo '<br>'; 
unset($dadosCompletos['naturalidade']);
print_r($dadosCompletos); 
echo '<br>'; 
unset($dadosCompletos);
// var_dump($dadosCompletos); 

$impares = [1, 3, 5, 7, 9]; 
$pares = [0, 2, 4, 6, 8]; 

$decimais = array_merge($pares, $impares); 
echo '<br>';
print_r($decimais); 

sort($decimais); 
echo '<br>'; 
print_r($decimais);  

