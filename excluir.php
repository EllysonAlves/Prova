<?php

require_once('conexao.php');

$id = $_GET['id'];

$excluir = $pdo -> prepare("DELETE FROM `notasf` WHERE `id_nota` = ".$id);

$excluir -> execute();

header('Location:index.php');