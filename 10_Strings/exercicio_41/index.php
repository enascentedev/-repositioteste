<!-- Exercício 41
Transforme a string “este item está em promoção”;
Em “Este item está em PROMOÇÃO”;
Obs: você pode separar as strings, mas não pode escrever em caixa alta 
ou baixa manualmente, só com funções
 -->

<?php
$str="este item está em promoção";

$str=ucfirst($str);
$parte1 = substr($str, 0, 18);	
$parte2 = substr($str, 18);

$parte2 = strtoupper($parte2);

$str = $parte1 . $parte2;

echo $str;



