<!-- Exercício 38
Crie uma função que recebe um array de itens de supermercado;
● Retorne este array em forma de string, separado em vírgulas

<?php
$lista=["batata", "arroz", "carne"];
function listaCompras ($lista){
	
	return implode(', ', $lista);
}

echo listaCompras($lista);



