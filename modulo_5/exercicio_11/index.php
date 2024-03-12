<!-- Exercício 11
Crie um arquivo PHP;
Teste a expressão “5” * 12;
Utilize a função gettype() com o resultado como parâmetro para checar o
tipo resultante da operação; -->

<?php

  $operacao = "5" * 12;

  echo $operacao . "\n" ;;

  echo gettype($operacao) . "\n" ;
  echo gettype([]) . "\n" ;
  
  echo gettype(12.2) . "\n" ;

  echo gettype("teste");