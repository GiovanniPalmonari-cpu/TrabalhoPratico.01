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

/* Explicação: Repito o array do exercício 21. No foreach uso a forma $chave => $valor, que pega o nome da chave e o conteúdo dela. Depois imprimo no formato pedido. */

$aluno = [
    "nome" => "Carlos Silva",
    "idade" => 19,
    "curso" => "Análise e Desenvolvimento de Sistemas"
];

foreach ($aluno as $chave => $valor) {
    echo $chave . ": " . $valor . PHP_EOL;
}
