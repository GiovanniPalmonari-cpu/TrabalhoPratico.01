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

/* Explicação: O for começa em 2 e, a cada volta, soma 2 ao contador ($i += 2). Assim ele só passa pelos números pares até chegar em 20. */

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . PHP_EOL;
}
