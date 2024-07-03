<!--  Crie um arquivo PHP;
Crie um array associativo com características de uma pessoa;
Desafio: faça um if checando se ela é maior de idade e imprima uma 
mensagem, caso seja;-->

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