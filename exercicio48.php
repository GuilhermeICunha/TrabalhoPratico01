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
Descritivo: A função multiplica todos os números inteiros de 1 até o valor recebido. Para 0, o resultado permanece 1, pois 0! = 1.
*******************************************************************************/


function fatorial(int $numero): int
{{
    if ($numero < 0) {{
        throw new InvalidArgumentException("O fatorial não é definido para números negativos.");
    }}

    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {{
        $resultado *= $i;
    }}

    return $resultado;
}}

$numero = 5;
echo "O fatorial de " . $numero . " é " . fatorial($numero) . PHP_EOL;
