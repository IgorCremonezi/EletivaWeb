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