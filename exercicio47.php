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

/* Explicação: A função separa o texto em caracteres Unicode e percorre cada um com foreach. Se o caractere for uma vogal, inclusive acentuada, o contador aumenta. Assim, não depende da extensão mbstring. */

function contarVogais($texto)
{
    $vogais = ["a", "e", "i", "o", "u", "á", "é", "í", "ó", "ú", "â", "ê", "ô", "ã", "õ", "à"];
    $texto = strtolower(strtr($texto, ["Á"=>"á", "À"=>"à", "Â"=>"â", "Ã"=>"ã", "É"=>"é", "Ê"=>"ê", "Í"=>"í", "Ó"=>"ó", "Ô"=>"ô", "Õ"=>"õ", "Ú"=>"ú"]));
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);
    $contador = 0;

    foreach ($caracteres as $letra) {
        if (in_array($letra, $vogais, true)) {
            $contador++;
        }
    }

    return $contador;
}

$frase = "Programação em PHP";

echo "A frase \"" . $frase . "\" tem " . contarVogais($frase) . " vogais." . PHP_EOL;
