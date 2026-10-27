<?php
/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2B
Componentes:
    260029592 - Giovanni Palmonari de Ramos
    260088322 - Lucas Tavares Ortega
Data: 01 de Novembro de 2026
Descritivo: Exercício de prática de desenvolvimento com PHP.
******************************************************************************/

/* Explicação: Crio o array com os 7 dias. Como os índices vão de 0 a 6, o for usa $i de 0 até count($dias) - 1 e imprime $dias[$i] em cada volta. */

$dias = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];

for ($i = 0; $i < count($dias); $i++) {
    echo $dias[$i] . PHP_EOL;
}
