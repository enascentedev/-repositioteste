<!-- Exercício 48
Crie variáveis com característica de algum objeto ou animal;
● Depois crie um array com compact com estas mesmas variáveis;
● Faça um loop no array e imprima os valores
 -->

 <?php
$lista= ["batata","maçã", "pera", "feijão", 
"arroz"];
 array_splice($lista, 2, 2) ;

print_r($lista);