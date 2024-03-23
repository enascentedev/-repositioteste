<!-- Exercício 39
Crie uma função que recebe características de algum objeto como 
argumento (carro, sofá, cafeteira), em array associativo;
● O array deve conter nome => preco;
● Retorne apenas os itens que custam mais que R$10;
● Imprima o retorno
 -->

<?php
$itens=["carro" =>2000, "sofá"=>2000, "cafeteira"=>8];

function filtraValor ($itens){
	$itensFiltrados=[];
	foreach($itens as $nome=> $valor) {
		if ($valor > 10){
			$itensFiltrados[$nome]=$valor;
		}
	}
	return $itensFiltrados;
}
$itensFiltrados=filtraValor($itens);
print_r($itensFiltrados);



