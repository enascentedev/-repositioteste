<!-- Crie um arquivo PHP;
Crie um array com características de um carro;
Imprima duas características;-->

<?php

$carro = [
	'tipo' => 'corrida',
	'rodas' => 'cromadas',
	'velocidademaxima' => 300,
	];
	
	$tipo = $carro['tipo'];
	$rodas = $carro['rodas'];
	$velocidademaxima = $carro['velocidademaxima'];
	
	echo "O carro é de $tipo e tem rodas $rodas e chega na velocidade de $velocidademaxima ";