 <!-- Exercício 30c
Crie um array de 10 a 20 com for;
Faça um loop em cima do array criado dinamicamente;
Imprima apenas os números ímpares -->


<?php
$lista=[];
$contadorLoop = 10;

for($contadorLoop; $contadorLoop <= 20 ; $contadorLoop++) {
	
	array_push($lista,$contadorLoop);
}
print_r($lista);
echo "<br>";

for($i=0; $i < count($lista) ; $i++) {
	if($lista[$i] %2 != 0){
		echo "numero é impar : $lista[$i] <br>";
	}
	
}


?>
