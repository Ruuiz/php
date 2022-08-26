<?php 

function soma(int ... $valor):string{
	
return array_sum($valor);

}

var_dump(soma(2,2,2,2)) ;
echo '<br>';


echo soma(2,2,2,234);
echo '<br>';

 ?>