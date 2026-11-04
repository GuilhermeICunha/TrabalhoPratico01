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
Descritivo: A função recebe um texto, usa strtoupper() para convertê-lo em letras maiúsculas e retorna o resultado.
*******************************************************************************/


function converterParaMaiusculas(string $texto): string
{{
    return strtoupper($texto);
}}

$frase = "engenharia de software";
echo converterParaMaiusculas($frase) . PHP_EOL;
