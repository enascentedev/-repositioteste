<!-- Exercício 47
Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto solar, 
automático;
● Chame este array de carro;
● Crie variáveis com base neste array
 -->

 <?php
$carro= ["jaguar", 3.0, "azul", 18, "Teto solar", 
"automático"];
list($nome, $motor, $cor,$ano,$teto,$cambio ) = $carro;

echo $teto;