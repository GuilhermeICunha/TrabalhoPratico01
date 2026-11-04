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
Descritivo: Criamos o array com 10 inteiros (exercício 17) e uma variável $soma
iniciada em 0. O foreach percorre o array e, a cada volta, $numero recebe um
elemento, que é acumulado em $soma. No final imprimimos o total.
*******************************************************************************/

$numeros = [4, 8, 15, 16, 23, 42, 7, 10, 3, 12];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma de todos os números é: " . $soma . "\n";
