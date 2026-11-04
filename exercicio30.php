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
Descritivo: A matriz é um array que contém três arrays, cada um representando uma linha. O acesso [1][2] seleciona a segunda linha e a terceira coluna.
*******************************************************************************/


$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Os índices dos arrays começam em zero.
// Segunda linha = índice 1; terceira coluna = índice 2.
echo "Elemento da segunda linha e terceira coluna: " . $matriz[1][2] . PHP_EOL;