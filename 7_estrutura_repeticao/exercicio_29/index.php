<!-- Exercício 29
Crie um array com valores inteiros de 10 a 100, com incremento de 10;
Aplique um loop neste array;
Quando entrar os valores 30 ou 40, pule para a próxima execução; -->

<?php

$lista = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$contadorLoop = 0;

while ($contadorLoop < count($lista)) {
	$valorAtual= $lista[$contadorLoop];
	
	if ($valorAtual == 30 || $valorAtual == 40) {
		$contadorLoop ++;
		continue;
	}
	echo $valorAtual. "<br>";
	$contadorLoop ++;
}
?>