Exercício 22
● Crie variáveis que recebem idades;
● Cheque se as idades são maiores ou iguais a 18;
● Se sim, imprima uma mensagem que a pessoa é maior de idade;

<?php
$idade1 = 16;
$idade2 = 22;
$idade3 = 25;
$maioridade = 18;

if ($idade1 >= $maioridade){
  echo "idade1 é maior de idade ". "\n";
}else{
  echo "idade1 é menor de idade ". "\n";
}

if ($idade2 >= $maioridade){
  echo "idade2 é maior de idade ". "\n";
}else{
  echo "idade2 é menor  de idade ". "\n";
}

if ($idade3 >= $maioridade){
  echo "idade3 é maior de idade ". "\n";
}else{
  echo "idade3 é menor  de idade ". "\n";
}
?>
