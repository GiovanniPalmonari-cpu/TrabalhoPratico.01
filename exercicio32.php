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

/* Explicação: O procedimento recebe um parâmetro $nome e usa esse valor na mensagem. Ao chamar, passo o nome entre parênteses. */

function saudacaoUsuario($nome)
{
    echo "Olá, " . $nome . "!" . PHP_EOL;
}

saudacaoUsuario("Maria");
saudacaoUsuario("João");
