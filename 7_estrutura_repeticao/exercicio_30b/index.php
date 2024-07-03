 <!-- Exercício 30b
 Crie um array de 1 a 10;
Utilize um loop for para criar este array;
Dica: você pode utilizar o método array_push(arr, elemento) para inserir 
um elemento em um array;
Imprima o array criado com print_r -->


<?php
$lista=[];
$contadorLoop = 1;

for($contadorLoop; $contadorLoop <= 10 ; $contadorLoop++) {
	array_push($lista,$contadorLoop);
};
print_r($lista);

?>
