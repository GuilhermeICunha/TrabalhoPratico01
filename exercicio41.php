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
Descritivo: Cria a função somar, que recebe dois números e retorna a soma deles.
*******************************************************************************/

// Cria a função somar.
function somar($numero1, $numero2) {

    // Calcula e retorna a soma dos números.
    return $numero1 + $numero2;
}

// Solicita o primeiro número.
echo "Digite o primeiro número: ";
$numero1 = (float) trim(fgets(STDIN));

// Solicita o segundo número.
echo "Digite o segundo número: ";
$numero2 = (float) trim(fgets(STDIN));

// Chama a função e armazena o resultado.
$resultado = somar($numero1, $numero2);

// Exibe o resultado.
echo "A soma dos números é: " . $resultado;
