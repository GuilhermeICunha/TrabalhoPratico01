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
Descritivo: Usa foreach aninhado para percorrer o array de produtos (exercício 23) e imprimir o nome e o preço de cada produto.
*******************************************************************************/

// Cria um array com produtos.
$produtos = [
    [
        "nome" => "Notebook",
        "preco" => 3500.00
    ],
    [
        "nome" => "Celular",
        "preco" => 1800.00
    ],
    [
        "nome" => "Mouse",
        "preco" => 80.00
    ]
];

// Percorre os produtos.
foreach ($produtos as $produto) {

    // Percorre as informações de cada produto.
    foreach ($produto as $chave => $valor) {

        // Exibe o nome e o preço.
        if ($chave == "nome") {
            echo "Produto: " . $valor . "\n";
        }

        if ($chave == "preco") {
            echo "Preço: R$ " . number_format($valor, 2, ',', '.') . "\n";
        }
    }

    echo "----------------------\n";
}
