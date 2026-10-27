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

/* Explicação: O array associativo guarda a disciplina como chave e a nota como valor. O foreach soma todas as notas. A média é a soma dividida pela quantidade de disciplinas (count). Uso number_format para mostrar a média com duas casas. */

$notas = [
    "Matemática" => 8.5,
    "Português" => 7.0,
    "Programação" => 9.0,
    "Banco de Dados" => 6.5
];

$soma = 0;

foreach ($notas as $disciplina => $nota) {
    echo $disciplina . ": " . $nota . PHP_EOL;
    $soma = $soma + $nota;
}

$media = $soma / count($notas);

echo "Média do aluno: " . number_format($media, 2, ",", ".") . PHP_EOL;
