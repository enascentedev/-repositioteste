<!-- Exercício 50
● Crie um array associativo com nomes e idades;
● Imprima estes dados em uma tabela de HTML;
● Dica: utilize as tags do elemento table
 -->

 <?php

$nomesEIdades = [
	"João" => 30,
	"Maria" => 25,
	"Pedro" => 35,
	"Ana" => 28
];

?>
<table border="1">
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php foreach($nomesEIdades as $nome => $idade): ?>
    <tr>
      <td><?= $nome; ?></td>
      <td><?= $idade; ?></td>
    </tr>
  <?php endforeach; ?>
</table>