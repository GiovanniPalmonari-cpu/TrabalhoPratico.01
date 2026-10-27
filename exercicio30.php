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

/* Explicação: A matriz é um array com 3 arrays dentro (as linhas). Como os índices começam em 0, a segunda linha é o índice 1 e a terceira coluna é o índice 2, então o elemento é $matriz[1][2]. Também mostro a matriz inteira com dois for, um dentro do outro. */

$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo "Matriz completa:" . PHP_EOL;
for ($linha = 0; $linha < 3; $linha++) {
    for ($coluna = 0; $coluna < 3; $coluna++) {
        echo $matriz[$linha][$coluna] . " ";
    }
    echo PHP_EOL;
}

echo "Elemento da segunda linha e terceira coluna: " . $matriz[1][2] . PHP_EOL;
