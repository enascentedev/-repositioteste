<!-- Exercício 17
Verifique as seguintes operações com AND;
15 > 5 AND “joão” === “joão”
“teste” > 5 AND 1 
2 == 3 AND 5 >= 3 -->

<?php

if (15 > 5 && "joão" === "joão"){
  echo  "A comparação 1 é verdadeira". "\n";
}
if ("teste" > 5 && 1){
  echo "A comparação 2 é verdadeira" . "\n";
}
if (2 == 3 && 5 >= 3){
  echo "A comparação 3 é verdadeira". "\n";
}
