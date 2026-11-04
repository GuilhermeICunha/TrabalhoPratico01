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
Descritivo: Ordena o array [10, 2, 5, 8, 1] em ordem crescente com a função sort() e imprime o resultado.
*******************************************************************************/

// array fora de ordem
$numeros = [10, 2, 5, 8, 1];

// sort() ordena o array em ordem crescente
sort($numeros);

// imprime o array já ordenado
foreach ($numeros as $numero) {
    echo $numero . "\n";
}
