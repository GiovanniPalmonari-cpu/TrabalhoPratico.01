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

/* Explicação: O menu é mostrado dentro do do-while, então aparece pelo menos uma vez. Depois de ler a opção, mostro uma mensagem de acordo com a escolha. O laço só termina quando a opção for 3 (Sair). Para rodar, use o terminal: php exercicio12.php */

$opcao = 0;

do {
    echo PHP_EOL . "===== MENU =====" . PHP_EOL;
    echo "1. Iniciar" . PHP_EOL;
    echo "2. Parar" . PHP_EOL;
    echo "3. Sair" . PHP_EOL;
    echo "Escolha uma opção: ";
    $opcao = (int) trim(fgets(STDIN));

    if ($opcao == 1) {
        echo "Iniciando..." . PHP_EOL;
    } elseif ($opcao == 2) {
        echo "Parando..." . PHP_EOL;
    } elseif ($opcao == 3) {
        echo "Saindo do programa..." . PHP_EOL;
    } else {
        echo "Opção inválida!" . PHP_EOL;
    }
} while ($opcao != 3);
