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
Descritivo: Calcula a média das notas de um aluno em quatro disciplinas (Matemática, Português, História e Geografia) usando um array associativo. O programa percorre o array com um laço foreach para somar as notas e, em seguida, calcula a média dividindo a soma pelo número de disciplinas. Por fim, imprime a média do aluno na tela.
*******************************************************************************/

$notas = [
    "Matemática" => 9,
    "Português" => 5,
    "História" => 7,
    "Geografia" => 8
];

$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Média do aluno: " . $media . "\n";
