<!-- Exercício 40
Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop;
● Imprima o número de letras “a” desta string
 -->

<?php
$str="O rato roeu a roupa do rei de Roma";

$contador=0;
for($x = 0; $x < strlen($str); $x++) {
	if($str[$x]=="a"){
		$contador ++;
	}
}
	
echo $contador;



