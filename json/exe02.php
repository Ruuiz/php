<?php 

$json = '
[{"nome":"Joao","idade":20},{"nome":"Arthur","idade":21}]';

$data = json_decode($json,true);

var_dump($data);

 ?>