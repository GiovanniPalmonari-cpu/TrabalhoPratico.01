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

/* Explicação: A função converte letras minúsculas em maiúsculas. O strtr trata também as vogais acentuadas do português sem depender de extensões adicionais do PHP. */

function converterParaMaiusculas($texto)
{
    $minusculas = ["á", "à", "â", "ã", "é", "ê", "í", "ó", "ô", "õ", "ú", "ç"];
    $maiusculas = ["Á", "À", "Â", "Ã", "É", "Ê", "Í", "Ó", "Ô", "Õ", "Ú", "Ç"];

    return strtoupper(strtr($texto, array_combine($minusculas, $maiusculas)));
}

echo converterParaMaiusculas("programação em php") . PHP_EOL;
