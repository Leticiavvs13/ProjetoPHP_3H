<?php 
	include_once 'contas.php';

	$conta = new Contas();

	$conta->numAge = 562;
	$conta->numConta = 689;
	$conta->Nome = 'Márcio Darlan';
	$conta->Saldo = 1.999;

	$conta->ExibeDados();

 ?>