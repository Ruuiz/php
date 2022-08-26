<?php 

$a = 10;

function Valor(&$b){
	$b += 50;

	return $b;
}



echo valor($a);

echo $a;

 ?>