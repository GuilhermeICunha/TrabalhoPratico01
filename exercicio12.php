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
Descritivo: Mostra um menu (1. Iniciar, 2. Parar, 3. Sair) com do-while, repetindo-o até que o usuário escolha a opção Sair.
*******************************************************************************/

do {
    // mostra o menu de opções
    echo "\n1. Iniciar\n";
    echo "2. Parar\n";
    echo "3. Sair\n";
    echo "Escolha uma opção: ";
    // lê a opção escolhida
    $opcao = (int) trim(fgets(STDIN));

    // mostra uma mensagem de acordo com a opção
    if ($opcao == 1) {
        echo "Iniciando...\n";
    } elseif ($opcao == 2) {
        echo "Parando...\n";
    } elseif ($opcao == 3) {
        echo "Saindo...\n";
    }
// repete o menu até o usuário escolher Sair (3)
} while ($opcao != 3);
