<!-- Exercício 53
Crie uma classe Cachorro;
Crie o método latir e andar;
Execute o método em novas instâncias da classe;
 -->

 <?php

 class Cachorro {
	function latir(){
		echo "au au <br> ";
	}
	function andar($metros){
		echo "o cahorro andou $metros <br>";
	}

 };
 $viraLata= new Cachorro;
 $viraLata-> latir();
 $viraLata-> andar(20);


	
?>