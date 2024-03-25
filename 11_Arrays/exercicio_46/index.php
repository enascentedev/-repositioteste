<!-- Exercício 46
Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
● Imprima todos os elementos de cada um dos arrays;
● Imprima também quando está mudando de array;

 -->

<?php
$arr= range(10,45);
for($i=0; $i < count($arr); $i++) {
	$soma=$arr[$i] + 6;
	if($soma>30){
		echo "o número é muito alto";
	}else{
		echo $soma;
	}
	}





