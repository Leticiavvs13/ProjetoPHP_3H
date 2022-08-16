<?php 
	class Carro {
		var $cor;
		var $ano;
		var $numeroPortas;
		var $peso;
		
		function Acelerar() {
			print "O Carro está Acelerando... <br>";
		}
		function InformarCor(){
			print "A Cor do Carro é ".$this->cor;
		}
		
	}

 ?>