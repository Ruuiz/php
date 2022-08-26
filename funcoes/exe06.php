<?php 

function soma(int ... $valor){
	
return array_sum($valor);

}

echo soma(2,2,2,2);
echo '<br>';


echo soma(2,2,2,234);
echo '<br>';

 ?>