<?php
/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT2
Componentes:
              26010633-2 - Enzo Gabriel Vilas Boas Alves
              26013861-2 - Filipe Przyvitoski Kasenoh
              26015309-2 - Guilherme Mascarello Cunha
              26014605-2 - Kaik da Silva Nascimento
              26014360-2 - Willian Tadeu Ribeiro
Data: 03 de Novembro de 2026
Descritivo: Cria a função contarVogais, que recebe uma string e retorna o número de vogais presentes nela. A função utiliza um array de vogais e percorre cada caractere da string, verificando se é uma vogal. O resultado é exibido na tela com uma mensagem apropriada.
*******************************************************************************/

function contarVogais($texto)
{
    $vogais = ["a", "e", "i", "o", "u", "á", "à", "â", "ã", "é", "ê", "í", "ó", "ô", "õ", "ú", "ü"];
    $contador = 0;

    foreach (mb_str_split(mb_strtolower($texto)) as $caractere) {
        if (in_array($caractere, $vogais, true)) {
            $contador++;
        }
    }

    return $contador;
}

$frase = "Programação em PHP";
echo "A frase \"$frase\" tem " . contarVogais($frase) . " vogais.\n";
