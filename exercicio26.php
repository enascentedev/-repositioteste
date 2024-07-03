Exercício 26
● Crie uma variável que recebe uma velocidade de um carro;
● Depois crie uma estrutura if que verifica essa velocidade;
● Se a velocidade for menor que 40, imprima que o motorista está na
velocidade correta;
● Se igual a 40, imprima uma mensagem para o motorista tomar cuidado;
● Se for maior de 40, imprima uma mensagem de multa;

<?php
$velocidade = 60;

if ($velocidade < 40){
  echo ' o motorista está na
  velocidade correta'."\n";
}else if($velocidade = 40){
  echo 'tome cuidado motorista'. "\n";
} else {
  echo 'motorista multado'. "\n";
}