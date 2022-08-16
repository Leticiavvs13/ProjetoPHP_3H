<?php 
	class Contas {
		var $numAge;
		var $numConta;
		var $Nome;
		var $Saldo;

		function ExibeDados(){
			print 'Número de Agencia: '.$this->numAge. "<br>";
			print 'Número de Conta: '.$this->numConta. "<br>";
			print 'Nome: '.$this->Nome. "<br>";
			print 'Saldo:'.$this->Saldo. "<br>";
		}
	}

 ?>