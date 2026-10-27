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

/* Explicação: Leio o número e uso abs() para ignorar o sinal negativo. Se o número for 0, ele tem 1 dígito. Nos outros casos, o while divide o número por 10 (divisão inteira com intdiv) e conta uma volta para cada divisão, até o número chegar a 0. Para rodar, use o terminal: php exercicio10.php */

echo "Digite um número inteiro: ";
$numero = abs((int) trim(fgets(STDIN)));

$contador = 0;

if ($numero == 0) {
    $contador = 1;
}

while ($numero > 0) {
    $numero = intdiv($numero, 10);
    $contador++;
}

echo "O número possui " . $contador . " dígito(s)." . PHP_EOL;
