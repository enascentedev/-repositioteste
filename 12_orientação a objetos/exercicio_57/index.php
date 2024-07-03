<!-- Exercício 57
Crie uma classe Cachorro com propriedades;
Inicie as propriedades via constructor;
Crie um método para exibir cada um das propriedades que você criou
 -->

<?php

class Cachorro {
	public $nome;
	public $raca;
	public $idade;

	function __construct($nome, $raca, $idade)
	{
			$this->nome = $nome;
			$this->raca = $raca;
			$this->idade = $idade;
	}

	function exibirDetalhes()
	{
			echo "Nome: $this->nome, Raça: $this->raca, Idade: $this->idade anos<br>";
	}
}












?>