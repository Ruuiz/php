<?php 

function __autoload($nomeClasse){
	require_once("$nomeClasse.php");
}

 ?>