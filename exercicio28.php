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
Descritivo: O array $frutas contém cinco elementos. A função in_array() verifica se a string "Maçã" está presente no array, retornando true ou false. O resultado é exibido na tela com uma mensagem apropriada.
*******************************************************************************/

$frutas = ["Banana", "Laranja", "Maçã", "Uva", "Manga"];

if (in_array("Maçã", $frutas, true)) {
    echo "A fruta Maçã existe no array.\n";
} else {
    echo "A fruta Maçã NÃO existe no array.\n";
}
