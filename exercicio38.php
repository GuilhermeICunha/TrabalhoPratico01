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
Descritivo: Cria o procedimento calcularMediaAluno, que recebe duas notas, imprime a média e informa se o aluno foi Aprovado (média >= 7) ou Reprovado.
*******************************************************************************/

// procedimento que recebe duas notas
function calcularMediaAluno($nota1, $nota2)
{
    // calcula a média das duas notas
    $media = ($nota1 + $nota2) / 2;

    // imprime a média
    echo "Média: " . $media . "\n";

    // média maior ou igual a 7 = aprovado
    if ($media >= 7) {
        echo "Aprovado\n";
    } else {
        echo "Reprovado\n";
    }
}

// chama o procedimento com um aluno aprovado e um reprovado
calcularMediaAluno(8, 7);
calcularMediaAluno(5, 6);
