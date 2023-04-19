Exercício 18
● Verifique as seguintes operações com OR;
● 12 < 5 OR “João” === “João”
● 1 > 5 OR 1
● 20 === “20” AND 51 >= 31
OR = ||
AND = &&
<?php
if (12 < 5 || "joão" === "joão"){
  echo  "A comparação 1 é verdadeira". "\n";
}
if (1> 5 || 1){
  echo "A comparação 2 é verdadeira" . "\n";
}
if (20 === "20" && 51 >= 3){
  echo "A comparação 3 é verdadeira". "\n";
}