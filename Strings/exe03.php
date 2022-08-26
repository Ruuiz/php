<?php

$frase ="A repeticao é a mae da retencao.";

$palavra = "mae";

$q = strpos($frase, $palavra);

echo $q;

echo "<br>";

$texto = substr($frase, 0,$q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra) , strlen($frase));

echo "<br>";

var_dump($texto2);

?>