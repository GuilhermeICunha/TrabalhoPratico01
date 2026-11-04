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
Descritivo: Cria a função contagemRegressiva, que recebe um número como parâmetro e realiza uma contagem regressiva até 0, imprimindo cada número na tela com um intervalo de 1 segundo entre cada impressão. A função é chamada com o valor 10 para iniciar a contagem regressiva.
*******************************************************************************/

function contagemRegressiva($numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "\n";
        sleep(1);
    }
}

contagemRegressiva(10);

