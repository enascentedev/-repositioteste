<!-- Exercício 28
Crie um Loop que vai até o número 30;
O contador deve iniciar como 4;
Faça incrementos de 2 em 2 no contador;
Utilize o break para parar o loop quando chegar no número 24 -->

<?php

$contadorLoop = 4;
$contadorLista = 30;

while ($contadorLoop < $contadorLista) {
	echo $contadorLoop . "<br>";

	if ($contadorLoop == 24) {
		break;
	}
	$contadorLoop += 2;
}
?>