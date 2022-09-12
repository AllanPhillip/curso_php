<div class="titulo">$_POST</div>

<form action="#" method="post">
    <label for="nome">Nome: </label><input type="text" name="nome">
    <label for="sobrenome">Sobrenome: </label><input type="text" name="sobrenome">
    <label for="estado">Estado:</label><select name="estado">
        <option value="RJ">Rio de Janeiro</option>
        <option value="SP">São Paulo</option>
        <option value="MG">Minas Gerais</option>
        <option value="ES">Espírito Santo</option>    
    </select>



    <button>Enviar</button>
</form>
<hr>

<style>
form > * {
    font-size: 1.8rem;
    display: flex;
    flex-direction: column;
    margin: 10px; 
}

button{
    margin: 30px 10px; 

}
</style>
<?php
    print_r($_GET);
    echo '<br>';
    print_r($_POST); 

