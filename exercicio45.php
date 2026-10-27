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

/* Explicação: A função recebe um array. Se ele estiver vazio, retorna null; caso contrário, reset() retorna o primeiro elemento, mesmo que as chaves sejam associativas. */

function obterPrimeiroElemento($array)
{
    if (empty($array)) {
        return null;
    }

    return reset($array);
}

$cores = ["Azul", "Verde", "Vermelho"];

echo "O primeiro elemento é: " . obterPrimeiroElemento($cores) . PHP_EOL;
