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
Descritivo: Cria a função obterPrimeiroElemento, que recebe um array como parâmetro e retorna o primeiro elemento desse array. Em seguida, cria um array de frutas e utiliza a função para obter e imprimir o primeiro elemento do array.
*******************************************************************************/

function obterPrimeiroElemento($array) {
    return $array[0];
}

$frutas = ["Maçã", "Banana", "Uva", "Morango"];

echo obterPrimeiroElemento($frutas);
