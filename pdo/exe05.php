<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Joao";
$password = "13579";
$id = 6;

$stmt -> bindParam(":LOGIN",$login);
$stmt -> bindParam("PASSWORD", $password);
$stmt -> bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK";

?>