<!-- Exercício 19
Converta os seguintes dados para int com o operador de cast;
“testando”
12.9
true
[1, 2, 3]
E veja os resultados -->

<?php
$a= (int) "testando";

$b= (int) 12.9;

$c= (int) [true];

$d= (int) [1, 2, 3];

echo $a . "\n";
echo $b . "\n";
echo $c . "\n";
echo $d . "\n";