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

/* Explicação: O contador $i começa em 3 e a cada volta do while aumenta de 3 em 3 ($i += 3). Assim só aparecem os múltiplos de 3 até 30. */

$i = 3;

while ($i <= 30) {
    echo $i . PHP_EOL;
    $i += 3;
}
