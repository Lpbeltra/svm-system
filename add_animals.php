<?php
session_start();
?>


<h2 style="text-align: center;">Cadastro de animais</h2>
<div id="maindiv">
    <form id="form" method="POST" action="add_animals_action.php">
        <label>
            Nome:
            <input type="text" name="name"/>
        </label>
        <br/><br/>
        <label>
            Espécie:
            <select name="animal_specie">
                <option>Canino</option>
                <option>Felino</option>
                <option>Equino</option>
                <option>Ovino</option>
                <option>Caprino</option>
                <option>Primata</option>
                <option>Ave</option>
            </select>
        </label>
        <br></br>
        <label>
            Raça:
            <input type="text" name="race"/>
        </label>
        <br/><br/>
        <label>
            Cor:
            <input type="text" name="color"/>
        </label>
        <br/><br/>
        <label>
            Genero:
            <select name="gender_list">
                <option>Macho</option>
                <option>Fêmea</option>
            </select>
        </label>
        <br></br>
        <label>
            Porte:
            <select name="animal_size_list">
                <option>Pequeno</option>
                <option>Médio</option>
                <option>Grande</option>
            </select>
        </label>
        <br></br>
        <label>
            Castrado?
            <input name="castrated" type="checkbox">
        </label>
        <br/><br/>
        <label>
            Vacinado?
            <input name="vaccinated" type="checkbox">
        </label>
        <br></br>
        <label>
            Vermifugado?
            <input name="vermifugated" type="checkbox">
        </label>
        <br></br>
        <label>
            Data de chegada
            <input name="arrivaldate" type="date">
        </label>
        <br></br>
        <input type="submit" value="Cadastrar"/>
    </form>
</div>
<a style="text-align: center;" href="index.php">Voltar</a>
