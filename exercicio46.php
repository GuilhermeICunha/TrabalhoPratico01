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
Descritivo: Cria a função ehPrimo, que recebe um número e retorna true se ele for primo e false caso contrário.
*******************************************************************************/

// Cria a função para verificar se o número é primo.
function ehPrimo($numero) {

    // Números menores que 2 não são primos.
    if ($numero < 2) {
        return false;
    }

    // Verifica se existe algum divisor.
    for ($i = 2; $i < $numero; $i++) {

        if ($numero % $i == 0) {
            return false;
        }
    }

    // Se não encontrar divisores, é primo.
    return true;
}

// Solicita um número ao usuário.
echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

// Chama a função e verifica o resultado.
if (ehPrimo($numero) == true) {
    echo "O número " . $numero . " é primo.";
} else {
    echo "O número " . $numero . " não é primo.";
}
