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
Descritivo: $produtos é um array (lista) em que cada posição é outro array associativo
com as chaves "nome" e "preco" (array multidimensional). Para conferir o
resultado, um foreach percorre a lista e mostra cada produto.
*******************************************************************************/

$produtos = [
    ["nome" => "Notebook", "preco" => 3500.00],
    ["nome" => "Mouse",    "preco" => 59.90],
    ["nome" => "Teclado",  "preco" => 120.50],
    ["nome" => "Monitor",  "preco" => 899.99],
];

foreach ($produtos as $produto) {
    echo $produto["nome"] . " - R$ " . number_format($produto["preco"], 2, ",", ".") . "\n";
}
