<?php 

$pessoas = array();

array_push($pessoas, array (
'nome' => 'Joao',
'idade' => 20

));

array_push($pessoas, array (
'nome' => 'Arthur',
'idade' => 21

));

echo json_encode($pessoas);
 ?>