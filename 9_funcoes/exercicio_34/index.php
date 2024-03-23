<!-- 
Exercício 34
Exercício 34
Crie uma função que verifica se um número é par ou ímpar;
Se for par imprima uma mensagem;
Se for ímpar imprima uma mensagem
 -->

 <?php
function parOuImpar($numero){
	if ($numero %2 ==0){
		echo "$numero é par";
	}else{
		echo "$numero é ímpar";
	}
}
parOuImpar(32);


