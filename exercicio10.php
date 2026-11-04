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
Descritivo: Conta quantos dígitos tem um número inteiro informado pelo usuário, dividindo o número por 10 dentro de um laço while.
*******************************************************************************/

// Solicita um número ao usuário.
echo "Digite um número inteiro: ";
$numero = (int) trim(fgets(STDIN));

// Converte o número para positivo, caso seja negativo.
$numero = abs($numero);

// Inicializa o contador.
$contador = 0;

// Trata o número zero, que possui um dígito.
if ($numero == 0) {
    $contador = 1;
} else {

    // Conta os dígitos utilizando while.
    while ($numero > 0) {
        $numero = intdiv($numero, 10);
        $contador++;
    }
}

// Exibe a quantidade de dígitos.
echo "O número possui " . $contador . " dígito(s).";
