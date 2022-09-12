<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = array('laranja', 'abacaxi'); 
// FRUTAS[] = 'banana'; 
print_r(FRUTAS); 

const CARRO = ["fiat" => "Uno", "ford" => "Fiesta"]; 
echo '<br>' . CARRO['ford']; 

define('CIDADES', array('Belo Horizonte', 'Cuiabá')); 
echo '<br>'; 
print_r(CIDADES); 
echo '<br>' . CIDADES[1]; 