<div class="titulo">Desafio - Sorteio</div>

<?php

$personagens = ["Chaves", "Chiquinha", "Quico", "Seu Madruga", "Dona Florinda", "Nhonho", "Senhor Barriga", "Professor Girafales", "Popis", "Godinez", "Bruxa do 71"]; 

$indice = array_rand($personagens); 
echo "<h1 center>$personagens[$indice]</h1>"

?>

<style>
    [center]{
        display: flex;
        justify-content: center;
    }
</style>