Exercício 21
● Faça as seguintes verificações em estruturas if:
● 5 é maior que 2?
● Matheus é diferente de Pedro
● 12 é menor ou igual a 11
● Você deve inserir os valores em variáveis;
<?php
$a = 5;
$b = 2;
if ($a>$b){
  echo "entrou no if 1". "\n";
}

$nome = "matheus";
$nome2 = "pedro";

if ($nome!= $nome2){
  echo "entrou no if 2". "\n";
}

$numero = 12;
$numero2 = 11;

if ($numero>$numero2){
  echo "entrou no if 3". "\n";
}