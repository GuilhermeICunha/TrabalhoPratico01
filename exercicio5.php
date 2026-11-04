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
Descritivo: Calcula a soma dos números de 1 a 100 usando um laço for e imprime o resultado.
*******************************************************************************/

// Inicializa a variável que armazenará a soma.
$soma = 0;

// Percorre os números de 1 até 100.
for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}

// Exibe o resultado.
echo "A soma dos números de 1 a 100 é: " . $soma;