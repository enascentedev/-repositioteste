<!-- Exercício 55
Crie uma classe Carro;
Crie algumas propriedades e também a propriedade velocidade_maxima;
Crie o método setVelocidadeMaxima, onde é possível alterar a velocidade 
máxima do carro;
e também o getVelocidadeMaxima onde é possível imprimir a velocidade 
do carro;
 -->

<?php

class Carro {

	public $cor;
	public $tetoSolar;
	public $velocidadeMaxima;

	function setVelocidadeMaxima($vel)
	{
		$this->velocidadeMaxima = $vel;
	}
	function getVelocidadeMaxima()
	{
		echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
	}
}

$bmw = new Carro;

$bmw->cor = "Branca";
$bmw->tetoSolar = true;

$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();

$ferrari = new Carro;

$ferrari->setVelocidadeMaxima(300);

$ferrari->getVelocidadeMaxima();








?>