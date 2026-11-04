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
Descritivo: Cria o procedimento verificarParImpar, que recebe um número e imprime se ele é Par ou Ímpar.
*******************************************************************************/

// Cria o procedimento para verificar o número.
function verificarParImpar($numero) {

    // Verifica se o resto da divisão por 2 é zero.
    if ($numero % 2 == 0) {
        echo "O número " . $numero . " é Par.";
    } else {
        echo "O número " . $numero . " é Ímpar.";
    }
}

// Solicita um número ao usuário.
echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

// Chama o procedimento.
verificarParImpar($numero);
