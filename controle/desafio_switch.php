<div class="titulo">Desafio - Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value=" ">------</option>
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const CELSIUS_FAHRENHEIT = 9/5; 
const FAHRENHEIT_CELSIUS = 5/9; 

$param = $_POST['param'] ?? 0;
$conversao = $_POST['conversao'] ?? " "; 

if(isset($param)){
    switch ($conversao){
        case 'km-milha':
            $distancia = $param * FATOR_KM_MILHA;
            $mensagem = "<hr>$param Km(s) = $distancia Milha(s)";
            break;
        case 'milha-km':
            $distancia = $param / FATOR_KM_MILHA;
            $mensagem = "<hr>$param Milha(s) = $distancia Km(s)";
            break;
        case 'metro-km':
            $distancia = $param / FATOR_METRO_KM;
            $mensagem = "<hr>$param metro(s) = $distancia Km(s)";
            break;
        case 'km-metro':
            $distancia = $param * FATOR_METRO_KM;
            $mensagem = "<hr>$param Km(s) = $distancia metro(s)";
            break;
        case 'celsius-fahrenheit':
            $temperatura = $param * CELSIUS_FAHRENHEIT + 32;
            $mensagem = "<hr>{$param}°Celsius = {$temperatura} °Fahrenheit";
            break;
        case 'fahrenheit-celsius':
            $temperatura = ($param - 32) * FAHRENHEIT_CELSIUS;
            $mensagem = "<hr>{$param}°Fahrenheit = {$temperatura}°Celsius";
            break;
        default:
            $mensagem = "<hr> ";
    }
}
    echo "<p>$mensagem</p>";



