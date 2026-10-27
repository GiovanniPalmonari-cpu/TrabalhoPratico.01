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

/* Explicação: O procedimento recebe o array do carro e imprime cada informação acessando pela chave (marca, modelo e ano). */

function mostrarCarro($carro)
{
    echo "Marca: " . $carro["marca"] . PHP_EOL;
    echo "Modelo: " . $carro["modelo"] . PHP_EOL;
    echo "Ano: " . $carro["ano"] . PHP_EOL;
}

$meuCarro = [
    "marca" => "Volkswagen",
    "modelo" => "Gol",
    "ano" => 2018
];

mostrarCarro($meuCarro);
