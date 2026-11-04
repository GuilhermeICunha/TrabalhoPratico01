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
Descritivo: Cria a função mostrarDados, que recebe três parâmetros (nome, idade e cidade) e imprime esses dados formatados na tela.
*******************************************************************************/

function mostrarDados($nome, $idade, $cidade)
{
    echo "===== DADOS =====\n";
    echo "Nome:   $nome\n";
    echo "Idade:  $idade anos\n";
    echo "Cidade: $cidade\n";
    echo "=================\n";
}

mostrarDados("Maria Silva", 21, "Curitiba");
