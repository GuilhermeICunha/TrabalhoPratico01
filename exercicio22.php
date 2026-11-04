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
Descritivo: Cria um array associativo chamado $aluno com informações sobre um aluno, incluindo nome, idade, curso e comida favorita. Em seguida, utiliza um laço foreach para percorrer o array e imprimir cada chave e valor em uma nova linha.
*******************************************************************************/

$aluno = [
    "nome" => "Filipe",
    "idade" => 20,
    "curso" => "Engenharia de Software",
    "comida favorita" => "Pastel"
];

foreach ($aluno as $chave => $valor) {
    echo $chave . ": " . $valor . "\n";
}
