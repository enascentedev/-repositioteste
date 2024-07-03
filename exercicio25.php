Exercício 25
● Crie variáveis com números e outras com string;
● Faça um if checando se é um número;
● Caso for, atribua a multiplicação deste número por 2 em outra variável;
● E crie um outro if, que checa se o novo número é maior que 100;
● Se sim, imprima uma mensagem;

<?php
$a=10;
$b=60;
$c= 'teste';

if (is_int($a) ||is_float($a) ) {
  $mult= $a*2;
  if ($mult > 100){
    echo 'a multiplicação é maior que 100'. "\n";
  } else {
    echo 'a multiplicação não é maior que 100'. "\n";
  }
} else {
  echo 'não é um número'. "\n";
}

if (is_int($b) ||is_float($b) ) {
  $mult= $b*2;
  if ($mult > 100){
    echo 'a multiplicação é maior que 100'. "\n";
  } else {
    echo 'a multiplicação não é maior que 100'. "\n";
  }
} else {
  echo 'não é um número'. "\n";
}

if (is_int($c) ||is_float($c) ) {
  $mult= $c*2;
  if ($mult > 100){
    echo 'a multiplicação é maior que 100'. "\n";
  } else {
    echo 'a multiplicação não é maior que 100'. "\n";
  }
} else {
  echo 'não é um número'. "\n";
}