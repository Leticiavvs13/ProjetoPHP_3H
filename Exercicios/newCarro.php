<?php 
	include_once 'Carro.php';

	$newCarro = new Carro();

	$newCarro->cor = "Azul";
	$newCarro->ano = "2022";
	$newCarro->numeroPortas = 4;
	$newCarro->peso = "950,25 kg";

	$newCarro->Acelerar();
	$newCarro->InformarCor();

 ?>