<!-- Exercício 36
Crie uma função que recebe um array de números;
● Crie um novo array com apenas os números que são maiores que 7;
● Retorne este novo array e imprima na tela -->

<?php
$numeros=[1,2,3,4,5,6,7,8,9,10,11];
function numerosMaior ($numeros){
	$numerosFiltrados = [];
	foreach($numeros as $value){
		if($value >7){
			$numerosFiltrados[]=$value;
		}
	}
	return $numerosFiltrados;

}
$resultado = numerosMaior($numeros);
print_r($resultado);



