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

/* Explicação: O for varia o multiplicador $i de 1 até 10. Em cada volta o programa multiplica 5 por $i e mostra a conta completa. */

for ($i = 1; $i <= 10; $i++) {
    $resultado = 5 * $i;
    echo "5 x " . $i . " = " . $resultado . PHP_EOL;
}
