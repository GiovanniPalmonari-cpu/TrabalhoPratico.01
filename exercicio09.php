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

/* Explicação: Leio o primeiro número antes do while. Enquanto o número for diferente de 0, somo ele em $soma e leio o próximo. Quando o usuário digita 0 o laço para e mostro a soma. Para rodar, use o terminal: php exercicio09.php */

$soma = 0;

echo "Digite um número (0 para terminar): ";
$numero = (int) trim(fgets(STDIN));

while ($numero != 0) {
    $soma = $soma + $numero;

    echo "Digite um número (0 para terminar): ";
    $numero = (int) trim(fgets(STDIN));
}

echo "A soma dos números digitados é: " . $soma . PHP_EOL;
