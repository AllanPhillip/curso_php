<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    "pessoa1" => [
        "nome" => "Roberto", 
        "idade" => 26, 
        "naturalidade" => "São Paulo"    
    ], 
    "pessoa2" => [
        "nome" => "Maria", 
        "idade" => 25,
        "naturalidade" => "Bahia"
    ], 
]; 

print_r($dados); 

echo '<br>' . $dados['pessoa1']['idade']; 
echo '<br>' . $dados['pessoa2']['idade']; 

$dados["pessoa3"] = [
    "nome" => "Florinda", 
    "idade" => 37, 
    "naturalidade" => "Ciudad de México"    
    
]; 
echo '<br>';
print_r($dados); 
echo '<br>'; 

echo '<hr>';

echo '<br>' . $dados['pessoa3']['naturalidade']; 

$dados["pessoa3"] ["vizinho"] = "Seu Madruga"; 
echo '<br>';
print_r($dados['pessoa3']);

unset($dados['pessoa1']); 
echo '<br>';
echo '<br>';
print_r($dados); 

unset($dados['pessoa2']); 
echo '<br>';
echo '<br>';
print_r($dados); 

// var_dump($dados['pessoa2']); 