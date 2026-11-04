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
Descritivo: Cria a função maiorNumero, que recebe dois números como parâmetros e retorna o maior deles. Em seguida, chamamos a função com os números 15 e 27, armazenamos o resultado em $resultado e imprimimos o maior número.
*******************************************************************************/

function maiorNumero($a, $b)
{
    if ($a >= $b) {
        return $a;
    }
    return $b;
}

$resultado = maiorNumero(15, 27);
echo "O maior número é: " . $resultado . "\n";
