<!-- Exercício 27
Crie um array com alguns valores (pelo menos 10) de tipos de dados 
diferentes;
Faça um loop while para exibir apenas os dados que são strings -->

<?php
$lista=[10, true,"emanuel", "cassia", "pele", "maradona"];
$contadorLista=count($lista);
$contadorLoop=0;

while($contadorLoop < $contadorLista) {
	if(is_string($lista[$contadorLoop]) ){
		echo $lista[$contadorLoop] . "<br>";

	}
	$contadorLoop++;
	};
