<?php 

require_once("config.php");

$cad = new Cadastro();

$cad -> setNome("Arthur Ruiz");
$cad -> setEmail("arthur@hotmail.com");
$cad -> setSenha("1234");

echo $cad;

 ?>