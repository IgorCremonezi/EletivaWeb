<?php

    function TotalHorasTrabalhadas($hora_final, $hora_inicial) {
        $hora_inicial = new DateTime($hora_inicial);
        $hora_final = new DateTime($hora_final);
        $diferenca = $hora_final->diff($hora_inicial);
        return "A iferença de horário: " . $diferenca->format("%h:%I");
    }

    function CalcularSalarioSemanal($horas_trabalhadas, $valor_hora) {
        return "O salário semanal é de R$ " . number_format(($horas_trabalhadas * $valor_hora) / 4.5, 2, ',', '.');
    }

    function CalcularBonusAnual($lucros, $nome, $escala) {
        if ($escala >= 1 and $escala <= 5)
            return "O valor do bônus do funcionário " . $nome . " é de: R$" . $lucros * ($escala / 10);
        else
            return "Informe um índice de escala válido!";
    }