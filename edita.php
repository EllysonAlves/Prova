<?php

require_once('conexao.php');

$id = $_POST['id'];

$desc = filter_input(INPUT_POST,'desc',FILTER_DEFAULT);
$valor = filter_input(INPUT_POST,'valor',FILTER_DEFAULT);
$cliente = filter_input(INPUT_POST,'cliente',FILTER_DEFAULT); 
$desconto = filter_input(INPUT_POST,'desconto',FILTER_DEFAULT);
$liquido = filter_input(INPUT_POST,'liquido',FILTER_DEFAULT);

$insert = $pdo->prepare("UPDATE notasf SET  desc_servico=:desc , valor_nota = :valor , cliente = :cliente , desconto = :desconto , valor_liquido = :liquido WHERE id_nota=$id");
$insert -> bindValue(':desc',$desc);
$insert -> bindValue(':valor', $valor);
$insert -> bindValue(':cliente', $cliente);
$insert -> bindValue(':desconto', $desconto);
$insert -> bindValue(':liquido', $liquido);
$insert -> execute();

header('Location:index.php');