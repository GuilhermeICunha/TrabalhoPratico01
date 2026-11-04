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
Descritivo: Encontra e imprime todos os números primos entre 1 e 50, testando com for se cada número possui algum divisor além de 1 e dele mesmo.
*******************************************************************************/

echo "Números primos entre 1 e 50:\n";

// Percorre os números de 2 até 50.
for ($numero = 2; $numero <= 50; $numero++) {

    // Inicializa a variável como verdadeira.
    $primo = true;

    // Verifica se existe algum divisor.
    for ($i = 2; $i < $numero; $i++) {

        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }

    // Se for primo, imprime o número.
    if ($primo == true) {
        echo $numero . " ";
    }
}
