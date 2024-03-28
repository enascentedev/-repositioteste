<!-- Exercício 54
Crie uma classe Pessoa;
Crie a propriedade nome e idade;
E também um método andar;
 -->

 <?php

 class Pessoa {
	public $nome;
	public $idade;
	function andar($metros){
		echo "andou $metros";
	}
 };
 $emanuel= new Pessoa;
 $emanuel->nome="emanuel";
 $emanuel->idade=32;
 
 echo " meu nome é $emanuel->nome tenho $emanuel->idade anos <br> ";
 $emanuel-> andar(20);



 


	
?>