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
Descritivo: Cria a função inverterString, que recebe uma string como parâmetro e retorna a string invertida. A função percorre a string de trás para frente, construindo uma nova string com os caracteres na ordem inversa. Em seguida, a função é chamada com a string "Inverso" e o resultado é impresso na tela.
*******************************************************************************/

function inverterString($texto) {
    $invertido = "";

    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $invertido .= $texto[$i];
    }

    return $invertido;
}

echo inverterString("Inverso");
