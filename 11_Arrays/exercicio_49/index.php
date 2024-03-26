<!-- Exercício 49
Crie variáveis com característica de algum objeto ou animal;
● Depois crie um array com compact com estas mesmas variáveis;
● Faça um loop no array e imprima os valores
 -->

 <?php

$nome = "João";
$idade = 30;
$cidade = "São Paulo";

// Criando um array associativo a partir das variáveis acima
$info = compact("nome", "idade", "cidade");

foreach ($info as $chave => $valor) {
	echo $chave . ": " . $valor . "<br>";
}

?>