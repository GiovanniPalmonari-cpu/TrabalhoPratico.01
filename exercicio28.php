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

/* Explicação: A função in_array() procura um valor dentro do array e devolve true se encontrar ou false se não encontrar. Uso um if para mostrar a mensagem de acordo com o resultado. */

$frutas = ["Banana", "Laranja", "Maçã", "Uva", "Morango"];

if (in_array("Maçã", $frutas)) {
    echo "A fruta Maçã existe no array." . PHP_EOL;
} else {
    echo "A fruta Maçã não existe no array." . PHP_EOL;
}
