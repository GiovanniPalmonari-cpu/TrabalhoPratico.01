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

/* Explicação: O do-while pede a senha pelo menos uma vez. Se a senha digitada for diferente de "1234", mostro um aviso e o laço repete. Quando a senha estiver certa o laço termina e o programa continua. Para rodar, use o terminal: php exercicio13.php */

$senhaCorreta = "1234";

do {
    echo "Digite a senha: ";
    $senha = trim(fgets(STDIN));

    if ($senha !== $senhaCorreta) {
        echo "Senha incorreta! Tente novamente." . PHP_EOL;
    }
} while ($senha !== $senhaCorreta);

echo "Senha correta! Acesso liberado." . PHP_EOL;
