<!-- Exercício 22
Faça as seguintes verificações em estruturas if:
5 é maior que 2?
Matheus é diferente de Pedro
12 é menor ou igual a 11
Você deve inserir os valores em variáveis -->

<?php
$nomeMatheus="matheus";
$nomePedro="pedro";

if(5 > 2){
	echo "sim 5 é maior que dois ";
}
echo "<br>";

if($nomeMatheus != $nomePedro){
	echo " sim $nomeMatheus é diferente de $nomePedro ", "\n" ;
}

if(12 <= 11){
	echo "não é  ";
}
