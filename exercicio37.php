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

/* Explicação: O procedimento recebe três parâmetros separados por vírgula e imprime cada um em uma linha, com um rótulo na frente. */

function mostrarDados($nome, $idade, $cidade)
{
    echo "Nome: " . $nome . PHP_EOL;
    echo "Idade: " . $idade . " anos" . PHP_EOL;
    echo "Cidade: " . $cidade . PHP_EOL;
}

mostrarDados("Ana Souza", 20, "Curitiba");
