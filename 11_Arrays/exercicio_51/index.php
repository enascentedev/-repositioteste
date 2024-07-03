<!-- Exercício 51
Crie um array associativo com chaves com valor de nomes, e valores com 
uma pontuação;
● Ordene os dados do maior para o menor;
● Exiba uma lista, simulando um ranking, em HTML
 -->

 <?php

$nomesEIdades = [
	"João" => 30,
	"Maria" => 25,
	"Pedro" => 35,
	"Ana" => 28
];
	$ordenado=arsort($nomesEIdades);
	
	foreach ($nomesEIdades as $nome => $idade) {
		echo "<li>$nome - $idade anos</li>";
	}
	
	
?>