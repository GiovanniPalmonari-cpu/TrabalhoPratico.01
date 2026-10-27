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

/* Explicação: Dentro do do-while eu leio um número e imprimo ele. A condição no final testa se o número ainda é maior ou igual a 0. Quando o usuário digita um número negativo (que também é impresso) o laço termina. Para rodar, use o terminal: php exercicio14.php */

do {
    echo "Digite um número: ";
    $numero = (int) trim(fgets(STDIN));
    echo "Você digitou: " . $numero . PHP_EOL;
} while ($numero >= 0);

echo "Número negativo digitado. Fim do programa." . PHP_EOL;
