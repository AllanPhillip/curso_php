<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE; 
    echo '<br>';
    echo FALSE; 

    echo '<br>' . var_dump(true); 
    echo '<br>' . var_dump(False); 
    echo '<br>' . var_dump("true"); 
    echo '<br>' . is_bool(false);
    echo '<br>' . is_bool('true');

    // fazer as regras de conversões
    
    echo '<p>Regras</p>'; 
    echo '<br>' . var_dump((bool) 0); // Apenas Zero é false
    echo '<br>' . var_dump((bool) 20);
    echo '<br>' . var_dump((bool) -1);
    echo '<br>' . var_dump((bool) 0.00000001);
    echo '<br>' . var_dump((bool) "");
    echo '<br>' . var_dump((bool) " ");
