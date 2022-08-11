<?php 

include_once 'produtos.php';

$produto = new Produto();

$produto->Codigo = 4011;

$produto->Descricao = "CD The Best of Eric Clapton";

$produto->Preco = 1.99;

echo $produto->Codigo . " - ". $produto->Descricao . " por R$".$produto->Preco; 

 ?>