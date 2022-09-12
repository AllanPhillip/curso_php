<div class="titulo">Desafio String</div>

<?php
/*
Enunciado: Avaliando os métodos da documentação da String, qual o método que a posição do texto 'abc' na String '!AbcaBcabc' retorne 1!
*/
echo 'Resultado: ' . strpos('!AbcaBcabc', 'abc') . ';'; 
echo '<br>'; 
echo 'Resultado: ' . stripos('!AbcaBcabc', 'abc') . ';'; 

echo '<br>'; 
echo <<<END
            a
        b
    c
d
END; 