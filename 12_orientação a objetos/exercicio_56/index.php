<!-- Exercício 56
Crie uma classe Humano com algumas propriedades e o método falar;
Crie uma outra classe Professor que herda de humano, crie também as 
propriedades e métodos particulares desta classe;
Exiba os valores das propriedades da classe pai e também utilize os 
métodos;
 -->

<?php

class Humano {

	public $braços ="2 braços";
	public $pernas="2 pernas";
	public $olhos="2 olhos";

	function falar()	{
		echo "Olá, eu sou um humano <br>";
	}

}
class Programador extends Humano {
}
$emanuel= new Programador;
echo "eu tenho $emanuel->braços <br>";
$emanuel->falar();











?>