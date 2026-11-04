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
Descritivo: Cria a função gerarArrayPares, que recebe um número n e retorna um array com todos os números pares de 0 até n.
*******************************************************************************/

// função que recebe n e retorna um array com os pares de 0 até n
function gerarArrayPares($n)
{
    // array vazio que vai guardar os números pares
    $pares = [];

    // começa em 0 e avança de 2 em 2, até n
    for ($i = 0; $i <= $n; $i += 2) {
        // adiciona o número par ao final do array
        $pares[] = $i;
    }

    // retorna o array de pares
    return $pares;
}

// chama a função
$resultado = gerarArrayPares(10);

// imprime cada número do array retornado
foreach ($resultado as $numero) {
    echo $numero . "\n";
}
