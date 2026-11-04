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
Descritivo: Cria um laço do-while que solicita ao usuário que digite uma senha até que a senha correta seja fornecida. A senha correta é "1234". O programa continua solicitando a senha até que o usuário insira a senha correta, momento em que exibe uma mensagem de confirmação.
*******************************************************************************/

$senha = "";

do {
    $senha = readline("Digite a senha: ");
} while ($senha != "1234");

echo "Senha correta!";
