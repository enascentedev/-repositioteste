 <!-- Exercício 30
Crie um array com números de 1 a 20;
Crie um loop for para este array;
Imprima apenas os pares -->


<?php

$lista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$contadorLoop = 0;

for($contadorLoop; $contadorLoop < count($lista) ; $contadorLoop++) {
	if($lista [$contadorLoop] % 2 == 0){
		echo $lista [$contadorLoop] . "<br>";
	};
}
?>