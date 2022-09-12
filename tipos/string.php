<div class="titulo">Tipo String</div>

<?php
$_texto = 'Eu sou uma string e possuo diversos caracteres. Sou um tipo de dado em formato de texto processado por PHP.';
echo $_texto;
echo '<br>';
var_dump($_texto);
echo '<br>';

// Concatenação 
echo "Nós também" . ' somos string.';
echo '<br>', "Também aceito", " vírgulas.";
echo '<br>';
echo '"Teste 1"  ' .  " 'Teste 2' " . '\'Teste 3\' ' . "\"Teste 4\" " . "\\";
print("<br>Também existe a função print.");
echo '<br>';
echo strtoupper($_texto);
echo '<br>';
echo strtolower($_texto);
echo '<br>';
echo ucfirst($_texto);
echo '<br>';
echo ucwords($_texto);
echo '<br>';
echo 'Tamanho: ' . strlen($_texto) . '.';
echo '<br>';
echo 'Tamanho: ' . mb_strlen($_texto, "utf-8") . '.';
echo '<br>';
echo substr($_texto, 7, 6); // retorna parte da string, conforme os parâmetros indicados 
echo '<br>';
echo str_replace('dado', 'informação', $_texto);
echo '<br>';