<!-- Exercício 12
Crie um arquivo PHP;
Crie uma operação com cada um dos operadores básicos;
Cada operação deve estar em uma variável diferente;
Imprima cada uma das etapas;
Ex: soma -> multiplicação -> divisão -> subtração; -->

<?php

  // +, -, /, *
  $a = 3;
  $b = 12;

  $op1 = $a - $b;
  echo $op1  . "\n";
 

  $c = 12.4;

  $op2 = $op1 * $c;
  echo $op2  . "\n";
  

  $d = 4.8;

  $op3 = $op2 + $d;
  echo $op3 . "\n";
  ;

  $e = 9.2;

  $op4 = $op3 / $e;

  echo $op4  . "\n";
  