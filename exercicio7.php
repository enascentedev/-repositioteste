<?php

$pessoa = [
'cabelo' => 'loiro',
'cor' => 'morena',
'idade' => 20,
];

$cabelo = $pessoa['cabelo'];
$cor = $pessoa['cor'];
$idade = $pessoa['idade'];

if($idade>=18){
echo "A pessoa é maior de idade ";
} else 
echo "menor de idade"
?>