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

/* Explicação: O foreach passa por cada número do array. O if testa se o número é maior que 20 e, só nesse caso, o número é impresso (23 e 45). */

$numeros = [12, 5, 23, 18, 9, 45];

foreach ($numeros as $numero) {
    if ($numero > 20) {
        echo $numero . PHP_EOL;
    }
}
