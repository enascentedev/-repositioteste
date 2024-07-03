Exercício 24
● Crie algumas variáveis com tipos de dados diferentes: string, int e
boolean, por exemplo;
● Cheque se a variável é um inteiro;
● Caso sim, apresente uma mensagem confirmando o tipo de dado;
● Caso não, apresente outra mensagem;
<?php
$a=12;
$b= '';
$c= [];

if (is_int($a)) {
  echo ' é um inteiro' . "\n";
} else{
  echo 'não é um inteiro'. "\n";
}

if (is_int($b)) {
  echo ' é um inteiro'. "\n";
} else{
  echo 'não é um inteiro'. "\n";
}
if (is_int($c)) {
  echo ' é um inteiro'. "\n";
} else{
  echo 'não é um inteiro'. "\n";
}

