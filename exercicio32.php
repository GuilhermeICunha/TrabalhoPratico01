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
Descritivo: Cria a função saudacaoUsuario, que recebe o nome do usuário como parâmetro e imprime uma saudação personalizada na tela. O programa solicita ao usuário que digite seu nome e, em seguida, chama a função para exibir a saudação.
*******************************************************************************/

function saudacaoUsuario($nome) {
    echo "Olá, " . $nome . "!";
}

$nome = readline("Digite seu nome: ");

saudacaoUsuario($nome);
