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
Descritivo: O programa lê números em um laço while (do-while), acumula os valores e encerra quando o usuário digita 0. O zero não entra na soma.
*******************************************************************************/

$soma = 0;

do {{
    $numero = (int) readline("Digite um número (0 para encerrar): ");
    if ($numero !== 0) {{
        $soma += $numero;
    }}
}} while ($numero !== 0);

echo "A soma dos números digitados é: " . $soma . PHP_EOL;
