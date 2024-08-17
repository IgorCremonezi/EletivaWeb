<?php
    require_once("cabecalho.php");
?>

<h1>Exercício 3</h1>
<form action="exer3.php" method="post">
    <div class="row">
        <div class="col">
            <label for="nome_tarefa" class="form-label">Informe o nome da tarefa: </label>
            <input type="text" name="nome_tarefa" id="nome_tarefa" class="form-control"/>
        </div>
        <div class="col">
            <label for="horas_tarefa" class="form-label">Informe o total de horas da tarefa: </label>
            <input type="text" name="horas_tarefa" id="horas_tarefa" class="form-control"/>
        </div>
        <div class="col">
            <label for="complexidade" class="form-label">Selecione a complexidade: </label>
            <select name="complexidade" id="complexidade" class="form-control">
                <option value="facil">Baixa</option>
                <option value="medio">Média</option>
                <option value="dificil">Alta</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="nome_funcionario" class="form-label">Informe o nome do funcionário: </label>
            <input type="text" name="nome_funcionario" id="nome_funcionario" class="form-control"/>
        </div>
        <div class="col">
            <label for="horas_disponiveis" class="form-label">Informe o total de horas disponíveis: </label>
            <input type="text" name="horas_disponiveis" id="horas_disponiveis" class="form-control"/>
        </div>
        <div class="col">
            <label for="experiencia" class="form-label">Selecione a complexidade: </label>
            <select name="experiencia" id="experiencia" class="form-control">
                <option value="junior">Júnior</option>
                <option value="pleno">Pleno</option>
                <option value="senior">Sênior</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-danger">Calcular</button>
        </div>
    </div>
</form>

<?php

    if ($_POST){
        $lucros = $_POST['lucros'];
        $nome = $_POST['nome'];
        $escala = $_POST['escala'];
        echo CalcularBonusAnual($lucros, $nome, $escala);
    }

    require_once("rodape.php");