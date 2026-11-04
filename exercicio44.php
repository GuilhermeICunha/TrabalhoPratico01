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
Descritivo: Cria a função calcularAreaRetangulo, que recebe a largura e a altura e retorna a área.
*******************************************************************************/

// função que recebe largura e altura e retorna a área
function calcularAreaRetangulo($largura, $altura)
{
    // área = largura x altura
    return $largura * $altura;
}

// chama a função e imprime o resultado
echo "A área do retângulo é: " . calcularAreaRetangulo(5, 4) . "\n";
