<?php 


interface Veiculo{

	public function acelerar($velocidade);
	public function frear($velocidade);
	public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){

		echo "O veiculo acelerou ate ". $velocidade. " km/h";

	}

	public function frear($velocidade){

		echo "O veiculo freou ate ". $velocidade. " km/h";

	}

	public function trocarMarcha($marcha){

		echo "O veiculo engatou a marcha ". $marcha ;

	}
}

 ?>