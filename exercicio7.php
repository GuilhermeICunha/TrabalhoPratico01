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
Descritivo: Pede ao usuário para adivinhar o número 7 e continua pedindo, usando while, até que ele acerte.
*******************************************************************************/

// número que o usuário precisa adivinhar
$numeroSecreto = 7;
// palpite inicial (diferente do número secreto)
$palpite = 0;

// repete enquanto o palpite estiver errado
while ($palpite != $numeroSecreto) {
    echo "Adivinhe o número: ";
    // lê o palpite digitado pelo usuário
    $palpite = (int) trim(fgets(STDIN));
}

// só chega aqui quando o usuário acertar
echo "Parabéns, você acertou!\n";
