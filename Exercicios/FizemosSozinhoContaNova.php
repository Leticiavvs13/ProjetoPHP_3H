<?php 
	include_once 'conta.php';

	$conta = new Conta();

	$quantia = 1000;
	$conta->saldo = 3000;

	$conta->retirar($quantia);


 ?>