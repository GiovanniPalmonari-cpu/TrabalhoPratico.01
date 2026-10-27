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

/* Explicação: Um array associativo usa nomes (chaves) no lugar de números. Aqui guardo nome (texto), idade (número) e curso (texto), ou seja, tipos diferentes no mesmo array. Mostro com print_r. */

$aluno = [
    "nome" => "Carlos Silva",
    "idade" => 19,
    "curso" => "Análise e Desenvolvimento de Sistemas"
];

print_r($aluno);
