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
Descritivo: Percorre o array [12, 5, 23, 18, 9, 45] com foreach e imprime apenas os números maiores que 20.
*******************************************************************************/

// Cria o array com os números.
$numeros = [12, 5, 23, 18, 9, 45];

echo "Números maiores que 20:\n";

// Percorre o array utilizando foreach.
foreach ($numeros as $numero) {

    // Verifica se o número é maior que 20.
    if ($numero > 20) {
        echo $numero . "\n";
    }
}
