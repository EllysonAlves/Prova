<?php

require_once('conexao.php');

$desc = filter_input(INPUT_POST,'desc',FILTER_DEFAULT);
$valor = filter_input(INPUT_POST,'valor',FILTER_DEFAULT);
$cliente = filter_input(INPUT_POST,'cliente',FILTER_DEFAULT); 
$desconto = filter_input(INPUT_POST,'desconto',FILTER_DEFAULT);
$liquido = filter_input(INPUT_POST,'liquido',FILTER_DEFAULT);

$insert = $pdo->prepare("INSERT INTO notasf (desc_servico,valor_nota,cliente,desconto,valor_liquido) VALUES (:desc,:valor,:cliente,:desconto,:liquido)");
$insert -> bindValue(':desc',$desc);
$insert -> bindValue(':valor', $valor);
$insert -> bindValue(':cliente', $cliente);
$insert -> bindValue(':desconto', $desconto);
$insert -> bindValue(':liquido', $liquido);
$insert -> execute();

header('Location:index.php');