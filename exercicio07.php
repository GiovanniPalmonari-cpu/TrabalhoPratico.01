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

/* Explicação: O número secreto é 7. Começo com um palpite que não pode ser 7 (valor 0) para entrar no while. Dentro do laço peço um novo palpite e o laço só termina quando o palpite for igual ao número secreto. Para rodar, use o terminal: php exercicio07.php */

$numeroSecreto = 7;
$palpite = 0;

while ($palpite != $numeroSecreto) {
    echo "Adivinhe o número: ";
    $palpite = (int) trim(fgets(STDIN));

    if ($palpite != $numeroSecreto) {
        echo "Errou! Tente novamente." . PHP_EOL;
    }
}

echo "Parabéns, você acertou!" . PHP_EOL;
