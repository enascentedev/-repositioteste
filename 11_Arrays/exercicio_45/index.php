<!-- Exercício 43
Crie um array com a função range de 10 a 45;
● Imprima todos os números com uma soma de 6;
● Se passar de 30 a soma, imprima também que o número é muito alto;

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





