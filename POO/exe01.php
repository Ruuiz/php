<?php 

class carro{
 	private $modelo;
 	private $motor;
 	private $ano;

 	public function getModelo(){

 		return $this -> modelo;
 	}

 	public function setModelo($modelo){

 		return $this -> modelo = $modelo;
 	}

 	public function getMotor():float{

 		return $this -> motor;
 	}

 	public function setMotor($motor){

 		return $this -> motor = $motor;
 	}

 	public function getAno():int{

 		return $this -> ano;
 	}

 	public function setAno($ano){

 		return $this -> ano = $ano;
 	}


    public function exibir(){
    	return array(
    		"modelo" => $this -> getModelo(),
    		"motor" => $this -> getMotor(),
    		"ano" => $this -> getAno(),
    	);
    }

 }

 $car = new Carro;

 $car -> setModelo("porsche");
 $car -> setMotor("1.6");
 $car -> setAno("2017");

 print_r($car->exibir());

 ?>