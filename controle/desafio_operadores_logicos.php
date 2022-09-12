<div class="titulo">Desafio - Operadores Lógicos</div>

<!-- 
    Dois trabalhos -> terça e quinta
    - Se os dois trabalhos forem executados -> TV de 50' + sorvete
    - Se apenas um for executado -> TV 32' + sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça): </label>
            <select class="formulario" name="t1" id="t1">
                <option value="1">Executado</option>
                <option value="0">Não executado</option>
            </select>    
    </div>
    <div>
        <label for="t2">Trabalho 1 (Quinta): </label>
            <select class="formulario" name="t2" id="t2">
                <option value="1">Executado</option>
                <option value="0">Não executado</option>
            </select>    
    </div>
    <button class="formulario">Executar</button>
</form>

<p class="divisao">Resultado:</p><hr>

<?php

if(isset($_POST['t1']) && isset($_POST['t2'])){
    $t1 = $_POST['t1'] == '1';
    $t2 = $_POST['t2'] == '1';
    $tv = ''; 
    $sorvete = false; 

    if($t1 && $t2){
        $tv = '50"'; 
    }elseif($t1 xor $t2){
        $tv = '32"'; 
    }

    if($t1 or $t2){
        $sorvete = true; 
    }

    if($tv){
        $resultado = "Vamos comprar uma TV de $tv"; 
    }else{
        $resultado = "Sem TV dessa vez :("; 
    }

    $saudavel = !$sorvete; 

    if($saudavel){
        $resultado .= '<br>Estamos mais saudáveis!'; 
    }else{
        $resultado .= '<br>Sorvete liberado \o/'; 
    }
    echo "<p>$resultado</p>"; 
}else{
    echo "<br>"; 
}